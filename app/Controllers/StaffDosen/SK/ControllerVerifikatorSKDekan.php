<?php

namespace App\Controllers\StaffDosen\SK;

use App\Controllers\BaseController;
use App\Models\Sk\ModelVerifikatorSKDekan;

class ControllerVerifikatorSKDekan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelVerifikatorSKDekan = new ModelVerifikatorSKDekan();
    }

    public function index()
    {
        $data = [
            'title' => 'Verifikasi Pengajuan SK Dekan',
            // 'dataSKDekanSiapVerif' => $this->ModelVerifikatorSKDekan->dataSKDekanSiapVerif(),
            'detailVerifikator' => $this->ModelVerifikatorSKDekan->detailVerifikator(),


            // SV AKEM
            'allDataSKDekanSVAkem' => $this->ModelVerifikatorSKDekan->allDataSKDekanSVAkem(),
            'allDataSKDekanSVAkemSiapVerif' => $this->ModelVerifikatorSKDekan->allDataSKDekanSVAkemSiapVerif(),

            // SV SUMDA
            'allDataSKDekanSVSumda' => $this->ModelVerifikatorSKDekan->allDataSKDekanSVSumda(),
            'allDataSKDekanSVSumdaSiapVerif' => $this->ModelVerifikatorSKDekan->allDataSKDekanSVSumdaSiapVerif(),

            // MANAGER TU
            'allDataSKDekanManagerTU' => $this->ModelVerifikatorSKDekan->allDataSKDekanManagerTU(),
            'allDataSKDekanManagerTUSiapVerif' => $this->ModelVerifikatorSKDekan->allDataSKDekanManagerTUSiapVerif(),

            // WADEK AKEM
            'allDataSKDekanWadekAkem' => $this->ModelVerifikatorSKDekan->allDataSKDekanWadekAkem(),
            'allDataSKDekanWadekAkemSiapVerif' => $this->ModelVerifikatorSKDekan->allDataSKDekanWadekAkemSiapVerif(),

            // WADEK SUMDA
            'allDataSKDekanWadekSumda' => $this->ModelVerifikatorSKDekan->allDataSKDekanWadekSumda(),
            'allDataSKDekanWadekSumdaSiapVerif' => $this->ModelVerifikatorSKDekan->allDataSKDekanWadekSumdaSiapVerif(),

            // DEKAN
            'allDataSKDekanDekan' => $this->ModelVerifikatorSKDekan->allDataSKDekanDekan(),
            'allDataSKDekanDekanSiapVerif' => $this->ModelVerifikatorSKDekan->allDataSKDekanDekanSiapVerif(),






            'isi'    => 'staffdosen/sk/verifikator/dekan/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function edit($id_sk_dekan)
    {
        $data = [
            'title' => 'Detail & Setujui SK Dekan',
            'detailSKDekan' => $this->ModelVerifikatorSKDekan->detailSKDekanArray($id_sk_dekan),
            'detailVerifikator' => $this->ModelVerifikatorSKDekan->detailVerifikator(),
            'isi'    => 'staffdosen/sk/verifikator/dekan/edit'
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
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }

    public function editDataSvSumdaCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sv_sumda_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'sv_sumda_user' => $this->request->getPost('userID'),
            'sv_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }

    public function editDataManagerTUCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'manager_tu_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'manager_tu_user' => $this->request->getPost('userID'),
            'manager_tu_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }
    public function editDataWadekAkakemCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_akem_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadek_akem_user' => $this->request->getPost('userID'),
            'wadek_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }
    public function editDataWadekSumdaCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_sumda_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadek_sumda_user' => $this->request->getPost('userID'),
            'wadek_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }
    public function editDataDekanCatatan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'dekan_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }






    public function editDataSvAkakemStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sk_akem_status' => $this->request->getPost('statusPropo'),
            'sk_akem_user' => $this->request->getPost('userID'),
            'sk_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }

    public function editDataSvSumdaStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sv_sumda_status' => $this->request->getPost('statusPropo'),
            'sv_sumda_user' => $this->request->getPost('userID'),
            'sv_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }

    public function editDataManagerTUStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'manager_tu_status' => $this->request->getPost('statusPropo'),
            'manager_tu_user' => $this->request->getPost('userID'),
            'manager_tu_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }
    public function editDataWadekAkakemStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_akem_status' => $this->request->getPost('statusPropo'),
            'wadek_akem_user' => $this->request->getPost('userID'),
            'wadek_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/dekan/edit/'  . $id_sk_dekan));
    }
    public function editDataWadekSumdaStatus($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_sumda_status' => $this->request->getPost('statusPropo'),
            'wadek_sumda_user' => $this->request->getPost('userID'),
            'wadek_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKDekan->edit($data);
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
        $this->ModelVerifikatorSKDekan->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekanVerifikator/edit/'  . $id_sk_dekan));
    }

    public function view($id_sk_dekan)
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'detailSKDekan' => $this->ModelVerifikatorSKDekan->detailSKDekan($id_sk_dekan),
            'isi'    => 'staffdosen/sk/verifikator/dekan/view'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
