<?php

namespace App\Controllers;

use App\Models\ModelSK;

class PengajuanSK extends BaseController
{
    public function __construct()
    {
        $this->ModelSK = new ModelSK();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengajuan SK',
            'detailAksesUserOp' => $this->ModelSK->detailAksesUserOp(),
            'detailAksesUserVerifikator' => $this->ModelSK->detailAksesUserVerifikator(),
            'isi'    => 'staffdosen/pengajuansk/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
