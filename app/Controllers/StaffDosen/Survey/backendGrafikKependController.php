<?php

namespace App\Controllers\StaffDosen\Survey;

use App\Controllers\BaseController;
use App\Models\surveyKependModel;
use App\Models\hasilSurveyKependModel;
use App\Models\singleKependModel;

class backendGrafikKependController extends BaseController
{

    protected $surveyKependModel;
    protected $hasilSurveyKependModel;
    protected $singleKependModel;

    public function __construct()
    {
        $this->surveyKependModel = new surveyKependModel();
        $this->hasilSurveyKependModel = new hasilSurveyKependModel();
        $this->singleKependModel = new singleKependModel();
    }

    public function index()
    {
        $displaySingleKepend = $this->singleKependModel->findAll();

        $array = array();

        foreach ($displaySingleKepend as $row) {
            array_push($array, $row["pertanyaan"]);
        }

        $arraySangatBaik = array();
        $arrayBaik = array();
        $arrayCukup = array();
        $arrayBuruk = array();
        $arraySangatBuruk = array();

        for ($i = 0; $i < count($array); $i++) {
            array_push($arraySangatBaik, $this->surveyKependModel->selectSangatBaik($array[$i])->getResult());
            array_push($arrayBaik, $this->surveyKependModel->selectBaik($array[$i])->getResult());
            array_push($arrayCukup, $this->surveyKependModel->selectCukup($array[$i])->getResult());
            array_push($arrayBuruk, $this->surveyKependModel->selectBuruk($array[$i])->getResult());
            array_push($arraySangatBuruk, $this->surveyKependModel->selectSangatBuruk($array[$i])->getResult());
        }
        //Sum Passing
        if (count($array) == 0) {
            $data = [
                'title' => 'Grafik Kepend',
                'arrayPertanyaan' => "Tidak ada pertanyaan survey kependidikan",
                'sumSangatBaik' => 0,
                'sumBaik' => 0,
                'sumCukup' => 0,
                'sumBuruk' => 0,
                'sumSangatBuruk' => 0,
                'isi'    => 'staffdosen/survey/grafikkepend'
            ];

            return view('layouts/survey-wrapper', $data);
        } else {
            $data = [
                'title' => 'Grafik Kepend',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $arraySangatBaik,
                'sumBaik' => $arrayBaik,
                'sumCukup' => $arrayCukup,
                'sumBuruk' => $arrayBuruk,
                'sumSangatBuruk' => $arraySangatBuruk,
                'isi'    => 'staffdosen/survey/grafikkepend'
            ];

            return view('layouts/survey-wrapper', $data);
        }
    }
}
