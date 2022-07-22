<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class singleDosenModel extends Model
{

    protected $table = 'single_dosen';

    public function addData($data)
    {
        return $this->db->table('single_dosen')->insert($data);
    }

    public function deleteData($pertanyaan)
    {
        return $this->db->table('single_dosen')->delete(['pertanyaan' => $pertanyaan]);
    }

    public function editData($id)
    {
        return $this->db->table('single_dosen')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('single_dosen')->update($data, ['id' => $id]);
    }

    public function truncateTableSm()
    {
        $builder = $this->db->table('single_dosen');

        $builder->truncate();

        return $builder;
    }
}
