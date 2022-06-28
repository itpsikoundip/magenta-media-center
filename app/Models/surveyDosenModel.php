<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\hasilSurveyDosenModel;

class surveyDosenModel extends Model
{

    protected $table = 'survey_dosen';

    public function getItemById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function addData($data)
    {
        return $this->db->table('survey_dosen')->insert($data);
    }

    public function deleteData($pertanyaan)
    {
        return $this->db->table('survey_dosen')->delete(['pertanyaan' => $pertanyaan]);
    }

    public function editData($id)
    {
        return $this->db->table('survey_dosen')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('survey_dosen')->update($data, ['id' => $id]);
    }

    public function getIdDosen($id)
    {
        return $this->db->table('survey_dosen')->where(['id_dosen' => $id])->get()->getRowArray();
    }

    public function getRowName()
    {
        return $this->db->getFieldNames('survey_dosen');
    }


    function getAll()
    {
        $builder = $this->db->table('survey_dosen');
        $builder->orderBy('pertanyaan', 'DESC');
        $query = $builder->get();

        return $query->getResult();
    }

    function getPertanyaaan($pertanyaan)
    {
        $builder = $this->db->table('survey_dosen');
        $query = $builder->getWhere(['pertanyaan' => $pertanyaan]);

        return $query;
    }

    function getAllInputDosen($id)
    {
        $builder = $this->db->table('survey_dosen');
        $query = $builder->getWhere(['id_dosen' => $id]);

        return $query;
    }
}
