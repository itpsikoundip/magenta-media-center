<?php

namespace App\Controllers\Mahasiswa\Survey;

use App\Controllers\BaseController;
use App\Models\Survey\surveyKependModel;
use App\Models\Survey\hasilSurveyKependModel;
use Exception;

class selectKependController extends BaseController
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
            'isi' => '/mahasiswa/survey/selectkepend'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function gotoInputKepend($id, $namaDosen)
    {

        $model = new surveyKependModel;
        $dataFilter = $model->getAllInputKepend($id);

        $data = [
            'title' => 'Survey Kepend',
            'dataSurveyKepend' => $dataFilter->getResult(),
            'idSend' => $id,
            'namaKepend' => $namaDosen,
            'isi' => '/mahasiswa/survey/inputkepend'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function inputKepend($idSend, $namaKepend)
    {
        $model = new surveyKependModel;
        $dataFilter = $model->getAllInputKepend($idSend)->getResult();
        try {
            $arrayInput = $this->getInput($dataFilter);
        } catch (Exception $e) {

            session()->setFlashdata('message', 'Ada Survey Yang Belum Dijawab, Harap Mengisi Semua Survey');
            return redirect()->back();
        }

        $update = $model->inputSkor($arrayInput);
        if ($update) {
            return $this->doneSurvey($namaKepend, 2);
        }
    }

    public function getInput($dataFilter)
    {
        $input = [];

        foreach ($dataFilter as $row) {
            $data["value"] = $this->request->getPost("indikator-" . $row->id);
            if (empty($data["value"])) {
                throw new Exception("indikator-" . $row->id . "Tidak boleh kosong");
            }
            $data["id"] = $row->id;

            $input[] = $data;
        }

        return $input;
    }

    public function doneSurvey($namaKepend, $who)
    {
        $data = [
            'isi' => '/mahasiswa/survey/donesurvey',
            'nama' => $namaKepend,
            'who' => $who
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
