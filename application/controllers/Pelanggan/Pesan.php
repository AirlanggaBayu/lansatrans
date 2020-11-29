<?php
class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud');
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['admin'] = $this->crud->tampil_data('admin')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin', $data);
        $this->load->view('template_admin/footer');
    }

    public function pesan()
    {

        
        $this->load->view('Kode_otomatis', $data);

        $this->load->view('Pelanggan/Pesan', $data);
    }
}
