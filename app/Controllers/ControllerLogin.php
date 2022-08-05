<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class ControllerLogin extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelLogin = new ModelLogin();
    }

    function hash()
    {
        echo password_hash('undip123', PASSWORD_BCRYPT);
    }

    public function index()
    {

        $data = [
            'isi'    => 'login/index'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function admin()
    {
        $data = [
            'validation' =>  \Config\Services::validation(),
            'isi'    => 'login/admin'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function mahasiswa()
    {
        $data = [
            'validation' =>  \Config\Services::validation(),
            'isi'    => 'login/mahasiswa'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function staffdosen()
    {
        $data = [
            'validation' =>  \Config\Services::validation(),
            'isi'    => 'login/staffdosen'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function eksternal()
    {
        $data = [
            'validation' =>  \Config\Services::validation(),
            'isi'    => 'login/eksternal'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function authAdmin()
    {
        //validasi inputan form login
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $hashedpassword = $this->request->getPost('password');
            $password = password_verify($this->request->getPost('password'), $hashedpassword);
            $cekusr = $this->ModelLogin->loginLvlAdmin($email, $password);
            if ($cekusr) {
                //jika data cocok
                session()->set('id', $cekusr['id_admin']);
                session()->set('nama', $cekusr['nama']);
                session()->set('email', $cekusr['email']);
                //login
                session()->setFlashdata('sukses', 'Login sukses!');
                return redirect()->to(base_url('admin'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login Gagal!, username Atau Password Salah !!');
                return redirect()->to(base_url('login/admin'));
            }
        }
    }

    public function authMhs()
    {
        //validasi inputan form login
        if ($this->validate([
            'nim' => [
                'label' => 'NIM',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ]
        ])) {
            //jika valid
            $nim = $this->request->getPost('nim');
            $hashedpassword = $this->request->getPost('password');
            $password = password_verify($this->request->getPost('password'), $hashedpassword);
            $level = $this->request->getPost('level');
            //level 1 = Mahasiswa Biasa
            if ($level == 1) {
                $cekuser = $this->ModelLogin->loginLvlMhs($nim, $password);
                if ($cekuser) {
                    //jika data cocok
                    session()->set('nim', $cekuser['nim']);
                    session()->set('nama', $cekuser['nama']);
                    session()->set('email', $cekuser['email']);
                    session()->set('fotoprofil', $cekuser['fotoprofil']);
                    session()->set('level', $level);
                    //login
                    session()->setFlashdata('sukses', 'Login Sukses!');
                    return redirect()->to(base_url('mahasiswa'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login gagal, email atau password salah!');
                    return redirect()->to(base_url('login/mahasiswa'));
                }
                //level 2 = Ormawa
            } elseif ($level == 2) {
                $cekuser = $this->ModelLogin->loginLvlOrmawa($nim, $password);
                if ($cekuser) {
                    //jika data cocok
                    session()->set('nim', $cekuser['mahasiswa_id']);
                    session()->set('nama', $cekuser['nama']);
                    session()->set('email', $cekuser['email']);
                    session()->set('fotoprofil', $cekuser['fotoprofil']);
                    session()->set('idormawa', $cekuser['id']);
                    session()->set('namaormawa', $cekuser['nama_ormawa']);
                    session()->set('level', $level);
                    //login
                    session()->setFlashdata('sukses', 'Login Sukses!');
                    return redirect()->to(base_url('ormawa'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login gagal, email atau password salah!');
                    return redirect()->to(base_url('login/mahasiswa'));
                }
            }
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('login/mahasiswa'))->withInput()->with('validation', $validation);
        }
    }

    public function authStaffDosen()
    {
        //validasi inputan form login
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ]
        ])) {
            //jika valid
            $username = $this->request->getPost('username');
            $hashedpassword = $this->request->getPost('password');
            $password = password_verify($this->request->getPost('password'), $hashedpassword);
            $cekusr = $this->ModelLogin->loginLvlStaffDosen($username, $password);
            if ($cekusr) {
                //jika data cocok
                session()->set('id', $cekusr['id_staffdosen']);
                session()->set('nip', $cekusr['nip']);
                session()->set('nama', $cekusr['nama']);
                session()->set('jenispegawai', $cekusr['jenispegawai_id']);
                session()->set('departemen', $cekusr['departemen_id']);
                session()->set('namaunit', $cekusr['nama_unit']);
                session()->set('unit', $cekusr['unit_id']);
                session()->set('unit2', $cekusr['unit2_id']);
                session()->set('statusstaffdosen', $cekusr['status_staffdosen']);
                session()->set('proposal', $cekusr['proposal']);
                session()->set('survey', $cekusr['survey']);
                session()->set('helpdesk', $cekusr['helpdesk']);
                session()->set('sk', $cekusr['sk']);
                session()->set('fotoprofil', $cekusr['fotoprofil']);
                //login
                session()->setFlashdata('sukses', 'Login sukses!');
                return redirect()->to(base_url('staffdosen'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login Gagal!, username Atau Password Salah !!');
                return redirect()->to(base_url('login/staffdosen'));
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('sukses', 'Logout sukses');
        return redirect()->to(base_url('login'));
    }
}
