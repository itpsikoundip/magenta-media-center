<?php

namespace App\Controllers\StaffDosen\SK;

use App\Controllers\BaseController;
use App\Models\Sk\ModelVerifikatorSKRektor;

class ControllerVerifikatorSKRektor extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelVerifikatorSKRektor = new ModelVerifikatorSKRektor();
    }

    public function index()
    {
        $data = [
            'title' => 'Verifikasi Pengajuan SK Rektor',
            // 'dataSKDekanSiapVerif' => $this->ModelVerifikatorSKRektor->dataSKDekanSiapVerif(),
            'detailVerifikator' => $this->ModelVerifikatorSKRektor->detailVerifikator(),


            // SV AKEM
            'allDataSKRektorSVAkem' => $this->ModelVerifikatorSKRektor->allDataSKRektorSVAkem(),
            'allDataSKRektorSVAkemSiapVerif' => $this->ModelVerifikatorSKRektor->allDataSKRektorSVAkemSiapVerif(),

            // SV SUMDA
            'allDataSKRektorSVSumda' => $this->ModelVerifikatorSKRektor->allDataSKRektorSVSumda(),
            'allDataSKRektorSVSumdaSiapVerif' => $this->ModelVerifikatorSKRektor->allDataSKRektorSVSumdaSiapVerif(),

            // MANAGER TU
            'allDataSKRektorManagerTU' => $this->ModelVerifikatorSKRektor->allDataSKRektorManagerTU(),
            'allDataSKRektorManagerTUSiapVerif' => $this->ModelVerifikatorSKRektor->allDataSKRektorManagerTUSiapVerif(),

            // WADEK AKEM
            'allDataSKRektorWadekAkem' => $this->ModelVerifikatorSKRektor->allDataSKRektorWadekAkem(),
            'allDataSKRektorWadekAkemSiapVerif' => $this->ModelVerifikatorSKRektor->allDataSKRektorWadekAkemSiapVerif(),

            // WADEK SUMDA
            'allDataSKRektorWadekSumda' => $this->ModelVerifikatorSKRektor->allDataSKRektorWadekSumda(),
            'allDataSKRektorWadekSumdaSiapVerif' => $this->ModelVerifikatorSKRektor->allDataSKRektorWadekSumdaSiapVerif(),

            // DEKAN
            'allDataSKRektorDekan' => $this->ModelVerifikatorSKRektor->allDataSKRektorDekan(),
            'allDataSKRektorDekanSiapVerif' => $this->ModelVerifikatorSKRektor->allDataSKRektorDekanSiapVerif(),






            'isi'    => 'staffdosen/sk/verifikator/rektor/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function edit($id_sk_rektor)
    {
        $data = [
            'title' => 'Detail & Setujui SK Rektor',
            'detailSKRektor' => $this->ModelVerifikatorSKRektor->detailSKRektorArray($id_sk_rektor),
            'detailVerifikator' => $this->ModelVerifikatorSKRektor->detailVerifikator(),
            'isi'    => 'staffdosen/sk/verifikator/rektor/edit'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function editDataSvAkakemCatatan($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'sk_akem_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'sk_akem_user' => $this->request->getPost('userID'),
            'sk_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }

    public function editDataSvSumdaCatatan($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'sv_sumda_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'sv_sumda_user' => $this->request->getPost('userID'),
            'sv_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }

    public function editDataManagerTUCatatan($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'manager_tu_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'manager_tu_user' => $this->request->getPost('userID'),
            'manager_tu_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }
    public function editDataWadekAkakemCatatan($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'wadek_akem_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadek_akem_user' => $this->request->getPost('userID'),
            'wadek_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }
    public function editDataWadekSumdaCatatan($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'wadek_sumda_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadek_sumda_user' => $this->request->getPost('userID'),
            'wadek_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }
    public function editDataDekanCatatan($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'dekan_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }






    public function editDataSvAkakemStatus($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'sk_akem_status' => $this->request->getPost('statusPropo'),
            'sk_akem_user' => $this->request->getPost('userID'),
            'sk_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }

    public function editDataSvSumdaStatus($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'sv_sumda_status' => $this->request->getPost('statusPropo'),
            'sv_sumda_user' => $this->request->getPost('userID'),
            'sv_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }

    public function editDataManagerTUStatus($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'manager_tu_status' => $this->request->getPost('statusPropo'),
            'manager_tu_user' => $this->request->getPost('userID'),
            'manager_tu_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }
    public function editDataWadekAkakemStatus($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'wadek_akem_status' => $this->request->getPost('statusPropo'),
            'wadek_akem_user' => $this->request->getPost('userID'),
            'wadek_akem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }
    public function editDataWadekSumdaStatus($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'wadek_sumda_status' => $this->request->getPost('statusPropo'),
            'wadek_sumda_user' => $this->request->getPost('userID'),
            'wadek_sumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }
    public function editDataDekanStatus($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'dekan_status' => $this->request->getPost('statusPropo'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelVerifikatorSKRektor->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/verifikator/rektor/edit/'  . $id_sk_rektor));
    }

    public function view($id_sk_rektor)
    {
        $data = [
            'title' => 'Pengajuan SK Rektor',
            'detailSKRektor' => $this->ModelVerifikatorSKRektor->detailSKRektor($id_sk_rektor),
            'isi'    => 'staffdosen/sk/verifikator/rektor/view'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
