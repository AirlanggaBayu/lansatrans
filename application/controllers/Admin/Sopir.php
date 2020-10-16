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

    function halaman_edit_supir($id_supir)
    {
        $data['supir'] = $this->crud->detail_data(['id_supir' => $id_supir], 'supir')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('edit_supir', $data);
        $this->load->view('template_admin/footer');
    }

    function edit_data($id_supir)
    {
        $data['supir'] = $this->crud->detail_data(['id_supir' => $id_supir], 'supir')->result();
        $id_supir = $this->input->post('id_supir');
        $nama_supir = $this->input->post('nama_supir');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $foto = $_FILES['foto']['name'];
        if ($foto) {
            $config['upload_path'] = 'assets/foto-sopir/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_foto = $data['supir']['foto'];
                if ($old_foto != '') {
                    unlink(FCPATH . '/assets/foto-sopir/' . $old_foto);
                }


                $new_foto = $this->upload->data('file_name');
                $this->db->set('foto', $new_foto);
            } else {
                echo $this->upload->display_errors();
            }
        }



        $data = array(
            'nama_supir' => $nama_supir,
            'telepon' => $telepon,
            'alamat' => $alamat

        );

        $where = array(
            'id_supir' => $id_supir
        );
        $this->session->set_flashdata('flash', 'diubah');
        $this->crud->ubah_data($where, $data, 'supir');
        redirect('admin/sopir/index');
    }
    public function hapus($id)
    {
        $this->crud->hapus($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/sopir/index');

        $this->session->set_flashdata('flash', 'dihapus');

        // function hapus digunakan untuk menghapus data yang kita ingin hapus
    }

    
}

    //dikerjakan Angga //
