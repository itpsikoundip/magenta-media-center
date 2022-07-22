<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class singleKependModel extends Model
{

    protected $table = 'single_kepend';

    public function addData($data)
    {
        return $this->db->table('single_kepend')->insert($data);
    }

    public function deleteData($pertanyaan)
    {
        return $this->db->table('single_kepend')->delete(['pertanyaan' => $pertanyaan]);
    }

    public function editData($id)
    {
        return $this->db->table('single_kepend')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('single_kepend')->update($data, ['id' => $id]);
    }

    public function truncateTableSm()
    {
        $builder = $this->db->table('single_kepend');

        $builder->truncate();

        return $builder;
    }
}
