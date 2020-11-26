<?php

class Histori extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/histori');
        $this->load->view('template_pelanggan/footer');
    }

    function detail_histori(){
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/detail_histori');
        $this->load->view('template_pelanggan/footer');
    }
}


?>