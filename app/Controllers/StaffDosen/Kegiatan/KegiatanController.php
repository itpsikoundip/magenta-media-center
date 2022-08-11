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
        $staffdosen = $this->StaffDosenModel->allData();
        $timeNow = date_format(Time::now('Asia/Jakarta'), "Y-m-d");
        $dateNowFormatted = date_format(Time::now('Asia/Jakarta'), "Y-m-d");
        $timeNowFormatted = date_format(Time::now('Asia/Jakarta'), "H:i:s");

        $kegiatanAktif = $this->KegiatanModel->getKegiatan();
        $kegiatanRiwayat = $this->KegiatanModel->riwayat(session()->get('id'));

        $ruangan = $this->RuanganModel->getRuangan();

        $data = [
            'riwayat'       => $kegiatanRiwayat,
            'ruangan'       => $ruangan,
            'staffdosen'    => $staffdosen,
            'kegiatanAktif' => $kegiatanAktif,
            'title'         => 'Jadwal Kegiatan dan Peminjaman Ruangan ',
            'isi'           => 'staffdosen/kegiatan/index',
            'currentDate'   => $dateNowFormatted,
            'currentTime'   => $timeNowFormatted
        ];
        // dd($data);
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function addKegiatan()
    {



        $allKegiatan = $this->KegiatanModel->findAll();

        $getJamMulai = $this->KegiatanModel->getJamMulai($this->request->getPost('pilihRuangan'), $this->request->getPost('inputTanggal'));
        $getJamSelesai = $this->KegiatanModel->getJamSelesai($this->request->getPost('pilihRuangan'), $this->request->getPost('inputTanggal'));

        $StartA = $this->request->getPost('pilihJamMulai');
        $EndA = $this->request->getPost('pilihJamSelesai');

        $StartB = $getJamMulai;
        $EndB = $getJamSelesai;

        $timeNow = date_format(Time::now('Asia/Jakarta'), "Y-m-d");
        $selectedDate = $this->request->getPost('inputTanggal');

        $FinalStartA = date('H:i', strtotime($StartA));
        $FinalEndA = date('H:i', strtotime($EndA));

        if (($selectedDate >= $timeNow) && ($FinalStartA >= "07:00" && $FinalStartA <= "16:30") && ($FinalEndA >= "07:30" && $FinalEndA <= "17:00")) {

            if ($StartA < $EndA) {

                if (count($allKegiatan) > 0) {

                    for ($i = 0; $i < count($StartB); $i++) {
                        $FinalStartB = date('H:i', strtotime($StartB[$i]["mulai"]));
                        $FinalEndB = date('H:i', strtotime($EndB[$i]["selesai"]));

                        $over = ($FinalStartA < $FinalEndB) && ($FinalEndA > $FinalStartB);

                        if ($over) {
                            echo "<br>";
                            session()->setFlashdata('error', "GAGAL : Sudah ada yang menggunakan ruangan tersebut pada pukul <b>" .  $FinalStartB . " - " . $FinalEndB . "</b>");
                            return redirect()->to(base_url('staffdosen/kegiatan/'));
                        }
                    };
                }
                $ruangan_id     = $this->request->getPost('pilihRuangan');
                $tanggal        = $this->request->getPost('inputTanggal');
                $mulai          = $this->request->getPost('pilihJamMulai');
                $selesai        = $this->request->getPost('pilihJamSelesai');
                $agenda         = $this->request->getPost('inputAgenda');
                $pic_id         = $this->request->getPost('pilihPIC');
                $hp             = "62" . $this->request->getPost('inputHP');

                if ($_FILES and $_FILES['inputUndangan']['name']) {
                    //kalau lampiran tidak kosong
                    $undangan       = $this->request->getFile('inputUndangan');
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

                if ($_FILES and $_FILES['inputUndangan']['name']) {
                    // Upload file
                    $undangan->move('undangan-kegiatan', $namaUndangan);
                }
                $result = $this->KegiatanModel->addKegiatan($data);

                if ($result) {
                    session()->setFlashdata('sukses', 'SUKSES : Kegiatan berhasil ditambahkan.');
                    return redirect()->to(base_url('staffdosen/kegiatan/'));
                } else {
                    session()->setFlashdata('error', 'GAGAL : Kegiatan gagal ditambahkan.');
                    return redirect()->to(base_url('staffdosen/kegiatan/'));
                }
            } else {
                session()->setFlashdata('error', "GAGAL : Jam mulai (" . $StartA . ") lebih besar dari jam selesai ("  . $EndA . ")");
                return redirect()->to(base_url('staffdosen/kegiatan/'));
            }
        } else {
            session()->setFlashdata('error', "GAGAL : Tanggal sudah lewat / waktu kegiatan diluar jam kerja.");
            return redirect()->to(base_url('staffdosen/kegiatan/'));
        }
    }

    public function selesaiKegiatan($id)
    {
        $selesaikan = new KegiatanModel();

        $timeNowFormatted = date_format(Time::now('Asia/Jakarta'), "H:i");

        $data = [
            'selesai' => $timeNowFormatted,
        ];
        $selesaikan->selesaiKegiatan($data, $id);

        session()->setFlashdata('sukses', 'Rapat berhasil diselesaikan');
        return redirect()->to(base_url('staffdosen/kegiatan/'));
    }

    public function deleteKegiatan($id)
    {
        $delete = $this->KegiatanModel->deleteKegiatan($id);

        if ($delete) {
            session()->setFlashdata('sukses', 'Riwayat kegiatan berhasil <b>dihapus</b>');
            return redirect()->to(base_url('staffdosen/kegiatan/'));
        } else {
            session()->setFlashdata('error', 'gagal menghapus riwayat kegiatan. Silakan coba lagi');
            return redirect()->to(base_url('staffdosen/kegiatan/'));
        }
    }
}
