<?php

namespace App\Controllers;

class Survey extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Survey',
            'isi'    => 'survey'
        ];
        return view('layouts/v_wrapper', $data);
    }
}
