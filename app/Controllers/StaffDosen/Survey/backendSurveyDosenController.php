<?php

namespace App\Controllers\StaffDosen\Survey;

use App\Controllers\BaseController;
use App\Models\surveyDosenModel;
use App\Models\hasilSurveyDosenModel;
use App\Models\singleDosenModel;
use CodeIgniter\I18n\Time;

class backendSurveyDosenController extends BaseController
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

    public function index()
    {
        $displaySurveyDosen = $this->singleDosenModel->findAll();
        $data = [
            'title' => 'Survey Dosen',
            'dataSurveyDosen' => $displaySurveyDosen,
            'isi'    => 'staffdosen/survey/surveyDosen'
        ];

        return view('layouts/survey-wrapper', $data);
    }

    public function addSurveyDosen()
    {
        $dataStored = new surveyDosenModel();
        $dataStoredSingle = new singleDosenModel();
        $dataDosen = $this->hasilSurveyDosenModel->findAll();

        $dataSingle = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'created_at' => Time::now('Asia/Jakarta'),
            'updated_at' => Time::now('Asia/Jakarta')
        ];

        $dataStoredSingle->addData($dataSingle);

        foreach ($dataDosen as $row) {
            $data = [
                'pertanyaan' => $this->request->getPost('pertanyaan'),
                'id_dosen' => $row['id_dosen'],
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ];
            $dataStored->addData($data);
        }

        session()->setFlashdata('message', 'Data berhasil ditambahkan!');
        return redirect()->to(base_url('/staffdosen/survey/surveydosen'));
    }

    public function deleteSurveyDosen($pertanyaan)
    {
        $dataStored = new surveyDosenModel();
        $dataStoredSingle = new singleDosenModel();

        $dataStored->deleteData($pertanyaan);
        $dataStoredSingle->deleteData($pertanyaan);

        session()->setFlashdata('message', 'Data berhasil dihapus!');
        return redirect()->to(base_url('/staffdosen/survey/surveydosen'));
    }

    public function export()
    {
        $hasilSurveyDosenModel = $this->hasilSurveyDosenModel->getAll();
        $timeNow = date_format(Time::now('Asia/Jakarta'), "d-m-Y");
        $data = [
            'title' => 'Export Dosen',
            'hasilSurveyDosenModel' => $hasilSurveyDosenModel,
            'timeNow' => $timeNow,
            'isi'    => 'staffdosen/survey/exportdosen'
        ];

        return view('layouts/content', $data);
    }

    public function truncateAll()
    {
        $this->surveyDosenModel->truncateTableLg();
        $this->singleDosenModel->truncateTableSm();

        session()->setFlashdata('message', 'Seluruh data berhasil dihapus!');
        return redirect()->to(base_url('/staffdosen/survey/surveydosen'));
    }
}
