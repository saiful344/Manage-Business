<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('Nav');
		$this->load->model("M_Simpan");
	}
	public function index()
	{
		$data['content']=$this->M_Simpan->get_data('laba');
		$data['active1']="active";
		$data['active2']="";
		$data['active3']="";
		$data['active4']="";
		$this->nav->isi('laman/index',$data);
	}
	public function kolkul()
	{
		$data['active1']="";
		$data['active2']="active";
		$data['active3']="";
		$data['active4']="";
		$this->nav->isi('laman/kolkul',$data);
	}
	public function simpan(){
		$data=[
			"nama" 		=> $this->input->post("nama"),
			"modal" 	=> $this->input->post("modal"),
			"untung_h"  => $this->input->post("untung_h"),
			"waktu"  	=> $this->input->post("waktu"),
			"untung"    => $this->input->post("untung"),
			"modal_b"	=> $this->input->post("modal_b"),
			"menit"		=> $this->input->post("menit"),
			"detik"	    => $this->input->post("detik"),
			"hari"  	=> $this->input->post("hari"),
			"minggu"	=> $this->input->post("minggu"),
			"bulan"		=> $this->input->post("bulan")
		];
		$this->M_Simpan->input('laba',$data);
		redirect("welcome");
	}
	public function manage()
	{
		$data['active1']="";
		$data['active2']="";
		$data['active3']="active";
		$data['active4']="";
		$data['table'] =$this->M_Simpan->table();
		// print_r($isi);
		$this->nav->isi('laman/manage',$data);
	}
	public function create(){
		$data['active1']="";
		$data['active2']="";
		$data['active3']="active";
		$data['active4']="";
		$this->nav->isi('laman/create/create',$data);
	}
	function bidang(){
		$judul=$this->input->post('bidang');
		$nama1 = $this->input->post('nama');
		$type1 =$this->input->post("select");
		$nama2 = $this->input->post('nama2');
		$type2 =$this->input->post("select2");
		$nama3 = $this->input->post('nama3');
		$type3 =$this->input->post("select3");
		$lenght  	=$this->input->post("lenght");
		$lenght2 	=$this->input->post("lenght2");
		$lenght3	=$this->input->post("lenght3");


		$this->M_Simpan->bidang($judul,$nama1,$type1,$nama2,$type2,$nama3,$type3,$lenght,$lenght2,$lenght3);
		redirect('welcome/manage');
	}
	function data_b($table){
		$data['active1']="";
		$data['active2']="";
		$data['active3']="active";
		$data['active4']="";
		$data['table']  =$this->M_Simpan->table_2($table);
		$data['isi']    =$this->M_Simpan->isi($table);
		// print_r($data['isi'] );
		$this->nav->isi('laman/create/bidang',$data);
		// print_r($data['table']);
	}
	function target(){
		$data['active1']="";
		$data['active2']="";
		$data['active3']="";
		$data['active4']="active";
		$this->nav->isi('laman/target',$data);
	}

}
