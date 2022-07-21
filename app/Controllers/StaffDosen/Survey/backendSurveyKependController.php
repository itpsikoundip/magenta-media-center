<?php

namespace App\Controllers\StaffDosen\Survey;

use App\Controllers\BaseController;
use App\Models\surveyKependModel;
use App\Models\hasilSurveyKependModel;
use App\Models\singleKependModel;
use CodeIgniter\I18n\Time;

class backendSurveyKependController extends BaseController
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
        $displaySurveyKepend = $this->singleKependModel->findAll();
        $data = [
            'title' => 'Survey Tenaga Kependidikan',
            'dataSurveyKepend' => $displaySurveyKepend,
            'isi'    => 'staffdosen/survey/surveyKepend'
        ];

        return view('layouts/survey-wrapper', $data);
    }

    public function addSurveyKepend()
    {
        $dataStored = new surveyKependModel();
        $dataStoredSingle = new singleKependModel();
        $hasilSurveyKependModel = $this->hasilSurveyKependModel->findAll();

        foreach ($hasilSurveyKependModel as $row) {
            $data = [
                'pertanyaan' => $this->request->getPost('pertanyaan'),
                'id_kepend' => $row['id_kepend'],
                'created_at' => Time::now('Asia/Jakarta'),
                'updated_at' => Time::now('Asia/Jakarta')
            ];
            $dataStored->addData($data);
        }

        $dataSingle = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'created_at' => Time::now('Asia/Jakarta'),
            'updated_at' => Time::now('Asia/Jakarta')
        ];

        $dataStoredSingle->addData($dataSingle);

        session()->setFlashdata('message', 'Data berhasil ditambahkan!');
        return redirect()->to(base_url('/staffdosen/survey/surveykepend'));
    }

    public function deleteSurveyKepend($pertanyaan)
    {
        $dataStored = new surveyKependModel();
        $dataStoredSingle = new singleKependModel();

        $dataStoredSingle->deleteData($pertanyaan);
        $dataStored->deleteData($pertanyaan);

        session()->setFlashdata('message', 'Data berhasil dihapus!');
        return redirect()->to(base_url('/staffdosen/survey/surveykepend'));
    }

    public function export()
    {
        $hasilSurveyKependModel = $this->hasilSurveyKependModel->getAll();
        $timeNow = date_format(Time::now('Asia/Jakarta'), "d-m-Y");
        $data = [
            'title' => 'Export Kependidikan',
            'hasilSurveyKependModel' => $hasilSurveyKependModel,
            'timeNow' => $timeNow,
            'isi'    => 'staffdosen/survey/exportkepend'
        ];

        return view('layouts/content', $data);
    }
    public function truncateAll()
    {
        $this->surveyKependModel->truncateTableLg();
        $this->singleKependModel->truncateTableSm();
        session()->setFlashdata('message', 'Seluruh data berhasil dihapus!');
        return redirect()->to(base_url('/staffdosen/survey/surveykepend'));
    }
}
