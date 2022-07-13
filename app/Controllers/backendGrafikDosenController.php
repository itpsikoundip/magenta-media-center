<?php

namespace App\Controllers;


use App\Models\surveyDosenModel;
use App\Models\hasilSurveyDosenModel;
use App\Models\singleDosenModel;



class backendGrafikDosenController extends BaseController
{

    protected $surveyDosenModel;
    protected $hasilSurveyDosenModel;
    protected $singleDosenModel;



    public function __construct()
    {
        $this->surveyDosenModel = new surveyDosenModel();
        $this->hasilSurveyDosenModel = new hasilSurveyDosenModel();
        $this->singleDosenModel = new singleDosenModel();
    }

    //All Dosen Grafik
    public function index()
    {
        $displaySingleDosen = $this->singleDosenModel->findAll();

        $array = array();

        foreach ($displaySingleDosen as $row) {
            array_push($array, $row["pertanyaan"]);
        }

        $arraySangatBaik = array();
        $arrayBaik = array();
        $arrayCukup = array();
        $arrayBuruk = array();
        $arraySangatBuruk = array();

        for ($i = 0; $i < count($array); $i++) {
            array_push($arraySangatBaik, $this->surveyDosenModel->selectSangatBaik($array[$i])->getResult());
            array_push($arrayBaik, $this->surveyDosenModel->selectBaik($array[$i])->getResult());
            array_push($arrayCukup, $this->surveyDosenModel->selectCukup($array[$i])->getResult());
            array_push($arrayBuruk, $this->surveyDosenModel->selectBuruk($array[$i])->getResult());
            array_push($arraySangatBuruk, $this->surveyDosenModel->selectSangatBuruk($array[$i])->getResult());
        }
        //Sum Passing
        if (count($array) == 0) {
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => "Tidak ada pertanyaan survey dosen",
                'sumSangatBaik' => 0,
                'sumBaik' => 0,
                'sumCukup' => 0,
                'sumBuruk' => 0,
                'sumSangatBuruk' => 0,
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } else {
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $arraySangatBaik,
                'sumBaik' => $arrayBaik,
                'sumCukup' => $arrayCukup,
                'sumBuruk' => $arrayBuruk,
                'sumSangatBuruk' => $arraySangatBuruk,
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        }
    }
}
