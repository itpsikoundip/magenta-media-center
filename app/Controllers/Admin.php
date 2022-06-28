<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'isi'    => 'admin/index'
        ];
        return view('layouts/admin-wrapper', $data);
    }
}
