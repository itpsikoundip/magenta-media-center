<?php

namespace App\Controllers;


use App\Models\surveyDosenModel;
use App\Models\hasilSurveyDosenModel;
use App\Models\singleDosenModel;

use App\Models\indikatorModel;


class backendGrafikDosenController extends BaseController
{

    protected $surveyDosenModel;
    protected $hasilSurveyDosenModel;
    protected $singleDosenModel;

    protected $indikatorModel;


    public function __construct()
    {
        $this->surveyDosenModel = new surveyDosenModel();
        $this->hasilSurveyDosenModel = new hasilSurveyDosenModel();
        $this->singleDosenModel = new singleDosenModel();

        $this->indikatorModel = new indikatorModel();
    }


    public function index()
    {

        $surveyDosenModel = $this->surveyDosenModel->findAll();
        $hasilSurveyDosenModel = $this->hasilSurveyDosenModel->getAll();
        $displaySingleDosen = $this->singleDosenModel->findAll();

        $displayIndikator = $this->indikatorModel->findAll();

        $data = [
            'title' => 'Grafik Dosen',
            'indikator' => $displayIndikator,
            'dataGrafik' => $displaySingleDosen,
            'isi'    => 'admin/survey/grafikDosen'
        ];

        return view('layouts/survey-wrapper', $data);
    }
}
