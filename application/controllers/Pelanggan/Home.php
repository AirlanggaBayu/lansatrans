<?php

class Home extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('crud');
    }

    function index(){
        $this->load->view('pelanggan/home');
    }

    function rute_travel(){
        
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/rute_travel');
        $this->load->view('template_pelanggan/footer');
    }

    function ekonomi(){
        $data['rute'] = $this->crud->detail_data(['kelas' => 'ekonomi'], 'rute')->result();
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/ekonomi', $data);
        $this->load->view('template_pelanggan/footer');
    }

    function eksekutif(){
        $data['rute'] = $this->crud->detail_data(['kelas' => 'eksekutif'], 'rute')->result();
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/eksekutif', $data);
        $this->load->view('template_pelanggan/footer');
    }
}


?>