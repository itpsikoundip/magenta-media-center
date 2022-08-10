<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Auth\ModelLogin;

class ControllerLogin extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelLogin = new ModelLogin();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    function hash()
    {
        echo password_hash('psikoundip2022', PASSWORD_BCRYPT);
    }

    public function index()
    {

        $data = [
            'isi'           => 'auth/index'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function admin()
    {
        $data = [
            'validation'    =>  \Config\Services::validation(),
            'isi'           => 'auth/admin'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function mahasiswa()
    {
        $data = [
            'validation'    =>  \Config\Services::validation(),
            'isi'           => 'auth/mahasiswa'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function staffdosen()
    {
        $data = [
            'validation'    =>  \Config\Services::validation(),
            'isi'           => 'auth/staffdosen'
        ];
        return view('layouts/login-wrapper', $data);
    }

    public function eksternal()
    {
        $data = [
            'validation'    =>  \Config\Services::validation(),
            'isi'           => 'auth/eksternal'
        ];
        return view('layouts/login-wrapper', $data);
    }

    // auth Admin
    public function authAdmin()
    {
        //validasi inputan form login
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!!'
                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            //query ambil data user dari database
            $query = $this->db->query("SELECT * FROM user_admin WHERE email='$email'");
            $result = $query->getResult();
            if (count($result) > 0) {
                $row = $query->getRow();
                $password_user = $row->password; //ambil password
                if (password_verify($password, $password_user)) { //pencocokan password
                    //jika data cocok
                    $simpansession = [
                        'login'             => true,
                        'id'                => $row->id_admin,
                        'email'             => $row->email,
                        'nama'              => $row->nama
                    ];
                    $this->session->set($simpansession);
                    //jika data cocok / berhasil
                    session()->setFlashdata('sukses', 'Login sukses!');
                    return redirect()->to(base_url('admin'));
                } else {
                    //jika data tidak cocok / gagal
                    session()->setFlashdata('gagal', '<strong>LOGIN GAGAL!</strong> PASSWORD salah!');
                    return redirect()->to(base_url('login/admin'));
                }
            } else {
                //jika password tidak cocok / gagal
                session()->setFlashdata('gagal', '<strong>LOGIN GAGAL!</strong> EMAIL salah atau tidak terdaftar!');
                return redirect()->to(base_url('login/admin'));
            }
            // jika validasi tidak terpenuhi
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('login/admin'))->withInput()->with('validation', $validation);
        }
    }

    // auth Mahasiswa
    public function authMhs()
    {
        //validasi inputan form login
        if ($this->validate([
            'nim' => [
                'label' => 'NIM',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!!'
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!!'
                ]
            ]
        ])) {
            //jika valid
            $nim = $this->request->getVar('nim');
            $password = $this->request->getVar('password');
            $level = $this->request->getPost('level');
            //level 1 = Mahasiswa
            if ($level == 1) {
                $query = $this->db->query("SELECT * FROM mahasiswa WHERE nim='$nim'"); //query ambil data user dari database
                $result = $query->getResult();
                if (count($result) > 0) {
                    $row = $query->getRow();
                    $password_user = $row->password; //ambil password
                    if (password_verify($password, $password_user)) { //pencocokan password
                        //jika data cocok
                        $simpansession = [
                            'login'         => true,
                            'nim'           => $row->nim,
                            'nama'          => $row->nama,
                            'email'         => $row->email,
                            'fotoprofil'    => $row->fotoprofil,
                            'level'         => $level
                        ];
                        $this->session->set($simpansession);
                        //jika data cocok / berhasil
                        session()->setFlashdata('sukses', 'Login sukses!');
                        return redirect()->to(base_url('mahasiswa'));
                    } else {
                        //jika password tidak cocok / gagal
                        session()->setFlashdata('gagal', '<strong>LOGIN GAGAL!</strong> PASSWORD salah!');
                        return redirect()->to(base_url('login/mahasiswa'));
                    }
                } else {
                    //jika password tidak cocok / gagal
                    session()->setFlashdata('gagal', '<strong>LOGIN GAGAL!</strong> NIM salah atau tidak terdaftar!');
                    return redirect()->to(base_url('login/mahasiswa'));
                }
                //level 2 = Ormawa
            } elseif ($level == 2) {
                //query ambil data user dari database
                $query = $this->db->query(
                    "SELECT * FROM mahasiswa_ormawa
                    JOIN mahasiswa
                      ON mahasiswa_ormawa.mahasiswa_id = mahasiswa.nim
                    JOIN ormawa
                      ON ormawa.id = mahasiswa_ormawa.ormawa_id
                    WHERE nim='$nim'"
                );
                $result = $query->getResult();
                if (count($result) > 0) {
                    $row = $query->getRow();
                    $password_user = $row->password; //ambil password
                    if (password_verify($password, $password_user)) { //pencocokan password
                        //jika data cocok
                        $simpansession = [
                            'login'         => true,
                            'nim'           => $row->nim,
                            'nama'          => $row->nama,
                            'email'         => $row->email,
                            'fotoprofil'    => $row->fotoprofil,
                            'idormawa'      => $row->id,
                            'namaormawa'    => $row->nama_ormawa,
                            'level'         => $level
                        ];
                        $this->session->set($simpansession);
                        //jika data cocok / berhasil
                        session()->setFlashdata('sukses', 'Login sukses!');
                        return redirect()->to(base_url('ormawa'));
                    } else {
                        //jika data password tidak cocok / gagal
                        session()->setFlashdata('gagal', '<strong>LOGIN GAGAL!</strong> Password salah!');
                        return redirect()->to(base_url('login/mahasiswa'));
                    }
                } else {
                    //jika nim tidak cocok / gagal
                    session()->setFlashdata('gagal', '<strong>LOGIN GAGAL!</strong> NIM salah atau tidak terdaftar!');
                    return redirect()->to(base_url('login/mahasiswa'));
                }
            }
            // jika validasi tidak terpenuhi
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('login/mahasiswa'))->withInput()->with('validation', $validation);
        }
    }

    // auth Staff Dosen
    public function authStaffDosen()
    {
        //validasi inputan form login
        if ($this->validate([
            'nip' => [
                'label' => 'NIP',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!!'
                ]
            ]
        ])) {
            //jika valid
            $nip = $this->request->getVar('nip');
            $password = $this->request->getVar('password');
            //query ambil data user dari database
            $query = $this->db->query(
                "SELECT * FROM user_staffdosen
                JOIN data_staffdosen
                ON user_staffdosen.staffdosen_id = data_staffdosen.id_staffdosen
                JOIN ref_stafdosen_unit
                ON ref_stafdosen_unit.id_unit = data_staffdosen.unit_id
                WHERE nip='$nip'"
            );
            $result = $query->getResult();
            if (count($result) > 0) {
                $row = $query->getRow();
                $password_user = $row->password; //ambil password
                if (password_verify($password, $password_user)) { //pencocokan password
                    //jika data cocok
                    $simpansession = [
                        'login'             => true,
                        'id'                => $row->id_staffdosen,
                        'nip'               => $row->nip,
                        'nama'              => $row->nama,
                        'jenispegawai'      => $row->jenispegawai_id,
                        'departemen'        => $row->departemen_id,
                        'namaunit'          => $row->nama_unit,
                        'unit'              => $row->unit_id,
                        'unit2'             => $row->unit2_id,
                        'statusstaffdosen'  => $row->status_staffdosen,
                        'proposal'          => $row->proposal,
                        'survey'            => $row->survey,
                        'helpdesk'          => $row->helpdesk,
                        'sk'                => $row->sk,
                        'fotoprofil'        => $row->fotoprofil,
                    ];
                    $this->session->set($simpansession);
                    //jika data cocok / berhasil
                    session()->setFlashdata('sukses', 'Login sukses!');
                    return redirect()->to(base_url('staffdosen'));
                } else {
                    //jika data password tidak cocok / gagal
                    session()->setFlashdata('gagal', '<strong>LOGIN GAGAL!</strong> PASSWORD salah!');
                    return redirect()->to(base_url('login/staffdosen'));
                }
            } else {
                //jika data nip tidak cocok / gagal
                session()->setFlashdata('gagal', '<strong>LOGIN GAGAL!</strong> NIP salah atau tidak terdaftar!');
                return redirect()->to(base_url('login/staffdosen'));
            }
            // jika validasi tidak terpenuhi
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('login/staffdosen'))->withInput()->with('validation', $validation);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
