<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigModel extends Model
{
    protected $table      = 'web_config';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'description', 'visi', 'misi', 'instagram', 'facebook', 'twitter', 'whatsapp', 'email', 'address', 'logo', 'icon'];

    //backend
    public function list()
    {
        return $this->table($table)
            ->orderBy($primaryKey, 'ASC')
            ->get()->getResultArray();
    }
}
