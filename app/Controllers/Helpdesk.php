<?php

namespace App\Controllers;

use App\Models\ModelHelpdesk;
use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class Helpdesk extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelHelpdesk = new ModelHelpdesk();
    }

    public function index()
    {
        $data = [
            'title' => 'Helpdesk',
            'isi'    => 'mahasiswa/helpdesk/index'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
    
    public function tiket()
    {

        $riwayatTiket = $this->ModelHelpdesk->getRiwayat(session()->nim);
        dd($riwayatTiket);

        // return $query->getResult();
        $data = [
            'title'         => 'Tiket',
            'isi'           => 'mahasiswa/helpdesk/tiket',
            'riwayatTiket'  => $riwayatTiket
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function kirimTiket()
    {
        $topik_id       = $this->request->getPost('inputTopik');
        $subjek         = $this->request->getPost('inputSubjek');
        $detail         = $this->request->getPost('inputDetail');
        $mahasiswa_id   = session()->nim; 

        $data = [
            'topik_id'      => $topik_id,
            'subjek'        => $subjek,
            'detail'        => $detail,
            'mahasiswa_id'  => $mahasiswa_id,
            'created_at'    => Time::now('Asia/Jakarta'),
        ];

        $result = $this->ModelHelpdesk->insertTiket($data);
        // dd($result);
        if($result){   
            session()->setFlashdata('sukses', 'Tiket berhasil dikirim. Jawaban dapat dilihat pada riwayat');
            return redirect()->to(base_url('helpdesk/tiket'));
        }else{
            session()->setFlashdata('error', 'Tiket gagal dikirim. Silakan coba lagi');
            return redirect()->to(base_url('helpdesk/tiket'));
        }
    }

    public function hotline()
    {
        $data = [
            'title' => 'Hotline',
            'isi'    => 'mahasiswa/helpdesk/hotline'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
}
