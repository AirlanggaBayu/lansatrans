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
        $data['admin'] = $this->crud->tampil_data('admin');
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
        $username = $this->input->post('username');
        $pass = $this->input->post('password');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => password_hash($pass, PASSWORD_DEFAULT)
        );

        $this->crud->tambah_data($data, 'admin');
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Ditambahkan');
        }
        redirect('admin/admin/index');
    }

    function edit_data($id_admin)
    {
        //perintah ini digunakan untuk memasukkan data sesuai dengan kolom pada tabel database
        $id = $this->input->post('id_admin');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');

        $where = array('id_admin' => $id); // mengubah id menjadi bentuk array
        $data = array(
            'nama' => $nama,
            'username' => $username
        );
        $this->crud->ubah_data($where, $data, 'admin'); //perintah untuk mengupdate data
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Diubah');
        }
        redirect('admin/admin/index');
    }

    function hapus_data($id_admin)
    {
        $where = array('id_admin' => $id_admin); // mengubah id menjadi bentuk array
        $this->crud->hapus_data($where, 'admin'); //perintah untuk menghapus data sesuai dengan tabel dan id yang diinginkan
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Dihapus');
        }
        redirect('admin/admin/index');
    }

    public function saran()
    {

        $data['saran'] = $this->crud->tampil_data('saran');
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('Kritik', $data);
        $this->load->view('template_admin/footer');
    }

    function hapus_saran($id_saran)
    {
        $where = array('id_saran' => $id_saran); // mengubah id menjadi bentuk array
        $this->crud->hapus_data($where, 'saran'); //perintah untuk menghapus data sesuai dengan tabel dan id yang diinginkan
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Dihapus');
        }
        redirect('admin/admin/saran/');
    }
}
?>
<!-- Dibuat oleh dodhy -->
<!-- Diedit oleh :  -->