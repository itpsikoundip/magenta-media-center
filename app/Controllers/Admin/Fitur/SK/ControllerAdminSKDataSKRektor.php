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
}
