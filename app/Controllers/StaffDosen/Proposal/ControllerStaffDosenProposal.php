<?php

namespace App\Controllers\StaffDosen\Proposal;

use App\Controllers\BaseController;
use App\Models\Proposal\ModelProposalBEMStaffDosen;

class ControllerStaffDosenProposal extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('rupiah_helper');
        $this->ModelProposalBEMStaffDosen = new ModelProposalBEMStaffDosen();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pengajuan Proposal',
            // Bag.Akademik
            'allDataProposalBagAkademik' => $this->ModelProposalBEMStaffDosen->allDataProposalBagAkademik(),
            'allDataProposalBagAkademikSiapACC' => $this->ModelProposalBEMStaffDosen->allDataProposalBagAkademikSiapACC(),
            // Bag.Sumberdaya
            'allDataProposalBagSumberDaya' => $this->ModelProposalBEMStaffDosen->allDataProposalBagSumberDaya(),
            'allDataProposalBagSumberDayaSiapACC' => $this->ModelProposalBEMStaffDosen->allDataProposalBagSumberDayaSiapACC(),
            // Bag.TataUsaha
            'allDataProposalBagTataUsaha' => $this->ModelProposalBEMStaffDosen->allDataProposalBagTataUsaha(),
            'allDataProposalBagTataUsahaSiapACC' => $this->ModelProposalBEMStaffDosen->allDataProposalBagTataUsahaSiapACC(),
            // Bag.KaprodiS1
            'allDataProposalBagKaprodiS1' => $this->ModelProposalBEMStaffDosen->allDataProposalBagKaprodiS1(),
            'allDataProposalBagKaprodiS1SiapACC' => $this->ModelProposalBEMStaffDosen->allDataProposalBagKaprodiS1SiapACC(),
            // Bag.KaprodiS2
            'allDataProposalBagKaprodiS2' => $this->ModelProposalBEMStaffDosen->allDataProposalBagKaprodiS2(),
            'allDataProposalBagKaprodiS2SiapACC' => $this->ModelProposalBEMStaffDosen->allDataProposalBagKaprodiS2SiapACC(),
            // Bag.WadekAkem
            'allDataProposalBagWadekAkem' => $this->ModelProposalBEMStaffDosen->allDataProposalBagWadekAkem(),
            'allDataProposalBagWadekAkemSiapACC' => $this->ModelProposalBEMStaffDosen->allDataProposalBagWadekAkemSiapACC(),
            // Bag.WadekSumda
            'allDataProposalBagWadekSumda' => $this->ModelProposalBEMStaffDosen->allDataProposalBagWadekSumda(),
            'allDataProposalBagWadekSumdaSiapACC' => $this->ModelProposalBEMStaffDosen->allDataProposalBagWadekSumdaSiapACC(),
            // Bag.Dekan
            'allDataProposalBagDekan' => $this->ModelProposalBEMStaffDosen->allDataProposalBagDekan(),
            'allDataProposalBagDekanSiapACC' => $this->ModelProposalBEMStaffDosen->allDataProposalBagDekanSiapACC(),
            'detailDosen'   => $this->ModelProposalBEMStaffDosen->detailDosen(),
            'isi'    => 'staffdosen/proposal/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function edit($id_propo)
    {
        $data = [
            'title' => 'Detail & Setujui Proposal',
            'detailProposal' => $this->ModelProposalBEMStaffDosen->detailProposal($id_propo),
            'isi'    => 'staffdosen/proposal/detail'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function view($id_propo)
    {
        $data = [
            'title' => 'Detail & Setujui Proposal',
            'detailProposal' => $this->ModelProposalBEMStaffDosen->detailProposal($id_propo),
            'isi'    => 'staffdosen/proposal/detail'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function editDataAkademikCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'akademik_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'akademik_user' => $this->request->getPost('userID'),
            'akademik_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataSumberdayaCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'sumberdaya_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'sumberdaya_user' => $this->request->getPost('userID'),
            'sumberdaya_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataTataUsahaCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'tatausaha_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'tatausaha_user' => $this->request->getPost('userID'),
            'tatausaha_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataWadekAkemCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadekakem_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadekakem_user' => $this->request->getPost('userID'),
            'wadekakem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataWadekSumdaCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadeksumda_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadeksumda_user' => $this->request->getPost('userID'),
            'wadeksumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataKaprodiS1Catatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis1_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'kaprodis1_user' => $this->request->getPost('userID'),
            'kaprodis1_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataKaprodiS2Catatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis2_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'kaprodis2_user' => $this->request->getPost('userID'),
            'kaprodis2_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataDekanCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'dekan_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }

    public function editDataAkademikStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'akademik_status' => $this->request->getPost('statusPropo'),
            'akademik_user' => $this->request->getPost('userID'),
            'akademik_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataSumberdayaStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'sumberdaya_status' => $this->request->getPost('statusPropo'),
            'sumberdaya_user' => $this->request->getPost('userID'),
            'sumberdaya_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataTataUsahaStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'tatausaha_status' => $this->request->getPost('statusPropo'),
            'tatausaha_user' => $this->request->getPost('userID'),
            'tatausaha_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataWadekAkemStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadekakem_status' => $this->request->getPost('statusPropo'),
            'wadekakem_user' => $this->request->getPost('userID'),
            'wadekakem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataWadekSumdaStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadeksumda_status' => $this->request->getPost('statusPropo'),
            'wadeksumda_user' => $this->request->getPost('userID'),
            'wadeksumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataKaprodiS1Status($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis1_status' => $this->request->getPost('statusPropo'),
            'kaprodis1_user' => $this->request->getPost('userID'),
            'kaprodis1_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataKaprodiS2Status($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis2_status' => $this->request->getPost('statusPropo'),
            'kaprodis2_user' => $this->request->getPost('userID'),
            'kaprodis2_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
    public function editDataDekanStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'dekan_status' => $this->request->getPost('statusPropo'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposalBEMStaffDosen->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan statuss berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/proposal/edit/'  . $id_propo));
    }
}
