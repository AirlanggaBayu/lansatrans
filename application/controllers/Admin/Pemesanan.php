<?php 

class Pemesanan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
	}

	function index(){
		$data['pemesanan'] = $this->m_data->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('v_tampil',$data);
		$this->load->view('template_admin/footer');
	}
}
?>
<!-- Dibuat oleh sinyo -->
<!-- Diedit oleh : Dodhy -->