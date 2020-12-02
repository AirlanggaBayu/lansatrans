<?php

class Profil extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('crud');
    }

    function index(){
        $username = $this->session->userdata('username_pelanggan');
        $data['pelanggan'] = $this->crud->detail_data(['username_pelanggan' => $username], 'pelanggan')->row_array();

        $this->form_validation->set_rules('lname','Full Name', 'required');
        $this->form_validation->set_rules('lphone','Phone Number', 'required');
        if($this->form_validation->run() == false) {
            $this->load->view('template_pelanggan/header');
            $this->load->view('pelanggan/profil', $data);
            $this->load->view('template_pelanggan/footer');
        } else {
            $nama = $this->input->post('lname');
            $hp = $this->input->post('lphone');
            $data2 = [
                'nama_pelanggan' => $nama,
                'telp' => $hp
            ];

            $this->crud->ubah_data(['username_pelanggan' => $username], $data2, 'pelanggan');
        }
        
    }
}


?>