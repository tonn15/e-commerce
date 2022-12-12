<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Produits extends Entity
{
    protected $datamap = ['users'];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = ['antonio'];
}
