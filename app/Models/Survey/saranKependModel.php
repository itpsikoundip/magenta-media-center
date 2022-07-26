<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class saranKependModel extends Model
{

    protected $table = 'survey_sarankepend';

    public function addData($data)
    {
        return $this->db->table('survey_sarankepend')->insert($data);
    }

    function getAllInputKepend($id)
    {
        $builder = $this->db->table('survey_sarankepend');
        $query = $builder->getWhere(['id_kepend' => $id]);

        return $query;
    }
}
