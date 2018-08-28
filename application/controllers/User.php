<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kuale');
	}
	
	public function index()
	{
		$this->data['kuale'] = $this->db->get('tb_menu')->result_array();
		$this->load->view('user/header');
		$this->load->view('user/home',$this->data);
		$this->load->view('user/footer');
	}
	public function about()
	{
		$this->load->view('user/header2');
		$this->load->view('user/about');
		$this->load->view('user/footer');
	}
	public function menu()
	{
		$this->data['kuale'] = $this->db->get('tb_menu')->result_array();
		$this->load->view('user/header3');
		$this->load->view('user/menu',$this->data);
		$this->load->view('user/footer');
	}
	public function gallery()
	{
		$this->load->view('user/header4');
		$this->load->view('user/gallery');
		$this->load->view('user/footer');
	}
	public function login()
	{
		$this->load->view('user/header5');
		$this->load->view('user/login');
		//$this->load->view('user/footer');
		
	}

	public function test()
	{
		$this->load->view('user/test');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */