<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PemainModel;

class Pemain extends BaseController
{
    protected $PemainModel;

    public function __construct()
    {
        $this->PemainModel = new PemainModel();
    }

    public function index()
    {
        $data = [
            'pemain' => $this->PemainModel->findAll()
        ];

        return view('pemain', $data);
    }

    public function create()
    {
        return view('create_pemain');
    }

    public function store()
    {
        // Logika untuk menyimpan data pemain yang ditambahkan

        return redirect()->route('admin.pemain.index');
    }

    public function edit($id)
    {
        $data = [
            'pemain' => $this->PemainModel->find($id)
        ];

        return view('edit_pemain', $data);
    }

    public function update($id)
    {
        // Logika untuk mengupdate data pemain dengan $id tertentu

        return redirect()->route('admin.pemain.index');
    }

    public function delete($id)
    {
        // Logika untuk menghapus data pemain dengan $id tertentu

        return redirect()->route('admin.pemain.index');
    }
}