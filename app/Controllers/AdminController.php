<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AffichageModel;
use App\Models\ProduitsModel;

class AdminController extends BaseController
{
    public function index($page = 'admin'){      
        if (! is_file(APPPATH . 'Views/pages/Admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $Produits = new ProduitsModel();
        $results = $Produits->findAll();
        $data = ['produits' => $results];

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/Admin/header', $data)
            . view('pages/Admin/' . $page)
            . view('templates/Admin/footer');
    }
    public function ajouter(){
        $file = $_FILES['image'];
        $repertoire = "images/";
        $nomImageAjoute = $this->ajoutImage($file,$repertoire);
        if (isset($_POST['titre']) && isset($_POST['detail'])&& isset($_POST['prix']) && isset($_FILES['image'])) {
        $Produits = new ProduitsModel();
        $data =[
            'titre' => $_POST['titre'],
            'detail' => $_POST['detail'],
            'prix' => $_POST['prix'],
            'image' => $nomImageAjoute,
        ];
        $Produits->insert($data);
        return redirect()->to(base_url('steev-admin/produits')); 
        }
    }
    public function supprimerProduit(){
        if (isset($_POST['id'])) {
            $Produits = new ProduitsModel();
            $id = $_POST['id'];
            $Produits->delete($id);
            return redirect()->to(base_url('steev-admin/produits')); 
        } 
    }
    public function modificationProduit($id = 0){
        $produits = new ProduitsModel();
        $produit = $produits->find($id);
        $data =[
            'produit' =>$produit,
        ];
        
        return view('templates/Admin/header', $data)
            . view('pages/Admin/modificationProduit')
            . view('templates/Admin/footer');
    }
    public function modificationProduitValidation(){
        $request = service('request'); 
        $postData = $request->getPost();
        $id = $postData['id']; 
        $produits = new ProduitsModel();
        $imageActuelle =$produits->find($id)['image'] ;
        $file = $_FILES['image'];

        if($file['size'] > 0){
            unlink("images/".$imageActuelle);
            $repertoire = "images/";
            $nomImageToAdd = $this->ajoutImage($file,$repertoire);
        } else {
            $nomImageToAdd = $imageActuelle;
        }

        $data =[
            'titre' => $postData['titre'],
            'detail' => $postData['detail'],
            'prix' => $postData['prix'],
            'image' => $nomImageToAdd,
        ];
        $produits->update($id,$data);
        return redirect()->to(base_url('steev-admin/produits')); 
    }
    public function AfficherProduit($id = 0){
        $produits = new ProduitsModel();
        $produit = $produits->find($id);
        $data =[
            'produit' =>$produit,
        ];
        
        return view('templates/Admin/header', $data)
            . view('pages/Admin/afficherProduit')
            . view('templates/Admin/footer');
    }
    private function ajoutImage($file, $dir){
        if(!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");
    
        if(!file_exists($dir)) mkdir($dir,0777,true);
    
        $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        $random = rand(0,99999);
        $target_file = $dir.$random."_".$file['name'];
        
        if(!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if(file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        if($file['size'] > 5000000)
            throw new Exception("Le fichier est trop gros");
        if(!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random."_".$file['name']);
    }
}
