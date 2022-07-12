<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHelpdeskStaffDosen extends Model
{
    function getTiketBelumTerjawab($topik_id){
        $tiketBelumTerjawab = $this->db->table('tiket')
                                ->where('topik_id', $topik_id)->where('jawaban', NULL)
                                ->join('mahasiswa','mahasiswa.nim = tiket.mahasiswa_id')
                                ->orderBy('created_at', 'desc')
                                ->get();
        return $tiketBelumTerjawab->getResult();
    }

    function getTiketTerjawab($topik_id){
        $tiketTerjawab = $this->db->table('tiket')
                            ->where('topik_id', $topik_id)->where('jawaban IS NOT NULL', NULL, FALSE)
                            ->join('mahasiswa','mahasiswa.nim =  tiket.mahasiswa_id')
                            ->orderBy('created_at', 'desc')
                            ->get();
        return $tiketTerjawab->getResult();
    }

    function getDetail($tiket_id){
        $tiket = $this->db->table('tiket')->where('id', $tiket_id)
                    ->join('mahasiswa','mahasiswa.nim =  tiket.mahasiswa_id')
                    ->get();
        return $tiket->getRowArray();
    }
}
