<?php

namespace App\Models\Kegiatan;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';

    public function getKegiatan()
    {
        $timeNow = Time::now();
        $builder = $this->db->table('kegiatan');
        $builder->select('kegiatan.id, kegiatan.tanggal, kegiatan.mulai, kegiatan.selesai, kegiatan.agenda,kegiatan.hp,kegiatan.undangan,kegiatan_ruangan.nama as ruangan,data_staffdosen.nama as pic');
        $builder->join('kegiatan_ruangan', 'kegiatan.ruangan_id = kegiatan_ruangan.id');
        $builder->join('data_staffdosen', 'kegiatan.pic_id = data_staffdosen.id_staffdosen');
        $builder->where('kegiatan.tanggal >=', $timeNow);
        $builder->orderBy('kegiatan.tanggal', 'ASC');
        $builder->orderBy('kegiatan.mulai', 'ASC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function riwayat($id)
    {
        $builder = $this->db->table('kegiatan');
        $builder->select('kegiatan.id, kegiatan.tanggal, kegiatan.mulai, kegiatan.selesai, kegiatan.agenda,kegiatan.hp,kegiatan.undangan,kegiatan_ruangan.nama as ruangan,data_staffdosen.nama as pic');
        $builder->join('kegiatan_ruangan', 'kegiatan.ruangan_id = kegiatan_ruangan.id');
        $builder->join('data_staffdosen', 'kegiatan.pic_id = data_staffdosen.id_staffdosen');
        $builder->where('kegiatan.pic_id =', $id);
        $builder->orderBy('kegiatan.tanggal', 'ASC');
        $builder->orderBy('kegiatan.mulai', 'ASC');
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function addKegiatan($data)
    {
        return $this->db->table('kegiatan')->insert($data);
    }

    public function selesaiKegiatan($data, $id)
    {
        return $this->db->table('kegiatan')->update($data, ['id' => $id]);
    }

    public function deleteKegiatan($id)
    {
        return $this->db->table('kegiatan')->delete(['id' => $id]);
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
