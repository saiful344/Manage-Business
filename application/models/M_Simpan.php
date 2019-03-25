<?php

class M_Simpan extends CI_Model{
	function input($table,$data){
		$this->db->insert($table,$data);
	}
	function get_data($table){
		return $this->db->get($table)->result_array();
	}
	function notif($table,$id){
				$this->db->where('user_id',$id);
		return $this->db->get($table)->num_rows();
	}
	function bidang($judul,$nama1,$type1,$nama2,$type2,$nama3,$type3,$lenght,$lenght2,$lenght3){

		$this->db->query("CREATE TABLE $judul
							(
							id int NOT NULL AUTO_INCREMENT KEY,
							$nama1 $type1,
							$nama2 $type2,
							$nama3 $type3($lenght3)
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
	function hapus($table,$id){
		$this->db->where('id',$id);
		$this->db->delete($table);
	}
	function terminate($table,$id){
		$data=[
			"status" => "terminate"
		];
		$this->db->where('id',$id);
		$this->db->update($table,$data);
	}
	function success($table,$id){
		$data=[
			"status" => "success"
		];
		$this->db->where('id',$id);
		$this->db->update($table,$data);
	}	
	function coba($table,$id){
		$data=[
			"status" => "masa"
		];
		$this->db->where('id',$id);
		$this->db->update($table,$data);
	}
	function gaji($table,$id,$data){
		$this->db->where('id',$id);
		$this->db->update($table,$data);
	}
	function hapus_tab($id){
		$this->db->query("DROP TABLE $id");
	}
	function login($username,$password){
		$cek =$this->db->where('username',$username)->limit(1)->get('user');
		if ($cek->num_rows() > 0) {
			$isi = $cek->row('password');
			if (password_verify($password,$isi)) {
				return $cek->row();
			} else {
				echo "Sorry Your is Hacker";
			}
		}
	}
	function get_where_in($id){
		$this->db->from('chat');
		$this->db->where('user_id',$id);
		$this->db->select('user.username,chat.pesan,chat.user_id,chat.admin_id');
		$this->db->select('count(chat.user_id) as total');
		$this->db->join('user','chat.admin_id = user.id');
		$this->db->group_by('chat.admin_id');
		return $this->db->get()->result_array();
	}
	function ambil_perdata($id,$id_2){
		$this->db->from('chat');
		$this->db->where('user_id', $id);
		$this->db->or_where('user_id', $id_2); 
		$this->db->select('user.nama,chat.pesan,chat.user_id,chat.admin_id,chat.date');
		$this->db->select('count(chat.user_id) as total');
		$this->db->join('user','chat.user_id = user.id');
		$this->db->group_by('chat.id');
		$this->db->order_by('chat.date');
		return $this->db->get()->result_array();
	}
}