<?php

namespace App\Controllers;

class backendGrafikKependController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Grafik Kepend',
            'isi'    => 'admin/survey/grafikKepend'
        ];

        return view('layouts/survey-wrapper', $data);
    }
}
