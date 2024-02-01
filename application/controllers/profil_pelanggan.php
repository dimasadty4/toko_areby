<?php

class Profil_pelanggan extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') !='2'){
			die();
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
		$username = $this->session->userdata('username');
		$data['tb_pelanggan'] = $this->model_profil->tampil_data($username);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('profil',$data);
		$this->load->view('templates/footer');
	}

	public function edit_profil(){
		$nama = $this->input->post('nama_pelanggan');
		$alamat = $this->input->post('alamat_pelanggan');
		$no_hp = $this->input->post('no_hp');
		$username = $this->session->userdata('username');
		$email = $this->input->post('email');
		$data = array(
			'nama_pelanggan' => $nama,
			'alamat_pelanggan' => $alamat,
			'no_hp' => $no_hp,
			'email' => $email,
		);

		$where = array(
			'username' => $username
		);

		$this->model_profil->update_data($where,$data,'tb_pelanggan');
		redirect('profil_pelanggan/index');
	}
}