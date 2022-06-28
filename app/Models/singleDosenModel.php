<?php

namespace App\Models;

use CodeIgniter\Model;

class singleDosenModel extends Model
{

    protected $table = 'single_dosen';


    public function getItemById($id)
    {
        return $this->where(['id' => $id])->first();
    }

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

    public function getIdDosen($id)
    {
        return $this->db->table('single_dosen')->where(['id_dosen' => $id])->get()->getRowArray();
    }
}
