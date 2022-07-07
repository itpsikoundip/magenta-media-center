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
        $dataDosen = $this->hasilSurveyDosenModel->findAll();

        $data = [
            'title' => 'Survey Dosen',
            'dataDosen' => $dataDosen,
            'isi'    => 'admin/survey/hasilSurveyDosen'
        ];

        return view('layouts/survey-wrapper', $data);
    }
    public function displayChart($idDosen)
    {
        $filteredById = $this->surveyDosenModel->getAllInputDosen($idDosen);
        $data = [
            'title' => 'Survey Dosen',
            'idDosen' => $idDosen,
            'dataDosenFiltered' => $filteredById->getResult(),
            'isi'    => 'admin/survey/chartSingleDosen'
        ];

        return view('layouts/survey-wrapper', $data);
    }
}
