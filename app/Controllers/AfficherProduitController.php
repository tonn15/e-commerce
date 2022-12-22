<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProduitsModel;

class AfficherProduitController extends BaseController
{
    public function index($id = 0){
        $page = 'produit';
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        
        $produits = new ProduitsModel();
        $produit = $produits->find($id);
        $data =[
            'produit' =>$produit,
            'title'=>$page,
        ];

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
