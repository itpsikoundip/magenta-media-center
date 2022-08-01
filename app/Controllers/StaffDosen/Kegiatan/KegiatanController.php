<?php

namespace App\Controllers\StaffDosen\Kegiatan;

use App\Controllers\BaseController;
use App\Models\Kegiatan\KegiatanModel;
use App\Models\Kegiatan\RuanganModel;
use App\Models\Admin\Data\StaffDosen\ModelAdminDataStaffDosen;
use CodeIgniter\I18n\Time;

class KegiatanController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->KegiatanModel = new KegiatanModel();
        $this->RuanganModel = new RuanganModel();
        $this->StaffDosenModel = new ModelAdminDataStaffDosen();
    }

    public function index()
    {
        //
        $staffdosen = $this->StaffDosenModel->allData();
        // dd($staffdosen);
        $ruangan = $this->RuanganModel->getRuangan();
        $data = [
            'ruangan'   => $ruangan,
            'staffdosen' => $staffdosen,
            'title'     => 'Jadwal Kegiatan dan Peminjaman Ruangan ',
            'isi'       => 'staffdosen/kegiatan/index',
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function addKegiatan()
    {
        $kegiatanModel = $this->KegiatanModel->findAll();

        $getJamMulai = $this->KegiatanModel->getJamMulai();
        $getJamSelesai = $this->KegiatanModel->getJamSelesai();

        $timeNow = date_format(Time::now('Asia/Jakarta'), "d");

        $StartA = $this->request->getPost('pilihJamMulai');
        $EndA = $this->request->getPost('pilihJamSelesai');
        $StartB = $getJamMulai;
        $EndB = $getJamSelesai;

        echo $timeNow;
        echo "<br>";
        echo "INPUT Jam Mulai : $StartA";
        echo "<br>";
        echo "INPUT Jam Selesai : $EndA";
        echo "<br>";

        if ($StartA < $EndA) {
            echo "$StartA < $EndA";

            for ($i = 0; $i < count($StartB); $i++) {
                $result = ($StartA < $EndB[$i]) && ($EndA > $StartB[$i]);
                if ($result) {
                    echo "<br>";
                    echo "Gagal, sudah ada yang menggunakan ruangan pada : ";
                    echo "<br>";
                    echo "Jam Mulai : $StartB[$i]";
                    echo "<br>";
                    echo "Jam Selesai : $EndB[$i]";
                    echo "<br>";
                }
            };
            if ($result == false) {
                echo "<br>";
                echo "Sukses menambahkan";
                echo "<br>";
                echo "Jam Mulai : $StartA";
                echo "<br>";
                echo "Jam Selesai : $EndA";
                echo "<br>";
            }

            $ruangan_id     = $this->request->getPost('pilihRuangan');
            $tanggal        = $this->request->getPost('inputTanggal');
            $mulai          = $this->request->getPost('pilihJamMulai');
            $selesai        = $this->request->getPost('pilihJamSelesai');
            $agenda         = $this->request->getPost('inputAgenda');
            $pic_id         = $this->request->getPost('pilihPIC');
            $hp             = $this->request->getPost('inputHP');

            if ($_FILES and $_FILES['inputUndangan']['name']) {
                //kalau lampiran tidak kosong
                $undangan       = $this->request->getFile('inputundangan');
                $namaUndangan   = $undangan->getRandomName();
            } else {
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
            if ($_FILES and $_FILES['inputLampiran']['name']) {
                // Upload file
                $undangan->move('undangan-kegiatan', $namaUndangan);
            }
            $result = $this->KegiatanModel->addKegiatan($data);
            // dd($result);
            if ($result) {
                session()->setFlashdata('sukses', 'SUKSES : Kegiatan berhasil ditambahkan.');
                return redirect()->to(base_url('staffdosen/kegiatan/'));
            } else {
                session()->setFlashdata('error', 'ERROR : Kegiatan gagal ditambahkan.');
                return redirect()->to(base_url('staffdosen/kegiatan/'));
            }
        } else {
            session()->setFlashdata('error', "ERROR : Jam mulai (" . $StartA . ") lebih besar dari jam selesai ("  . $EndA . ")");
            return redirect()->to(base_url('staffdosen/kegiatan/'));
        }
    }
}
