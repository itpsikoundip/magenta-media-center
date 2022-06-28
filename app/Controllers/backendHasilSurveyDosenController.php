<?php

namespace App\Controllers;

use App\Models\surveyDosenModel;
use App\Models\hasilSurveyDosenModel;

class backendHasilSurveyDosenController extends BaseController
{

    protected $surveyDosenModel;
    protected $hasilSurveyDosenModel;

    public function __construct()
    {
        $this->surveyDosenModel = new surveyDosenModel();
        $this->hasilSurveyDosenModel = new hasilSurveyDosenModel();
    }

    public function index()
    {
        $displayHasilSurveyDosen = $this->hasilSurveyDosenModel->getAll();
        $data = [
            'title' => 'Survey Dosen',
            'dataHasilSurveyDosen' => $displayHasilSurveyDosen,
            'isi'    => 'admin/survey/hasilSurveyDosen'
        ];

        return view('layouts/survey-wrapper', $data);
    }
}
