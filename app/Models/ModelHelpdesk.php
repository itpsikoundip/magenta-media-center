<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHelpdesk extends Model
{
    protected $table = 'tiket';
	// public function __construct(ConnectionInterface &$db) {
	// 	$this->db =& $db;
	// }

	function insertTiket($data) {
		return $this->db->table('tiket')->insert($data);
	}

    function getRiwayat($nim){
        $riwayat = $this->db->table('tiket')->where('mahasiswa_id', $nim)->orderBy('created_at', 'desc')->get();
        return $riwayat->getResult();
    }

	function countRiwayat($nim){
		$riwayat = $this->db->table('tiket')->select('*')->where('mahasiswa_id', $nim)->countAllResults();
        return $riwayat;
	}
}
