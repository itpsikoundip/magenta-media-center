<?php

namespace App\Controllers;

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
            'isi'    => 'admin/survey/surveyDosen'
        ];

        return view('layouts/survey-wrapper', $data);
    }

    public function addSurveyDosen()
    {
        $dataStored = new surveyDosenModel();
        $dataStoredSingle = new singleDosenModel();

        $hasilSurveyDosenModel = $this->hasilSurveyDosenModel->findAll();

        foreach ($hasilSurveyDosenModel as $row) {
            $data = [
                'pertanyaan' => $this->request->getPost('pertanyaan'),
                'id_dosen' => $row['id_dosen'],
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ];
            $dataStored->addData($data);
        }

        $dataSingle = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'created_at' => Time::now(),
            'updated_at' => Time::now()
        ];

        $dataStoredSingle->addData($dataSingle);

        session()->setFlashdata('message', 'Data berhasil ditambahkan!');
        return redirect()->to(base_url('surveydosen'));
    }

    public function deleteSurveyDosen($pertanyaan)
    {
        $dataStored = new surveyDosenModel();
        $dataStoredSingle = new singleDosenModel();

        $dataStoredSingle->deleteData($pertanyaan);
        $dataStored->deleteData($pertanyaan);

        session()->setFlashdata('message', 'Data berhasil dihapus!');
        return redirect()->to(base_url('surveydosen'));
    }

    public function updateSurveyDosen($id)
    {

        $dataStored = new surveyDosenModel();
        $dataStoredSingle = new singleDosenModel();

        $surveyDosenModel = $this->surveyDosenModel->findAll();
        $hasilSurveyDosenModel = $this->hasilSurveyDosenModel->findAll();
        $singleDosenModel = $this->singleDosenModel->findAll();

        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
        ];
        $dataStoredSingle->updateData($data, $id);

        session()->setFlashdata('message', 'Data berhasil diupdate!');
        return redirect()->to(base_url('surveydosen'));
    }
}
