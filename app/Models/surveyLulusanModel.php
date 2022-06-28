<?php

namespace App\Models;

use CodeIgniter\Model;

class surveyLulusanModel extends Model
{

    protected $table = 'survey_lulusan';


    public function getItemById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function addData($data)
    {
        return $this->db->table('survey_lulusan')->insert($data);
    }

    public function deleteData($id)
    {
        return $this->db->table('survey_lulusan')->delete(['id' => $id]);
    }

    public function editData($id)
    {
        return $this->db->table('survey_lulusan')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('survey_lulusan')->update($data, ['id' => $id]);
    }
}
