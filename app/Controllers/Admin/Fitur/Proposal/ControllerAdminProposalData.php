<?php

namespace App\Controllers\Admin\Fitur\Proposal;

use App\Controllers\BaseController;
use App\Models\Admin\Fitur\Proposal\ModelAdminProposalData;

class ControllerAdminProposalData extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('rupiah_helper');
        $this->ModelAdminProposalData = new ModelAdminProposalData();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Proposal',
            'allDataProposal' => $this->ModelAdminProposalData->allData(),
            'isi'    => 'admin/fitur/proposal/data'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function detail($id_propo)
    {
        $data = [
            'title' => 'Detail Proposal',
            'detailProposal' => $this->ModelAdminProposalData->detailProposal($id_propo),
            'detailProposalNoteAkademik' => $this->ModelAdminProposalData->detailProposalNoteAkademik($id_propo),
            'detailProposalNoteSumda' => $this->ModelAdminProposalData->detailProposalNoteSumda($id_propo),
            'detailProposalNoteTataUsaha' => $this->ModelAdminProposalData->detailProposalNoteTataUsaha($id_propo),
            'detailProposalNoteKaprodiS1' => $this->ModelAdminProposalData->detailProposalNoteKaprodiS1($id_propo),
            'detailProposalNoteKaprodiS2' => $this->ModelAdminProposalData->detailProposalNoteKaprodiS2($id_propo),
            'detailProposalNoteWadekAkem' => $this->ModelAdminProposalData->detailProposalNoteWadekAkem($id_propo),
            'detailProposalNoteWadekSumda' => $this->ModelAdminProposalData->detailProposalNoteWadekSumda($id_propo),
            'detailProposalNoteDekan' => $this->ModelAdminProposalData->detailProposalNoteDekan($id_propo),
            'isi'    => 'admin/fitur/proposal/details'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function edit($id_propo)
    {
        $data = [
            'title' => 'Edit Proposal',
            'detailProposal' => $this->ModelAdminProposalData->detailProposal($id_propo),
            'detailProposalNoteAkademik' => $this->ModelAdminProposalData->detailProposalNoteAkademik($id_propo),
            'detailProposalNoteSumda' => $this->ModelAdminProposalData->detailProposalNoteSumda($id_propo),
            'detailProposalNoteTataUsaha' => $this->ModelAdminProposalData->detailProposalNoteTataUsaha($id_propo),
            'detailProposalNoteKaprodiS1' => $this->ModelAdminProposalData->detailProposalNoteKaprodiS1($id_propo),
            'detailProposalNoteKaprodiS2' => $this->ModelAdminProposalData->detailProposalNoteKaprodiS2($id_propo),
            'detailProposalNoteWadekAkem' => $this->ModelAdminProposalData->detailProposalNoteWadekAkem($id_propo),
            'detailProposalNoteWadekSumda' => $this->ModelAdminProposalData->detailProposalNoteWadekSumda($id_propo),
            'detailProposalNoteDekan' => $this->ModelAdminProposalData->detailProposalNoteDekan($id_propo),
            'isi'    => 'admin/fitur/proposal/edit'
        ];
        return view('layouts/admin-wrapper', $data);
    }
}
