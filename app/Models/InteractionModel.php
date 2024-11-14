<?php

namespace App\Models;

use CodeIgniter\Model;

class InteractionModel extends Model
{
    protected $table = 'interactions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['client_id', 'date', 'details', 'responsable', 'created_at', 'updated_at'];
}
