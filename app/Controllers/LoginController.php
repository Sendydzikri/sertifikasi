<?php

namespace App\Controllers;
use Config\Services;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function login()
    {
        return view('Login');
    }

    public function action_login(){
        $validation = \Config\Services::validation();
        $db = \Config\Database::connect();

        $data = $this->request->getPost();
        $sql = $db->table('tbl_user')->where('email',$data['email'])->get()->getRow();
        $password = hash("sha256", $data['password']);

        if ($sql) {
            if ($password == $sql->password) {
                // simpan user ke session
                $data2 = [
                    "email" => $sql->email,
                    "nama"  => $sql->nama,
                    'username' => $sql->username,
                    "logged_in" => true
                ];
                session()->set($data2);

                return redirect()->to('landing');
            } else {
                return redirect()->back()->with('error', "User not registered.");
            }
        } else {
            return redirect()->back()->with('error', "User not registered.");
        }
    }

    public function logout(){
        session();
        session_destroy();
        return redirect()->to('/landing');
    }
}
