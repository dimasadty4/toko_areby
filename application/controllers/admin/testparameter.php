<?php

class Testparameter extends CI_Controller{

	public function coba(){
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		
		$tgl_awal = str_replace("-", "", $tgl_awal);
		$tgl_akhir = str_replace("-", "", $tgl_akhir);

		$data['invoice'] = $this->db->query("SELECT * FROM invoice  ORDER BY id_invoice DESC")->result();
		$data['jointable'] = $this->model_laporan->jointable($tgl_awal,$tgl_akhir);

	$this->load->view('admin/cetak_laporan',$data);
	}
}