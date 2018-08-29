<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
* 
*/
class admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kuale');
	}
	
	public function index()
	{
		$data['data'] = $this->kuale->selectAll('tb_menu')-> 
		result_object();
		

		//$this->load->view('admin/header');
		$this->load->view('admin/data', $data);
		//$this->load->view('admin/footer');

	}
	
	public function upload()
	{
		$this->load->view('admin/upload');
	}

	public function aupload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '10000';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			echo "Upload Gagal";	

		
		}
		else{
			$img = $this->upload->data();
			$foto = $img['file_name'];
			$data = array('nama_menu' => $this->input->post('nama_menu'),
					  'harga' => $this->input->post('harga'),
					  'kategori' => $this->input->post('kategori'),
					  'foto' => $foto);
		  

		$query = $this->kuale->insert('tb_menu',$data);
		redirect('admin/index','refresh');


				}
	}			

	public function edit($id_menu)
	{
		$data['r'] = $this->kuale->select('tb_menu', array('id_menu'
				   => $id_menu))->row();
		$this->data['kuale'] = $this->db->get('tb_menu')->result_array();
		$this->load->view('admin/edit', $data);

	}

	public function aedit()
	{
		
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '10000';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			echo "Upload Gagal";	

		
		}
		else{
			$img = $this->upload->data();
			$foto = $img['file_name'];
			$id_menu = array('id_menu' => $this->input->post('id_menua'));
			$data = array('nama_menu' => $this->input->post('nama_menu'),
					  'harga' => $this->input->post('harga'),
					  'kategori' => $this->input->post('kategori'),
					  'foto' => $foto);

		 $query = $this->kuale->update('tb_menu',$data,$id_menu);
		redirect('admin/index','refresh');

	}}

	public function hapus($id)
	{
		$data = array('id_menu' => $id);
		$query = $this->kuale->delete('tb_menu',$data);
		redirect('admin/index','refresh');
	}
	
	public function pelayan()
	{
		$data['data'] = $this->kuale->selectAll('tb_pesanan') -> 
		result_object();

		
		//$this->load->view('admin/header');
		$this->load->view('admin/pelayan2',$data);
		//$this->load->view('admin/footer');
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user/index', $data);
	}
	public function pesan()
	{
		 $data['detail'] = $this->kuale->getmenu();
		 $data['sumjumlah'] = $this->kuale->getsum();
		 //$data['detail'] = $this->kuale->selectAll('tb_detail_pesanan')->
		//result_object();
		$data['data'] = $this->kuale->selectAll('tb_menu')-> 
		result_object();
		
		$this->load->view('admin/tpesan', $data);

		

						/*$data = array('makanan' => $this->input->post('makanan'),
					  'harga_makanan' => $this->input->post('harga_makanan'));

					   $query = $this->kuale->insert('tb_pesanan', $data);
					   redirect('admin/pelayan','refresh');*/
	}
	
	public function apesan()
	{

		$data = array('id_detail_pesanan' => $this->input->post('id_detail_pesanan'),
					  'id_menu' => $this->input->post('id_menu'),
					  'nama_pesanan' => $this->input->post('nama_pesanan'),
					  'harga_satuan' => $this->input->post('harga_satuan'),
					  'jml_porsi' => $this->input->post('jml_porsi'),
					  'subtotal' => $this->input->post('subtotal'));
		$query = $this->kuale->insert('tb_detail_pesanan',$data);
		
		redirect('admin/pesan');
		/*$data = array('minuman' => $this->input->post('minuman'),
					  'harga_minuman' => $this->input->post('harga_minuman'));

					   $query = $this->db->query('insert tb_pesanan into (no_meja ,minuman, harga_minuman)
					    select minuman, harga_minuman from tb_minuman');*/
	}
	
	public function selesai()
	{

		$data = array('id_pesanan' => $this->input->post('id_pesanan'),
					  'no_meja' => $this->input->post('no_meja'),
					  'tgl_pesan' => $this->input->post('tgl_pesan'),
					  'total' => $this->input->post('total'));
		$this->kuale->selesai();
		redirect('admin/pelayan','refresh');
	}
	
	public function hapus2($id)
	{
		$data = array('id_menu' => $id);
		$query = $this->kuale->delete('tb_detail_pesanan',$data);
		redirect('admin/pesan','refresh');
	}


	public function kasir()
	{
		$data['data'] = $this->kuale->selectAll('tb_order')-> 
		result_object();
		//$this->load->view('admin/header');
		$this->load->view('admin/kasir', $data);
		//$this->load->view('admin/footer');*/
	}

	

	
	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */