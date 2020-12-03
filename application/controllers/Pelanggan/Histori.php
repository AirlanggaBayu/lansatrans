<?php

class Histori extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('crud');
    }

    function index(){
        $data['pemesanan'] = $this->crud->tampil_data('pemesanan');
        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/histori', $data);
        $this->load->view('template_pelanggan/footer');
    }

    function detail_histori(){
        $join1 = 'pembayaran.id_pemesanan = pemesanan.id_pemesanan';
        $join2 = 'pelanggan.id_pelanggan = pemesanan.id_pelanggan';
        $join3 = 'rute.id_rute = pemesanan.id_rute';
        $join4 = 'mobil.id_mobil = pemesanan.id_mobil';
        $data['joinan'] = $this->crud->joinData('pembayaran', 'pemesanan', 'pelanggan', 'rute', 'mobil', $join1, $join2, $join3, $join4);

        $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/detail_histori', $data);
        $this->load->view('template_pelanggan/footer');
    }
}


?>