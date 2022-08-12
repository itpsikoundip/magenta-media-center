<?php

namespace App\Controllers\StaffDosen\Helpdesk;

use App\Controllers\BaseController;
use App\Models\Helpdesk\TiketModel;
use App\Models\Helpdesk\FaqModel;
use CodeIgniter\I18n\Time;

class HelpdeskController extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->TiketModel = new TiketModel();
        $this->FaqModel = new FaqModel();
    }

    public function index()
    {
        $session = session()->unit2;
        $topik_id = $session;
        $faqs = $this->FaqModel->getFAQ($topik_id);
        $tiketBelumTerjawab = $this->TiketModel->getTiketBelumTerjawab($topik_id);
        $tiketTerjawab = $this->TiketModel->getTiketTerjawab($topik_id);
        if(session()->unit2 == 1){
            $kategori = 'Akademik';
        }else{
            $kategori = 'Non-akademik';
        }
        // dd($tiketBelumTerjawab);
        $data = [
            'title' => 'Admin Helpdesk '.$kategori,
            'isi'    => 'staffdosen/helpdesk/index',
            'faqs'   => $faqs,
            'tiketBelumTerjawab' => $tiketBelumTerjawab,
            'tiketTerjawab' => $tiketTerjawab,
            'kategori' => $kategori
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function detailTiket($tiket_id)
    {
        $tiket = $this->TiketModel->getDetail($tiket_id);
        // dd($tiket);
        
        $data = [
            'title' => 'Detail Tiket',
            'isi'    => 'staffdosen/helpdesk/detail-tiket',
            'tiket' => $tiket,
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function jawabTiket($tiket_id)
    {
        $jawaban        = $this->request->getPost('inputJawaban');
        $tgl_terjawab   = Time::now('Asia/Jakarta');
        
        if($jawaban == ""){
            $jawaban = NULL;
        }

        $data = [
            'jawaban'   => $jawaban,
            'updated_at'=> $tgl_terjawab
        ];

        $result = $this->TiketModel->updateTiket($tiket_id, $data);
        // dd($result);
        if($result){
            if($jawaban == ""){
                session()->setFlashdata('sukses', 'Jawaban tiket berhasil <b>dihapus</b>, dapat dilihat pada tab Tiket Belum Terjawab');
            }else{
                session()->setFlashdata('sukses', 'Jawaban tiket berhasil <b>disimpan</b>, dapat dilihat pada tab Tiket Terjawab');
            }
            return redirect()->to(base_url('staffdosen/helpdesk'));
        }else{
            session()->setFlashdata('error', 'Jawaban tiket gagal disimpan. Silakan coba lagi');
            return redirect()->to(base_url('staffdosen/helpdesk'));
        }
    }

    public function addFAQ(){
        $topik_id       = session()->unit2;
        $pertanyaan     = $this->request->getPost('inputPertanyaan');
        $jawaban        = $this->request->getPost('inputJawaban'); 

        $data = [
            'topik_id'      => $topik_id,
            'pertanyaan'    => $pertanyaan,
            'jawaban'       => $jawaban,
            'created_at'    => Time::now('Asia/Jakarta'),
        ];

        $result = $this->FaqModel->addFAQ($data);

        if($result){
            session()->setFlashdata('sukses', 'FAQ baru berhasil <b>ditambahkan</b>, dapat dilihat pada tab List FAQ');
            return redirect()->to(base_url('staffdosen/helpdesk'));
        }else{
            session()->setFlashdata('error', 'FAQ gagal ditambahkan. Silakan coba lagi');
            return redirect()->to(base_url('staffdosen/helpdesk'));
        }
        
    }

    public function deleteFAQ($faq_id){
 
        $result = $this->FaqModel->deleteFAQ($faq_id);
        // dd($result);

        if($result){
            session()->setFlashdata('sukses', 'FAQ berhasil <b>dihapus</b>');
            return redirect()->to(base_url('staffdosen/helpdesk'));
        }else{
            session()->setFlashdata('error', 'gagal menghapus FAQ. Silakan coba lagi');
            return redirect()->to(base_url('staffdosen/helpdesk'));
        }
    }

}
