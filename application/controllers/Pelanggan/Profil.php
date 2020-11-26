<?php

class Profil extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/profil');
        $this->load->view('template_pelanggan/footer');
    }
}


?>