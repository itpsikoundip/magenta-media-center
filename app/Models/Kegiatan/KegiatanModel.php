<?php

namespace App\Models\Kegiatan;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';

    public function getKegiatan()
    {
        $kegiatan = $this->db->table('kegiatan')->get();
        return $kegiatan->getResultArray();
    }

    public function addKegiatan($data)
    {
        return $this->db->table('kegiatan')->insert($data);
    }

    function getJamMulai($id_ruangan, $tanggal)
    {
        $builder = $this->db->table('kegiatan');
        $builder->select('mulai');
        $builder->where('ruangan_id', $id_ruangan);
        $builder->where('tanggal', $tanggal);
        $query = $builder->get();

        return $query->getResultArray();
    }

    function getJamSelesai($id_ruangan, $tanggal)
    {
        $builder = $this->db->table('kegiatan');
        $builder->select('selesai');
        $builder->where('ruangan_id', $id_ruangan);
        $builder->where('tanggal', $tanggal);
        $query = $builder->get();

        return $query->getResultArray();
    }
}
