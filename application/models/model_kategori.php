<?php

class Model_kategori extends CI_Model{
	public function data_kategori($id){
		return $this->db->get_where("barang",array('kategori' => $id));
	}
}