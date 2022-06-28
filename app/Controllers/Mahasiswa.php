<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Mahasiswa',
            'isi'    => 'mahasiswa/index'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
