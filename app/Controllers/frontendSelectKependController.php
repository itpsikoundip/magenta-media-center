<?php

namespace App\Controllers;

use App\Models\surveyKependModel;
use App\Models\hasilSurveyKependModel;

class frontendSelectKependController extends BaseController
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
        $displayListKepend = $this->hasilSurveyKependModel->findAll();
        $data = [
            'title' => 'Select Kepend',
            'dataListKepend' => $displayListKepend,
            'isi' => 'survey/selectKepend'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function gotoInputKepend($id)
    {

        $model = new surveyKependModel;
        $dataFilter = $model->getAllInputKepend($id);

        /*
        foreach ($dataFilter->getResult() as $key => $row) {
            echo ($key + 1) . '. ';
            echo 'Pertanyaan ' . $row->pertanyaan;
            echo ' - ';
            echo 'Id Kepend ' . $row->id_Kepend;
            echo '<br>';
        }
        */

        $data = [
            'title' => 'Survey Kepend',
            'dataSurveyKepend' => $dataFilter->getResult(),
            'isi' => 'survey/inputKepend'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
