<?php

namespace App\models;

use CodeIgniter\Model;

class InvitacionModel extends Model {

    protected $table = 'invitacion';
    protected $primaryKey = 'id';
    
    protected $useAutoIncrement = true;


    protected $allowedFields = ['id','nombre', 'numero_personas', 'nombre_tutor','email','celular','telefono','domicilio', 'referencia'];

}