<?php

namespace App\Models\Survey;

use CodeIgniter\Model;

class surveyKependModel extends Model
{

    protected $table = 'survey_kependidikan';

    public function addData($data)
    {
        return $this->db->table('survey_kependidikan')->insert($data);
    }

    public function deleteData($pertanyaan)
    {
        return $this->db->table('survey_kependidikan')->delete(['pertanyaan' => $pertanyaan]);
    }

    public function inputSkor($arrayInput)
    {
        $this->db->transStart();
        foreach ($arrayInput as $input) {
            switch ($input["value"]) {
                case "1":
                    $query = $this->db->query("SELECT sangat_baik FROM survey_kependidikan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_kependidikan')->update(['sangat_baik' => ++$row["sangat_baik"]], ['id' => $input["id"]]);
                    break;
                case "2":
                    $query = $this->db->query("SELECT baik FROM survey_kependidikan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_kependidikan')->update(['baik' => ++$row["baik"]], ['id' => $input["id"]]);
                    break;
                case "3":
                    $query = $this->db->query("SELECT cukup FROM survey_kependidikan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_kependidikan')->update(['cukup' => ++$row["cukup"]], ['id' => $input["id"]]);
                    break;
                case "4":
                    $query = $this->db->query("SELECT buruk FROM survey_kependidikan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_kependidikan')->update(['buruk' => ++$row["buruk"]], ['id' => $input["id"]]);
                    break;
                default:
                    $query = $this->db->query("SELECT sangat_buruk FROM survey_kependidikan WHERE id = ?", $input["id"]);
                    $row = $query->getRowArray();

                    $this->db->table('survey_kependidikan')->update(['sangat_buruk' => ++$row["sangat_buruk"]], ['id' => $input["id"]]);
            }
        }
        $this->db->transComplete();

        return $this->db->transStatus();
    }

    function getAll()
    {
        $builder = $this->db->table('survey_kependidikan');
        $builder->orderBy('pertanyaan', 'DESC');
        $query = $builder->get();

        return $query->getResult();
    }

    function getAllInputKepend($id)
    {
        $builder = $this->db->table('survey_kependidikan');
        $query = $builder->getWhere(['id_kepend' => $id]);

        return $query;
    }

    public function selectSangatBaik($pertanyaan)
    {
        $builder = $this->db->table('survey_kependidikan');
        $builder->selectSum('sangat_baik')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectBaik($pertanyaan)
    {
        $builder = $this->db->table('survey_kependidikan');
        $builder->selectSum('baik')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectCukup($pertanyaan)
    {
        $builder = $this->db->table('survey_kependidikan');
        $builder->selectSum('cukup')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectburuk($pertanyaan)
    {
        $builder = $this->db->table('survey_kependidikan');
        $builder->selectSum('buruk')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }
    public function selectsangatBuruk($pertanyaan)
    {
        $builder = $this->db->table('survey_kependidikan');
        $builder->selectSum('sangat_buruk')->where('pertanyaan', $pertanyaan);
        $query = $builder->get();
        return $query;
    }

    public function truncateTableLg()
    {
        $builder = $this->db->table('survey_kependidikan');

        $builder->truncate();

        return $builder;
    }
}
