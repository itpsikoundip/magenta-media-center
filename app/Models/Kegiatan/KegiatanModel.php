<?php

namespace App\Models\Kegiatan;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';

    public function getKegiatan()
    {
        $kegiatan = $this->db->table('kegiatan')->get();
        return $kegiatan->getResult();
    }

    public function addKegiatan($data)
    {
        return $this->db->table('kegiatan')->insert($data);
    }

    function getJamMulai()
    {
        $builder = $this->db->table('kegiatan');
        $builder->select('mulai');
        $query = $builder->get();

        return $query->getResultArray();
    }

    function getJamSelesai()
    {
        $builder = $this->db->table('kegiatan');
        $builder->select('selesai');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
