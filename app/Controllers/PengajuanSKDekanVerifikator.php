<?php

namespace App\Controllers;

use App\Models\ModelSKDekanVerifikator;

class PengajuanSKDekanVerifikator extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelSKDekanVerifikator = new ModelSKDekanVerifikator();
    }

    public function index()
    {
        $data = [
            'title' => 'Vefifikasi Pengajuan SK Dekan',
            'dataSKDekanSiapVerif' => $this->ModelSKDekanVerifikator->dataSKDekanSiapVerif(),
            'isi'    => 'staffdosen/pengajuansk/skdekan/verifikator/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function edit($id_sk_dekan)
    {
        $data = [
            'title' => 'Detail & Setujui Proposal',
            'detailSKDekan' => $this->ModelSKDekanVerifikator->detailSKDekan($id_sk_dekan),
            'isi'    => 'staffdosen/pengajuansk/skdekan/verifikator/edit'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    // public function add()
    // {
    //     $data = [
    //         'title' => 'Tambah Pengajuan SK Dekan',
    //         'isi'    => 'staffdosen/pengajuansk/skdekan/add'
    //     ];
    //     return view('layouts/staffdosen-wrapper', $data);
    // }

    // public function addData()
    // {
    //     if ($this->validate([
    //         'uploadSKDekan' => [
    //             'label' => 'Upload File Proposal',
    //             'rules' => 'uploaded[uploadSKDekan]|max_size[uploadSKDekan,5120]|mime_in[uploadSKDekan,application/pdf]',
    //             'errors' => [
    //                 'uploaded' => '{field} Wajib Diisi !!!',
    //                 'max_size' => '{field} Max 5MB',
    //                 'mime_in' => 'Format {field} Wajib PDF'
    //             ]
    //         ],
    //     ])) {
    //         //mengambil file foto dari form input
    //         $fileUpload = $this->request->getFile('uploadSKDekan');
    //         //merename nama file foto
    //         $namaFileUpload = $fileUpload->getRandomName();
    //         //jika valid
    //         $data = array(
    //             'pengaju_id' => $this->request->getPost('idPengaju'),
    //             'judul_sk' => $this->request->getPost('judulSKDekan'),
    //             'tanggal_pembuatan' => $this->request->getPost('tanggalPembuatanSKDekan'),
    //             'tmt_kegiatan' => $this->request->getPost('tmtKegiatanSKDekan'),
    //             'upload_sk_dekan' => $namaFileUpload,
    //         );
    //         //memindahkan file foto dari form input ke folder foto di directory
    //         $fileUpload->move('uploadskdekan', $namaFileUpload);
    //         $this->ModelSKDekan->add($data);
    //         session()->setFlashdata('sukses', 'SK Dekan Berhasil diajukan !!');
    //         return redirect()->to(base_url('PengajuanSKDekan'));
    //     } else {
    //         //jika tidak valid
    //         session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
    //         return redirect()->to(base_url('PengajuanSKDekan/add'));
    //     }
    // }
}
