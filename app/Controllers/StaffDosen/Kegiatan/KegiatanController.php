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

    public function addKegiatan(){
        $ruangan_id     = $this->request->getPost('pilihRuangan');
        $tanggal        = $this->request->getPost('inputTanggal');
        $mulai          = $this->request->getPost('pilihJamMulai');
        $selesai        = $this->request->getPost('pilihJamSelesai');
        $agenda         = $this->request->getPost('inputAgenda');
        $pic_id         = $this->request->getPost('pilihPIC');
        $hp             = $this->request->getPost('inputHP');
        
        if ( $_FILES AND $_FILES['inputUndangan']['name'] ){
            //kalau lampiran tidak kosong
            $undangan       = $this->request->getFile('inputundangan');
            $namaUndangan   = $undangan->getRandomName();
        }else{
            $namaUndangan   = NULL;
        } 

        $data = [
            'ruangan_id'    => $ruangan_id,
            'tanggal'       => $tanggal,
            'mulai'         => $mulai,
            'selesai'       => $selesai,
            'agenda'        => $agenda,
            'pic_id'        => $pic_id,
            'hp'            => $hp,
            'undangan'      => $namaUndangan,
            'created_at'    => Time::now('Asia/Jakarta'),
        ];

        dd($data);
        if ( $_FILES AND $_FILES['inputLampiran']['name'] ){
            // Upload file
            $undangan->move('undangan-kegiatan', $namaUndangan);
        }
        $result = $this->KegiatanModel->addKegiatan($data);
        // dd($result);
        if($result){   
            session()->setFlashdata('sukses', 'Kegiatan berhasil ditambahkan.');
            return redirect()->to(base_url('staffdosen/kegiatan/'));
        }else{
            session()->setFlashdata('error', 'Kegiatan gagal ditambahkan.');
            return redirect()->to(base_url('staffdosen/kegiatan/'));
        }
    }
}
