<?php

namespace App\Models;

use CodeIgniter\Model;

class UpdateData extends Model
{
    protected $table            = 'updatedatas';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['status'];

}
