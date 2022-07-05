<?php

namespace App\Controllers;

class PengajuanSK extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengajuan SK',
            'isi'    => 'staffdosen/pengajuansk/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
