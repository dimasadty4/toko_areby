<?php 

class Model_admin extends CI_Model{
	public function index()
	{
		
	}

	public function tampil_data(){
		$this->db->order_by("id", "desc");
		return $this->db->get('tb_user');
	}

	public function tambah_admin($data, $table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}