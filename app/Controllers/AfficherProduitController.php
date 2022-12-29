<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommentModel;
use App\Models\ProduitsModel;
use Google\Service\AdExchangeBuyer\Dimension;
use Stripe\Stripe;

class AfficherProduitController extends BaseController
{
    public function index($id = 0)
    {

        $page = 'produit';
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect()->to(base_url('connexion'));
        } else {
            if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
                // Whoops, we don't have a page for that!
                throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
            }
            $com = false;
            $nan = false;
            $comment = new CommentModel();
            $comments = $comment->findAll();
            $commen = array_reverse($comments);
            $produits = new ProduitsModel();

            $produit = $produits->find($id);
            foreach ($comments as $tab) {
                if ($tab['id_prod'] == $id) {
                    $com = true;
                } else
                    $nan = true;
            }

            $data = [
                'produit' => $produit,
                'title' => $page,
                'comments' => $commen,
                'com' => $com,
                'nan' => $nan,
            ];

            return view('templates/header', $data)
                . view('pages/' . $page)
                . view('templates/footer');
        }
    }
    public function pannier($id = 0)
    {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect()->to(base_url('connexion'));
        } else {
            $produits = new ProduitsModel();
            $produit = $produits->find($id);
            array_push($_SESSION['pannier'], $produit);
            return redirect()->to(base_url('boutique'));
        }
    }
    public function pannierPage($page = 'pannier')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data = [
            'title' => $page,
        ];


        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    public function supprimerPannier($id = 0)
    {
        session_start();
        unset($_SESSION['pannier'][$id]);
        return redirect()->to(base_url('pannier'));
    }
}
