<?php
class Sopir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud');
    }
    public function index()
    {

        $data['supir'] = $this->crud->tampil_data('supir')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('daftar_sopir', $data);
        $this->load->view('template_admin/footer');
    }

    public function baru()
    {

        $data['supir'] = $this->crud->tampil_data('supir')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('tambah_sopir');
        $this->load->view('template_admin/footer');
    }

    function tambah()
    {

        $nama_supir = $this->input->post('nama_supir');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $foto        = $_FILES['foto']['name'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto-sopir/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Gambar Yang Anda Upload Gagal Rek!!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_supir' => $nama_supir,
            'alamat' => $alamat,
            'telepon' => $telepon,
            'foto' => $foto

        );
        $this->crud->tambah_data($data, 'supir');
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('admin/sopir/baru');
    }
    function hapus_data($id_supir)
    {
        $where = array('id_supir' => $id_supir); // mengubah id menjadi bentuk array
        $this->crud->hapus_data($where, 'supir'); //perintah untuk menghapus data sesuai dengan tabel dan id yang diinginkan
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('hapus', 'Data Berhasil Dihapus');
        }
        redirect('admin/sopir/index');
    }

    //dikerjakan Angga //
}
