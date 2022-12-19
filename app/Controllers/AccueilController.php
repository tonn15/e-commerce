<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProduitsModel;
use App\Models\TitreHeaderModel;
use App\Models\ImageHeaderModel;
use App\Models\AboutModel;
use App\Models\ContactModel;
use App\Models\NewsLetterModel;

class AccueilController extends BaseController
{
   

    public function index($page = 'accueil'){
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $produits = new ProduitsModel();
        $produit = $produits->findAll();
        $titreHeaders = new TitreHeaderModel();
        $titreHeader=$titreHeaders->find(1);
        $abouts = new AboutModel();
        $about=$abouts->find(1);
        $data = [
            'title'=>$page,
            'produits'=>$produit,
            'titreHeader'=>$titreHeader,
            'about'=>$about
        
        ]; 

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    public function view()
    {
        $r = new AccueilModel();
        $results = $r->test();
        foreach ($results as $k ) {
            echo $k->nom;
            die();
        }

    }
    public function ajouter(){
        if (isset($_POST['nom']) && isset($_POST['email'])&& isset($_POST['tel']) && isset($_POST['message'])) {
        $contact = new ContactModel();
        $data =[
            'nom' => $_POST['nom'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel'],
            'message' => $_POST['message'],
        ];
        $contact->insert($data);
        return redirect()->to(base_url('/')); 
        }
    }
    public function newsAjouter(){
        if (isset($_POST['email'])) {
        $news = new NewsLetterModel();
        $data =[
            'email' => $_POST['email'],
        ];
        $news->insert($data);
        return redirect()->to(base_url('/')); 
        }
    }
    
}
