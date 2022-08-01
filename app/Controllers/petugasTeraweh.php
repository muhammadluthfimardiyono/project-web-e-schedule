<?php

namespace App\Controllers;

use App\Models\PtgasTerawehModel;

class petugasTeraweh extends BaseController
{
    function __construct(){
        $this->ptgasTeraweh = new PtgasTerawehModel();
    }
 
    public function index(){
        $ptgasTeraweh = new PtgasTerawehModel();
        $keyword = $this->request->getGet('keyword');
        
        if($keyword != ''){
            $ptgasTeraweh->like('nama_imam', $keyword, 'both');
            $ptgasTeraweh->OrLike('bilal_kamilin', $keyword, 'both');
            $ptgasTeraweh->OrLike('nama_kultum', $keyword, 'both');
            $data['petugas_terawih'] = $ptgasTeraweh->paginate(5, 'petugas_terawih');
        }else{
            $data['petugas_terawih'] = $ptgasTeraweh->paginate(5, 'petugas_terawih');
        }
       
        $data['pager'] = $ptgasTeraweh->pager;
        $data['nomor'] = nomor($this->request->getVar('page_petugas_terawih'), 5);
        $keyword = $this->request->getGet('keyword');
        return view('ptgas_teraweh/get', $data);
    }

    public function create(){
        return view('ptgas_teraweh/add');
    }

    public function store(){
        $data = $this->request->getPost();
        
        $this->db->table('petugas_terawih')->insert($data);

        if($this->db->affectedRows() > 0){
            return redirect()->to(site_url('ptgas_teraweh'))->with('success', 'Data Disimpan'); 
        }
    }

    public function edit($id = null){
        if($id != null){
            $query = $this->db->table('petugas_terawih')->getWhere(['id_petugas' => $id]);
            if($query->resultID->num_rows > 0){
                $data['petugas_terawih'] = $query->getRow();
                return view('ptgas_teraweh/edit', $data);
            } else{
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id){
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('petugas_terawih')->where(['id_petugas' => $id])->update($data);
        return redirect()->to(site_url('ptgas_teraweh'))->with('success', 'Data Diupdate');
    }

    public function destroy($id){
        $this->db->table('petugas_terawih')->where(['id_petugas' => $id])->delete();
        return redirect()->to(site_url('ptgas_teraweh'))->with('success', 'Data Dihapus');
    }
}
