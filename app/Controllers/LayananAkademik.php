<?php

namespace App\Controllers;

use App\Models\ModelLayananAkademik;

class LayananAkademik extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelLayananAkademik = new ModelLayananAkademik();
    }

    public function index()
    {
        $data = [
            'title' => 'Layanan Akademik',
            'isi'    => 'mahasiswa/layananakademik/index'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
