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
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '0',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '0',
                'catatan'               => 'Dosen',
            ],
            [
                'staffdosen_id'         => '36',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'catatan'               => 'Manager Tata Usaha',
            ],
            [
                'staffdosen_id'         => '62',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'catatan'               => 'Akademik dan Kemahasiswaan',
            ],
            [
                'staffdosen_id'         => '35',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'catatan'               => 'Sumberdaya',
            ],
            [
                'staffdosen_id'         => '17',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'catatan'               => 'Wadek Akademik dan Kemahasiswaan',
            ],
            [
                'staffdosen_id'         => '20',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'catatan'               => 'Wadek Sumber Daya',
            ],
            [
                'staffdosen_id'         => '9',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '0',
                'catatan'               => 'Kaprodi S1',
            ],
            [
                'staffdosen_id'         => '27',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '0',
                'catatan'               => 'Kaprodi S2',
            ],
            [
                'staffdosen_id'         => '22',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '1',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'catatan'               => 'Dekan',
            ],
            [
                'staffdosen_id'         => '39',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '0',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'catatan'               => 'Sumberdaya',
            ],
            [
                'staffdosen_id'         => '29',
                'password'              => '$2y$10$WmlmU3PfoIhXcDxIkBAeoumw/bHDpdE4uJsWXM.gJ0FJ80MWYobG6 ',
                'proposal'              => '0',
                'survey'                => '0',
                'helpdesk'              => '0',
                'sk'                    => '1',
                'catatan'               => 'Akademik dan Kemahasiswaan',
            ],
        ];

        $this->db->table('user_staffdosen')->insertBatch($data);
    }
}
