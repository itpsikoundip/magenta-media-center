<?php

namespace App\Models;

use CodeIgniter\Model;

class hasilSurveyDosenModel extends Model
{

    protected $table = 'data_dosen';


    public function getItemById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    function getAll()
    {
        $builder = $this->db->table('data_dosen');
        $builder->select('*');
        $builder->join('survey_dosen', 'survey_dosen.id_dosen = data_dosen.id_dosen');
        $builder->orderBy('nama_lengkap', 'ASC');
        $query = $builder->get();

        return $query->getResult();
    }

    function getAllById($id)
    {
        $builder = $this->db->table('data_dosen');
        $builder->select('*');
        $builder->where('id_dosen', $id);
        $query = $builder->get();

        return $query->getResult();
    }
}
