<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }
    public function login(){
        return view('auth/login');
    }

    public function loginProccess(){
        $post = $this->request->getPost();
        
        $query = $this->db->table('register_user')->getWhere(['email' => $post['email']]);
        $user = $query->getRow();
        $pwd1 = $post['password'];
        $pwd2 = $user->password;
        if($user){
            if($pwd1 == $pwd2){                
                $params = ['id_user' => $user->id_user];
                session()->set($params);
                return redirect()->to(site_url('home'));
            }else {
                return redirect()->back()->with('error', 'Password Salah');
            }
        }else{
            return redirect()->back()->with('error', 'Email Salah');
        }
    }   
}
