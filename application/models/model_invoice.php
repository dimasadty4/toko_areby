<?php 

class Model_invoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$gambar = '';

		$query = $this->db->query("SELECT MAX(id_invoice) as idinvoice from invoice");
        $hasil = $query->row();
		$kdinvmax = $hasil->idinvoice;
		$urutan = (int) substr($kdinvmax, 3, 3);
		$urutan++;
		$huruf = "IN";
		$kodeInvoice = $huruf . sprintf("%03s", $urutan);
		

		$invoice = array(
			'id_invoice' => $kodeInvoice,
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'status' => 0,
			'bukti_tf' => $gambar,
			'username' => $this->session->userdata('username'),
		);
		$this->db->insert('invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice' => $kodeInvoice,
				'id_barang' => $item['id'],
				'nama_barang' => $item['name'],
				'ukuran' => $item['ukuran'],
				'jumlah' => $item['qty'],
				'harga' => $item['price'],

			);
			$this->db->insert('tb_pesanan', $data);
		}

		return TRUE;
	}

	public function upload_pembayaran($username)
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama_pembayar = $this->input->post('nama_pembayar');
		$id_invoice = $this->input->post('id_invoice');
		$nama_bank = $this->input->post('nama_bank');
		$jumlah_bayar = $this->input->post('jumlah_bayar');
		$gambar = $_FILES['bukti_tf']['name'];
		if ($gambar = ''){}else{
			$config ['upload_path'] = './bukti_tf/';
			$config ['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('bukti_tf')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				echo "Gagal Upload Gambar!";
			}else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$pembayaran = array(
			'id_pembayaran' => '',
			'id_invoice' => $id_invoice,
			'nama_pembayar' => $nama_pembayar,
			'nama_bank' => $nama_bank,
			'tgl_bayar' => date('Y-m-d H:i:s'),
			'jumlah_bayar' => $jumlah_bayar,
			'bukti_bayar' => $gambar,
			//'username' => $this->session->userdata('username'),
		);
		$this->db->insert('pembayaran', $pembayaran);
		
		
		return TRUE;
	}


	public function edit_invoice($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
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

	public function ambil_id_invoice($id_invoice){
		$result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else {
			return false;
		}
	}


	public function ambil_username_invoice2($username,$id){
		$result = $this->db->where('username', $username)->where('id_invoice',$id)->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function ambil_username_invoice($username){
		$this->db->order_by("id_invoice", "desc");
		$result = $this->db->where('username', $username)->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function ambil_id_pesanan($id_invoice){
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function ambil_id_pembayaran($id_invoice){
		$result = $this->db->where('id_invoice', $id_invoice)->get('pembayaran');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function jointable2(){
		$this->db->select('invoice.id_invoice, tb_pesanan.id_invoice')
				->from('invoice')
         		->join('pembayaran', 'pembayaran.id_invoice=invoice.id_invoice');
		$data = $this->db->get();
	}
}