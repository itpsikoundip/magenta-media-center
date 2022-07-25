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
        $tiket = $this->db->table('tiket')
                    ->where('id', $tiket_id)
                    ->join('mahasiswa','mahasiswa.nim = tiket.mahasiswa_id')
                    ->get();
        return $tiket->getResult();
    }

    function updateTiket($tiket_id, $data) {
		return $this->db->table('tiket')->update($data, ['id' => $tiket_id]);
	}

    function getFAQ($topik_id){
        $faq = $this->db->table('faq')
                ->where('topik_id', $topik_id)
                // ->join('topik', 'topik.id = faq.topik_id')
                ->orderBy('created_at', 'desc')->get();
        return $faq->getResult();
    }

    function addFAQ($data){
        return $this->db->table('faq')->insert($data);
    }

    function deleteFAQ($faq_id){
        
        return $this->db->table('faq')->delete(['id'=> $faq_id]);
    }

    function updateFAQ($faq_id, $data){
        return $this->db->table('faq')->update($data, ['id' => $faq_id]);
    }
}
