<?php

namespace App\Models\Proposal;

use CodeIgniter\Model;

class ModelProposalBEMStaffDosen extends Model
{
    public function detailDosen()
    {
        return $this->db->table('proposal_user_staffdosen')
            // ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('staffdosen_id', session()->get('id'))
            ->get()->getRowArray();
    }
    public function detailProposal($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }
    public function edit($data)
    {
        $this->db->table('proposal_data')
            ->where('id_propo', $data['id_propo'])
            ->update($data);
    }






    // BEM
    public function allDataProposalBagBEMSiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('bem_status', '0')
            ->get()->getResultArray();
    }

    public function allDataProposalBagBEMSudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('bem_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagBEMPerbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('bem_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagBEMDitolak()
    {
        return $this->db->table('proposal_data')
            ->where('bem_status', '1')
            ->get()->getResultArray();
    }

    public function allDataProposalBagBEM()
    {
        return $this->db->table('proposal_data')
            ->where('bem_status', '0')
            ->orwhere('bem_status', '1')
            ->orwhere('bem_status', '2')
            ->orwhere('bem_status', '3')
            ->get()->getResultArray();
    }
    // AKADEMIK
    public function allDataProposalBagAkademik()
    {
        return $this->db->table('proposal_data')
            ->where('bem_status', '3')
            ->get()->getResultArray();
    }
    public function allDataProposalBagAkademikSiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('bem_status', '3')
            ->where('akademik_status', '0')
            ->get()->getResultArray();
    }

    public function allDataProposalBagAkademikSudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('akademik_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagAkademikPerbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('akademik_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagAkademikDitolak()
    {
        return $this->db->table('proposal_data')
            ->where('akademik_status', '1')
            ->get()->getResultArray();
    }
    // SUMBERDAYA
    public function allDataProposalBagSumberDaya()
    {
        return $this->db->table('proposal_data')
            ->where('akademik_status', '3')
            ->get()->getResultArray();
    }
    public function allDataProposalBagSumberDayaSiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('akademik_status', '3')
            ->where('sumberdaya_status', '0')
            ->get()->getResultArray();
    }

    public function allDataProposalBagSumberDayaSudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('sumberdaya_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagSumberDayaPerbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('sumberdaya_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagSumberDayaDitolak()
    {
        return $this->db->table('proposal_data')
            ->where('sumberdaya_status', '1')
            ->get()->getResultArray();
    }
    // TATA USAHA
    public function allDataProposalBagTataUsaha()
    {
        return $this->db->table('proposal_data')
            ->where('sumberdaya_status', '3')
            ->get()->getResultArray();
    }
    public function allDataProposalBagTataUsahaSiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('sumberdaya_status', '3')
            ->where('tatausaha_status', '0')
            ->get()->getResultArray();
    }

    public function allDataProposalBagTataUsahaSudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('tatausaha_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagTataUsahaPerbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('tatausaha_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagTataUsahaDitolak()
    {
        return $this->db->table('proposal_data')
            ->where('tatausaha_status', '1')
            ->get()->getResultArray();
    }
    // KAPRODI S1
    public function allDataProposalBagKaprodiS1()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '1')
            ->where('tatausaha_status', '3')
            ->get()->getResultArray();
    }
    public function allDataProposalBagKaprodiS1SiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '1')
            ->where('tatausaha_status', '3')
            ->where('kaprodis1_status', '0')
            ->get()->getResultArray();
    }

    public function allDataProposalBagKaprodiS1SudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '1')
            ->where('kaprodis1_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagKaprodiS1Perbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '1')
            ->where('kaprodis1_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagKaprodiS1Ditolak()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '1')
            ->where('kaprodis1_status', '1')
            ->get()->getResultArray();
    }
    // KAPRODI S2
    public function allDataProposalBagKaprodiS2()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '2')
            ->where('tatausaha_status', '3')
            ->get()->getResultArray();
    }
    public function allDataProposalBagKaprodiS2SiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '2')
            ->where('tatausaha_status', '3')
            ->where('kaprodis2_status', '0')
            ->get()->getResultArray();
    }

    public function allDataProposalBagKaprodiS2SudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '2')
            ->where('kaprodis2_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagKaprodiS2Perbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '2')
            ->where('kaprodis2_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagKaprodiS2Ditolak()
    {
        return $this->db->table('proposal_data')
            ->where('jenispendidikan_propo', '2')
            ->where('kaprodis2_status', '1')
            ->get()->getResultArray();
    }
    // WADEK AKEM
    public function allDataProposalBagWadekAkem()
    {
        return $this->db->table('proposal_data')
            ->where('kaprodis1_status', '3')
            ->orwhere('kaprodis2_status', '3')
            ->get()->getResultArray();
    }
    public function allDataProposalBagWadekAkemSiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('wadekakem_status', '0')
            ->where('kaprodis1_status', '3')
            ->orwhere('kaprodis2_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagWadekAkemSudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('wadekakem_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagWadekAkemPerbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('wadekakem_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagWadekAkemDitolak()
    {
        return $this->db->table('proposal_data')
            ->where('wadekakem_status', '1')
            ->get()->getResultArray();
    }
    // WADEK SUMDA
    public function allDataProposalBagWadekSumda()
    {
        return $this->db->table('proposal_data')
            ->where('kaprodis1_status', '3')
            ->orwhere('kaprodis2_status', '3')
            ->get()->getResultArray();
    }
    public function allDataProposalBagWadekSumdaSiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('wadeksumda_status', '0')
            ->where('kaprodis1_status', '3')
            ->orwhere('kaprodis2_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagWadekSumdaSudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('wadeksumda_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagWadekSumdaPerbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('wadeksumda_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagWadekSumdaDitolak()
    {
        return $this->db->table('proposal_data')
            ->where('wadeksumda_status', '1')
            ->get()->getResultArray();
    }
    // DEKAN
    public function allDataProposalBagDekan()
    {
        return $this->db->table('proposal_data')
            ->where('wadekakem_status', '3')
            ->where('wadeksumda_status', '3')
            ->get()->getResultArray();
    }
    public function allDataProposalBagDekanSiapACC()
    {
        return $this->db->table('proposal_data')
            ->where('wadekakem_status', '3')
            ->where('wadeksumda_status', '3')
            ->where('dekan_status', '0')
            ->get()->getResultArray();
    }

    public function allDataProposalBagDekanSudahACC()
    {
        return $this->db->table('proposal_data')
            ->where('dekan_status', '3')
            ->get()->getResultArray();
    }

    public function allDataProposalBagDekanPerbaikan()
    {
        return $this->db->table('proposal_data')
            ->where('dekan_status', '2')
            ->get()->getResultArray();
    }

    public function allDataProposalBagDekanDitolak()
    {
        return $this->db->table('proposal_data')
            ->where('dekan_status', '1')
            ->get()->getResultArray();
    }
}
