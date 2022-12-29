<?php

namespace App\Controllers;

use App\Models\AboutModel;

class AboutController extends BaseController
{

    public function index($page = 'about')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $abouts = new AboutModel();
        $about = $abouts->find(1);
        $data = [
            'about' => $about,
            'title' => $page

        ];

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
