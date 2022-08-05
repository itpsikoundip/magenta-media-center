<?php

namespace App\Controllers\Mahasiswa\Profil;

use App\Controllers\BaseController;
use App\Models\Profil\ModelProfilMahasiswa;

class ControllerMahasiswaProfil extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelProfilMahasiswa = new ModelProfilMahasiswa();
    }

    public function index()
    {
        $data = [
            'detailMahasiswa' => $this->ModelProfilMahasiswa->detailMahasiswa(),
            'isi'    => 'mahasiswa/profil/index'
        ];
        return view('layouts/mahasiswa-wrapper', $data);
    }

    public function uploadFotoProfil($nim)
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
                    'nim' => $nim,
                );
                $this->ModelProfilMahasiswa->editFotoProfilMahasiswa($data);
            } else {
                //menghapus file upload apabila sudah ada yang sudah ada
                $mahasiswa = $this->ModelProfilMahasiswa->detailMahasiswa($nim);
                if ($mahasiswa['fotoprofil'] != "") {
                    unlink('fotoprofilmahasiswa/' . $mahasiswa['fotoprofil']);
                }
                //merename nama file foto
                $namaFileUpload = $fileupload->getRandomName();
                //jika valid
                $data = array(
                    'nim' => $nim,
                    'fotoprofil' => $namaFileUpload
                );
                //memindahkan file foto dari form input ke folder foto di directory
                $fileupload->move('fotoprofilmahasiswa', $namaFileUpload);
                $this->ModelProfilMahasiswa->editFotoProfilMahasiswa($data);
            }
            session()->setFlashdata('sukses', 'Upload Berhasil dilakukan !!');
            return redirect()->to(base_url('mahasiswa/profil'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('mahasiswa/profil'));
        }
    }
}
