<?php

namespace App\Controllers;
use App\Models\PtgasMcModel;

class petugasMc extends BaseController
{
    function __construct(){
        $this->ptgasMc = new PtgasMcModel();
    }
 
    public function index(){
        $ptgasMc = new PtgasMcModel();
        $keyword = $this->request->getGet('keyword');
        
        if($keyword != ''){
            $ptgasMc->like('nama_mc', $keyword, 'both');
            
            $data['mc_jumat'] = $ptgasMc->paginate(5, 'mc_jumat');
        }else{
            $data['mc_jumat'] = $ptgasMc->paginate(5, 'mc_jumat');
        }
       
        $data['pager'] = $ptgasMc->pager;
        $data['nomor'] = nomor($this->request->getVar('page_mc_jumat'), 5);
        $keyword = $this->request->getGet('keyword');

        
        return view('ptgas_mc/get', $data);

    }

    public function create(){
        return view('ptgas_mc/add');
    }

    public function store(){
        $data = $this->request->getPost();
        
        $this->db->table('mc_jumat')->insert($data);

        if($this->db->affectedRows() > 0){
            return redirect()->to(site_url('ptgas_mc'))->with('success', 'Data Disimpan'); 
        }
    }

    public function edit($id = null){
        if($id != null){
            $query = $this->db->table('mc_jumat')->getWhere(['id_mc' => $id]);
            if($query->resultID->num_rows > 0){
                $data['mc_jumat'] = $query->getRow();
                return view('ptgas_mc/edit', $data);
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

        $this->db->table('mc_jumat')->where(['id_mc' => $id])->update($data);
        return redirect()->to(site_url('ptgas_mc'))->with('success', 'Data Diupdate');
    }

    public function destroy($id){
        $this->db->table('mc_jumat')->where(['id_mc' => $id])->delete();
        return redirect()->to(site_url('ptgas_mc'))->with('success', 'Data Dihapus');
    }
}
