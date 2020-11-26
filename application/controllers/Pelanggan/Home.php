<?php

class Home extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('pelanggan/home');
    }

    function rute_travel(){
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/rute_travel');
        $this->load->view('template_pelanggan/footer');
    }

    function tarif_travel(){
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/tarif_travel');
        $this->load->view('template_pelanggan/footer');
    }
}


?>