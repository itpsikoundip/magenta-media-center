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
        $timeNow = date_format(Time::now('Asia/Jakarta'), "Y-m-d");
        // dd($timeNow);
        $dateNowFormatted = date_format(Time::now('Asia/Jakarta'), "Y-m-d");
        $timeNowFormatted = date_format(Time::now('Asia/Jakarta'), "H:i:s");

        $kegiatanAktif = $this->KegiatanModel
            ->select(
                'kegiatan.id, 
                                    kegiatan.tanggal, 
                                    kegiatan.mulai, 
                                    kegiatan.selesai, 
                                    kegiatan.agenda,
                                    kegiatan.hp,
                                    kegiatan.undangan,
                                    kegiatan_ruangan.nama as ruangan,
                                    data_staffdosen.nama as pic'
            )
            ->join('kegiatan_ruangan', 'kegiatan.ruangan_id = kegiatan_ruangan.id')
            ->join('data_staffdosen', 'kegiatan.pic_id = data_staffdosen.id_staffdosen')
            ->where('kegiatan.tanggal >=', $timeNow)
            ->orderBy('kegiatan.tanggal', 'ASC')
            ->orderBy('kegiatan.mulai', 'ASC')
            ->get()->getResultArray();
        // dd($kegiatanAktif);

        $ruangan = $this->RuanganModel->getRuangan();
        $data = [
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

        $timeNow = Time::now();
        $selectedDate = $this->request->getPost('inputTanggal');

        // echo "<br>";
        // echo "INPUT Jam Mulai : $StartA";
        // echo "<br>";
        // echo "INPUT Jam Selesai : $EndA";
        // echo "<br>";
        if ($selectedDate >= $timeNow) {

            if ($StartA < $EndA) {
                // echo "$StartA < $EndA";

                if (count($allKegiatan) > 0) {
                    // dd($StartB);
                    for ($i = 0; $i < count($StartB); $i++) {

                        $StartAtoInt = (int)$StartA;
                        $EndAtoInt = (int)$EndA;
                        $StartBtoInt = (int)$StartB[$i]["mulai"];
                        $EndBtoInt = (int)$EndB[$i]["selesai"];

                        $overlap = ($StartAtoInt < $EndBtoInt) && ($EndAtoInt > $StartBtoInt);
                        if ($overlap) {
                            echo "<br>";
                            session()->setFlashdata('error', "GAGAL : Sudah ada yang menggunakan ruangan tersebut pada pukul " . $StartBtoInt . " - " . $EndBtoInt);
                            return redirect()->to(base_url('staffdosen/kegiatan/'));
                        }
                    };
                    // dd($overlap);
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

                // dd($data);
                if ($_FILES and $_FILES['inputUndangan']['name']) {
                    // Upload file
                    $undangan->move('undangan-kegiatan', $namaUndangan);
                }
                $result = $this->KegiatanModel->addKegiatan($data);
                // dd($result);
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
            session()->setFlashdata('error', "GAGAL : Tanggal sudah lewat.");
            return redirect()->to(base_url('staffdosen/kegiatan/'));
        }
    }
}
