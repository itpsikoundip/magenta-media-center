<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserAdmin extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'id_admin'              => '1',
                'nama'                  => 'gading',
                'email'                 => 'gadingihsancahya@gmail.com',
                'password'              => password_hash('admin123', PASSWORD_DEFAULT),
            ],
            [
                'id_admin'              => '2',
                'nama'                  => 'willy',
                'email'                 => 'grewilly2001@gmail.com',
                'password'              => password_hash('admin123', PASSWORD_DEFAULT),
            ],
            [
                'id_admin'              => '3',
                'nama'                  => 'ariel',
                'email'                 => 'arielgemilangjaya@gmail.com',
                'password'              => password_hash('admin123', PASSWORD_DEFAULT),
            ],
        ];

        $this->db->table('user_admin')->insertBatch($data);
    }
}
