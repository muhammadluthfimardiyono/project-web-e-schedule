<?php

namespace App\Controllers;

use App\Models\PtgasJumatModel;

class petugasJumat extends BaseController
{
   function __construct(){
       $this->ptgasJumat = new PtgasJumatModel();
   }

   public function index(){
        $ptgasJumat = new PtgasJumatModel();
        $keyword = $this->request->getGet('keyword');
        
        if($keyword != ''){
            $ptgasJumat->like('nama_khotib', $keyword, 'both');
            $ptgasJumat->OrLike('nama_imam', $keyword, 'both');
            $ptgasJumat->OrLike('nama_bilal', $keyword, 'both');
            $ptgasJumat->OrLike('nama_muazin', $keyword, 'both');
            $data['petugas_jumat'] = $ptgasJumat->paginate(5, 'petugas_jumat');
        }else{
            $data['petugas_jumat'] = $ptgasJumat->paginate(5, 'petugas_jumat');
        }
       
        $data['pager'] = $ptgasJumat->pager;
        $data['nomor'] = nomor($this->request->getVar('page_petugas_jumat'), 5);
        $keyword = $this->request->getGet('keyword');

        
        return view('ptgas_jumat/get', $data);
   }

   public function create(){
   return view('ptgas_jumat/add');
   }

   public function store(){
   $data = $this->request->getPost();
    
     $this->db->table('petugas_jumat')->insert($data);

        if($this->db->affectedRows() > 0){
            return redirect()->to(site_url('ptgas_jumat'))->with('success', 'Data Disimpan'); 
        }
    }

    public function edit($id = null){
    if($id != null){
        $query = $this->db->table('petugas_jumat')->getWhere(['id_petugas' => $id]);
        if($query->resultID->num_rows > 0){
            $data['petugas_jumat'] = $query->getRow();
            return view('ptgas_jumat/edit', $data);
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

        $this->db->table('petugas_jumat')->where(['id_petugas' => $id])->update($data);
        return redirect()->to(site_url('ptgas_jumat'))->with('success', 'Data Diupdate');
    }

    public function destroy($id){
        $this->db->table('petugas_jumat')->where(['id_petugas' => $id])->delete();
        return redirect()->to(site_url('ptgas_jumat'))->with('success', 'Data Dihapus');
}

}
