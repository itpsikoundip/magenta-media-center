<?php

namespace App\Controllers\StaffDosen\Survey;

use App\Controllers\BaseController;
use App\Models\Survey\surveyKependModel;
use App\Models\Survey\saranKependModel;
use App\Models\Survey\hasilSurveyKependModel;

class hasilSurveyKependController extends BaseController
{

    protected $surveyKependModel;
    protected $saranKependModel;
    protected $hasilSurveyKependModel;

    public function __construct()
    {
        $this->surveyKependModel = new surveyKependModel();
        $this->saranKependModel = new saranKependModel();
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

    public function displayChart($id, $namaKepend)
    {
        $arraySaran = $this->displaySaran($id);
        $filteredById = $this->surveyKependModel->getAllInputKepend($id);
        $convertPertanyaan = json_decode(json_encode($filteredById->getResult()), true);

        $array = array();

        foreach ($convertPertanyaan as $row) {
            array_push($array, $row["pertanyaan"]);
        }

        if (count($array) == 0) {
            $data = [
                'title'                 => 'Hasil Survey Kependidikan',
                'arrayPertanyaan'       => "Tidak ada pertanyaan survey kependidikan",
                'namaKepend'            => $namaKepend,
                'dataSaranKepend'       => [],
                'dataKependFiltered'    => $filteredById->getResult(),
                'isi'                   => 'staffdosen/survey/chartSingleKepend'
            ];

            return view('layouts/survey-wrapper', $data);
        } else {
            $data = [
                'title'                 => 'Hasil Survey kependidikan',
                'arrayPertanyaan'       => $array,
                'dataSaranKepend'       => $arraySaran,
                'namaKepend'            => $namaKepend,
                'dataKependFiltered'    => $filteredById->getResult(),
                'isi'                   => 'staffdosen/survey/chartSingleKepend'
            ];

            return view('layouts/survey-wrapper', $data);
        }
    }

    public function displaySaran($idKepend)
    {
        $model = new saranKependModel;
        return $model->getAllInputKepend($idKepend)->getResultArray();
    }
}
