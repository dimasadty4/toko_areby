<?php

class Pembayaran extends CI_Controller{

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

	public function index($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran',$data);
		$this->load->view('templates/footer');
	}

	public function upload()
	{
		$username = $this->session->userdata('username');
		$is_processed = $this->model_invoice->upload_pembayaran($username);
		if($is_processed){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pembayaran');
			$this->load->view('templates/footer');
		} else{
			echo "Maaf, pesanan anda gagal diproses";
		}		
	}
}