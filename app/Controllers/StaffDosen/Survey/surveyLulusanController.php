<?php

namespace App\Controllers\StaffDosen\Survey;

use App\Controllers\BaseController;
use App\Models\Survey\surveyLulusanModel;
use CodeIgniter\I18n\Time;

class surveyLulusanController extends BaseController
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
            'isi'    => 'staffdosen/survey/surveyLulusan'
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
        return redirect()->to(base_url('/staffdosen/survey/surveylulusan'));
    }

    public function deleteSurveyLulusan($id)
    {
        $dataStored = new surveyLulusanModel();
        $dataStored->deleteData($id);
        session()->setFlashdata('message', 'Data berhasil dihapus!');
        return redirect()->to(base_url('/staffdosen/survey/surveylulusan'));
    }

    public function export()
    {
        $hasilSurveyLulusanModel = $this->surveyLulusanModel->findAll();
        $timeNow = date_format(Time::now('Asia/Jakarta'), "d-m-Y");
        $data = [
            'title' => 'Export Lulusan',
            'hasilSurveyLulusanModel' => $hasilSurveyLulusanModel,
            'timeNow' => $timeNow,
            'isi'    => 'staffdosen/survey/exportLulusan'
        ];

        return view('layouts/content', $data);
    }

    public function truncateAll()
    {
        $this->surveyLulusanModel->truncateTableLg();
        session()->setFlashdata('message', 'Seluruh data berhasil dihapus!');
        return redirect()->to(base_url('/staffdosen/survey/surveylulusan'));
    }
}
