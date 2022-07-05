<?php

namespace App\Controllers;

use App\Models\ModelProposal;

class Proposal extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('rupiah_helper');
        $this->ModelProposal = new ModelProposal();
    }

    public function index()
    {
        $data = [
            'title' => 'Menu Proposal',
            'isi'    => 'mahasiswa/proposal/index'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function data()
    {
        $data = [
            'title' => 'Data Proposal',
            'dataProposal' => $this->ModelProposal->allData(),
            'dataProposalStatus0' => $this->ModelProposal->allDataStatus0(),
            'dataProposalStatus1' => $this->ModelProposal->allDataStatus1(),
            'dataProposalStatus2' => $this->ModelProposal->allDataStatus2(),
            'dataProposalStatus3' => $this->ModelProposal->allDataStatus3(),
            'isi'    => 'mahasiswa/proposal/data'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function pengajuan()
    {
        $data = [
            'title' => 'Pengajuan Proposal',
            'dataOrmawa' => $this->ModelProposal->allDataOrmawa(),
            'isi'    => 'mahasiswa/proposal/pengajuan'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function home()
    {
        $data = [
            'title' => 'Dashboard Pengajuan Proposal',
            'isi'    => 'proposal/v_home.php'
        ];
        return view('layouts/v_wrapper', $data);
    }
    public function add()
    {
        if ($this->validate([
            'inputFileProposal' => [
                'label' => 'Upload File Proposal',
                'rules' => 'uploaded[inputFileProposal]|max_size[inputFileProposal,5120]|mime_in[inputFileProposal,application/pdf]',
                'errors' => [
                    'uploaded' => '{field} Wajib Diisi !!!',
                    'max_size' => '{field} Max 5MB',
                    'mime_in' => 'Format {field} Wajib PDF'
                ]
            ],
        ])) {
            //mengambil file foto dari form input
            $fileUpload = $this->request->getFile('inputFileProposal');
            //merename nama file foto
            $namaFileUpload = $fileUpload->getRandomName();
            //jika valid
            $data = array(
                'judul_propo' => $this->request->getPost('namaProposal'),
                'jenis_propo' => $this->request->getPost('jenisProposal'),
                'nama_keg' => $this->request->getPost('namaKegiatan'),
                'jenispendidikan_propo' => $this->request->getPost('studi'),
                'tahun_anggaran' => $this->request->getPost('tahunAnggaran'),
                'organisasi_lembaga' => $this->request->getPost('organisasiLembaga'),
                'penanggung_jawab' => $this->request->getPost('ketuaPJ'),
                'no_hp' => $this->request->getPost('noHP'),
                'tanggal_mulai' => $this->request->getPost('tanggalMulai'),
                'tanggal_selesai' => $this->request->getPost('tanggalSelesai'),
                'lokasi' => $this->request->getPost('lokasi'),
                'total_anggaran' => $this->request->getPost('totalAnggaran'),
                'tentang_propo' => $this->request->getPost('tentangProposal'),
                'upload_proposal' => $namaFileUpload,
            );
            //memindahkan file foto dari form input ke folder foto di directory
            $fileUpload->move('uploadproposal', $namaFileUpload);
            $this->ModelProposal->add($data);
            session()->setFlashdata('sukses', 'Proposal Berhasil diajukan !!');
            return redirect()->to(base_url('proposal/data'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('proposal/pengajuan'));
        }
        $data = [
            'judul_propo' => $this->request->getPost('namaProposal'),
            'jenis_propo' => $this->request->getPost('jenisProposal'),
            'nama_keg' => $this->request->getPost('namaKegiatan'),
            'tahun_anggaran' => $this->request->getPost('tahunAnggaran'),
            'organisasi_lembaga' => $this->request->getPost('organisasiLembaga'),
            'penanggung_jawab' => $this->request->getPost('ketuaPJ'),
            'no_hp' => $this->request->getPost('noHP'),
            'tanggal_mulai' => $this->request->getPost('tanggalMulai'),
            'tanggal_selesai' => $this->request->getPost('tanggalSelesai'),
            'lokasi' => $this->request->getPost('lokasi'),
            'total_anggaran' => $this->request->getPost('totalAnggaran'),
            'tentang_propo' => $this->request->getPost('tentangProposal'),
        ];
        $this->ModelProposal->add($data);
        session()->setFlashdata('notifikasi', 'Proposal <strong>Berhasil Ditambahkan !!</strong>');
        return redirect()->to(base_url('proposal/data'));
    }

    public function editFileProposal($id_propo)
    {
        if ($this->validate([
            'uploadFileProposal' => [
                'label' => 'Upload File Proposal',
                'rules' => 'uploaded[uploadFileProposal]|max_size[uploadFileProposal,5120]|mime_in[uploadFileProposal,application/pdf]',
                'errors' => [
                    'uploaded' => '{field} Wajib Diisi !!!',
                    'max_size' => '{field} Max 5MB',
                    'mime_in' => 'Format {field} Wajib PDF'
                ]
            ],
        ])) {
            //mengambil file foto dari form input
            $fileUpload = $this->request->getFile('uploadFileProposal');
            //merename nama file foto
            $namaFileUpload = $fileUpload->getRandomName();
            //jika valid
            $data = array(
                'id_propo' => $id_propo,
                'upload_proposal' => $namaFileUpload,
            );
            //memindahkan file foto dari form input ke folder foto di directory
            $fileUpload->move('uploadproposal', $namaFileUpload);
            $this->ModelProposal->uploadFileProposal($data);
            session()->setFlashdata('sukses', 'Proposal Berhasil diupload !!');
            return redirect()->to(base_url('proposal/edit/' . $id_propo));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('proposal/edit/' . $id_propo));
        }
    }


    public function detail($id_propo)
    {
        $data = [
            'title' => 'Detail Proposal',
            'detailProposal' => $this->ModelProposal->detailProposal($id_propo),
            'isi'    => 'mahasiswa/proposal/detail'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function delete($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
        ];
        $this->ModelProposal->delete_data($data);
        session()->setFlashdata('notifikasi', 'Hapus Data Berhasil dilakukan !!');
        return redirect()->to(base_url('proposal/data'));
    }

    public function edit($id_propo)
    {
        $data = [
            'title' => 'Pengajuan Proposal',
            'detailProposal' => $this->ModelProposal->detailProposal($id_propo),
            'detailProposalNoteAkademik' => $this->ModelProposal->detailProposalNoteAkademik($id_propo),
            'detailProposalNoteSumda' => $this->ModelProposal->detailProposalNoteSumda($id_propo),
            'detailProposalNoteTataUsaha' => $this->ModelProposal->detailProposalNoteTataUsaha($id_propo),
            'detailProposalNoteKaprodiS1' => $this->ModelProposal->detailProposalNoteKaprodiS1($id_propo),
            'detailProposalNoteKaprodiS2' => $this->ModelProposal->detailProposalNoteKaprodiS2($id_propo),
            'detailProposalNoteWadekAkem' => $this->ModelProposal->detailProposalNoteWadekAkem($id_propo),
            'detailProposalNoteWadekSumda' => $this->ModelProposal->detailProposalNoteWadekSumda($id_propo),
            'detailProposalNoteDekan' => $this->ModelProposal->detailProposalNoteDekan($id_propo),
            'isi'    => 'mahasiswa/proposal/edit'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function editData($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'judul_propo' => $this->request->getPost('namaProposal'),
            'jenis_propo' => $this->request->getPost('jenisProposal'),
            'nama_keg' => $this->request->getPost('namaKegiatan'),
            'jenispendidikan_propo' => $this->request->getPost('studi'),
            'tahun_anggaran' => $this->request->getPost('tahunAnggaran'),
            'organisasi_lembaga' => $this->request->getPost('organisasiLembaga'),
            'penanggung_jawab' => $this->request->getPost('ketuaPJ'),
            'no_hp' => $this->request->getPost('noHP'),
            'tanggal_mulai' => $this->request->getPost('tanggalMulai'),
            'tanggal_selesai' => $this->request->getPost('tanggalSelesai'),
            'lokasi' => $this->request->getPost('lokasi'),
            'total_anggaran' => $this->request->getPost('totalAnggaran'),
            'tentang_propo' => $this->request->getPost('tentangProposal'),
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Edit Data Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposal/edit/' . $id_propo));
    }

    public function konfirmasiEditkeDekan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'dekan_status' => 0,
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Proposal Berhasil Diajukan !!');
        return redirect()->to(base_url('proposal/data'));
    }
    public function konfirmasiEditkeWadeksumda($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadeksumda_status' => 0,
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Proposal Berhasil Diajukan !!');
        return redirect()->to(base_url('proposal/data'));
    }
    public function konfirmasiEditkeWadekakem($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadekakem_status' => 0,
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Proposal Berhasil Diajukan !!');
        return redirect()->to(base_url('proposal/data'));
    }
    public function konfirmasiEditkeKaprodis1($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis1_status' => 0,
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Proposal Berhasil Diajukan !!');
        return redirect()->to(base_url('proposal/data'));
    }
    public function konfirmasiEditkeTatausaha($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'tatausaha_status' => 0,
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Proposal Berhasil Diajukan !!');
        return redirect()->to(base_url('proposal/data'));
    }
    public function konfirmasiEditkeSumberdaya($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'sumberdaya_status' => 0,
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Proposal Berhasil Diajukan !!');
        return redirect()->to(base_url('proposal/data'));
    }
    public function konfirmasiEditkeAkademik($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'akademik_status' => 0,
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Proposal Berhasil Diajukan !!');
        return redirect()->to(base_url('proposal/data'));
    }
    public function konfirmasiEditkeBEM($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'bem_status' => 0,
        ];
        $this->ModelProposal->edit($data);
        session()->setFlashdata('notifikasi', 'Proposal Berhasil Diajukan !!');
        return redirect()->to(base_url('proposal/data'));
    }
}
