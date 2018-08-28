<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuale extends CI_Model {

	public function select($tabel,$where)
	{
		return $query = $this->db->get_where($tabel, $where);
	}

	public function selectAll($tabel)
	{
		return $query = $this->db->get($tabel);
	}

	public function update($tabel,$data,$where)
	{
		return $query = $this->db->update($tabel, $data, $where);
	}

	public function delete($tabel,$where)
	{
		return $query = $this->db->delete($tabel, $where);
	}
	public function insert($tabel,$data)
	{
		
		return $query = $this->db->insert($tabel, $data);
	}

	public function proseslogin($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user')->row();
	}
	public function getmenu()
	{
		$sql = "SELECT id_menu, nama_pesanan, harga_satuan, jml_porsi, (harga_satuan * jml_porsi) as subtotal FROM tb_detail_pesanan ORDER BY id_detail_pesanan ";
		return $this->db->query($sql);
	}
	public function getsum()
	{
		$this->db->select_sum('subtotal', 'total');
		$this->db->from('tb_detail_pesanan');
		return $this->db->get('')->row();
	}
	public function selesai($data)
	{
		$this->db->insert('tb_pesanan', $data);
		$last_id = $this->db->query("select id_pesanan from tb_pesanan order by id_pesanan desc")->row_array();
		$this->db->query("update tb_detail_pesanan set id_pesanan='".$last_id['id_pesanan']."' where status='0'");
		$this->db->query("update tb_detail_pesanan set status='1' where status='0'");	
	}
}

/* End of file kuale.php */
/* Location: ./application/models/kuale.php */
