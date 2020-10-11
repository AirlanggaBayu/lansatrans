<?php
class Sopir extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('tambah_sopir');
        $this->load->view('template_admin/footer');
    }
}
