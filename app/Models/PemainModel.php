<?php

namespace App\Models;

use CodeIgniter\Model;

class PemainModel extends Model
{
    protected $table = 'pemain';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'posisi', 'team'];
    public function getActiveItems()
    {
        return $this->where('id')
                    ->orderBy('ASC')
                    ->findAll();
    }
}