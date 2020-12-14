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

   function detail_histori($id_pemesanan){
    $where = array('pemesanan.id_pemesanan' => $id_pemesanan);
        $data['pemesanan'] = $this->crud->joinDataDetail($where)->result();
       $this->load->view('template_pelanggan/header');
        $this->load->view('pelanggan/detail_histori', $data);
        $this->load->view('template_pelanggan/footer');
    }
   //function bayar ($id_pemesanan){
    //$data['pemesanan'] = $this->crud->detail_data(['id_pemesanan' => $id_pemesanan], 'pemesanan')->result();
    //$this->load->view('template_pelanggan/header');
    //$this->load->view('pelanggan/detail_histori', $data);
    //$this->load->view('template_pelanggan/footer');

   //}
   function bayarr(){
    $id_pemesanan = $this->input->post('id_pemesanan');
     $foto = $_FILES['foto']['name'];
         if ($foto =''){}else{
             $config ['upload_path'] = './assets/bukti-bayar/';
     		$config ['allowed_types'] = 'jpg|jpeg|png|gif';
    	$config ['max_size'] = '2048';

             $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')){
                 echo "Foto Yang Anda Upload Gagal!!";
             }else{
                 $foto=$this->upload->data('file_name');
    }
         }

    $data = array(
        'bukti' => $foto,
        'status_bayar' => 'Sedang Diproses'
    );
    $where = array(
        'id_pemesanan' => $id_pemesanan
    );
        $this->crud->ubah_data($where, $data, 'pemesanan');
        $this->session->set_flashdata('message', 'Data Has Been Change');
        redirect('pelanggan/histori/index');
}
}


?>