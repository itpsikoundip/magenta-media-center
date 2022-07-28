<?php

namespace App\Controllers\StaffDosen\SK;

use App\Controllers\BaseController;
use App\Models\SK\ModelSK;

class ControllerSK extends BaseController
{
    public function __construct()
    {
        $this->ModelSK = new ModelSK();
    }

    public function index()
    {
        $data = [
            'title' => 'SK',
            'detailAksesUserOp' => $this->ModelSK->detailAksesUserOp(),
            'detailAksesUserVerifikator' => $this->ModelSK->detailAksesUserVerifikator(),
            'isi'    => 'staffdosen/sk/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
