<?php

namespace App\Controllers\StaffDosen\Profil;

use App\Controllers\BaseController;
use App\Models\Profil\ModelProfilStaffDosen;

class ControllerStaffDosenProfil extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelProfilStaffDosen = new ModelProfilStaffDosen();
    }

    public function index()
    {
        $data = [
            'detailStaffDosen' => $this->ModelProfilStaffDosen->detailStaffDosen(),
            'isi'    => 'staffdosen/profil/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }

    public function uploadFotoProfil($id_staffdosen)
    {
        if ($this->validate([
            'formUploadFotoProfil' => [
                'label' => 'Upload Foto Profil',
                'rules' => 'max_size[formUploadFotoProfil,1024]|mime_in[formUploadFotoProfil,image/png,image/jpeg,image/jpg]',
                'errors' => [
                    'max_size' => '{field} Max 1MB',
                    'mime_in' => 'Format {field} Wajib PDF'
                ]
            ]
        ])) {
            //mengambil file pdf dari form input
            $fileupload = $this->request->getFile('formUploadFotoProfil');

            if ($fileupload->getError() == 4) {
                //jika file tidak diganti
                $data = array(
                    'id_staffdosen' => $id_staffdosen,
                );
                $this->ModelProfilStaffDosen->editFotoProfilStaffDosen($data);
            } else {
                //menghapus file upload apabila sudah ada yang sudah ada
                $staffdosen = $this->ModelProfilStaffDosen->detailStaffDosen($id_staffdosen);
                if ($staffdosen['fotoprofil'] != "") {
                    unlink('fotoprofilstaffdosen/' . $staffdosen['fotoprofil']);
                }
                //merename nama file foto
                $namaFileUpload = $fileupload->getRandomName();
                //jika valid
                $data = array(
                    'id_staffdosen' => $id_staffdosen,
                    'fotoprofil' => $namaFileUpload
                );
                //memindahkan file foto dari form input ke folder foto di directory
                $fileupload->move('fotoprofilstaffdosen', $namaFileUpload);
                $this->ModelProfilStaffDosen->editFotoProfilStaffDosen($data);
            }
            session()->setFlashdata('sukses', 'Upload Berhasil dilakukan !!');
            return redirect()->to(base_url('staffdosen/profil'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('staffdosen/profil'));
        }
    }
}
