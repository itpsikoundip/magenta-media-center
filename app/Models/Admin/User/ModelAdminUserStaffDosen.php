<?php

namespace App\Models\Admin\User;

use CodeIgniter\Model;

class ModelAdminUserStaffDosen extends Model
{
    public function allData()
    {
        return $this->db->table('user_staffdosen')

            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = user_staffdosen.staffdosen_id')
            ->get()->getResultArray();
    }

    public function allDataStaffDosen()
    {
        return $this->db->table('data_staffdosen')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('user_staffdosen')->insert($data);
    }

    public function delete_data($data)
    {
        $this->db->table('user_staffdosen')
            ->where('id_userstaffdosen', $data['id_userstaffdosen'])
            ->delete($data);
    }

    public function edit($data)
    {
        $this->db->table('user_staffdosen')
            ->where('id_userstaffdosen', $data['id_userstaffdosen'])
            ->update($data);
    }
}
