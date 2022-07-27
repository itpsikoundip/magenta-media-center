<?php

namespace App\Controllers\StaffDosen\Survey;

use App\Controllers\BaseController;
use App\Models\Survey\surveyDosenModel;
use App\Models\Survey\saranDosenModel;
use App\Models\Survey\hasilSurveyDosenModel;

class hasilSurveyDosenController extends BaseController
{

    protected $surveyDosenModel;
    protected $saranDosenModel;
    protected $hasilSurveyDosenModel;

    public function __construct()
    {
        $this->surveyDosenModel = new surveyDosenModel();
        $this->saranDosenModel = new saranDosenModel();
        $this->hasilSurveyDosenModel = new hasilSurveyDosenModel();
    }

    public function index()
    {
        $dataDosen = $this->hasilSurveyDosenModel->findAll();

        $data = [
            'title' => 'Survey Dosen',
            'dataDosen' => $dataDosen,
            'isi'    => 'staffdosen/survey/hasilSurveyDosen'
        ];

        return view('layouts/survey-wrapper', $data);
    }

    public function displayChart($idDosen, $namaDosen)
    {
        $arraySaran = $this->displaySaran($idDosen);
        $filteredById = $this->surveyDosenModel->getAllInputDosen($idDosen);
        $convertPertanyaan = json_decode(json_encode($filteredById->getResult()), true);

        $array = array();

        foreach ($convertPertanyaan as $row) {
            array_push($array, $row["pertanyaan"]);
        }

        if (count($array) == 0) {
            $data = [
                'title'             => 'Hasil Survey Dosen',
                'namaDosen'         => $namaDosen,
                'arrayPertanyaan'   => "Tidak ada pertanyaan survey dosen",
                'dataDosenFiltered' => $filteredById->getResult(),
                'isi'               => 'staffdosen/survey/chartSingleDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } else {
            $data = [
                'title'             => 'Hasil Survey Dosen',
                'arrayPertanyaan'   => $array,
                'namaDosen'         => $namaDosen,
                'dataSaranDosen'    => $arraySaran,
                'dataDosenFiltered' => $filteredById->getResult(),
                'isi'               => 'staffdosen/survey/chartSingleDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        }
    }

    public function displaySaran($idDosen)
    {
        $model = new saranDosenModel;
        return $model->getAllInputDosen($idDosen)->getResultArray();
    }
}
