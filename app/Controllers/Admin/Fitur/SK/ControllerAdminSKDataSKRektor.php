<?php

namespace App\Controllers\Admin\Fitur\SK;

use App\Controllers\BaseController;
use App\Models\Admin\Fitur\SK\ModelAdminSKDataSKRektor;

class ControllerAdminSKDataSKRektor extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminSKDataSKRektor = new ModelAdminSKDataSKRektor();
    }

    public function index()
    {
        $data = [
            'title' => 'Data SK Rektor',
            'allDataSKRektor' => $this->ModelAdminSKDataSKRektor->allDataSKRektor(),
            'isi'    => 'admin/fitur/sk/dataskrektor'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function detail($id_sk_rektor)
    {
        $data = [
            'title' => 'Detail Data SK Rektor',
            'detailSKRektor' => $this->ModelAdminSKDataSKRektor->detailSKRektor($id_sk_rektor),
            'detailSKRektorNoteSVAkademik' => $this->ModelAdminSKDataSKRektor->detailSKRektorNoteSVAkademik($id_sk_rektor),
            'detailSKRektorNoteSVSumda' => $this->ModelAdminSKDataSKRektor->detailSKRektorNoteSVSumda($id_sk_rektor),
            'detailSKRektorNoteTataUsaha' => $this->ModelAdminSKDataSKRektor->detailSKRektorNoteTataUsaha($id_sk_rektor),
            'detailSKRektorNoteWadekAkem' => $this->ModelAdminSKDataSKRektor->detailSKRektorNoteWadekAkem($id_sk_rektor),
            'detailSKRektorNoteWadekSumda' => $this->ModelAdminSKDataSKRektor->detailSKRektorNoteWadekSumda($id_sk_rektor),
            'detailSKRektorNoteDekan' => $this->ModelAdminSKDataSKRektor->detailSKRektorNoteDekan($id_sk_rektor),
            'isi'    => 'admin/fitur/sk/detailskrektor'
        ];
        return view('layouts/admin-wrapper', $data);
    }
}
