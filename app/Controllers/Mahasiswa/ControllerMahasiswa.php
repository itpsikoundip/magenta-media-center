<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;

class ControllerMahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Dashboard Mahasiswa',
            'isi'       => 'mahasiswa/index',
            'isMhs'     => 1
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
