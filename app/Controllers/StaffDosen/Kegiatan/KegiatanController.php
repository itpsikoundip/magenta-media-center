<?php

namespace App\Controllers\StaffDosen\Kegiatan;

use App\Controllers\BaseController;
use App\Models\Kegiatan\KegiatanModel;
use App\Models\Kegiatan\RuanganModel;
use CodeIgniter\I18n\Time;

class KegiatanController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->KegiatanModel = new KegiatanModel();
        $this->RuanganModel = new RuanganModel();
    }

    public function index()
    {
        //
        
        $data = [
            'title' => 'Jadwal Kegiatan dan Peminjaman Ruangan ',
            'isi'   => 'staffdosen/kegiatan/index',
        ];
        return view('layouts/staffdosen-wrapper', $data);
        
    }
}
