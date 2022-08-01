<?php

namespace App\Controllers\Mahasiswa\Survey;

use App\Controllers\BaseController;
use App\Models\Survey\surveyLulusanModel;
use App\Models\Survey\saranLulusanModel;
use CodeIgniter\I18n\Time;
use Exception;

class inputLulusanController extends BaseController
{

    protected $surveyLulusanModel;
    protected $saranLulusanModel;

    public function __construct()
    {
        $this->surveyLulusanModel = new surveyLulusanModel();
        $this->saranLulusanModel = new saranLulusanModel();
    }

    public function index()
    {
        $displaySurveyLulusan = $this->surveyLulusanModel->findAll();
        $data = [
            'title' => 'Survey Lulusan',
            'dataSurveyLulusan' => $displaySurveyLulusan,
            'isi' => '/mahasiswa/survey/inputLulusan'
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
        $modelSaran = new saranLulusanModel;
        $dataFilter = $model->getAllInputLulusan()->getResult();

        try {
            $arrayInput = $this->getInput($dataFilter);
        } catch (Exception $e) {

            session()->setFlashdata('message', 'Ada Survey Yang Belum Dijawab, Harap Mengisi Semua Survey');
            return redirect()->back();
        }
        $saran = $this->request->getPost('saran');
        if ($saran != "") {
            $dataSaran = [
                'saran_lulusan' => $this->request->getPost('saran'),
                'created_at'    => Time::now('Asia/Jakarta'),
                'updated_at'    => Time::now('Asia/Jakarta')
            ];

            $modelSaran->addData($dataSaran);
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
            'isi' => '/mahasiswa/survey/doneSurvey',
            'nama' => '',
            'who' => $who
        ];

        return view('layouts/mahasiswa-wrapper', $data);
    }
}
