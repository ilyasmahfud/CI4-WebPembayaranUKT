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
        $builder2->select('pembayaran.nominal AS nominal_terbayar');
        $builder2->join('tagihan', 'tagihan.id = pembayaran.tagihan_id');
        $builder2->where('tagihan.user_id', user_id());
        $data2 = $builder2->get()->getRowArray();

        if ($data1 == null) {
            return View('users/pembayaran/belum-waktunya');
        }

        // dd($data);

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

        $pembayaran = ([
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'nominal_pembayaran' => $this->request->getPost('nominal_pembayaran'),
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

        // dd($this->request->getPost('nominal'));
        // input ke database
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
