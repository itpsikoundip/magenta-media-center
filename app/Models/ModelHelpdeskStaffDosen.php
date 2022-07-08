<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHelpdeskStaffDosen extends Model
{
    function getTiket($topik_id){
        $tiket = $this->db->table('tiket')->where('topik_id', $topik_id)->where('jawaban', NULL)->orderBy('created_at', 'desc')->get();
        return $tiket->getResult();
    }

    function getTiketTerjawab($topik_id){
        $tiketTerjawab = $this->db->table('tiket')->where('topik_id', $topik_id)->where('jawaban IS NOT NULL', NULL, FALSE)->orderBy('created_at', 'desc')->get();
        return $tiketTerjawab->getResult();
    }
}
