<?php

namespace App\Models\Helpdesk;

use CodeIgniter\Model;

class FaqModel extends Model
{
    protected $table = 'faq';

    function addFAQ($data){
        return $this->db->table('faq')->insert($data);
    }

    function getFAQ($topik_id){
        $faq = $this->db->table('faq')
                // ->select('faq.id, faq.topik_id, faq.pertanyaan, faq.jawaban, faq.created_at, topik.nama')
                ->where('topik_id', $topik_id)
                // ->join('topik', 'topik.id = faq.topik_id')
                ->orderBy('created_at', 'desc')
                ->get();
        return $faq->getResult();
    }

    function deleteFAQ($faq_id){    
        return $this->db->table('faq')->delete(['id'=> $faq_id]);
    }

    function updateFAQ($faq_id, $data){
        return $this->db->table('faq')->update($data, ['id' => $faq_id]);
    }
}
