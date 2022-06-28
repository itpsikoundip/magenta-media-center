<?php

namespace App\Models;

use CodeIgniter\Model;

class surveyKependModel extends Model
{

    protected $table = 'survey_kependidikan';

    public function getItemById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function addData($data)
    {
        return $this->db->table('survey_kependidikan')->insert($data);
    }

    public function deleteData($pertanyaan)
    {
        return $this->db->table('survey_kependidikan')->delete(['pertanyaan' => $pertanyaan]);
    }

    public function editData($id)
    {
        return $this->db->table('survey_kependidikan')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('survey_kependidikan')->update($data, ['id' => $id]);
    }

    function getAll()
    {
        $builder = $this->db->table('survey_kependidikan');
        $builder->orderBy('pertanyaan', 'DESC');
        $query = $builder->get();

        return $query->getResult();
    }

    function getAllInputKepend($id)
    {
        $builder = $this->db->table('survey_kependidikan');
        $query = $builder->getWhere(['id_kepend' => $id]);

        return $query;
    }
}
