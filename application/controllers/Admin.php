<?php
    class Admin extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('crud');
        }
    
        public function index(){
            $data['admin'] = $this->crud->tampil_data('admin')->result();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('admin', $data);
            $this->load->view('template/footer');
        }

        function tambah_data(){
            $nama = $this->input->post('nama_admin');
            $pass = $this->input->post('password');

            $data = array(
                'nama_admin' => $nama,
                'password' => md5($pass)
            );

            $this->crud->tambah_data($data, 'admin');
            redirect('admin/index');
        }

        function edit_data($id_admin){
            //perintah ini digunakan untuk memasukkan data sesuai dengan kolom pada tabel database
            $id = $this->input->post('id_admin');
            $nama = $this->input->post('nama_admin');
    
            $where = array('id_admin' => $id); // mengubah id menjadi bentuk array
            $data = array(
                'nama_admin' => $nama,
            );
            $this->crud->ubah_data($where,$data,'admin'); //perintah untuk mengupdate data
            redirect('admin/index');
        }

        function hapus_data($id_admin){
            $where = array('id_admin' => $id_admin); // mengubah id menjadi bentuk array
            $this->crud->hapus_data($where,'admin'); //perintah untuk menghapus data sesuai dengan tabel dan id yang diinginkan
            redirect('admin/index');
        }
    }
?>
<!-- Dibuat oleh dodhy -->
<!-- Diedit oleh :  -->