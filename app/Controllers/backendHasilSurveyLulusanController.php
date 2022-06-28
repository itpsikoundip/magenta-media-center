<?php

namespace App\Controllers;

use App\Models\surveyLulusanModel;

class backendHasilSurveyLulusanController extends BaseController
{

    protected $surveyLulusanModel;

    public function __construct()
    {
        $this->surveyLulusanModel = new surveyLulusanModel();
    }

    public function index()
    {
        $displayHasilSurveyLulusan = $this->surveyLulusanModel->findAll();
        $data = [
            'title' => 'Survey Lulusan',
            'dataHasilSurveyLulusan' => $displayHasilSurveyLulusan,
            'isi'    => 'admin/survey/hasilSurveyLulusan'
        ];

        return view('layouts/survey-wrapper', $data);
    }
}
