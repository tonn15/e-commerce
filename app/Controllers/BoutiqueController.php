<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProduitsModel;

class BoutiqueController extends BaseController
{
    public function index($page = 'boutique'){
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $produits = new ProduitsModel();
        $produit = $produits->findAll();
        $data =[
            'title'=>$page,
            'produits' =>array_reverse($produit),
        ];

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
