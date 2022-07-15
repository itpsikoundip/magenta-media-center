<?php

namespace App\Controllers;

use App\Models\surveyDosenModel;
use App\Models\hasilSurveyDosenModel;
use Exception;

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

    public function gotoInputDosen($id, $namaDosen)
    {

        $model = new surveyDosenModel;
        $dataFilter = $model->getAllInputDosen($id);

        $data = [
            'title' => 'Survey Dosen',
            'dataSurveyDosen' => $dataFilter->getResult(),
            'idSend' => $id,
            'namaDosen' => $namaDosen,
            'isi' => 'survey/inputDosen'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function inputDosen($idSend, $namaDosen)
    {
        $model = new surveyDosenModel;
        $dataFilter = $model->getAllInputDosen($idSend)->getResult();
        try {
            $arrayInput = $this->getInput($dataFilter);
        } catch (Exception $e) {

            session()->setFlashdata('message', 'Ada Survey Yang Belum Dijawab, Harap Mengisi Semua Survey');
            return redirect()->back();
        }

        $update = $model->inputSkor($arrayInput);
        if ($update) {
            return $this->doneSurvey($namaDosen, 1);
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

    public function doneSurvey($namaDosen, $who)
    {
        $data = [
            'isi' => 'survey/doneSurvey',
            'nama' => $namaDosen,
            'who' => $who
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
