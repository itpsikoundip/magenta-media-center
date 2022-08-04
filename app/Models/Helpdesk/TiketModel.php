<?php

namespace App\Models\Helpdesk;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table = 'tiket';

    function insertTiket($data) {
		return $this->db->table('tiket')->insert($data);
	}

    function getTiketBelumTerjawab($topik_id){
        $tiketBelumTerjawab = $this->db->table('tiket')
                                ->where('topik_id', $topik_id)->where('jawaban', NULL)
                                ->join('mahasiswa','mahasiswa.nim = tiket.mahasiswa_id')
                                ->orderBy('tiket.created_at', 'desc')
                                ->get();
        return $tiketBelumTerjawab->getResult();
    }

    function getTiketTerjawab($topik_id){
        $tiketTerjawab = $this->db->table('tiket')
                            ->where('topik_id', $topik_id)->where('jawaban IS NOT NULL', NULL, FALSE)
                            ->join('mahasiswa','mahasiswa.nim =  tiket.mahasiswa_id')
                            ->orderBy('tiket.created_at', 'desc')
                            ->get();
        return $tiketTerjawab->getResult();
    }

    function getDetail($tiket_id){
        $tiket = $this->db->table('tiket')
                    ->where('id', $tiket_id)
                    ->join('mahasiswa','mahasiswa.nim = tiket.mahasiswa_id')
                    ->get();
        return $tiket->getResult();
    }

    function updateTiket($tiket_id, $data) {
		return $this->db->table('tiket')->update($data, ['id' => $tiket_id]);
	}

    function getRiwayat($nim){
        $riwayat = $this->db->table('tiket')->where('mahasiswa_id', $nim)->orderBy('created_at', 'desc')->get();
        return $riwayat->getResult();
    }

    function countRiwayat($nim){
		$riwayat = $this->db->table('tiket')->where('mahasiswa_id', $nim)->countAllResults();
        return $riwayat;
	}
    
}
