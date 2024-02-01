<?php 

class Model_laporan extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat'); 
		$invoice = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'username' => $this->session->userdata('username'),

		);
		$where = array(
			'id_invoice' => $id_invoice
		);
		return TRUE;
	}

	public function jointable($tgl_awal,$tgl_akhir){
						//echo $tgl_awal;
						//die();

		return $this->db->select('a.id_invoice, a.nama, c.tgl_bayar, c.jumlah_bayar')
						->from('invoice as a')
						->join('pembayaran as c','a.id_invoice = c.id_invoice')
						//->where('c.tgl_bayar >=', $tgl_awal)
						//->where('c.tgl_bayar <=', $tgl_akhir)
						->where('c.tgl_bayar between '.$tgl_awal.' AND '.$tgl_akhir)
						->get()
						->result();
	}


	public function jointable2(){

		return $this->db->select('a.id_invoice, b.nama, c.tgl_bayar, d.jumlah_bayar')
						->from('invoice as a')
						->join('invoice as b','a.id_invoice = b.id_invoice','LEFT')
						->join('pembayaran as c','a.id_invoice = c.id_invoice','LEFT')
						->join('pembayaran as d','a.id_invoice = d.id_invoice','LEFT')
						->get()
						->result();
	}

	public function tampil_data2(){
		$this->db->where("id_invoice", "desc");
		$result = $this->db->get('tb_pesanan');
		if($result->num_rows() > 0){
			return $result->result();
		} else{
			return false;
		}
	}

	public function tampil_data(){
		$this->db->order_by("id_invoice", "desc");
		$result = $this->db->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();
		} else{
			return false;
		}
	}
}