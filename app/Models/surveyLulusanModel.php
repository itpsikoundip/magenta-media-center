<?php

namespace App\Models;

use CodeIgniter\Model;

class surveyLulusanModel extends Model
{

    protected $table = 'survey_lulusan';


    public function getItemById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function addData($data)
    {
        return $this->db->table('survey_lulusan')->insert($data);
    }

    public function deleteData($id)
    {
        return $this->db->table('survey_lulusan')->delete(['id' => $id]);
    }

    public function editData($id)
    {
        return $this->db->table('survey_lulusan')->where(['id' => $id])->get()->getRowArray();
    }

    public function updateData($data, $id)
    {
        return $this->db->table('survey_lulusan')->update($data, ['id' => $id]);
    }

    public function inputSkor($arrayInput)
    {
        $this->db->transStart();
        foreach ($arrayInput as $input) {
            switch ($input["value"]) {
                case "1":
                    $query = $this->db->query("SELECT sangat_baik FROM survey_lulusan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_lulusan')->update(['sangat_baik' => ++$row["sangat_baik"]], ['id' => $input["id"]]);
                    break;
                case "2":
                    $query = $this->db->query("SELECT baik FROM survey_lulusan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_lulusan')->update(['baik' => ++$row["baik"]], ['id' => $input["id"]]);
                    break;
                case "3":
                    $query = $this->db->query("SELECT cukup FROM survey_lulusan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_lulusan')->update(['cukup' => ++$row["cukup"]], ['id' => $input["id"]]);
                    break;
                case "4":
                    $query = $this->db->query("SELECT buruk FROM survey_lulusan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_lulusan')->update(['buruk' => ++$row["buruk"]], ['id' => $input["id"]]);
                    break;
                default:
                    $query = $this->db->query("SELECT sangat_buruk FROM survey_lulusan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_lulusan')->update(['sangat_buruk' => ++$row["sangat_buruk"]], ['id' => $input["id"]]);
            }
        }
        $this->db->transComplete();

        return $this->db->transStatus();
    }

    function getAllInputLulusan()
    {
        $builder = $this->db->table('survey_lulusan');
        $query = $builder->get();

        return $query;
    }

    function getAllByPertanyaan($pertanyaan)
    {
        $builder = $this->db->table('survey_lulusan');
        $query = $builder->getWhere(['pertanyaan' => $pertanyaan]);

        return $query;
    }

    public function selectSangatBaik($pertanyaan)
    {
        $builder = $this->db->table('survey_lulusan');
        $builder->selectSum('sangat_baik')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectBaik($pertanyaan)
    {
        $builder = $this->db->table('survey_lulusan');
        $builder->selectSum('baik')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectCukup($pertanyaan)
    {
        $builder = $this->db->table('survey_lulusan');
        $builder->selectSum('cukup')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectburuk($pertanyaan)
    {
        $builder = $this->db->table('survey_lulusan');
        $builder->selectSum('buruk')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectsangatBuruk($pertanyaan)
    {
        $builder = $this->db->table('survey_lulusan');
        $builder->selectSum('sangat_buruk')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
}
