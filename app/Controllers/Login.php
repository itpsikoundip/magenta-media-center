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
            $username = $this->request->getPost('username');
            $hashedpassword = $this->request->getPost('password');
            $password = password_verify($this->request->getPost('password'), $hashedpassword);
            $level = $this->request->getPost('level');
            if ($level == 1) {
                $cekuser = $this->ModelLogin->LoginAdmin($username, $password);
                if ($cekuser) {
                    //jika data cocok
                    session()->set('id', $cekuser['id_useradmin']);
                    session()->set('username', $cekuser['username']);
                    session()->set('level', $level);
                    //login
                    session()->setFlashdata('sukses', 'Login sukses');
                    return redirect()->to(base_url('admin'));
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Login gagal, email atau password salah!');
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
                    session()->set('level', $level);
                    //login
                    session()->setFlashdata('sukses', 'Login Sukses!');
                    return redirect()->to(base_url('mahasiswa'));
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
            $cekuser = $this->ModelLogin->loginLvlStaffDosen($email, $password);
            if ($cekuser) {
                //jika data cocok
                session()->set('id', $cekuser['id_staffdosen']);
                session()->set('nip', $cekuser['nip']);
                session()->set('nidn', $cekuser['nidn']);
                session()->set('nama', $cekuser['nama_staffdosen']);
                session()->set('namadepartemen', $cekuser['nama_jabatandepartemen']);
                session()->set('email', $cekuser['email']);
                //login
                session()->setFlashdata('sukses', 'Login sukses!');
                return redirect()->to(base_url('staffdosen'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login gagal, email atau password salah!');
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
        session()->setFlashdata('sukses', 'Logout sukses');
        return redirect()->to(base_url('login/admin'));
    }

    public function logoutMhs()
    {
        session()->remove('id');
        session()->remove('log');
        session()->remove('nama');
        session()->remove('email');
        session()->remove('level');
        session()->setFlashdata('sukses', 'Logout sukses');
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
        session()->setFlashdata('sukses', 'Logout sukses');
        return redirect()->to(base_url('login/staffdosen'));
    }
}
