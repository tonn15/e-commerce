<?php

namespace App\Controllers;
use App\Models\AccueilModel;
use CodeIgniter\Controller;

class AccueilController extends BaseController
{
    public function index($page = 'accueil'){
        //print_r($db['default']);
        $accueil = new AccueilModel();
        $data = [

            'titre' => 'Liste de tâches',
            ];
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
