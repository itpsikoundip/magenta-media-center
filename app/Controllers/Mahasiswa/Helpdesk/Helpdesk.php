<?php

namespace App\Controllers\Mahasiswa\Helpdesk;

use App\Controllers\BaseController;
use App\Models\ModelHelpdesk;
use CodeIgniter\I18n\Time;

class Helpdesk extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelHelpdesk = new ModelHelpdesk();
    }

    public function index()
    {
        $faqs_akdm = $this->ModelHelpdesk->getFAQ(1);
        $faqs_nonakdm = $this->ModelHelpdesk->getFAQ(2);
        $data = [
            'title' => 'Helpdesk',
            'isi'    => 'mahasiswa/helpdesk/index',
            'faqs_akdm' => $faqs_akdm,
            'faqs_nonakdm' => $faqs_nonakdm
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }
    
    public function tiket()
    {

        $riwayatTiket = $this->ModelHelpdesk->getRiwayat(session()->nim);
        $jumlahTiket = $this->ModelHelpdesk->countRiwayat(session()->nim);
        // dd($jumlahTiket);

        // return $query->getResult();
        $data = [
            'title'         => 'Tiket',
            'isi'           => 'mahasiswa/helpdesk/tiket',
            'riwayatTiket'  => $riwayatTiket,
            'jumlahTiket'   => $jumlahTiket
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function kirimTiket()
    {
        $topik_id       = $this->request->getPost('inputTopik');
        $subjek         = $this->request->getPost('inputSubjek');
        $detail         = $this->request->getPost('inputDetail'); 
        
        if ( $_FILES AND $_FILES['inputLampiran']['name'] ){
            //kalau lampiran tidak kosong
            $lampiran       = $this->request->getFile('inputLampiran');
            $namaLampiran   = $lampiran->getRandomName();
        }else{
            $namaLampiran   = NULL;
        }
        $mahasiswa_id   = session()->nim; 

        $data = [
            'topik_id'      => $topik_id,
            'subjek'        => $subjek,
            'detail'        => $detail,
            'mahasiswa_id'  => $mahasiswa_id,
            'lampiran'      => $namaLampiran,
            'created_at'    => Time::now('Asia/Jakarta'),
        ];
        if ( $_FILES AND $_FILES['inputLampiran']['name'] ){
            // Upload file
            $lampiran->move('lampiran-helpdesk', $namaLampiran);
        }
        $result = $this->ModelHelpdesk->insertTiket($data);
        // dd($result);
        if($result){   
            session()->setFlashdata('sukses', 'Tiket berhasil dikirim. Jawaban dapat dilihat pada riwayat');
            return redirect()->to(base_url('mahasiswa/helpdesk/tiket'));
        }else{
            session()->setFlashdata('error', 'Tiket gagal dikirim. Silakan coba lagi');
            return redirect()->to(base_url('mahasiswa/helpdesk/tiket'));
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
