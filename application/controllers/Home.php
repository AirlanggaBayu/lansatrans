<?php
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('admin');
            $this->load->view('template/footer');
            
        }
        
      
    }
