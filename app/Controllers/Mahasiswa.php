<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Mahasiswa',
            'isi'    => 'mahasiswa/index',
            'isMhs' => 1
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
