<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\hasilSurveyDosenModel;

class surveyDosenModel extends Model
{

    protected $table = 'survey_dosen';

    public function getItemById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function addData($data)
    {
        return $this->db->table('survey_dosen')->insert($data);
    }

    public function deleteData($pertanyaan)
    {
        return $this->db->table('survey_dosen')->delete(['pertanyaan' => $pertanyaan]);
    }

    public function editData($id)
    {
        return $this->db->table('survey_dosen')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('survey_dosen')->update($data, ['id' => $id]);
    }

    public function getIdDosen($id)
    {
        return $this->db->table('survey_dosen')->where(['id_dosen' => $id])->get()->getRowArray();
    }

    public function getRowName()
    {
        return $this->db->getFieldNames('survey_dosen');
    }

    public function inputSkor($arrayInput)
    {
        $this->db->transStart();
        foreach ($arrayInput as $input) {
            switch ($input["value"]) {
                case "1":
                    $query = $this->db->query("SELECT sangat_baik FROM survey_dosen WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_dosen')->update(['sangat_baik' => ++$row["sangat_baik"]], ['id' => $input["id"]]);
                    break;
                case "2":
                    $query = $this->db->query("SELECT baik FROM survey_dosen WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_dosen')->update(['baik' => ++$row["baik"]], ['id' => $input["id"]]);
                    break;
                case "3":
                    $query = $this->db->query("SELECT cukup FROM survey_dosen WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_dosen')->update(['cukup' => ++$row["cukup"]], ['id' => $input["id"]]);
                    break;
                case "4":
                    $query = $this->db->query("SELECT buruk FROM survey_dosen WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_dosen')->update(['buruk' => ++$row["buruk"]], ['id' => $input["id"]]);
                    break;
                default:
                    $query = $this->db->query("SELECT sangat_buruk FROM survey_dosen WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_dosen')->update(['sangat_buruk' => ++$row["sangat_buruk"]], ['id' => $input["id"]]);
            }
        }
        $this->db->transComplete();

        return $this->db->transStatus();
    }


    function getAll()
    {
        $builder = $this->db->table('survey_dosen');
        $builder->orderBy('pertanyaan', 'DESC');
        $query = $builder->get();

        return $query->getResult();
    }

    //Get Where Id
    function getAllInputDosen($id)
    {
        $builder = $this->db->table('survey_dosen');
        $query = $builder->getWhere(['id_dosen' => $id]);

        return $query;
    }

    function getAllByPertanyaan($pertanyaan)
    {
        $builder = $this->db->table('survey_dosen');
        $query = $builder->getWhere(['pertanyaan' => $pertanyaan]);

        return $query;
    }

    public function selectSangatBaik($pertanyaan)
    {
        $builder = $this->db->table('survey_dosen');
        $builder->selectSum('sangat_baik')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectBaik($pertanyaan)
    {
        $builder = $this->db->table('survey_dosen');
        $builder->selectSum('baik')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectCukup($pertanyaan)
    {
        $builder = $this->db->table('survey_dosen');
        $builder->selectSum('cukup')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectburuk($pertanyaan)
    {
        $builder = $this->db->table('survey_dosen');
        $builder->selectSum('buruk')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectsangatBuruk($pertanyaan)
    {
        $builder = $this->db->table('survey_dosen');
        $builder->selectSum('sangat_buruk')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }

    public function truncateTableLg()
    {
        $builder = $this->db->table('survey_dosen');

        $builder->truncate();

        return $builder;
    }
}
