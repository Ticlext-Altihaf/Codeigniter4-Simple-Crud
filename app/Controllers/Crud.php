<?php

namespace App\Controllers;

use App\Models\MData;

class Crud extends BaseController
{

    public function create(){
        if($this->request->getPost()){
            $data = [
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'perkerjaan' => $this->request->getPost('perkerjaan'),
            ];
            $model = new MData();
            $model->save($data);
            return redirect()->to(route_to('crud.read'));
        }
        return view('v_tambah');
    }

    public function read()
    {
        $users = new MData();
        $data['users'] = $users->findAll();
        return view('v_tampil', $data);
    }


    public function update($id){
        $model = new MData();
        if($id == null){
            return redirect()->to('/');
        }
        $data = $model->find($id);
        if($data == null){
            return redirect()->to(route_to('crud.read'));
        }
        if($this->request->getPost()) {
            $nama = $this->request->getPost('nama');
            $alamat = $this->request->getPost('alamat');
            $perkerjaan = $this->request->getPost('perkerjaan');
            if($nama != null){
                $data['nama'] = $nama;
            }
            if($alamat != null){
                $data['alamat'] = $alamat;
            }
            if($perkerjaan != null){
                $data['perkerjaan'] = $perkerjaan;
            }
            $model->update($id, $data);
            return redirect()->to('/');
        }
        return view('v_edit', $data);
    }

    public function delete($id){
        $model = new MData();
        if($id == null){
            return redirect()->to('/');
        }
        $model->delete($id);
        return redirect()->to('/');
    }

    public function index(){
        return redirect()->to(route_to('crud.read'));
    }
}

