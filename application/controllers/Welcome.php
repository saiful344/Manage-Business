<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata['level'] != 'admin') {
		// 	$this->session->set_flashdata('flash','login');
		// 	redirect('login');
		// }
		$this->load->library('Nav');
		$this->load->model("M_Simpan");
	}
	function ambil(){
		$content=$this->M_Simpan->get_data('laba');
		$tampil ="";
	   foreach ($content as $u ){
      if ($u['status'] == "terminate") { 
          $tampil .='<tr data-id="'.$u['id'].'"id="lala" class="list-group-item-action isi" style="background-color: pink;">';
       } elseif ($u['status'] == "success") {
         $tampil .= '<tr data-id="'.$u['id'].'"" id="lala" class="list-group-item-action isi"  style="background-color: #a9eca9;">';
      } else { 
      $tampil .= '<tr data-id="'.$u['id'].'"id="lala" class="list-group-item-action isi" >';
       } 
      $tampil .= '<td data-id="'.$u['id'].'"">'.$u['nama'].'</td>';
      $tampil .= '<td data-id="'.$u['id'].'">'.number_format($u['untung'],2,",",".").'</td>';
      $tampil .= '<td data-id="'.$u['id'].'" class="right aligned">'.number_format($u['modal_b'],2,",",".").'</td>';
      $tampil .=' <td  data-id="'. $u['id'].'" class="">
        '.number_format($u['hari'],2,",",".").'
      </td>';
      $tampil .='<td data-id="'.$u['id'].'" >'.number_format($u['minggu'],2,",",".").'</td>';
      $tampil .='<td data-id="'.$u['id'].'" >'.number_format($u['bulan'],2,",",".").'</td>
  	  </tr>';
	}
	echo $tampil;
}
	public function index()
	{
		$data['content']=$this->M_Simpan->get_data('laba');
		$data['active1']="active";
		$data['active2']="";
		$data['active3']="";
		$data['active4']="";
		$data['active5']="";
		$data['active6']="";
		$this->nav->isi('laman/index',$data);
	}
	public function kolkul()
	{
		$data['active1']="";
		$data['active2']="active";
		$data['active3']="";
		$data['active4']="";
		$data['active5']="";
		$data['active6']="";
		$this->nav->isi('laman/kolkul',$data);
	}
	public function simpan(){
		$data=[
			"status"    => "masa",
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
		$data['active5']="";
		$data['active6']="";
		$data['table'] =$this->M_Simpan->table();
		// print_r($isi);
		$this->nav->isi('laman/manage',$data);
	}
	public function create(){
		$data['active1']="";
		$data['active2']="";
		$data['active3']="active";
		$data['active4']="";
		$data['active5']="";
		$data['active6']="";
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
		$data['active5']="";
		$data['active6']="";
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
		$data['active5']="";
		$data['active6']="";
		$this->nav->isi('laman/target',$data);
	}
	function delete($id){
		$this->M_Simpan->hapus('laba',$id);
		redirect('welcome');
	}
	function gaji(){
		$data['active1']="";
		$data['active2']="";
		$data['active3']="";
		$data['active4']="";
		$data['active5']="active";
		$data['active6']="";
		$data['content']= $this->M_Simpan->get_data('Karyawan');
		$this->nav->isi('laman/gaji',$data);
	}
	function terminate($id){
		$this->M_Simpan->terminate('laba',$id);
		redirect('welcome');
	}
	function success($id){
		$this->M_Simpan->success('laba',$id);
		redirect('welcome');
	}
	function coba($id){
		$this->M_Simpan->coba('laba',$id);
		redirect('welcome');
	}
	function i($i,$gaji,$id){
		$data=[
			"$gaji" => $i
		];
		$this->M_Simpan->gaji('Karyawan',$id,$data);
		redirect("welcome/gaji");
	}
	function dalam($i,$gaji,$id){
		$data=[
			"$gaji" => $i
		];
		$this->M_Simpan->gaji('date',$id,$data);
		redirect("welcome/enroll");
	}
	function hapus($gaji,$id){
		$data=[
			"$gaji" => ""
		];
		$this->M_Simpan->gaji('Karyawan',$id,$data);
		redirect("welcome/gaji");
	}
	function hapus_tab($id){
		$this->M_Simpan->hapus_tab($id);
		redirect("welcome/manage");
	}
	function enroll(){
		$data['active1']="";
		$data['active2']="";
		$data['active3']="";
		$data['active4']="";
		$data['active5']="";
		$data['active6']="active";
		$data['content']=$this->M_Simpan->get_data('date');
		$this->nav->isi('laman/enroll',$data);
	}
	function notif($id){
		$data=$this->M_Simpan->notif('chat',$id);
		echo $data;
	}
	function tampil($id){
		$content = $this->M_Simpan->get_where_in($id);
	   $tampil ="";
	   foreach ($content as $u ){
      $tampil .= '<li class="list-group-item d-flex justify-content-between align-items-center " id="dan" data-id="'.$u['admin_id'].'" onclick="lala('.$u['admin_id'].')">
                   '.$u['username'].'
                     <span class="badge badge-primary badge-pill">'.$u['total'].'</span>
                  </li>';
	}
	echo $tampil ;
	}
	function tampil_isi($id,$id_2){
		$content = $this->M_Simpan->ambil_perdata($id,$id_2);
		// $content_2 = $this->M_Simpan->ambil_perdata_2($id,$id_2);
		$tampil ="";
		   foreach ($content as $u ){
		   	if ($u['user_id'] === $id) {
		   		$tampil .='<div class="d-flex justify-content-end mb-4"><div class="msg_cotainer_send">'.$u['pesan'].'<span class="msg_time_send">8:55 AM, Today</span></div></div>';
		   	} else {
		   	$tampil .='
	                  <div class="d-flex justify-content-start mb-4">
	                  <div class="msg_cotainer curent_message">
	                  '.$u['pesan'].'
	                  <span class="msg_time">8:40 AM, Today</span></div>
	                </div>
	               ';
		   }
	};
	// 	   foreach ($content_2 as $u ){
	// 	   	if ($u['user_id'] === $id) {
	// 	   		$tampil .='<div class="d-flex justify-content-end mb-4"><div class="msg_cotainer_send">'.$u['pesan'].'<span class="msg_time_send">8:55 AM, Today</span></div></div>';
	// 	   	} else {
	// 	   	$tampil .='
	//                   <div class="d-flex justify-content-start mb-4"></div>"
	//                   <div class="msg_cotainer curent_message">
	//                   '.$u['pesan'].'
	//                   <span class="msg_time">8:40 AM, Today</span></div>
	//                 </div>';
	// 	   }
	// }
	$tampil .='<input type="hidden" class="form-control" value="'.$id.'" id="saya">';
	$tampil .='<input type="hidden" class="form-control" value="'.$id_2.'" id="lawan">';
	echo $tampil;
}
function tampil_jajal($id,$id_2){
			$content_2 = $this->M_Simpan->ambil_perdata_2($id,$id_2);
			print_r($content_2);
}
function chat_masuk(){
	$pesan =$this->input->post('pesan');
	$saya  =$this->input->post('saya');
	$lawan =$this->input->post('lawan');

	$data=[
		'user_id'  => $saya,
		'admin_id' => $lawan,
		'pesan'    => $pesan
	];
	$this->M_Simpan->input('chat',$data);
}
 function cetak()
	{
		$data['content']=$this->M_Simpan->get_data('laba');
		$data['active1']="active";
		$data['active2']="";
		$data['active3']="";
		$data['active4']="";
		$data['active5']="";
		$data['active6']="";
		$this->load->view('laman/cetak',$data);
	}
}
