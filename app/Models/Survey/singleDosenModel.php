<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class singleDosenModel extends Model
{

    protected $table = 'survey_singledosen';

    public function addData($data)
    {
        return $this->db->table('survey_singledosen')->insert($data);
    }

    public function deleteData($pertanyaan)
    {
        return $this->db->table('survey_singledosen')->delete(['pertanyaan' => $pertanyaan]);
    }

    public function editData($id)
    {
        return $this->db->table('survey_singledosen')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('survey_singledosen')->update($data, ['id' => $id]);
    }

    public function truncateTableSm()
    {
        $builder = $this->db->table('survey_singledosen');

        $builder->truncate();

        return $builder;
    }
}
