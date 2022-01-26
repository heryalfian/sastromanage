<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            'Judul' => 'Sastro Management'
        ];

        echo view("templates/v_header", $data);
        echo view("templates/v_sidebar");
        echo view("templates/v_topbar");
        echo view("home/index");
        echo view("templates/v_footer");
    }

    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }
}