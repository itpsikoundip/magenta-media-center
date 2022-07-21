<?php

namespace App\Controllers\Mahasiswa\Survey;

use App\Controllers\BaseController;

class frontendMenuDisplayController extends BaseController
{
    public function index($isMhs)
    {
        $data = [
            'isi' => 'mahasiswa/survey/home',
            'isMhs' => $isMhs
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
