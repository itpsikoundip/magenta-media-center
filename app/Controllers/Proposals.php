<?php

namespace App\Controllers;

use App\Models\ModelProposals;

class Proposals extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('rupiah_helper');
        $this->ModelProposals = new ModelProposals();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pengajuan Proposal',
            // Bag.Akademik
            'allDataProposalBagAkademik' => $this->ModelProposals->allDataProposalBagAkademik(),
            'allDataProposalBagAkademikSiapACC' => $this->ModelProposals->allDataProposalBagAkademikSiapACC(),
            'allDataProposalBagAkademikSudahACC' => $this->ModelProposals->allDataProposalBagAkademikSudahACC(),
            'allDataProposalBagAkademikPerbaikan' => $this->ModelProposals->allDataProposalBagAkademikPerbaikan(),
            'allDataProposalBagAkademikDitolak' => $this->ModelProposals->allDataProposalBagAkademikDitolak(),
            // Bag.Sumberdaya
            'allDataProposalBagSumberDaya' => $this->ModelProposals->allDataProposalBagSumberDaya(),
            'allDataProposalBagSumberDayaSiapACC' => $this->ModelProposals->allDataProposalBagSumberDayaSiapACC(),
            'allDataProposalBagSumberDayaSudahACC' => $this->ModelProposals->allDataProposalBagSumberDayaSudahACC(),
            'allDataProposalBagSumberDayaPerbaikan' => $this->ModelProposals->allDataProposalBagSumberDayaPerbaikan(),
            'allDataProposalBagSumberDayaDitolak' => $this->ModelProposals->allDataProposalBagSumberDayaDitolak(),
            // Bag.TataUsaha
            'allDataProposalBagTataUsaha' => $this->ModelProposals->allDataProposalBagTataUsaha(),
            'allDataProposalBagTataUsahaSiapACC' => $this->ModelProposals->allDataProposalBagTataUsahaSiapACC(),
            'allDataProposalBagTataUsahaSudahACC' => $this->ModelProposals->allDataProposalBagTataUsahaSudahACC(),
            'allDataProposalBagTataUsahaPerbaikan' => $this->ModelProposals->allDataProposalBagTataUsahaPerbaikan(),
            'allDataProposalBagTataUsahaDitolak' => $this->ModelProposals->allDataProposalBagTataUsahaDitolak(),
            // Bag.KaprodiS1
            'allDataProposalBagKaprodiS1' => $this->ModelProposals->allDataProposalBagKaprodiS1(),
            'allDataProposalBagKaprodiS1SiapACC' => $this->ModelProposals->allDataProposalBagKaprodiS1SiapACC(),
            'allDataProposalBagKaprodiS1SudahACC' => $this->ModelProposals->allDataProposalBagKaprodiS1SudahACC(),
            'allDataProposalBagKaprodiS1Perbaikan' => $this->ModelProposals->allDataProposalBagKaprodiS1Perbaikan(),
            'allDataProposalBagKaprodiS1Ditolak' => $this->ModelProposals->allDataProposalBagKaprodiS1Ditolak(),
            // Bag.KaprodiS2
            'allDataProposalBagKaprodiS2' => $this->ModelProposals->allDataProposalBagKaprodiS2(),
            'allDataProposalBagKaprodiS2SiapACC' => $this->ModelProposals->allDataProposalBagKaprodiS2SiapACC(),
            'allDataProposalBagKaprodiS2SudahACC' => $this->ModelProposals->allDataProposalBagKaprodiS2SudahACC(),
            'allDataProposalBagKaprodiS2Perbaikan' => $this->ModelProposals->allDataProposalBagKaprodiS2Perbaikan(),
            'allDataProposalBagKaprodiS2Ditolak' => $this->ModelProposals->allDataProposalBagKaprodiS2Ditolak(),
            // Bag.WadekAkem
            'allDataProposalBagWadekAkem' => $this->ModelProposals->allDataProposalBagWadekAkem(),
            'allDataProposalBagWadekAkemSiapACC' => $this->ModelProposals->allDataProposalBagWadekAkemSiapACC(),
            'allDataProposalBagWadekAkemSudahACC' => $this->ModelProposals->allDataProposalBagWadekAkemSudahACC(),
            'allDataProposalBagWadekAkemPerbaikan' => $this->ModelProposals->allDataProposalBagWadekAkemPerbaikan(),
            'allDataProposalBagWadekAkemDitolak' => $this->ModelProposals->allDataProposalBagWadekAkemDitolak(),
            // Bag.WadekSumda
            'allDataProposalBagWadekSumda' => $this->ModelProposals->allDataProposalBagWadekSumda(),
            'allDataProposalBagWadekSumdaSiapACC' => $this->ModelProposals->allDataProposalBagWadekSumdaSiapACC(),
            'allDataProposalBagWadekSumdaSudahACC' => $this->ModelProposals->allDataProposalBagWadekSumdaSudahACC(),
            'allDataProposalBagWadekSumdaPerbaikan' => $this->ModelProposals->allDataProposalBagWadekSumdaPerbaikan(),
            'allDataProposalBagWadekSumdaDitolak' => $this->ModelProposals->allDataProposalBagWadekSumdaDitolak(),
            // Bag.Dekan
            'allDataProposalBagDekan' => $this->ModelProposals->allDataProposalBagDekan(),
            'allDataProposalBagDekanSiapACC' => $this->ModelProposals->allDataProposalBagDekanSiapACC(),
            'allDataProposalBagDekanSudahACC' => $this->ModelProposals->allDataProposalBagDekanSudahACC(),
            'allDataProposalBagDekanPerbaikan' => $this->ModelProposals->allDataProposalBagDekanPerbaikan(),
            'allDataProposalBagDekanDitolak' => $this->ModelProposals->allDataProposalBagDekanDitolak(),
            'isi'    => 'staffdosen/proposal/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function edit($id_propo)
    {
        $data = [
            'title' => 'Detail & Setujui Proposal',
            'detailProposal' => $this->ModelProposals->detailProposal($id_propo),
            'isi'    => 'staffdosen/proposal/detail'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function view($id_propo)
    {
        $data = [
            'title' => 'Detail & Setujui Proposal',
            'detailProposal' => $this->ModelProposals->detailProposal($id_propo),
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
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataSumberdayaCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'sumberdaya_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'sumberdaya_user' => $this->request->getPost('userID'),
            'sumberdaya_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataTataUsahaCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'tatausaha_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'tatausaha_user' => $this->request->getPost('userID'),
            'tatausaha_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataWadekAkemCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadekakem_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadekakem_user' => $this->request->getPost('userID'),
            'wadekakem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataWadekSumdaCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadeksumda_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'wadeksumda_user' => $this->request->getPost('userID'),
            'wadeksumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataKaprodiS1Catatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis1_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'kaprodis1_user' => $this->request->getPost('userID'),
            'kaprodis1_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataKaprodiS2Catatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis2_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'kaprodis2_user' => $this->request->getPost('userID'),
            'kaprodis2_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataDekanCatatan($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'dekan_note' => $this->request->getPost('addCatatanRevisiPerbaikan'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pemberian Catatan Revisi Perbaikan berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }

    public function editDataAkademikStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'akademik_status' => $this->request->getPost('statusPropo'),
            'akademik_user' => $this->request->getPost('userID'),
            'akademik_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataSumberdayaStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'sumberdaya_status' => $this->request->getPost('statusPropo'),
            'sumberdaya_user' => $this->request->getPost('userID'),
            'sumberdaya_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataTataUsahaStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'tatausaha_status' => $this->request->getPost('statusPropo'),
            'tatausaha_user' => $this->request->getPost('userID'),
            'tatausaha_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataWadekAkemStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadekakem_status' => $this->request->getPost('statusPropo'),
            'wadekakem_user' => $this->request->getPost('userID'),
            'wadekakem_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataWadekSumdaStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'wadeksumda_status' => $this->request->getPost('statusPropo'),
            'wadeksumda_user' => $this->request->getPost('userID'),
            'wadeksumda_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataKaprodiS1Status($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis1_status' => $this->request->getPost('statusPropo'),
            'kaprodis1_user' => $this->request->getPost('userID'),
            'kaprodis1_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataKaprodiS2Status($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'kaprodis2_status' => $this->request->getPost('statusPropo'),
            'kaprodis2_user' => $this->request->getPost('userID'),
            'kaprodis2_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan status berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
    public function editDataDekanStatus($id_propo)
    {
        $data = [
            'id_propo' => $id_propo,
            'dekan_status' => $this->request->getPost('statusPropo'),
            'dekan_user' => $this->request->getPost('userID'),
            'dekan_updatetime' => $this->request->getPost('timeUpdated'),
        ];
        $this->ModelProposals->edit($data);
        session()->setFlashdata('notifikasi', 'Pengubahan statuss berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('proposals/edit/'  . $id_propo));
    }
}
