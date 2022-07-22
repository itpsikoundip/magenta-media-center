<?php

namespace App\Controllers\StaffDosen\Helpdesk;

use App\Controllers\BaseController;
use App\Models\ModelHelpdeskStaffDosen;
use CodeIgniter\I18n\Time;

class Helpdesk extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelHelpdeskStaffDosen = new ModelHelpdeskStaffDosen();
    }

    public function index()
    {
        $session = session()->unit2;
        $topik_id = $session;
        $faqs = $this->ModelHelpdeskStaffDosen->getFAQ($topik_id);
        $tiketBelumTerjawab = $this->ModelHelpdeskStaffDosen->getTiketBelumTerjawab($topik_id);
        $tiketTerjawab = $this->ModelHelpdeskStaffDosen->getTiketTerjawab($topik_id);
        if(session()->unit2 == 1){
            $kategori = 'Akademik';
        }else{
            $kategori = 'Non-akademik';
        }
        //dd($tiketBelumTerjawab);
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
        $tiket = $this->ModelHelpdeskStaffDosen->getDetail($tiket_id);
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

        $result = $this->ModelHelpdeskStaffDosen->updateTiket($tiket_id, $data);
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

        $result = $this->ModelHelpdeskStaffDosen->insertFAQ($data);

        if($result){
            session()->setFlashdata('sukses', 'FAQ baru berhasil <b>ditambahkan</b>, dapat dilihat pada tab List FAQ');
            return redirect()->to(base_url('staffdosen/helpdesk'));
        }else{
            session()->setFlashdata('error', 'FAQ gagal ditambahkan. Silakan coba lagi');
            return redirect()->to(base_url('staffdosen/helpdesk'));
        }
        
    }

}
