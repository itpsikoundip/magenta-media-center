<?php

namespace App\Controllers\StaffDosen\Survey;

use App\Controllers\BaseController;
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

        $dataKepend = $this->hasilSurveyKependModel->findAll();

        $data = [
            'title' => 'Survey Tenaga Kependidikan',
            'dataKepend' => $dataKepend,
            'isi'    => 'staffdosen/survey/hasilSurveyKepend'
        ];

        return view('layouts/survey-wrapper', $data);
    }

    public function displayChart($id)
    {
        $filteredById = $this->surveyKependModel->getAllInputKepend($id);
        $convertPertanyaan = json_decode(json_encode($filteredById->getResult()), true);

        $array = array();

        foreach ($convertPertanyaan as $row) {
            array_push($array, $row["pertanyaan"]);
        }

        if (count($array) == 0) {
            $data = [
                'title' => 'Hasil Survey Kependidikan',
                'arrayPertanyaan' => "Tidak ada pertanyaan survey kependidikan",
                'dataKependFiltered' => $filteredById->getResult(),
                'isi'    => 'staffdosen/survey/chartsinglekepend'
            ];

            return view('layouts/survey-wrapper', $data);
        } else {
            $data = [
                'title' => 'Hasil Survey kependidikan',
                'arrayPertanyaan' => $array,
                'dataKependFiltered' => $filteredById->getResult(),
                'isi'    => 'staffdosen/survey/chartsinglekepend'
            ];

            return view('layouts/survey-wrapper', $data);
        }
    }
}
