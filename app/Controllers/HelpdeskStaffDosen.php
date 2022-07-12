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
        $tiketBelumTerjawab = $this->ModelHelpdeskStaffDosen->getTiketBelumTerjawab(1);
        $tiketTerjawab = $this->ModelHelpdeskStaffDosen->getTiketTerjawab(1);
        //dd($tiketBelumTerjawab);
        $data = [
            'title' => 'Admin Helpdesk Akademik',
            'isi'    => 'staffdosen/helpdesk/index',
            'tiketBelumTerjawab' => $tiketBelumTerjawab,
            'tiketTerjawab' => $tiketTerjawab,
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function detail_tiket($tiket_id)
    {
        $tiket = $this->ModelHelpdeskStaffDosen->getDetail($tiket_id);
        // dd($tiket);
        
        $data = [
            'title' => 'Detail Tiket',
            'isi'    => 'staffdosen/helpdesk/detail-tiket',
            'tiket' => $tiket,
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
