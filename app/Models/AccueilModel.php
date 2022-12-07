<?php

namespace App\Models;

use CodeIgniter\Model;

class AccueilModel extends Model{
    protected $table = 'news';
    
    public function recAccueil(){
        return $this->findAll();
    }
}