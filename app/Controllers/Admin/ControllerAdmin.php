<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ControllerAdmin extends BaseController
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
