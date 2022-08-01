<?php

namespace App\Controllers;

class Registers extends BaseController
{   
    public function index()
    {
        return view('register/user');
    }
    public function create(){
        return view('register/user');
    }

    public function store(){
        $data = $this->request->getPost();
        
        $this->db->table('register_user')->insert($data);

        if($this->db->affectedRows() > 0){
            return redirect()->to(site_url('login'))->with('success', 'Data Disimpan'); 
        }
    }
}
