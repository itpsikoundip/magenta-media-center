<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class saranLulusanModel extends Model
{

    protected $table = 'survey_saranlulusan';

    public function addData($data)
    {
        return $this->db->table('survey_saranlulusan')->insert($data);
    }
}
