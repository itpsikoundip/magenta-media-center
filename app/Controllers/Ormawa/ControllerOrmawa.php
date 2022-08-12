<?php

namespace App\Controllers\Ormawa;

use App\Controllers\BaseController;

class ControllerOrmawa extends BaseController
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
