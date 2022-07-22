<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class hasilSurveyKependModel extends Model
{

    protected $table = 'data_kepend';

    function getAll()
    {
        $builder = $this->db->table('data_kepend');
        $builder->select('*');
        $builder->join('survey_kependidikan', 'survey_kependidikan.id_kepend = data_kepend.id_kepend');
        $builder->orderBy('nama_lengkap', 'ASC');
        $query = $builder->get();

        return $query->getResult();
    }

    function getAllById($id)
    {
        $builder = $this->db->table('data_kepend');
        $builder->select('*');
        $builder->where('id_kepend', $id);
        $query = $builder->get();

        return $query->getResult();
    }
}
