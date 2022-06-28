<?php

namespace App\Controllers;

use App\Models\ModelHelpdesks;

class Helpdesks extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelHelpdesks = new ModelHelpdesks();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Helpdesk',
            'isi'    => 'staffdosen/helpdesk/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function tiket()
    {
        $data = [
            'title' => 'Tiket',
            'isi'    => 'staffdosen/helpdesk/tiket'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function hotline()
    {
        $data = [
            'title' => 'Hotline',
            'isi'    => 'staffdosen/helpdesk/hotline'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
