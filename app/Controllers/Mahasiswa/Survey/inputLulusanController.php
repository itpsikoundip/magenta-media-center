<?php

namespace App\Controllers\Mahasiswa\Survey;

use App\Controllers\BaseController;
use App\Models\Survey\surveyLulusanModel;
use Exception;

class inputLulusanController extends BaseController
{

    protected $surveyLulusanModel;

    public function __construct()
    {
        $this->surveyLulusanModel = new surveyLulusanModel();
    }

    public function index()
    {
        $displaySurveyLulusan = $this->surveyLulusanModel->findAll();
        $data = [
            'title' => 'Survey Lulusan',
            'dataSurveyLulusan' => $displaySurveyLulusan,
            'isi' => '/mahasiswa/survey/inputlulusan'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function addInputLulusan($id)
    {
        $dataStored = new surveyLulusanModel();

        $data = [
            'sangat_baik' => $this->request->getPost('sangatBaik'),
            'baik' => $this->request->getPost('baik'),
            'cukup' => $this->request->getPost('cukup'),
            'buruk' => $this->request->getPost('buruk'),
            'sangat_buruk' => $this->request->getPost('sangatBuruk'),
        ];
        $dataStored->updateData($data, $id);
        return redirect()->to(base_url('menudisplay'));
    }

    public function inputLulusan()
    {
        $model = new surveyLulusanModel;
        $dataFilter = $model->getAllInputLulusan()->getResult();
        try {
            $arrayInput = $this->getInput($dataFilter);
        } catch (Exception $e) {

            session()->setFlashdata('message', 'Ada Survey Yang Belum Dijawab, Harap Mengisi Semua Survey');
            return redirect()->back();
        }

        $update = $model->inputSkor($arrayInput);
        if ($update) {
            return $this->doneSurvey(3);
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

    public function doneSurvey($who)
    {
        $data = [
            'isi' => '/mahasiswa/survey/donesurvey',
            'nama' => '',
            'who' => $who
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
