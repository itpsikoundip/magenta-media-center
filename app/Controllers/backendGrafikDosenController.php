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

        $array = array();

        foreach ($displaySingleDosen as $row) {
            array_push($array, $row["pertanyaan"]);
        }

        if (count($array) == 1) {
            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[0]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[0]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[0]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[0]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[0]);

            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 2) {



            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[1]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[1]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[1]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[1]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[1]);

            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];


            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 3) {
            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[2]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[2]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[2]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[3]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[2]);
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 4) {
            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[3]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[3]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[3]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[3]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[3]);
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 5) {
            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[4]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[4]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[4]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[4]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[4]);
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 6) {
            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[5]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[5]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[5]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[5]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[5]);
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 7) {
            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[6]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[6]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[6]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[6]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[6]);
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 8) {
            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[7]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[7]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[7]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[7]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[7]);
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 9) {
            $dataSangatBaik = $this->surveyDosenModel->selectSangatBaik($array[8]);
            $dataBaik = $this->surveyDosenModel->selectBaik($array[8]);
            $dataCukup = $this->surveyDosenModel->selectCukup($array[8]);
            $dataBuruk = $this->surveyDosenModel->selectBuruk($array[8]);
            $dataSangatBuruk = $this->surveyDosenModel->selectSangatBuruk($array[8]);
            $data = [
                'title' => 'Grafik Dosen',
                'arrayPertanyaan' => $array,
                'sumSangatBaik' => $dataSangatBaik->getResult(),
                'sumBaik' => $dataBaik->getResult(),
                'sumCukup' => $dataCukup->getResult(),
                'sumBuruk' => $dataBuruk->getResult(),
                'sumSangatBuruk' => $dataSangatBuruk->getResult(),
                'isi'    => 'admin/survey/grafikDosen'
            ];

            return view('layouts/survey-wrapper', $data);
        } elseif (count($array) == 10) {

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

    public function displayChart($pertanyaan)
    {
        $filteredByPertanyaan = $this->surveyDosenModel->getAllByPertanyaan($pertanyaan);

        $data = [
            'title' => 'Grafik Dosen',
            'idDosen' => $pertanyaan,
            'dataDosenFiltered' => $filteredByPertanyaan->getResult(),
            'isi'    => 'admin/survey/chartSingleDosen'
        ];

        return view('layouts/survey-wrapper', $data);
    }
}
