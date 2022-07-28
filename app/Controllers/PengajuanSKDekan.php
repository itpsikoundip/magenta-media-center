<?php

namespace App\Controllers;

use App\Models\ModelSKDekan;

class PengajuanSKDekan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelSKDekan = new ModelSKDekan();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'dataSKDekanPengajuMenungguKonfirmasi' => $this->ModelSKDekan->dataSKDekanPengajuMenungguKonfirmasi(),
            'dataSKDekanPengajuSemuaSK' => $this->ModelSKDekan->dataSKDekanPengajuSemuaSK(),
            'detailAksesUserOp' => $this->ModelSKDekan->detailAksesUserOp(),
            'isi'    => 'staffdosen/pengajuansk/skdekan/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Pengajuan SK Dekan',
            'detailAksesUserOp' => $this->ModelSKDekan->detailAksesUserOp(),
            'isi'    => 'staffdosen/pengajuansk/skdekan/add'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function addData()
    {
        if ($this->validate([
            'uploadSKDekan' => [
                'label' => 'Upload File Proposal',
                'rules' => 'uploaded[uploadSKDekan]|max_size[uploadSKDekan,5120]|mime_in[uploadSKDekan,application/pdf]',
                'errors' => [
                    'uploaded' => '{field} Wajib Diisi !!!',
                    'max_size' => '{field} Max 5MB',
                    'mime_in' => 'Format {field} Wajib PDF'
                ]
            ],
        ])) {
            //mengambil file foto dari form input
            $fileUpload = $this->request->getFile('uploadSKDekan');
            //merename nama file foto
            $namaFileUpload = $fileUpload->getRandomName();
            //jika valid
            $data = array(
                'pengaju_id' => $this->request->getPost('idPengaju'),
                'jenis_op_id' => $this->request->getPost('jenisOp'),
                'judul_sk' => $this->request->getPost('judulSKDekan'),
                'tanggal_pembuatan' => $this->request->getPost('tanggalPembuatanSKDekan'),
                'tmt_kegiatan' => $this->request->getPost('tmtKegiatanSKDekan'),
                'upload_sk_dekan' => $namaFileUpload,
            );
            //memindahkan file foto dari form input ke folder foto di directory
            $fileUpload->move('uploadskdekan', $namaFileUpload);
            $this->ModelSKDekan->add($data);
            session()->setFlashdata('sukses', 'SK Dekan Berhasil diajukan !!');
            return redirect()->to(base_url('PengajuanSKDekan'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('PengajuanSKDekan/add'));
        }
    }

    public function edit($id_sk_dekan)
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'detailSKDekan' => $this->ModelSKDekan->detailSKDekan($id_sk_dekan),
            'detailSKDekanNoteSVAkademik' => $this->ModelSKDekan->detailSKDekanNoteSVAkademik($id_sk_dekan),
            'detailSKDekanNoteSVSumda' => $this->ModelSKDekan->detailSKDekanNoteSVSumda($id_sk_dekan),
            'detailSKDekanNoteTataUsaha' => $this->ModelSKDekan->detailSKDekanNoteTataUsaha($id_sk_dekan),
            'detailSKDekanNoteWadekAkem' => $this->ModelSKDekan->detailSKDekanNoteWadekAkem($id_sk_dekan),
            'detailSKDekanNoteWadekSumda' => $this->ModelSKDekan->detailSKDekanNoteWadekSumda($id_sk_dekan),
            'detailSKDekanNoteDekan' => $this->ModelSKDekan->detailSKDekanNoteDekan($id_sk_dekan),
            'isi'    => 'staffdosen/pengajuansk/skdekan/edit'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function view($id_sk_dekan)
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'detailSKDekan' => $this->ModelSKDekan->detailSKDekan($id_sk_dekan),
            'isi'    => 'staffdosen/pengajuansk/skdekan/view'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function editData($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'judul_sk' => $this->request->getPost('judulSKDekan'),
            'tanggal_pembuatan' => $this->request->getPost('tanggalPembuatanSKDekan'),
            'tmt_kegiatan' => $this->request->getPost('tmtKegiatanSKDekan'),
        ];
        $this->ModelSKDekan->edit($data);
        session()->setFlashdata('sukses', 'Edit Data Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('PengajuanSKDekan/edit/' . $id_sk_dekan));
    }

    public function editDataFileSK($id_sk_dekan)
    {
        if ($this->validate([
            'uploadSKDekan' => [
                'label' => 'Upload File SK Dekan',
                'rules' => 'uploaded[uploadSKDekan]|max_size[uploadSKDekan,5120]|mime_in[uploadSKDekan,application/pdf]',
                'errors' => [
                    'uploaded' => '{field} Wajib Diisi !!!',
                    'max_size' => '{field} Max 5MB',
                    'mime_in' => 'Format {field} Wajib PDF'
                ]
            ],
        ])) {
            //mengambil file foto dari form input
            $fileUpload = $this->request->getFile('uploadSKDekan');
            //merename nama file foto
            $namaFileUpload = $fileUpload->getRandomName();
            //jika valid
            $data = array(
                'id_sk_dekan' => $id_sk_dekan,
                'upload_sk_dekan' => $namaFileUpload,
            );
            //memindahkan file foto dari form input ke folder foto di directory
            $fileUpload->move('uploadskdekan', $namaFileUpload);
            $this->ModelSKDekan->uploadFileSKDekan($data);
            session()->setFlashdata('sukses', 'SK Dekan Berhasil diupload !!');
            return redirect()->to(base_url('PengajuanSKDekan/edit/' . $id_sk_dekan));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('PengajuanSKDekan/edit/' . $id_sk_dekan));
        }
    }

    public function konfirmasiEditkeDekan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'dekan_status' => 0,
        ];
        $this->ModelSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('PengajuanSKDekan'));
    }
    public function konfirmasiEditkeWadeksumda($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_sumda_status' => 0,
        ];
        $this->ModelSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('PengajuanSKDekan'));
    }
    public function konfirmasiEditkeWadekakem($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_akem_status' => 0,
        ];
        $this->ModelSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('PengajuanSKDekan'));
    }
    public function konfirmasiEditkeTatausaha($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'manager_tu_status' => 0,
        ];
        $this->ModelSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('PengajuanSKDekan'));
    }
    public function konfirmasiEditkeSumberdaya($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sv_sumda_status' => 0,
        ];
        $this->ModelSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('PengajuanSKDekan'));
    }
    public function konfirmasiEditkeAkademik($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sk_akem_status' => 0,
        ];
        $this->ModelSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('PengajuanSKDekan'));
    }
}
