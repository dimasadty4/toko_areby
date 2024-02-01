<?php 

class Invoice extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') !='1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Login untuk melanjutkan!
					<button type="button" class="close" data-dismiss="alert" aria-label="close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('auth/login');
		}
	}
	
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update($id_invoice){
		$id 			= $id_invoice;
		$status 	= $this->input->post('status');

		$data = array(
			///'id' => $id,
			'status' => $status,

		);

		$where = array(
			'id_invoice' => $id_invoice
		);

		$this->model_invoice->edit_invoice($where,$data,'invoice');
		redirect('admin/invoice/index');
	}

	public function detail($id_invoice){
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$data['pembayaran'] = $this->model_pembayaran->ambil_id_pembayaran($id_invoice);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice',$data);
		$this->load->view('templates_admin/footer');
	}
}