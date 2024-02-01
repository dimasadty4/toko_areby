<?php

class Kategori extends CI_Controller
{
	public function list_kategori($tes=null){
		$id = $this->uri->segment('3');
		$data['list_kategori'] = $this->model_kategori->data_kategori($id)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('list_kategori',$data);
		$this->load->view('templates/footer');
	}
}