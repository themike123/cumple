<?php

namespace App\models;

use CodeIgniter\Model;

class UserModel extends Model {

    protected $table = 'user';
    protected $primaryKey = 'id';
    
    protected $useAutoIncrement = true;


    protected $allowedFields = ['id','username', 'password','email'];

}