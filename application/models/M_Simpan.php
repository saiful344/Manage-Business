<?php

class M_Simpan extends CI_Model{
	function input($table,$data){
		$this->db->insert($table,$data);
	}
	function get_data($table){
		return $this->db->get($table)->result_array();
	}
	function bidang($judul,$nama1,$type1,$nama2,$type2,$nama3,$type3,$lenght,$lenght2,$lenght3){

		$this->db->query("CREATE TABLE $judul
							(
							id     int NOT NULL AUTO_INCREMENT KEY,
							$nama1 $type1($lenght),
							$nama2 $type2 $lenght2,
							$nama3 $type3 ($lenght3)
							);"
						);
	}
	function table(){
		return $this->db->query("show tables")->result();
	}
	function table_2($table){
		$table_1 = $this->db->query("desc $table");
		return $table_1->result_array();
	}
	function isi($table){
		return $this->db->get($table)->result_array();
	}
}