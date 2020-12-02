<?php

class Profil extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('crud');
    }

    function index(){
        $username = $this->session->userdata('username_pelanggan');
        $data['pelanggan'] = $this->crud->detail_data(['username_pelanggan' => $username], 'rute')->row_array();

        $this->form_validation->set_rules('lname','Full Name', 'required');
        if($this->form_validation->run() == false) {
            $this->load->view('template_pelanggan/header');
            $this->load->view('pelanggan/profil', $data);
            $this->load->view('template_pelanggan/footer');
        } else {
            $nama = $this->input->post('lname');
            $hp = $this->input->post('lphone');
            $password = $this->input->post('lpass');

            $data2 = [
                'nama_pelanggan' => $nama,
                'telp' => $hp,
                'password_pelanggan' => $password
            ];

            $upload_image = $_FILES['images']['name'];

            if($upload_image){
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = '';
                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')){
                    $old_image = $data['pelanggan']['image'];
                    if($old_image != 'default.jpg'){
                        unlink(FCPATH . '' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }

            $this->crud->ubah(['username_pelanggan' => $username], $data2, 'rute');
        }
        
    }
}


?>