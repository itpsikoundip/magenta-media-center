<?php

namespace App\Controllers;

use App\Models\ModelProposalJenis;

class ProposalJenis extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelProposalJenis = new ModelProposalJenis();
    }

    public function index()
    {
        $data = [
            'title' => 'Jenis Proposal',
            'dataJenisProposal' => $this->ModelProposalJenis->allData(),
            'isi'    => 'proposal/v_jenis'
        ];
        return view('layouts/v_wrapper', $data);
    }
}
