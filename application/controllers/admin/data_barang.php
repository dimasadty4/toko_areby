<?php

class Data_barang extends CI_Controller
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

	public function cekkodebarang()
    {
        $query = $this->db->query("SELECT MAX(id_barang) as idbarang from barang");
        $hasil = $query->row();
        return $hasil->idbarang;
    }
	
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang',
			$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$query = $this->db->query("SELECT MAX(id_barang) as idbarang from barang");
        $hasil = $query->row();
		$kdbrngmax = $hasil->idbarang;
		$urutan = (int) substr($kdbrngmax, 3, 3);
		$urutan++;
		$huruf = "BR";
		$kodeBarang = $huruf . sprintf("%03s", $urutan);
		

		$nama_barang = $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$kategori = str_replace(' ', '_', $kategori);
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $_FILES['gambar'];
		if ($gambar = ''){}else{
			$config ['upload_path'] = './assets/img/produk';
			$config ['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gagal Upload Gambar!";
			}else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array (
			'id_barang' => $kodeBarang,
			'nama_barang' => $nama_barang,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar,
		);

		$this->model_barang->tambah_barang($data, 'barang');
		redirect('admin/data_barang/index');
	}

	public function edit($id){
		$where = array('id_barang' => $id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang',
			$data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id 			= $this->input->post('id_barang');
		$nama_barang 	= $this->input->post('nama_barang');
		$keterangan 	= $this->input->post('keterangan');
		$kategori 		= $this->input->post('kategori');
		$harga 			= $this->input->post('harga');
		$stok 			= $this->input->post('stok');

		$data = array(
			'nama_barang' => $nama_barang,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
		);

		$where = array(
			'id_barang' => $id
		);

		$this->model_barang->update_data($where,$data,'barang');
		redirect('admin/data_barang/index');
	}

	public function delete ($id){
		$where = array('id_barang' => $id);
		$this->model_barang->hapus_data($where, 'barang');
		redirect('admin/data_barang/index');
	}

	public function preview_barang($id_barang){
		$data['barang'] = $this->model_barang->detail_barang($id_barang);

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/preview_barang', $data);
		$this->load->view('templates_admin/footer');
	}


}