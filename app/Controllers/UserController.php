<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{

    public function register(){
        return view('register');
    }

    public function action_register()
    {
        //mengambil data input dari form
        $data = $this->request->getPost();
        
        $db = \Config\Database::connect();
        //membuat data array input
        $data = [
            "id"        => uniqid("", true),
            "nama"      => $data['nama'],
            "username"  => $data['username'],
            "email"     => $data["email"],
            "password"      => hash("sha256", $data['password']),
            "role"      => 1,
        ];
        // execute insert
        $db->table('tbl_user')->insert($data);

        //Kembali Ke Form Login
        return redirect()->to('/login');
    }
}
