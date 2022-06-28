<?php

namespace App\Models;

use CodeIgniter\Model;

class indikatorModel extends Model
{

    protected $table = 'indikator';


    public function getItemById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function addData($data)
    {
        return $this->db->table('indikator')->insert($data);
    }
}
