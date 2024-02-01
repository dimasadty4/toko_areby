<?php

class Dashboard extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') !='2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Login untuk melanjutkan!
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('auth/login');
		}
	}

	public function tambah_ke_keranjang($id){
		$barang = $this->model_barang->find($id);
		$cekstok = $this->model_barang->get_stok($id);
		$ukuran = $this->input->post('ukuran');
		$stok = $this->input->post('jumlah_brg');
		print_r($barang->stok);
		if ($barang->stok > $stok){
			$data = array(
			'id'		=> $barang->id_barang,
			'qty'		=> $stok,
			'ukuran'	=> $ukuran,
			'price'		=> $barang->harga,
			'name'		=> $barang->nama_barang,
			);
			

			$this->cart->insert($data);
			redirect('welcome');
		}else{
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Stok Tidak Mencukupi!');
				window.location.href='http://localhost/toko_areby/index.php/welcome';
		    </script>");

		}

	}

	public function detail_keranjang(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function riwayat_pesanan(){
		$username = $this->session->userdata('username');
		$data['invoice'] = $this->model_invoice->ambil_username_invoice($username);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('riwayat_pesanan',$data);
		$this->load->view('templates/footer');
	}

	public function riwayat_detail($id){
		$username = $this->session->userdata('username');
		$data['invoice'] = $this->model_invoice->ambil_username_invoice2($username,$id);
		$data['tb_pesanan'] = $this->model_invoice->ambil_id_pesanan($id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('riwayat_detail',$data);
		$this->load->view('templates/footer');	
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('welcome');
	}

	public function pesanan(){
		$username = $this->session->userdata('username');
		$data['tb_pelanggan'] = $this->model_profil->tampil_data($username);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pesanan',$data);
		$this->load->view('templates/footer');
	}

	public function proses_pesanan(){
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		} else{
			echo "Maaf, pesanan anda gagal diproses";
		}
		
	}

	public function pembayaran(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran',$data);
		$this->load->view('templates/footer');
	}

	public function detail($id_barang){
		$data['barang'] = $this->model_barang->detail_barang($id_barang);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}

	public function update($id_invoice){
		$id 			= $id_invoice;
		$status 	= 2;

		$data = array(
			'status' => $status,

		);

		$where = array(
			'id_invoice' => $id
		);

		$this->model_invoice->edit_invoice($where,$data,'invoice');
		redirect('dashboard/riwayat_pesanan');
	}

	public function cetak_invoice($id){
		$username = $this->session->userdata('username');
		$data['invoice'] = $this->model_invoice->ambil_username_invoice($username,$id);
		$data['tb_pesanan'] = $this->model_invoice->ambil_id_pesanan($id);
		$data['pembayaran'] = $this->model_invoice->ambil_id_pembayaran($id);
		$this->load->view('cetak_invoice', $data);
	}
}