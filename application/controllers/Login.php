<?php

class Login extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('M_Simpan');
	}
	function index(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE ) {
			$this->load->view('login');
		} else{
			$username =$this->input->post('username');
			$password =$this->input->post('password');
			$cek_user = $this->M_Simpan->login($username,$password);
			if ($cek_user == FALSE) {
				$this->session->set_flashdata('flash','login');
				redirect('login');
			} else {
				$cek_user =$this->M_Simpan->login($username,$password);
				if ($cek_user == FALSE) {
					print_r("anda hecker");
				} else {
					$this->session->set_userdata('username',$cek_user->username);
					$this->session->set_userdata('level',$cek_user->level);
					switch ($cek_user->level) {
						case 'user':
							print_r("Maaf Laman belum ada");
							break;
						case 'admin':
						$this->session->set_userdata('username',$cek_user->username);
						$this->session->set_userdata('id',$cek_user->id);
							redirect('welcome');
							break;
						default:break;
					}
				}
			}
		}
		
	}
	function log_out(){
		$this->session->sess_destroy();
		redirect('login');
	}
}