<?php

namespace App\Controllers;

class frontendMenuDisplayController extends BaseController
{
    public function index($isMhs)
    {
        $data = [
            'isi' => 'survey/home',
            'isMhs' => $isMhs
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
