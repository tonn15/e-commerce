<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommentModel;

class CommentaireController extends BaseController
{

    public function ajouterCommentaired()
    {
        $url = base_url('produit') . '/' . $_POST['id_prod'];
        $data = [
            'email' => $_POST['email'],
            'id_prod' => $_POST['id_prod'],
            'valide' => $_POST['valide'],
            'comment' => $_POST['message'],
        ];
        $comment = new CommentModel();
        $comment->insert($data);
        return redirect()->to($url);
    }
}
