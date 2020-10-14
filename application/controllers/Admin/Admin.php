<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud');
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['admin'] = $this->crud->tampil_data('admin')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin', $data);
        $this->load->view('template_admin/footer');
    }

    function halaman_tambah_data()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('tambah_admin');
        $this->load->view('template_admin/footer');
    }

    function halaman_edit_data($id_admin)
    {
        $data['admin'] = $this->crud->detail_data(['id_admin' => $id_admin], 'admin')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('edit_admin', $data);
        $this->load->view('template_admin/footer');
    }

    function tambah_data()
    {
        $nama = $this->input->post('nama');
        $pass = $this->input->post('password');

        $data = array(
            'nama' => $nama,
            'password' => md5($pass)
        );

        $this->crud->tambah_data($data, 'admin');
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('tambah', 'Data Berhasil Ditambahkan');
        }
        redirect('admin/admin/index');
    }

    function edit_data($id_admin)
    {
        //perintah ini digunakan untuk memasukkan data sesuai dengan kolom pada tabel database
        $id = $this->input->post('id_admin');
        $nama = $this->input->post('nama');

        $where = array('id_admin' => $id); // mengubah id menjadi bentuk array
        $data = array(
            'nama' => $nama,
        );
        $this->crud->ubah_data($where, $data, 'admin'); //perintah untuk mengupdate data
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('edit', 'Data Berhasil Diubah');
        }
        redirect('admin/admin/index');
    }

    function hapus_data($id_admin)
    {
        $where = array('id_admin' => $id_admin); // mengubah id menjadi bentuk array
        $this->crud->hapus_data($where, 'admin'); //perintah untuk menghapus data sesuai dengan tabel dan id yang diinginkan
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('hapus', 'Data Berhasil Dihapus');
        }
        redirect('admin/admin/index');
    }
}
?>
<!-- Dibuat oleh dodhy -->
<!-- Diedit oleh :  -->