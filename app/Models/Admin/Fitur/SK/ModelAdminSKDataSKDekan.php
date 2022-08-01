<?php

namespace App\Models\Admin\Fitur\SK;

use CodeIgniter\Model;

class ModelAdminSKDataSKDekan extends Model
{
    public function allDataSKDekan()
    {
        return $this->db->table('sk_dekan')
            ->get()->getResultArray();
    }
}
