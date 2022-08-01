<?php

namespace App\Controllers\Mahasiswa\Profil;

use App\Controllers\BaseController;
use App\Models\Profil\ModelProfilMahasiswa;

class ControllerMahasiswaProfil extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelProfilMahasiswa = new ModelProfilMahasiswa();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'detailMahasiswa' => $this->ModelProfilMahasiswa->detailMahasiswa(),
            'isi'    => 'mahasiswa/profil/index'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
