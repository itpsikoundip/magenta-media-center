<?php

namespace App\Models\Kegiatan;

use CodeIgniter\Model;

class RuanganModel extends Model
{
    protected $table = 'kegiatan_ruangan';

    public function getRuangan(){
        $ruangan = $this->db->table('kegiatan_ruangan')->get();
        return $ruangan->getResult();
    }
}
