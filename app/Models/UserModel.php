<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password' ];
    public function  checkUser($email,$password){
        // hash password
        $hashPassword=md5($password);
        // check if column === variable enter by user 
        return $this->where('email', $email)
                    ->where('password', $hashPassword)
                    // LIMIT 1 in sql
                    ->first();
    }

    

}

