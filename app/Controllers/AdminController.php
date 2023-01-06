<?php

namespace App\Controllers;

use App\Models\AboutModel;
use App\Models\CommentModel;
use App\Models\ContactModel;
use App\Models\ImageHeaderModel;
use App\Models\ProduitsModel;
use App\Models\TitreHeaderModel;
use PHPUnit\Exception;

class AdminController extends BaseController
{
    public function index($page = 'admin')
    {
        if (!is_file(APPPATH . 'Views/pages/Admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $titreHeaders = new TitreHeaderModel();
        $titreHeader = $titreHeaders->find(1);
        $abouts = new AboutModel();
        $about = $abouts->find(1);
        $Produits = new ProduitsModel();
        $results = $Produits->findAll();
        $comments = new CommentModel();
        $comment = $comments->findAll();
        $c = 0;

        $imageHs = new ImageHeaderModel();
        $imageH = $imageHs->where('id', 1)->first();
        $contact = new ContactModel();
        $contact = $contact->findAll();
        foreach ($comment as $key => $comme) {

            if ($comme['valide'] == 1) {
                $c = $c + 1;
            }
        }
        $data = [
            'produits' => $results,
            'title' => $page,
            'titreHeader' => $titreHeader,
            'about' => $about,
            'co' => $comment,
            'c' => $c,
            'commentaire' => $comment,
            'imageH' => $imageH['image'],
            'contact' => $contact,
        ];

        #$data['title'] = ucfirst($page); // Capitalize the first letter
        return view('templates/Admin/header', $data)
            . view('pages/Admin/' . $page)
            . view('templates/Admin/footer');
    }
    public function ajouter()
    {
        $file = $_FILES['image'];
        $repertoire = "images/";
        $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        if (isset($_POST['titre']) && isset($_POST['detail']) && isset($_POST['prix']) && isset($_FILES['image'])) {
            $Produits = new ProduitsModel();
            $data = [
                'titre' => $_POST['titre'],
                'detail' => $_POST['detail'],
                'prix' => $_POST['prix'],
                'prix_pro' => $_POST['prix_pro'],
                'image' => $nomImageAjoute,
            ];
            $Produits->insert($data);
            return redirect()->to(base_url('steev-admin/produits'));
        }
    }
    public function supprimerProduit()
    {
        if (isset($_POST['id'])) {
            $Produits = new ProduitsModel();
            $id = $_POST['id'];
            $imageActuelle = $Produits->where('id', $id)->first();
            $Produits->delete($id);
            unlink($_SERVER['DOCUMENT_ROOT'] . "/images/" . $imageActuelle['image']);
            return redirect()->to(base_url('steev-admin/produits'));
        }
    }
    public function modificationProduit($id = 0)
    {
        $produits = new ProduitsModel();
        $produit = $produits->find($id);
        $comments = new CommentModel();
        $comment = $comments->findAll();
        $c = 0;
        foreach ($comment as $key => $comme) {

            if ($comme['valide'] == 1) {
                $c = $c + 1;
            }
        }
        $data = [
            'produit' => $produit,
            'comments' => array_reverse($comment),
            'co' => $comment,
            'c' => $c
        ];

        return view('templates/Admin/header', $data)
            . view('pages/Admin/modificationProduit')
            . view('templates/Admin/footer');
    }
    public function modificationProduitValidation()
    {
        $request = service('request');
        $postData = $request->getPost();

        if (isset($_POST['valide']) && isset($_POST['id_com'])) {
            $id_com = $_POST['id_com'];
            $com = [
                'valide' => $_POST['valide'],
            ];
            $id = $_POST['id'];
            $url = base_url() . '/modificationProduit/' . $id;
            $commentaire = new CommentModel();
            $commentaire->update($id_com, $com);
            return redirect()->to($url);
        }

        if (isset($_POST['admin_comment']) && isset($_POST['id_com'])) {
            $id_com = $_POST['id_com'];
            $com = [
                'admin_comment' => $_POST['admin_comment'],
            ];
            $commentaire = new CommentModel();
            $commentaire->update($id_com, $com);
        } else {
            if (empty($postData['popular'])) {
                $postData['popular'] = 0;
            }
            $id = $postData['id'];
            $produits = new ProduitsModel();
            $imageActuelle = $produits->find($id)['image'];
            $file = $_FILES['image'];

            if ($file['size'] > 0) {
                unlink("images/" . $imageActuelle);
                $repertoire = "images/";
                $nomImageToAdd = $this->ajoutImage($file, $repertoire);
            } else {
                $nomImageToAdd = $imageActuelle;
            }

            $data = [
                'titre' => $postData['titre'],
                'detail' => $postData['detail'],
                'prix' => $postData['prix'],
                'prix_pro' => $_POST['prix_pro'],
                'popular' => $postData['popular'],
                'image' => $nomImageToAdd,
            ];
            $produits->update($id, $data);
        }
        return redirect()->to(base_url('steev-admin/produits'));
    }
    public function AfficherProduit($id = 0)
    {

        $produits = new ProduitsModel();
        $produit = $produits->find($id);
        $comment = new CommentModel();
        $comments = $comment->findAll();
        $c = 0;

        foreach ($comments as $key => $comme) {

            if ($comme['valide'] == 1) {
                $c = $c + 1;
            }
        }

        $data = [
            'produit' => $produit,
            'co' => $comments,
            'c' => $c,
        ];

        return view('templates/Admin/header', $data)
            . view('pages/Admin/afficherProduit')
            . view('templates/Admin/footer');
    }
    private function ajoutImage($file, $dir)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        if (!file_exists($dir)) mkdir($dir, 0777, true);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if (file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 5000000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random . "_" . $file['name']);
    }
    public function modificationImageHeader()
    {

        $produits = new ProduitsModel();
        $request = service('request');
        $postData = $request->getPost();
        $image = new ImageHeaderModel();
        $imageActuelle = $image->find(1)['image'];
        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            unlink($_SERVER['DOCUMENT_ROOT'] . "/images/" . $imageActuelle);

            $repertoire = $_SERVER['DOCUMENT_ROOT'] . "/images/";
            $nomImageToAdd = $this->ajoutImage($file, $repertoire);
        } else {
            $nomImageToAdd = $imageActuelle;
        }

        $data = [
            'image' => $nomImageToAdd,
        ];
        $image->update(1, $data);
        return redirect()->to(base_url('steev-admin/accueil'));
    }
    public function modificationHeader($id = 0)
    {
        $request = service('request');
        $postData = $request->getPost();
        $titre = new TitreHeaderModel();
        $about = new AboutModel();
        if (isset($postData['txt1'])) {
            $data = [
                'titre' => $postData['txt1'],
            ];
            $titre->update(1, $data);
        }
        if (isset($postData['content1'])) {
            $data = [
                'content' => $postData['content1'],
            ];
            $titre->update(1, $data);
        }
        if (isset($postData['txt2'])) {
            $data = [
                'titre' => $postData['txt2'],
            ];
            $about->update(1, $data);
        }
        if (isset($postData['content2'])) {
            $data = [
                'content' => $postData['content2'],
            ];
            $about->update(1, $data);
        }

        return redirect()->to(base_url('steev-admin/accueil'));
    }
}
