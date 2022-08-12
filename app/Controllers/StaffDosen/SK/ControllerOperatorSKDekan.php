<?php

namespace App\Controllers\StaffDosen\SK;

use App\Controllers\BaseController;
use App\Models\SK\ModelOperatorSKDekan;

class ControllerOperatorSKDekan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelOperatorSKDekan = new ModelOperatorSKDekan();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'dataSKDekanPengajuMenungguKonfirmasi' => $this->ModelOperatorSKDekan->dataSKDekanPengajuMenungguKonfirmasi(),
            'dataSKDekanPengajuSemuaSK' => $this->ModelOperatorSKDekan->dataSKDekanPengajuSemuaSK(),
            'detailAksesUserOp' => $this->ModelOperatorSKDekan->detailAksesUserOp(),
            'isi'    => 'staffdosen/sk/operator/dekan/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Pengajuan SK Dekan',
            'detailAksesUserOp' => $this->ModelOperatorSKDekan->detailAksesUserOp(),
            'isi'    => 'staffdosen/sk/operator/dekan/add'
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
            $this->ModelOperatorSKDekan->add($data);
            session()->setFlashdata('sukses', 'SK Dekan Berhasil diajukan !!');
            return redirect()->to(base_url('staffdosen/sk/operator/dekan'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('staffdosen/sk/operator/dekan/add'));
        }
    }

    public function edit($id_sk_dekan)
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'detailSKDekan' => $this->ModelOperatorSKDekan->detailSKDekan($id_sk_dekan),
            'detailSKDekanNoteSVAkademik' => $this->ModelOperatorSKDekan->detailSKDekanNoteSVAkademik($id_sk_dekan),
            'detailSKDekanNoteSVSumda' => $this->ModelOperatorSKDekan->detailSKDekanNoteSVSumda($id_sk_dekan),
            'detailSKDekanNoteTataUsaha' => $this->ModelOperatorSKDekan->detailSKDekanNoteTataUsaha($id_sk_dekan),
            'detailSKDekanNoteWadekAkem' => $this->ModelOperatorSKDekan->detailSKDekanNoteWadekAkem($id_sk_dekan),
            'detailSKDekanNoteWadekSumda' => $this->ModelOperatorSKDekan->detailSKDekanNoteWadekSumda($id_sk_dekan),
            'detailSKDekanNoteDekan' => $this->ModelOperatorSKDekan->detailSKDekanNoteDekan($id_sk_dekan),
            'isi'    => 'staffdosen/sk/operator/dekan/edit'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function view($id_sk_dekan)
    {
        $data = [
            'title' => 'Pengajuan SK Dekan',
            'detailSKDekan' => $this->ModelOperatorSKDekan->detailSKDekan($id_sk_dekan),
            'isi'    => 'staffdosen/sk/operator/dekan/view'
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
        $this->ModelOperatorSKDekan->edit($data);
        session()->setFlashdata('sukses', 'Edit Data Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/dekan/edit/' . $id_sk_dekan));
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
            $this->ModelOperatorSKDekan->uploadFileSKDekan($data);
            session()->setFlashdata('sukses', 'SK Dekan Berhasil diupload !!');
            return redirect()->to(base_url('staffdosen/sk/operator/dekan/edit/' . $id_sk_dekan));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('staffdosen/sk/operator/dekan/edit/' . $id_sk_dekan));
        }
    }

    public function konfirmasiEditkeDekan($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'dekan_status' => 0,
        ];
        $this->ModelOperatorSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/dekan'));
    }
    public function konfirmasiEditkeWadeksumda($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_sumda_status' => 0,
        ];
        $this->ModelOperatorSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/dekan'));
    }
    public function konfirmasiEditkeWadekakem($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'wadek_akem_status' => 0,
        ];
        $this->ModelOperatorSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/dekan'));
    }
    public function konfirmasiEditkeTatausaha($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'manager_tu_status' => 0,
        ];
        $this->ModelOperatorSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/dekan'));
    }
    public function konfirmasiEditkeSumberdaya($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sv_sumda_status' => 0,
        ];
        $this->ModelOperatorSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/dekan'));
    }
    public function konfirmasiEditkeAkademik($id_sk_dekan)
    {
        $data = [
            'id_sk_dekan' => $id_sk_dekan,
            'sk_akem_status' => 0,
        ];
        $this->ModelOperatorSKDekan->edit($data);
        session()->setFlashdata('sukses', 'SK Dekan Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/dekan'));
    }
}
