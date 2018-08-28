<?php

class Redo extends CI_Controller
{
	public function index()
	{
		echo "HELLO INDEX";
	}
	
	public function frame()
	{
		$this->load->view('Ci');
	}
	/*public function said()
	{
		echo "ini halaman index";
	}
	
	public function param($param1=null,$param2='')
	{
		echo "ini param 1 ".$param1. "dan ini param 2".$param2 ;
	}*/

}

