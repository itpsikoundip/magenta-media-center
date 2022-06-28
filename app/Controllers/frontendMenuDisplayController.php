<?php

namespace App\Controllers;

class frontendMenuDisplayController extends BaseController
{
    public function index()
    {
        $data = [
            'isi' => 'survey/home'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function admin()
    {
        $data = [
            'isi' => 'admin/home'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
