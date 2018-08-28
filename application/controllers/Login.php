<?php
defined('BASEPATH') OR exit ('No direct access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kuale');

		$this->load->helper('form');

		$this->load->library('form_validation');

		$this->load->library('session');

	}
	public function ceklogin()
	{
		$session_set_value = $this->session->all_userdata();
		if(isset($session_set_value['remember_me']) && $session_set_value['remember_me'] == "1") {
			}else{
				$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
				$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
				if($this->form_validation->run() == FALSE) {
					//$this->load->view('user/login');
				}else{
					if(isset($_POST['login'])){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$remember = $this->input->post('remember_me');
		if ($remember){
			$this->session->set_userdata('remember_me', TRUE);
		}
		$sess_data = array(
					'username' => $username,
					'password' => $password
		);
		$this->session->set_userdata('logged_in', $sess_data);
		$this->load->view('admin/login');
		$cek = $this->kuale->proseslogin($username,$password);

		$hasil = count($cek);
		if($hasil > 0){
			$pelogin = $this->db->get_where('user',array('username' => $username, 'password' => $password))->row();
			if($pelogin->level == 'admin'){
				redirect('admin/index');
			}elseif($pelogin->level == 'pelayan'){
				redirect('admin/pelayan');
			}elseif($pelogin->level == 'kasir'){
				redirect('admin/kasir');
			}
		}
		
		else{
			echo"<script> alert('Username atau Password anda salah');
				window.history.back();</script>";
			}
	
		}
	} 
}
		
	}	
}