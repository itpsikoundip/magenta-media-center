<?php

namespace App\Controllers\Admin\Fitur\SK;

use App\Controllers\BaseController;
use App\Models\Admin\Fitur\SK\ModelAdminSKDataSKDekan;

class ControllerAdminSKDataSKDekan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminSKDataSKDekan = new ModelAdminSKDataSKDekan();
    }

    public function index()
    {
        $data = [
            'title' => 'Data SK Dekan',
            'allDataSKDekan' => $this->ModelAdminSKDataSKDekan->allDataSKDekan(),
            'isi'    => 'admin/fitur/sk/dataskdekan'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function detail($id_sk_dekan)
    {
        $data = [
            'title' => 'Detail Data SK Dekan',
            'detailSKDekan' => $this->ModelAdminSKDataSKDekan->detailSKDekan($id_sk_dekan),
            'detailSKDekanNoteSVAkademik' => $this->ModelAdminSKDataSKDekan->detailSKDekanNoteSVAkademik($id_sk_dekan),
            'detailSKDekanNoteSVSumda' => $this->ModelAdminSKDataSKDekan->detailSKDekanNoteSVSumda($id_sk_dekan),
            'detailSKDekanNoteTataUsaha' => $this->ModelAdminSKDataSKDekan->detailSKDekanNoteTataUsaha($id_sk_dekan),
            'detailSKDekanNoteWadekAkem' => $this->ModelAdminSKDataSKDekan->detailSKDekanNoteWadekAkem($id_sk_dekan),
            'detailSKDekanNoteWadekSumda' => $this->ModelAdminSKDataSKDekan->detailSKDekanNoteWadekSumda($id_sk_dekan),
            'detailSKDekanNoteDekan' => $this->ModelAdminSKDataSKDekan->detailSKDekanNoteDekan($id_sk_dekan),
            'isi'    => 'admin/fitur/sk/detailskdekan'
        ];
        return view('layouts/admin-wrapper', $data);
    }
}
