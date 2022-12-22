<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class ConnexionController extends BaseController
{
    public function index($page = 'connexion')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    public function inscription($page = 'inscription')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    public function ajouterinscription()
    {

        if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password'])) {
            $data = [
                'nom' => $_POST['nom'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'role' => 'user',
            ];
            $user = new UserModel();
            $user->insert($data);
            return redirect()->to(base_url('connexion'));
        }
    }
    public function connexion()
    {
        $user = $_POST['email'];
        $password = $_POST['password'];
        $users = new UserModel();
        $emails = $users->findColumn('email');

        $passwords = $users->findColumn('password');

        if (in_array($user,$emails) && in_array($password,$passwords)){
            session_start();
            $_SESSION['email'] = $user;
            
            return redirect()->to(base_url('/'));
        }else {
            echo 'tsy ok';
            die();
            return redirect()->to(base_url('connexion'));
        }
    }
    public function deconnexion()
    {
        session_start();
        session_destroy();
        return redirect()->to(base_url('connexion'));
    }
}
