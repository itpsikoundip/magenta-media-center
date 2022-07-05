<?php

namespace App\Controllers;

class Ormawa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Ormawa',
            'isi'    => 'ormawa/index',
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
