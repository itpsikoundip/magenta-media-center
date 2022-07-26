<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class saranDosenModel extends Model
{

    protected $table = 'survey_sarandosen';

    public function addData($data)
    {
        return $this->db->table('survey_sarandosen')->insert($data);
    }

    function getAllInputDosen($id)
    {
        $builder = $this->db->table('survey_sarandosen');
        $query = $builder->getWhere(['id_dosen' => $id]);

        return $query;
    }
}
