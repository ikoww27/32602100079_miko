<?php

namespace App\Controllers;

use App\Models\PemainModel;
use App\Models\TeamModel;

class Admin extends BaseController
{
    public function pemain()
    {
        $model = new PemainModel();
        $data['pemain'] = $model->findAll();

        return view('pemain', $data);
    }

    public function team()
    {
        $model = new TeamModel();
        $data['team'] = $model->findAll();

        return view('team', $data);
    }

    public function createPemain()
    {
        return view('create_pemain');
    }

    public function storePemain()
    {
        $model = new PemainModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'posisi' => $this->request->getPost('posisi'),
            'team' => $this->request->getPost('team')
        ];
        $model->insert($data);

        return redirect()->to(site_url('pemain'));
    }

    public function editPemain($id)
    {
        $model = new PemainModel();
        $data['pemain'] = $model->find($id);

        return view('edit_pemain', $data);
    }

    public function updatePemain($id)
    {
        $model = new PemainModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'posisi' => $this->request->getPost('posisi'),
            'team' => $this->request->getPost('team')
        ];
        $model->update($id, $data);

        return redirect()->to(site_url('pemain'));
    }

    public function deletePemain($id)
    {
        $model = new PemainModel();
        $model->delete($id);

        return redirect()->to(site_url('pemain'));
    }

    public function createTeam()
    {
        return view('create_team');
    }

    public function storeTeam()
    {
        $model = new TeamModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'slogan' => $this->request->getPost('slogan'),
            'asal' => $this->request->getPost('asal')
        ];
        $model->insert($data);

        return redirect()->to(site_url('team'));
    }

    public function editTeam($id)
    {
        $model = new TeamModel();
        $data['team'] = $model->find($id);

        return view('edit_team', $data);
    }

    public function updateTeam($id)
    {
        $model = new TeamModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'slogan' => $this->request->getPost('slogan'),
            'asal' => $this->request->getPost('asal')
        ];
        $model->update($id, $data);

        return redirect()->to(site_url('team'));
    }

    public function deleteTeam($id)
    {
        $model = new TeamModel();
        $model->delete($id);

        return redirect()->to(site_url('team'));
    }
}