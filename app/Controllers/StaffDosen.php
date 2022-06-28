<?php

namespace App\Controllers;

class StaffDosen extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Staff & Dosen',
            'isi'    => 'staffdosen/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
