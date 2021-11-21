<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Models\UserModel;

class UserController extends BaseController
{
    public $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data = $this->user->find(user_id());
        return View('users/profile/index', compact('data'));
    }

    public function edit()
    {
        $data = $this->user->find(user_id());
        // // $user = $this->getUser(user_id);
        // dd($data->id);
        return View('users/profile/edit', compact('data'));
    }

    public function save()
    {
        $this->user->update(user_id(), [
            'fullname' => $this->request->getPost('fullname'),
            'NIM' => $this->request->getPost('NIM'),
            'email' => $this->request->getPost('email'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jk' => $this->request->getPost('jk'),
            'username' => $this->request->getPost('username'),
            'universitas_id' => $this->request->getPost('universitas_id'),
        ]);

        session()->setFlashdata('profileUpdate', 'Updated Successfully');
        return redirect('pembayaran-ukt/profile');
    }
}
