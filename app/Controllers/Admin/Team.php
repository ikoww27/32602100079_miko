<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TeamnModel;

class Team extends BaseController
{
    protected $teamModel;

    public function __construct()
    {
        $this->teamModel = new TeamModel();
    }

    public function index()
    {
        $data = [
            'team' => $this->teamModel->findAll()
        ];

        return view('team', $data);
    }

    public function create()
    {
        return view('create_team');
    }

    public function store()
    {
        // Logika untuk menyimpan data team yang ditambahkan

        return redirect()->route('admin.team.index');
    }

    public function edit($id)
    {
        $data = [
            'team' => $this->teamModel->find($id)
        ];

        return view('edit_team', $data);
    }

    public function update($id)
    {
        // Logika untuk mengupdate data team dengan $id tertentu

        return redirect()->route('admin.team.index');
    }

    public function delete($id)
    {
        // Logika untuk menghapus data team dengan $id tertentu

        return redirect()->route('admin.team.index');
    }
}