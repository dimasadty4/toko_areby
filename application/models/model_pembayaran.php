<?php

class Model_pembayaran extends CI_Model{
	public function ambil_id_pembayaran($id){
		$result = $this->db->where('id_invoice',$id)->get('pembayaran');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}
}