<?php

namespace App\Controllers\StaffDosen\Survey;

use App\Controllers\BaseController;
use App\Models\surveyLulusanModel;

class backendGrafikLulusanController extends BaseController
{

    protected $surveyLulusanModel;

    public function __construct()
    {
        $this->surveyLulusanModel = new surveyLulusanModel();
    }

    public function index()
    {
        $displaySingleLulusan = $this->surveyLulusanModel->findAll();

        $array = array();

        foreach ($displaySingleLulusan as $row) {
            array_push($array, $row["pertanyaan"]);
        }

        $arraySangatBaik = array();
        $arrayBaik = array();
        $arrayCukup = array();
        $arrayBuruk = array();
        $arraySangatBuruk = array();

        for ($i = 0; $i < count($array); $i++) {
            array_push($arraySangatBaik, $this->surveyLulusanModel->selectSangatBaik($array[$i])->getResult());
            array_push($arrayBaik, $this->surveyLulusanModel->selectBaik($array[$i])->getResult());
            array_push($arrayCukup, $this->surveyLulusanModel->selectCukup($array[$i])->getResult());
            array_push($arrayBuruk, $this->surveyLulusanModel->selectBuruk($array[$i])->getResult());
            array_push($arraySangatBuruk, $this->surveyLulusanModel->selectSangatBuruk($array[$i])->getResult());
        }
        //Sum Passing
        if (count($array) == 0) {
            $data = [
                'title' => 'Grafik Lulusan',
                'arrayPertanyaan' => "Tidak ada pertanyaan survey lulusan",
                'sumSangatBaik' => 0,
                'sumBaik' => 0,
                'sumCukup' => 0,
                'sumBuruk' => 0,
                'sumSangatBuruk' => 0,
                'isi'    => 'staffdosen/survey/grafiklulusan'
            ];

            return view('layouts/survey-wrapper', $data);
        } else {
            $data = [
                'title' => 'Grafik Lulusan',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $arraySangatBaik,
                'sumBaik' => $arrayBaik,
                'sumCukup' => $arrayCukup,
                'sumBuruk' => $arrayBuruk,
                'sumSangatBuruk' => $arraySangatBuruk,
                'isi'    => 'staffdosen/survey/grafiklulusan'
            ];

            return view('layouts/survey-wrapper', $data);
        }
    }
}