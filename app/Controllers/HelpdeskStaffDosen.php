<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

use App\Models\ModelHelpdeskStaffDosen;

class HelpdeskStaffDosen extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelHelpdeskStaffDosen = new ModelHelpdeskStaffDosen();
    }

    public function index()
    {
        $tiketBelumTerjawab = $this->ModelHelpdeskStaffDosen->getTiketBelumTerjawab(1);
        $tiketTerjawab = $this->ModelHelpdeskStaffDosen->getTiketTerjawab(1);
        //dd($tiketBelumTerjawab);
        $data = [
            'title' => 'Admin Helpdesk Akademik',
            'isi'    => 'staffdosen/helpdesk/index',
            'tiketBelumTerjawab' => $tiketBelumTerjawab,
            'tiketTerjawab' => $tiketTerjawab,
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function detail_tiket($tiket_id)
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
            return redirect()->to(base_url('helpdeskstaffdosen'));
        }else{
            session()->setFlashdata('error', 'Jawaban tiket gagal disimpan. Silakan coba lagi');
            return redirect()->to(base_url('helpdeskstaffdosen'));
        }
    }

    public function addFAQ(){
        $topik_id       = $this->request->getPost('inputTopik');
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
            return redirect()->to(base_url('helpdeskstaffdosen'));
        }else{
            session()->setFlashdata('error', 'FAQ gagal ditambahkan. Silakan coba lagi');
            return redirect()->to(base_url('helpdeskstaffdosen'));
        }
        
    }

    public function tiket()
    {
        $data = [
            'title' => 'Tiket',
            'isi'    => 'staffdosen/helpdesk/tiket'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function hotline()
    {
        $data = [
            'title' => 'Hotline',
            'isi'    => 'staffdosen/helpdesk/hotline'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
