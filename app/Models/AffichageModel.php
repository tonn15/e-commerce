<?php

namespace App\Models;

use CodeIgniter\Model;

class AffichageModel extends Model{
    protected $db = '\Config\Database::connect()';
    public function affichageProduit()
    {
        $query = $this->db->query('SELECT * FROM produits');
        $results = $query->getResultObject();
        return $results;
    }
}