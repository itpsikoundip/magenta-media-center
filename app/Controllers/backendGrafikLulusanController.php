<?php

namespace App\Controllers;

class backendGrafikLulusanController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Grafik Lulusan',
            'isi'    => 'admin/survey/grafikLulusan'
        ];

        return view('layouts/survey-wrapper', $data);
    }
}
