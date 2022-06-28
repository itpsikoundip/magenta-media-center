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
            'dataProposalStatus0' => $this->ModelProposals->allDataStatus0(),
            'dataProposalStatus1' => $this->ModelProposals->allDataStatus1(),
            'dataProposalStatus2' => $this->ModelProposals->allDataStatus2(),
            'dataProposalStatus3' => $this->ModelProposals->allDataStatus3(),
            'dataPosisi' => $this->ModelProposals->allDataPosisi(),
            'allDataMenungguPersetujuanSession' => $this->ModelProposals->allDataMenungguPersetujuanSession(),
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
}
