<?php

class Pemesanan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->model('Kode');
		$this->load->model('crud');
		$this->load->model('mobil');
		$this->load->model('rute');
	}

	function index()
	{
		$data['pemesanan'] = $this->crud->tampil_data('pemesanan');
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('v_tampil', $data);
		$this->load->view('template_admin/footer');
	}

	public function pesan()
	{
		// echo $this->input->post('rute');
		$data['kodee'] = $this->Kode->kodee();
		$data['tampil'] = $this->Kode->tampil();
		$data['cats'] = $this->mobil->get_category();
		$data['rute'] = $this->rute->category();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('Pesan', $data);
		$this->load->view('template_admin/footer');
	}

	public function prosesRute()
	{
		// $rute = $this->input->get('rute');
		$rute = $this->input->post('rute');

		$query = $this->rute->get_data_barang_bykode($rute);
		echo json_encode($query);
	}

	function tambah_data()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$id_mobil = $this->input->post('id_mobil');
		$id_rute = $this->input->post('id_rute');
		$kelas = $this->input->post('kelas');
		$kode_pesan = $this->input->post('kode_pesan');
		$jumlah = $this->input->post('jumlah');
		$harga_total = $this->input->post('harga_total');
		$tgl_pesan = $this->input->post('tgl_pesan');
		$tgl_berangkat = $this->input->post('tgl_berangkat');
		$alamat_jemput = $this->input->post('alamat_jemput');
		$no_telp = $this->input->post('no_telp');
		$jam = $this->input->post('jam');
		$status = $this->input->post('status_bayar');

		$data = array(
			'id_pelanggan' => $id_pelanggan,
			'nama_pelanggan' => $nama_pelanggan,
			'id_mobil' => $id_mobil,
			'id_rute' => $id_rute,
			'kelas' => $kelas,
			'no_telp' => $no_telp,
			'kode_pesan' => $kode_pesan,
			'jumlah' => $jumlah,
			'harga_total' => $harga_total,
			'tgl_pesan' => $tgl_pesan,
			'tgl_berangkat' => $tgl_berangkat,
			'alamat_jemput' => $alamat_jemput,
			'jam' => $jam,
			'status_bayar' => $status,

		);

		$this->crud->tambah_data($data, 'pemesanan');
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('flash', 'Ditambahkan');
		}
		redirect('Admin/Pemesanan/pesan');
	}
	public function konfirm($id)
	{
		$where = array('id_pemesanan' => $id);
		$data['pemesanan'] = $this->db->query(" SELECT * FROM pemesanan p WHERE 
		p.id_pemesanan='$id'")->result();
		$data['cats'] = $this->mobil->get_category();
		$data['rute'] = $this->rute->category();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('Konfirmbayar', $data);
		$this->load->view('template_admin/footer');
	}
}
