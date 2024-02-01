<?php

class Data_admin extends CI_Controller
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
		$data['tb_user'] = $this->model_admin->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_admin',
			$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_admin()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array (
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'role_id' => 1,
		);

		$this->model_admin->tambah_admin($data, 'tb_user');
		redirect('admin/data_admin/index');
	}

	public function edit_admin($id){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'role_id' => 1,
		);

		$where = array(
			'id' => $id
		);

		$this->model_admin->update_data($where,$data,'tb_user');
		redirect('admin/data_admin/index');
	}

	public function delete ($id){
		$where = array('id' => $id);
		$this->model_admin->hapus_data($where, 'tb_user');
		redirect('admin/data_admin/index');
	}
}