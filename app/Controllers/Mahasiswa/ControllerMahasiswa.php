<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\Profil\ModelProfilMahasiswa;

class ControllerMahasiswa extends BaseController
{
    public function __construct()
    {
        $this->ModelProfilMahasiswa = new ModelProfilMahasiswa();
    }


    public function index()
    {
        $data = [
            'title'     => 'Dashboard Mahasiswa',
            'isi'       => 'mahasiswa/index',
            'detailMahasiswa' => $this->ModelProfilMahasiswa->detailMahasiswa(),
            'isMhs'     => 1
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
