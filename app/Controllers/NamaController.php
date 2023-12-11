<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NamaModel;

class NamaController extends BaseController
{
    protected $namaModel;

    public function __construct()
    {
        $this->namaModel = new NamaModel();
    }

    public function index()
    {
        $data['data'] = $this->namaModel->findAll();
        return view('nama_tabel/index', $data);
    }

    public function create()
    {
        return view('nama_tabel/create');
    }

    public function store()
    {
        $data = [
            'nama'       => $this->request->getPost('nama'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
        ];

        $this->namaModel->insert($data);

        return redirect()->to(base_url('namacontroller'));
    }

    public function edit($id)
    {
        $data['row'] = $this->namaModel->find($id);
        return view('nama_tabel/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama'       => $this->request->getPost('nama'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
        ];

        $this->namaModel->update($id, $data);

        return redirect()->to(base_url('namacontroller'));
    }

    public function deleteIndex($id)
{
    $data['row'] = $this->namaModel->find($id);
    return view('nama_tabel/delete', $data);
}

    public function delete($id)
    {
        $this->namaModel->delete($id);

        return redirect()->to(base_url('namacontroller'));
    }
}
