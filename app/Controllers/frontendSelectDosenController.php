<?php

namespace App\Controllers;

use App\Models\surveyDosenModel;
use App\Models\hasilSurveyDosenModel;

class frontendSelectDosenController extends BaseController
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
        $displayListDosen = $this->hasilSurveyDosenModel->findAll();
        $data = [
            'title' => 'Select Dosen',
            'dataListDosen' => $displayListDosen,
            'isi' => 'survey/selectDosen'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function gotoInputDosen($id)
    {

        $model = new surveyDosenModel;
        $dataFilter = $model->getAllInputDosen($id);

        /*
        foreach ($dataFilter->getResult() as $key => $row) {
            echo ($key + 1) . '. ';
            echo 'Pertanyaan ' . $row->pertanyaan;
            echo ' - ';
            echo 'Id Dosen ' . $row->id_dosen;
            echo '<br>';
        }
        */

        $data = [
            'title' => 'Survey Dosen',
            'dataSurveyDosen' => $dataFilter->getResult(),
            'isi' => 'survey/inputDosen'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
