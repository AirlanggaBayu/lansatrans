<?php 

class Pemesanan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
	}

	function index(){
		$data['pemesanan'] = $this->m_data->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_tampil',$data);
		$this->load->view('template/footer');
	}
}
?>
<!-- Dibuat oleh sinyo -->
<!-- Diedit oleh : Dodhy -->