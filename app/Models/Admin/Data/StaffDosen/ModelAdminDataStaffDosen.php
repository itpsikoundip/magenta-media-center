<?php

namespace App\Models\Admin\Data\StaffDosen;

use CodeIgniter\Model;

class ModelAdminDataStaffDosen extends Model
{
    public function allData()
    {
        return $this->db->table('data_staffdosen')
            ->join('ref_stafdosen_departemen', 'ref_stafdosen_departemen.id_departemen = data_staffdosen.departemen_id')
            ->join('ref_stafdosen_jenispegawai', 'ref_stafdosen_jenispegawai.id_jenispegawai = data_staffdosen.jenispegawai_id')
            ->join('ref_stafdosen_unit', 'ref_stafdosen_unit.id_unit = data_staffdosen.unit_id')
            ->join('ref_stafdosen_unit2', 'ref_stafdosen_unit2.id_unit2 = data_staffdosen.unit2_id')
            ->join('ref_stafdosen_status', 'ref_stafdosen_status.id_status = data_staffdosen.status_staffdosen')
            ->orderBy('nip', 'ASC')
            ->get()->getResultArray();
    }
}
