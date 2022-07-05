<?php

namespace App\Controllers;

use App\Models\ModelStaffDosens;

// Controller Admin
class StaffDosens extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelStaffDosens = new ModelStaffDosens();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Staff & Dosen',
            'dataStaffDosen' => $this->ModelStaffDosens->allData(),
            'isi'    => 'admin/data/staffdosen/index'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function jenispegawai()
    {
        $data = [
            'title' => 'Data Staff & Dosen',
            'jenisPegawai' => $this->ModelStaffDosens->jenisPegawai(),
            'isi'    => 'admin/data/staffdosen/jenispegawai'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function tambahstaffdosen()
    {
        $data = [
            'title' => 'Tambah Data Staff & Dosen',
            // 'jenisPegawai' => $this->ModelStaffDosens->jenisPegawai(),
            'isi'    => 'admin/data/staffdosen/tambahstaffdosen'
        ];
        return view('layouts/admin-wrapper', $data);
    }
}
