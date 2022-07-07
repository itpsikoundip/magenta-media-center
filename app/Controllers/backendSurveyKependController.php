<?php

namespace App\Controllers;

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
            'isi'    => 'admin/survey/surveyKepend'
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
        return redirect()->to(base_url('surveykepend'));
    }

    public function deleteSurveyKepend($pertanyaan)
    {
        $dataStored = new surveyKependModel();
        $dataStoredSingle = new singleKependModel();

        $dataStoredSingle->deleteData($pertanyaan);
        $dataStored->deleteData($pertanyaan);

        session()->setFlashdata('message', 'Data berhasil dihapus!');
        return redirect()->to(base_url('surveykepend'));
    }

    public function updateSurveyKepend($id)
    {

        $dataStored = new surveyKependModel();
        $dataStoredSingle = new singleKependModel();

        $singleKependModel = $this->singleKependModel->findAll();

        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
        ];
        $dataStoredSingle->updateData($data, $id);

        session()->setFlashdata('message', 'Data berhasil diupdate!');
        return redirect()->to(base_url('surveykepend'));
    }
}
