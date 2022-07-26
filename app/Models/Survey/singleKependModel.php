<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class singleKependModel extends Model
{

    protected $table = 'survey_singlekepend';

    public function addData($data)
    {
        return $this->db->table('survey_singlekepend')->insert($data);
    }

    public function deleteData($pertanyaan)
    {
        return $this->db->table('survey_singlekepend')->delete(['pertanyaan' => $pertanyaan]);
    }

    public function editData($id)
    {
        return $this->db->table('survey_singlekepend')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('survey_singlekepend')->update($data, ['id' => $id]);
    }

    public function truncateTableSm()
    {
        $builder = $this->db->table('survey_singlekepend');

        $builder->truncate();

        return $builder;
    }
}
