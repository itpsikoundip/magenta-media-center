<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Login extends BaseController
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

    public function authAdmin()
    {
        //validasi inputan form login
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ]
        ])) {
            //jika valid
            $username = $this->request->getPost('username');
            $hashedpassword = $this->request->getPost('password');
            $password = password_verify($this->request->getPost('password'), $hashedpassword);
            $level = $this->request->getPost('level');
            if ($level == 1) {
                $cekusr = $this->ModelLogin->LoginAdmin($username, $password);
                if ($cekusr) {
                    //jika data cocok
                    session()->set('id', $cekusr['id_useradmin']);
                    session()->set('username', $cekusr['username']);
                    session()->set('level', $level);
                    //login
                    session()->setFlashdata('sukses', 'Login Sukses!');
                    return redirect()->to(base_url('admin'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login Gagal!, email Atau Password Salah !!');
                    return redirect()->to(base_url('login/admin'));
                }
            }
        } else {
            $validation =  \Config\Services::validation();
            return redirect()->to(base_url('login/admin'))->withInput()->with('validation', $validation);
        }
    }

    public function authMhs()
    {
        //validasi inputan form login
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $hashedpassword = $this->request->getPost('password');
            $password = password_verify($this->request->getPost('password'), $hashedpassword);
            $level = $this->request->getPost('level');
            //level 1 = Mahasiswa Biasa
            if ($level == 1) {
                $cekusr = $this->ModelLogin->loginLvlMhs($email, $password);
                if ($cekusr) {
                    //jika data cocok
                    session()->set('id', $cekusr['id_usermhs']);
                    session()->set('nama', $cekusr['nama_mhs']);
                    session()->set('email', $cekusr['email']);
                    session()->set('level', $level);
                    //login
                    session()->setFlashdata('sukses', 'Login Sukses!');
                    return redirect()->to(base_url('mahasiswa'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login Gagal!, email Atau Password Salah !!');
                    return redirect()->to(base_url('login/mahasiswa'));
                }
                //level 2 = UKM
            } elseif ($level == 2) {
                $cekusr = $this->ModelLogin->loginLvlUKM($email, $password);
                if ($cekusr) {
                    //jika data cocok
                    session()->set('id', $cekusr['id_usermhs']);
                    session()->set('nama', $cekusr['nama_mhs']);
                    session()->set('email', $cekusr['email']);
                    session()->set('level', $level);
                    //login
                    session()->setFlashdata('sukses', 'Login Sukses!');
                    return redirect()->to(base_url('mahasiswa'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login Gagal!, Email Atau Password Salah !!');
                    return redirect()->to(base_url('login/mahasiswa'));
                }
                //level 3 = BEM
            } elseif ($level == 3) {
                $cekusr = $this->ModelLogin->loginLvlBEM($email, $password);
                if ($cekusr) {
                    //jika data cocok
                    session()->set('id', $cekusr['id_usermhs']);
                    session()->set('nama', $cekusr['nama_mhs']);
                    session()->set('email', $cekusr['email']);
                    session()->set('level', $level);
                    //login
                    session()->setFlashdata('sukses', 'Login Sukses!');
                    return redirect()->to(base_url('mahasiswa'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login Gagal!, Email Atau Password Salah !!');
                    return redirect()->to(base_url('login/mahasiswa'));
                }
            }
        } else {
            $validation =  \Config\Services::validation();
            return redirect()->to(base_url('login/mahasiswa'))->withInput()->with('validation', $validation);
        }
    }

    public function authStaffDosen()
    {
        //validasi inputan form login
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $hashedpassword = $this->request->getPost('password');
            $password = password_verify($this->request->getPost('password'), $hashedpassword);
            $cekusr = $this->ModelLogin->loginLvlStaffDosen($email, $password);
            if ($cekusr) {
                //jika data cocok
                session()->set('id', $cekusr['id_staffdosen']);
                session()->set('nip', $cekusr['nip']);
                session()->set('nidn', $cekusr['nidn']);
                session()->set('nama', $cekusr['nama_staffdosen']);
                session()->set('namadepartemen', $cekusr['nama_jabatandepartemen']);
                session()->set('email', $cekusr['email']);
                //login
                session()->setFlashdata('sukses', 'Login Sukses!');
                return redirect()->to(base_url('staffdosen'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login Gagal!, email Atau Password Salah !!');
                return redirect()->to(base_url('login/staffdosen'));
            }
        }
    }

    public function logoutAdmin()
    {
        session()->remove('id');
        session()->remove('log');
        session()->remove('username');
        session()->remove('level');
        session()->setFlashdata('sukses', 'Logout Suksess !!!');
        return redirect()->to(base_url('login/admin'));
    }

    public function logoutMhs()
    {
        session()->remove('id');
        session()->remove('log');
        session()->remove('nama');
        session()->remove('email');
        session()->remove('level');
        session()->setFlashdata('sukses', 'Logout Suksess !!!');
        return redirect()->to(base_url('login/mahasiswa'));
    }

    public function logoutStaffDosen()
    {
        session()->remove('id');
        session()->remove('log');
        session()->remove('nip');
        session()->remove('nidn');
        session()->remove('log');
        session()->remove('nama');
        session()->remove('namadepartemen');
        session()->remove('email');
        session()->setFlashdata('sukses', 'Logout Suksess !!!');
        return redirect()->to(base_url('login/staffdosen'));
    }
}
