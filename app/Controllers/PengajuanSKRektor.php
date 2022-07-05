<?php

namespace App\Controllers;

class PengajuanSKRektor extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pengajuan SK Rektor',
            'isi'    => 'staffdosen/pengajuansk/skrektor/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Pengajuan SK Rektor',
            'isi'    => 'staffdosen/pengajuansk/skrektor/tambah'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
