<?php

namespace App\Controllers;

use App\Models\ModelHelpdeskStaffDosen;

class HelpdeskStaffDosen extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelHelpdeskStaffDosen = new ModelHelpdeskStaffDosen();
    }

    public function index()
    {
        $tiket = $this->ModelHelpdeskStaffDosen->getTiket(1);
        $tiketTerjawab = $this->ModelHelpdeskStaffDosen->getTiketTerjawab(1);
        $data = [
            'title' => 'Admin Helpdesk',
            'isi'    => 'staffdosen/helpdesk/index',
            'tiket' => $tiket,
            'tiketTerjawab' => $tiketTerjawab,
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
