<?php

class Rute extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud');
    }

    function index()
    {
        $data['rute'] = $this->crud->tampil_data('rute');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('rute', $data);
        $this->load->view('template_admin/footer');
    }

    function halaman_tambah_data()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('tambah_rute');
        $this->load->view('template_admin/footer');
    }

    function halaman_edit_data($id_rute)
    {
        $data['rute'] = $this->crud->detail_data(['id_rute' => $id_rute], 'rute')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('edit_rute', $data);
        $this->load->view('template_admin/footer');
    }

    function tambah_data()
    {
        $rute = $this->input->post('rute');
        $waktu = $this->input->post('jam');

        $data = array(
            'rute' => $rute,
            'jam' => $waktu,
        );

        $this->crud->tambah_data($data, 'rute');
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Ditambahkan');
        }
        redirect('admin/rute/index');
    }

    function edit_data($id_rute)
    {
        //perintah ini digunakan untuk memasukkan data sesuai dengan kolom pada tabel database
        $id = $this->input->post('id_rute');
        $rute = $this->input->post('rute');
        $waktu = $this->input->post('jam');

        $where = array('id_rute' => $id); // mengubah id menjadi bentuk array
        $data = array(
            'rute' => $rute,
            'jam' => $waktu
        );
        $this->crud->ubah_data($where, $data, 'rute'); //perintah untuk mengupdate data
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Diubah');
        }
        redirect('admin/rute/index');
    }

    function hapus_data($id_rute)
    {
        $where = array('id_rute' => $id_rute); // mengubah id menjadi bentuk array
        $this->crud->hapus_data($where, 'rute'); //perintah untuk menghapus data sesuai dengan tabel dan id yang diinginkan
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Dihapus');
        }
        redirect('admin/rute/index');
    }
}


?>
<!-- Dikerjakan oleh Dodhy -->
<!-- Diedit oleh : , pada tanggal -->