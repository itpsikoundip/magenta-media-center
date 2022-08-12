<?php

namespace App\Controllers\StaffDosen\SK;

use App\Controllers\BaseController;
use App\Models\SK\ModelOperatorSKRektor;

class ControllerOperatorSKRektor extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelOperatorSKRektor = new ModelOperatorSKRektor();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengajuan SK Rektor',
            'dataSKRektorPengajuMenungguKonfirmasi' => $this->ModelOperatorSKRektor->dataSKRektorPengajuMenungguKonfirmasi(),
            'dataSKRektorPengajuSemuaSK' => $this->ModelOperatorSKRektor->dataSKRektorPengajuSemuaSK(),
            'detailAksesUserOp' => $this->ModelOperatorSKRektor->detailAksesUserOp(),
            'isi'    => 'staffdosen/sk/operator/rektor/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Pengajuan SK Rektor',
            'detailAksesUserOp' => $this->ModelOperatorSKRektor->detailAksesUserOp(),
            'isi'    => 'staffdosen/sk/operator/rektor/add'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function addData()
    {
        if ($this->validate([
            'uploadSKRektor' => [
                'label' => 'Upload File Proposal',
                'rules' => 'uploaded[uploadSKRektor]|max_size[uploadSKRektor,5120]|mime_in[uploadSKRektor,application/pdf]',
                'errors' => [
                    'uploaded' => '{field} Wajib Diisi !!!',
                    'max_size' => '{field} Max 5MB',
                    'mime_in' => 'Format {field} Wajib PDF'
                ]
            ],
        ])) {
            //mengambil file foto dari form input
            $fileUpload = $this->request->getFile('uploadSKRektor');
            //merename nama file foto
            $namaFileUpload = $fileUpload->getRandomName();
            //jika valid
            $data = array(
                'pengaju_id' => $this->request->getPost('idPengaju'),
                'jenis_op_id' => $this->request->getPost('jenisOp'),
                'judul_sk' => $this->request->getPost('judulSKRektor'),
                'tanggal_pembuatan' => $this->request->getPost('tanggalPembuatanSKRektor'),
                'tmt_kegiatan' => $this->request->getPost('tmtKegiatanSKRektor'),
                'upload_sk_rektor' => $namaFileUpload,
            );
            //memindahkan file foto dari form input ke folder foto di directory
            $fileUpload->move('uploadSKRektor', $namaFileUpload);
            $this->ModelOperatorSKRektor->add($data);
            session()->setFlashdata('sukses', 'SK Rektor Berhasil diajukan !!');
            return redirect()->to(base_url('staffdosen/sk/operator/rektor'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('staffdosen/sk/operator/rektor/add'));
        }
    }

    public function view($id_sk_rektor)
    {
        $data = [
            'title' => 'Pengajuan SK Rektor',
            'detailSKRektor' => $this->ModelOperatorSKRektor->detailSKRektor($id_sk_rektor),
            'isi'    => 'staffdosen/sk/operator/rektor/view'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function edit($id_sk_rektor)
    {
        $data = [
            'title' => 'Pengajuan SK Rektor',
            'detailSKRektor' => $this->ModelOperatorSKRektor->detailSKRektor($id_sk_rektor),
            'detailSKRektorNoteSVAkademik' => $this->ModelOperatorSKRektor->detailSKRektorNoteSVAkademik($id_sk_rektor),
            'detailSKRektorNoteSVSumda' => $this->ModelOperatorSKRektor->detailSKRektorNoteSVSumda($id_sk_rektor),
            'detailSKRektorNoteTataUsaha' => $this->ModelOperatorSKRektor->detailSKRektorNoteTataUsaha($id_sk_rektor),
            'detailSKRektorNoteWadekAkem' => $this->ModelOperatorSKRektor->detailSKRektorNoteWadekAkem($id_sk_rektor),
            'detailSKRektorNoteWadekSumda' => $this->ModelOperatorSKRektor->detailSKRektorNoteWadekSumda($id_sk_rektor),
            'detailSKRektorNoteDekan' => $this->ModelOperatorSKRektor->detailSKRektorNoteDekan($id_sk_rektor),
            'isi'    => 'staffdosen/sk/operator/rektor/edit'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function editData($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'judul_sk' => $this->request->getPost('judulSKRektor'),
            'tanggal_pembuatan' => $this->request->getPost('tanggalPembuatanSKRektor'),
            'tmt_kegiatan' => $this->request->getPost('tmtKegiatanSKRektor'),
        ];
        $this->ModelOperatorSKRektor->edit($data);
        session()->setFlashdata('sukses', 'Edit Data Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/rektor/edit/' . $id_sk_rektor));
    }

    public function editDataFileSK($id_sk_rektor)
    {
        if ($this->validate([
            'uploadSKRektor' => [
                'label' => 'Upload File SK Rektor',
                'rules' => 'uploaded[uploadSKRektor]|max_size[uploadSKRektor,5120]|mime_in[uploadSKRektor,application/pdf]',
                'errors' => [
                    'uploaded' => '{field} Wajib Diisi !!!',
                    'max_size' => '{field} Max 5MB',
                    'mime_in' => 'Format {field} Wajib PDF'
                ]
            ],
        ])) {
            //mengambil file foto dari form input
            $fileUpload = $this->request->getFile('uploadSKRektor');
            //merename nama file foto
            $namaFileUpload = $fileUpload->getRandomName();
            //jika valid
            $data = array(
                'id_sk_rektor' => $id_sk_rektor,
                'upload_sk_rektor' => $namaFileUpload,
            );
            //memindahkan file foto dari form input ke folder foto di directory
            $fileUpload->move('uploadskrektor', $namaFileUpload);
            $this->ModelOperatorSKRektor->uploadFileSKRektor($data);
            session()->setFlashdata('sukses', 'SK Rektor Berhasil diupload !!');
            return redirect()->to(base_url('staffdosen/sk/operator/rektor/edit/' . $id_sk_rektor));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('staffdosen/sk/operator/rektor/edit/' . $id_sk_rektor));
        }
    }


    public function konfirmasiEditkeDekan($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'dekan_status' => 0,
        ];
        $this->ModelOperatorSKRektor->edit($data);
        session()->setFlashdata('sukses', 'SK Rektor Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/rektor'));
    }
    public function konfirmasiEditkeWadeksumda($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'wadek_sumda_status' => 0,
        ];
        $this->ModelOperatorSKRektor->edit($data);
        session()->setFlashdata('sukses', 'SK Rektor Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/rektor'));
    }
    public function konfirmasiEditkeWadekakem($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'wadek_akem_status' => 0,
        ];
        $this->ModelOperatorSKRektor->edit($data);
        session()->setFlashdata('sukses', 'SK Rektor Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/rektor'));
    }
    public function konfirmasiEditkeTatausaha($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'manager_tu_status' => 0,
        ];
        $this->ModelOperatorSKRektor->edit($data);
        session()->setFlashdata('sukses', 'SK Rektor Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/rektor'));
    }
    public function konfirmasiEditkeSumberdaya($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'sv_sumda_status' => 0,
        ];
        $this->ModelOperatorSKRektor->edit($data);
        session()->setFlashdata('sukses', 'SK Rektor Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/rektor'));
    }
    public function konfirmasiEditkeAkademik($id_sk_rektor)
    {
        $data = [
            'id_sk_rektor' => $id_sk_rektor,
            'sk_akem_status' => 0,
        ];
        $this->ModelOperatorSKRektor->edit($data);
        session()->setFlashdata('sukses', 'SK Rektor Berhasil Diajukan !!');
        return redirect()->to(base_url('staffdosen/sk/operator/rektor'));
    }
}
