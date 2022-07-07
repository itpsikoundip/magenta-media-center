<?php

namespace App\Controllers;

use App\Models\surveyLulusanModel;
use CodeIgniter\I18n\Time;

class backendSurveyLulusanController extends BaseController
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
            'isi'    => 'admin/survey/surveyLulusan'
        ];

        return view('layouts/survey-wrapper', $data);
    }

    public function addSurveyLulusan()
    {
        $dataStored = new surveyLulusanModel();
        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'created_at' => Time::now('Asia/Jakarta'),
            'updated_at' => Time::now('Asia/Jakarta')
        ];

        session()->setFlashdata('message', 'Data berhasil ditambahkan!');
        $addData = $dataStored->addData($data);
        return redirect()->to(base_url('surveylulusan'));
    }

    public function updateSurveyLulusan($id)
    {

        $dataStored = new surveyLulusanModel();
        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan')
        ];

        session()->setFlashdata('message', 'Data berhasil diupdate!');
        $updateDataSurveyLulusan = $dataStored->updateData($data, $id);
        return redirect()->to(base_url('surveylulusan'));
    }

    public function deleteSurveyLulusan($id)
    {
        $dataStored = new surveyLulusanModel();
        $dataStored->deleteData($id);
        session()->setFlashdata('message', 'Data berhasil dihapus!');
        return redirect()->to(base_url('surveylulusan'));
    }
}
