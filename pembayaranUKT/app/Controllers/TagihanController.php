<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pembayaran;

class TagihanController extends BaseController
{
    public $pembayaran;

    public function __construct()
    {
        $this->pembayaran = new Pembayaran();
    }

    public function index()
    {
        $db      = \Config\Database::connect();
        $builder1 = $db->table('users');
        $builder1->select('*');
        $builder1->join('tagihan', 'tagihan.user_id = users.id');
        $builder1->where('tagihan.user_id', user_id());
        $data1 = $builder1->get()->getRowArray();

        $builder2 = $db->table('pembayaran');
        $builder2->select('SUM(pembayaran.nominal) AS nominal_terbayar');
        $builder2->join('tagihan', 'tagihan.id = pembayaran.tagihan_id');
        $builder2->where('tagihan.user_id', user_id());
        $data2 = $builder2->get()->getRowArray();

        if ($data1 == null) {
            return View('users/pembayaran/belum-waktunya');
        }

        return View('users/pembayaran/index', compact('data1', 'data2'));
    }

    public function lakukanPembayaran()
    {
        $db      = \Config\Database::connect();
        $builder1 = $db->table('users');
        $builder1->select('tagihan.id AS tagihan_id');
        $builder1->join('tagihan', 'tagihan.user_id = users.id');
        $builder1->where('tagihan.user_id', user_id());
        $data1 = $builder1->get()->getRowArray();

        $builder2 = $db->table('pembayaran');
        $builder2->select('tagihan.nominal AS harusDibayar');
        $builder2->join('tagihan', 'tagihan.id = pembayaran.tagihan_id');
        $builder2->where('tagihan.user_id', user_id());
        $data2 = $builder2->get()->getRowArray();

        $builder3 = $db->table('pembayaran');
        $builder3->select('SUM(pembayaran.nominal)AS nominalTerbayar');
        $builder3->join('tagihan', 'tagihan.id = pembayaran.tagihan_id');
        $builder3->where('tagihan.user_id', user_id());
        $data3 = $builder3->get()->getRowArray();

        $belumBayar = (int)$data2['harusDibayar'] - (int)$data3['nominalTerbayar'];

        $userInput = $this->request->getPost('nominal_pembayaran');

        if ((int)$userInput > (int)$belumBayar) {
            session()->setFlashdata('errors', 'Nominal Melebihi Tagihan');
            return redirect()->to('/pembayaran-ukt/pembayaran')->withInput();
        }

        $nominalPembayaran = $this->request->getPost('nominal_pembayaran');
        $kodePembayaran = substr(str_shuffle("123456789"), 0, 3);

        $totalPembayaran = (int)$nominalPembayaran + (int)$kodePembayaran;

        $pembayaran = ([
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'total_pembayaran' => $totalPembayaran,
            'nominal_pembayaran' => $nominalPembayaran,
        ]);

        return View('users/pembayaran/lakukan_pembayaran', compact('pembayaran', 'data1'));
    }

    public function konfirmasiPembayaran()
    {
        // get gambar
        $fileFoto = $this->request->getFile('bukti_pembayaran');
        $namaFoto = $fileFoto->getRandomName();
        // pindahkan ke folder img
        $fileFoto->move('img/bukti_pembayaran/', $namaFoto);
        $foto = ('img/bukti_pembayaran/' . $namaFoto);

        $this->pembayaran->save([
            'nominal' => $this->request->getPost('nominal'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'tagihan_id' => $this->request->getPost('tagihan_id'),
            'user_id' => user_id(),
            'bukti_pembayaran' => $foto,
        ]);

        session()->setFlashdata('success', 'Pembayaran Successfully');

        return view('users/pembayaran/success');
    }
}
