<?php

namespace App\Controllers;

class PengajuanSKDekan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'isi'    => 'staffdosen/pengajuansk/skdekan/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Pengajuan SK Dekan',
            'isi'    => 'staffdosen/pengajuansk/skdekan/tambah'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
