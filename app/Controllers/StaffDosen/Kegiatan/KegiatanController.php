<?php

namespace App\Controllers\StaffDosen\Kegiatan;

use App\Controllers\BaseController;
use App\Models\Kegiatan\KegiatanModel;
use App\Models\Kegiatan\RuanganModel;
use App\Models\ModelStaffDosens;
use CodeIgniter\I18n\Time;

class KegiatanController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->KegiatanModel = new KegiatanModel();
        $this->RuanganModel = new RuanganModel();
        $this->StaffDosenModel = new ModelStaffDosens();
    }

    public function index()
    {
        //
        $staffdosen = $this->StaffDosenModel->allData();
        // dd($staffdosen);
        $ruangan = $this->RuanganModel->getRuangan();
        $data = [
            'ruangan'   => $ruangan,
            'staffdosen'=> $staffdosen,
            'title'     => 'Jadwal Kegiatan dan Peminjaman Ruangan ',
            'isi'       => 'staffdosen/kegiatan/index',
        ];
        return view('layouts/staffdosen-wrapper', $data);
        
    }
}
