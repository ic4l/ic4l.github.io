<?php namespace App\Models;

use Myth\Auth\Models\UserModel as MythModel;

class UserModel extends MythModel
{
    protected $returnType = 'App\Entities\User';

    protected $allowedFields = [
        'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
        'mobile', 'fullname', 'gender', 'pob', 'dob', 'facebook', 'instagram', 'twitter', 'image', 'address'
    ];

    public function getUsers($id = false)
    {
      if ($id == false) {
        return $this->findAll();
      }

      return $this->where(['id' => $id])->first();
    }
    
}
