<?php

namespace App\Controllers;

use App\Models\surveyKependModel;
use App\Models\hasilSurveyKependModel;

class backendHasilSurveyKependController extends BaseController
{

    protected $surveyKependModel;
    protected $hasilSurveyKependModel;

    public function __construct()
    {
        $this->surveyKependModel = new surveyKependModel();
        $this->hasilSurveyKependModel = new hasilSurveyKependModel();
    }

    public function index()
    {
        $displayHasilSurveyKepend = $this->hasilSurveyKependModel->getAll();
        $data = [
            'title' => 'Survey Tenaga Kependidikan',
            'dataHasilSurveyKepend' => $displayHasilSurveyKepend,
            'isi'    => 'admin/survey/hasilSurveyKepend'
        ];

        return view('layouts/survey-wrapper', $data);
    }
}
