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
}
