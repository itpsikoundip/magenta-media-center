<?php

namespace App\Controllers;

use App\Models\ModelHelpdesk;

class Helpdesk extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelHelpdesk = new ModelHelpdesk();
    }

    public function index()
    {
        $data = [
            'title' => 'Helpdesk',
            'isi'    => 'mahasiswa/helpdesk/index'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function tiket()
    {
        $data = [
            'title' => 'Tiket',
            'isi'    => 'mahasiswa/helpdesk/tiket'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function hotline()
    {
        $data = [
            'title' => 'Hotline',
            'isi'    => 'mahasiswa/helpdesk/hotline'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
