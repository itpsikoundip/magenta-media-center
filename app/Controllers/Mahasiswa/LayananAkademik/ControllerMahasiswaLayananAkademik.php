<?php

namespace App\Controllers\Mahasiswa\LayananAkademik;

use App\Controllers\BaseController;
use App\Models\LayananAkademik\ModelLayananAkademik;

class ControllerMahasiswaLayananAkademik extends BaseController
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
