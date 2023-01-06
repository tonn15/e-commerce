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
        $user = new UserModel();
        $users = $user->findColumn('email');
        $email = $_POST['email'];

        if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password']) && !in_array($email, $users)) {
            $data = [
                'nom' => $_POST['nom'],
                'email' => $email,
                'password' => $_POST['password'],
                'role' => 'user',
            ];

            $user->insert($data);
            $_SESSION['email'] = $email;
            $_SESSION['pannier'] = array();
            $_SESSION['user'] = $user->where('email', $email)->first();
            $url = base_url('/');
            return redirect()->to($url);
        } else {
            $url = base_url('inscription');
            return redirect()->to($url);
        }
    }
    public function connexion()
    {
        $user = $_POST['email'];
        $password = $_POST['password'];
        $users = new UserModel();
        $emails = $users->findColumn('email');

        $passwords = $users->findColumn('password');

        if (in_array($user, $emails) && in_array($password, $passwords)) {
            $_SESSION['email'] = $user;
            $_SESSION['pannier'] = array();
            $_SESSION['user'] = $users->where('email', $user)->first();
            if ($_SESSION['user']['role'] == 'dj;fisjdkflhkjhdufhskdjhfjsdfuhjhsdkfhuihiuhdf') {
                return redirect()->to(base_url('steev-admin'));
            }
            return redirect()->to(base_url('/'));
        } else {
            return redirect()->to(base_url('connexion'));
        }
    }
    public function deconnexion()
    {
        session_destroy();
        return redirect()->to(base_url('connexion'));
    }
}
