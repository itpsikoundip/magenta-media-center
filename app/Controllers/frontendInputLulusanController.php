<?php

namespace App\Controllers;

use App\Models\surveyLulusanModel;

class frontendInputLulusanController extends BaseController
{

    protected $surveyLulusanModel;

    public function __construct()
    {
        $this->surveyLulusanModel = new surveyLulusanModel();
    }

    public function index()
    {
        $displaySurveyLulusan = $this->surveyLulusanModel->findAll();
        $data = [
            'title' => 'Survey Lulusan',
            'dataSurveyLulusan' => $displaySurveyLulusan,
            'isi' => 'survey/inputLulusan'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function addInputLulusan($id)
    {
        $dataStored = new surveyLulusanModel();

        $data = [
            'sangat_baik' => $this->request->getPost('sangatBaik'),
            'baik' => $this->request->getPost('baik'),
            'cukup' => $this->request->getPost('cukup'),
            'buruk' => $this->request->getPost('buruk'),
            'sangat_buruk' => $this->request->getPost('sangatBuruk'),
        ];
        $dataStored->updateData($data, $id);
        return redirect()->to(base_url('menuDisplay'));
    }
}
