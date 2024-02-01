<?php 

class Model_profil extends CI_Model{
	public function index()
	{
		$tb_pelanggan = array(
			'nama_pelanggan' => $nama,
			'alamat_pelanggan' => $alamat,
			'no_hp' => $no_hp,
			'email' => $email,
			'username' => $this->session->userdata('username'),
		);
		$this->db->insert('tb_user', $tb_user);
		$username = $this->db->insert_id();

		foreach ($this->db->contents() as $item){
			$data = array(
			'nama_pelanggan' => $nama,
			'alamat_pelanggan' => $alamat,
			'no_hp' => $no_hp,
			'email' => $email,
			'username' => $this->session->userdata('username'),

			);
			$this->db->insert('tb_pelanggan', $data);
		}

		return TRUE;
	}

	public function tampil_data($username){
	$result = $this->db->where('username', $username)->get('tb_pelanggan');
	if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}