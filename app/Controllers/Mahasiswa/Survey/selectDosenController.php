<?php

namespace App\Controllers\Mahasiswa\Survey;

use App\Controllers\BaseController;
use App\Models\Survey\surveyDosenModel;
use App\Models\Survey\saranDosenModel;
use App\Models\Survey\hasilSurveyDosenModel;
use CodeIgniter\I18n\Time;
use Exception;

class selectDosenController extends BaseController
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
        $displayListDosen = $this->hasilSurveyDosenModel->findAll();
        $data = [
            'title' => 'Select Dosen',
            'dataListDosen' => $displayListDosen,
            'isi' => '/mahasiswa/survey/selectDosen'
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
            'isi' => '/mahasiswa/survey/inputDosen'
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function inputDosen($idSend, $namaDosen)
    {
        $model = new surveyDosenModel;
        $modelSaran = new saranDosenModel;

        $dataFilter = $model->getAllInputDosen($idSend)->getResult();

        try {
            $arrayInput = $this->getInput($dataFilter);
        } catch (Exception $e) {

            session()->setFlashdata('message', 'Ada Survey Yang Belum Dijawab, Harap Mengisi Semua Survey');
            return redirect()->back();
        }

        $saran = $this->request->getPost('saran');
        if ($saran != "") {
            $dataSaran = [
                'saran_dosen'   => $this->request->getPost('saran'),
                'id_dosen'      => $idSend,
                'created_at'    => Time::now('Asia/Jakarta'),
                'updated_at'    => Time::now('Asia/Jakarta')
            ];

            $modelSaran->addData($dataSaran);
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
            'isi' => '/mahasiswa/survey/doneSurvey',
            'nama' => $namaDosen,
            'who' => $who
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
