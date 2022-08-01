<?php

namespace App\Models\Admin\Fitur\SK;

use CodeIgniter\Model;

class ModelAdminSKDataSKRektor extends Model
{
    public function allDataSKRektor()
    {
        return $this->db->table('sk_rektor')
            ->get()->getResultArray();
    }
}
