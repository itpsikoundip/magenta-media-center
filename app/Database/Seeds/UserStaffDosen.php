<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserStaffDosen extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'staffdosen_id'         => '1',
                'password'              => password_hash('196102121987032001', PASSWORD_DEFAULT),
                'proposal'              => '0',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '0',
                'kegiatan'              => '0',
                'catatan'               => 'Dosen',
            ],
            [
                'staffdosen_id'         => '36',
                'password'              => password_hash('197305132009101002', PASSWORD_DEFAULT),
                'proposal'              => '1',
                'survey'                => '1',
                'helpdesk'              => '1',
                'sk'                    => '1',
                'kegiatan'              => '1',
                'catatan'               => 'Manager Tata Usaha',
            ],
            [
                'staffdosen_id'         => '62',
                'password'              => password_hash('H.7.198709082021042001', PASSWORD_DEFAULT),
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'kegiatan'              => '0',
                'catatan'               => 'Akademik dan Kemahasiswaan',
            ],
            [
                'staffdosen_id'         => '35',
                'password'              => password_hash('196503181992032001', PASSWORD_DEFAULT),
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'kegiatan'              => '0',
                'catatan'               => 'Sumberdaya',
            ],
            [
                'staffdosen_id'         => '17',
                'password'              => password_hash('198302172008012007', PASSWORD_DEFAULT),
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'kegiatan'              => '0',
                'catatan'               => 'Wadek Akademik dan Kemahasiswaan',
            ],
            [
                'staffdosen_id'         => '20',
                'password'              => password_hash('197311122009122001', PASSWORD_DEFAULT),
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'kegiatan'              => '0',
                'catatan'               => 'Wadek Sumber Daya',
            ],
            [
                'staffdosen_id'         => '9',
                'password'              => password_hash('196309131991032002', PASSWORD_DEFAULT),
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '0',
                'kegiatan'              => '0',
                'catatan'               => 'Kaprodi S1',
            ],
            [
                'staffdosen_id'         => '27',
                'password'              => password_hash('197812252005012001', PASSWORD_DEFAULT),
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '0',
                'kegiatan'              => '0',
                'catatan'               => 'Kaprodi S2',
            ],
            [
                'staffdosen_id'         => '22',
                'password'              => password_hash('197809012002122001', PASSWORD_DEFAULT),
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'kegiatan'              => '0',
                'catatan'               => 'Dekan',
            ],
            [
                'staffdosen_id'         => '39',
                'password'              => password_hash('197810202010121004', PASSWORD_DEFAULT),
                'proposal'              => '0',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'kegiatan'              => '0',
                'catatan'               => 'Sumberdaya',
            ],
            [
                'staffdosen_id'         => '29',
                'password'              => password_hash('196907271999031001', PASSWORD_DEFAULT),
                'proposal'              => '0',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'kegiatan'              => '0',
                'catatan'               => 'Akademik dan Kemahasiswaan',
            ],
        ];

        $this->db->table('user_staffdosen')->insertBatch($data);
    }
}
