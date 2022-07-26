<?php

namespace App\Controllers;

use App\Models\ModelSKDekanVerifikator;

class PengajuanSKDekanVerifikator extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelSKDekanVerifikator = new ModelSKDekanVerifikator();
    }

    public function index()
    {
        $data = [
            'title' => 'Verifikasi Pengajuan SK Dekan',
            // 'dataSKDekanSiapVerif' => $this->ModelSKDekanVerifikator->dataSKDekanSiapVerif(),
            'detailVerifikator' => $this->ModelSKDekanVerifikator->detailVerifikator(),


            // SV AKEM
            'allDataSKDekanSVAkem' => $this->ModelSKDekanVerifikator->allDataSKDekanSVAkem(),
            'allDataSKDekanSVAkemSiapVerif' => $this->ModelSKDekanVerifikator->allDataSKDekanSVAkemSiapVerif(),

            // SV SUMDA
            'allDataSKDekanSVSumda' => $this->ModelSKDekanVerifikator->allDataSKDekanSVSumda(),
            'allDataSKDekanSVSumdaSiapVerif' => $this->ModelSKDekanVerifikator->allDataSKDekanSVSumdaSiapVerif(),

            // MANAGER TU
            'allDataSKDekanManagerTU' => $this->ModelSKDekanVerifikator->allDataSKDekanManagerTU(),
            'allDataSKDekanManagerTUSiapVerif' => $this->ModelSKDekanVerifikator->allDataSKDekanManagerTUSiapVerif(),

            // WADEK AKEM
            'allDataSKDekanWadekAkem' => $this->ModelSKDekanVerifikator->allDataSKDekanWadekAkem(),
            'allDataSKDekanWadekAkemSiapVerif' => $this->ModelSKDekanVerifikator->allDataSKDekanWadekAkemSiapVerif(),

            // WADEK SUMDA
            'allDataSKDekanWadekSumda' => $this->ModelSKDekanVerifikator->allDataSKDekanWadekSumda(),
            'allDataSKDekanWadekSumdaSiapVerif' => $this->ModelSKDekanVerifikator->allDataSKDekanWadekSumdaSiapVerif(),

            // DEKAN
            'allDataSKDekanDekan' => $this->ModelSKDekanVerifikator->allDataSKDekanDekan(),
            'allDataSKDekanDekanSiapVerif' => $this->ModelSKDekanVerifikator->allDataSKDekanDekanSiapVerif(),






            'isi'    => 'staffdosen/pengajuansk/skdekan/verifikator/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function edit($id_sk_dekan)
    {
        $data = [
            'title' => 'Detail & Setujui SK Dekan',
            'detailSKDekan' => $this->ModelSKDekanVerifikator->detailSKDekan($id_sk_dekan),
            'detailVerifikator' => $this->ModelSKDekanVerifikator->detailVerifikator(),
            'isi'    => 'staffdosen/pengajuansk/skdekan/verifikator/edit'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function editDataSvAkakemCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sk_akem_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'sk_akem_user' => $this->request->getPost('userID'),
            'sk_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }

    public function editDataSvSumdaCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sv_sumda_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'sv_sumda_user' => $this->request->getPost('userID'),
            'sv_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }

    public function editDataManagerTUCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'manager_tu_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'manager_tu_user' => $this->request->getPost('userID'),
            'manager_tu_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }
    public function editDataWadekAkakemCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_akem_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadek_akem_user' => $this->request->getPost('userID'),
            'wadek_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }
    public function editDataWadekSumdaCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_sumda_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadek_sumda_user' => $this->request->getPost('userID'),
            'wadek_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }
    public function editDataDekanCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'dekan_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }






    public function editDataSvAkakemStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sk_akem_status' => $this->request->getPost('statusPropo'),
            'sk_akem_user' => $this->request->getPost('userID'),
            'sk_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }

    public function editDataSvSumdaStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sv_sumda_status' => $this->request->getPost('statusPropo'),
            'sv_sumda_user' => $this->request->getPost('userID'),
            'sv_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }

    public function editDataManagerTUStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'manager_tu_status' => $this->request->getPost('statusPropo'),
            'manager_tu_user' => $this->request->getPost('userID'),
            'manager_tu_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }
    public function editDataWadekAkakemStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_akem_status' => $this->request->getPost('statusPropo'),
            'wadek_akem_user' => $this->request->getPost('userID'),
            'wadek_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }
    public function editDataWadekSumdaStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_sumda_status' => $this->request->getPost('statusPropo'),
            'wadek_sumda_user' => $this->request->getPost('userID'),
            'wadek_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }
    public function editDataDekanStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'dekan_status' => $this->request->getPost('statusPropo'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelSKDekanVerifikator->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }


    // public function add()
    // {
    //     $data = [
    //         'title' => 'Tambah Pengajuan SK Dekan',
    //         'isi'    => 'staffdosen/pengajuansk/skdekan/add'
    //     ];
    //     return view('layouts/staffdosen-wrapper', $data);
    // }

    // public function addData()
    // {
    //     if ($this->validate([
    //         'uploadSKDekan' => [
    //             'label' => 'Upload File Proposal',
    //             'rules' => 'uploaded[uploadSKDekan]|max_size[uploadSKDekan,5120]|mime_in[uploadSKDekan,application/pdf]',
    //             'errors' => [
    //                 'uploaded' => '{field} Wajib Diisi !!!',
    //                 'max_size' => '{field} Max 5MB',
    //                 'mime_in' => 'Format {field} Wajib PDF'
    //             ]
    //         ],
    //     ])) {
    //         //mengambil file foto dari form input
    //         $fileUpload = $this->request->getFile('uploadSKDekan');
    //         //merename nama file foto
    //         $namaFileUpload = $fileUpload->getRandomName();
    //         //jika valid
    //         $data = array(
    //             'pengaju_id' => $this->request->getPost('idPengaju'),
    //             'judul_sk' => $this->request->getPost('judulSKDekan'),
    //             'tanggal_pembuatan' => $this->request->getPost('tanggalPembuatanSKDekan'),
    //             'tmt_kegiatan' => $this->request->getPost('tmtKegiatanSKDekan'),
    //             'upload_sk_dekan' => $namaFileUpload,
    //         );
    //         //memindahkan file foto dari form input ke folder foto di directory
    //         $fileUpload->move('uploadskdekan', $namaFileUpload);
    //         $this->ModelSKDekan->add($data);
    //         session()->setFlashdata('sukses', 'SK Dekan Berhasil diajukan !!');
    //         return redirect()->to(base_url('PengajuanSKDekan'));
    //     } else {
    //         //jika tidak valid
    //         session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
    //         return redirect()->to(base_url('PengajuanSKDekan/add'));
    //     }
    // }
}
