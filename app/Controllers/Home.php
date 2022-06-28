<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'isi'    => 'home'
        ];
        return view('layouts/v_wrapper', $data);
    }
}
