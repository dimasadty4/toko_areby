<?php

class Registrasi extends CI_Controller{

	public function index(){

		$this->form_validation->set_rules('nama','Nama','required',['required' => 'Nama tidak boleh kosong!']);
		$this->form_validation->set_rules('username','Username','required',['required' => 'Username tidak boleh kosong!']);
		$this->form_validation->set_rules('password_1','Password','required|matches[password_2]',['required' => 'Password tidak boleh kosong!',
			'matches' => 'Password tidak cocok!'
		]);
		$this->form_validation->set_rules('password_2','Password','required|matches[password_1]',['required' => 'Password tidak boleh kosong!']);
		
		$auth = $this->model_auth->cek_username($this->input->post('username'));



		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header');
		$this->load->view('registrasi');
		$this->load->view('templates/footer');
		}else {
			if ($auth) {
				echo "<script>
					alert('username sudah terpakai');
					window.location.href='index';
					</script>";
			}else{
			$data = array(
				'id' => '',
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password_1'),
				'role_id' => 2,
			);
			$data2 = array(
				'username' => $this->input->post('username'),
				'nama_pelanggan' => '',
				'alamat_pelanggan' => '',
				'no_hp' => '',
				'email' => '',
			);

			$this->db->insert('tb_user',$data);
			$this->db->insert('tb_pelanggan',$data2);
			redirect('auth/login');
		}
		}
	}
}