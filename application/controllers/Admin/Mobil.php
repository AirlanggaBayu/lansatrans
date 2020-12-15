<?php
class Mobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('crud');
  }
  public function index()
  {
    $data['mobil'] = $this->crud->tampil_data('mobil');
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('halaman_mobil', $data);
    $this->load->view('template_admin/footer');
  }
  public function registration()
  {
    $this->load->view('templates/auth_header');
    $this->load->view('registration');
    $this->load->view('templates/auth_footer');
  }
  public function create_mobil()
  {
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('tambah_mobil');
    $this->load->view('template_admin/footer');
  }
  public function tambah_mobil()
  {
    $merk = $this->input->post('merk');
    $warna = $this->input->post('warna');
    $plat = $this->input->post('plat');
    $kapasitas = $this->input->post('kapasitas');
    $foto        = $_FILES['foto']['name'];
    if ($foto = '') {
    } else {
      $config['upload_path'] = './assets/img/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = '2048';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('foto')) {
        echo "Gambar Yang Anda Upload Gagal!!";
      } else {
        $foto = $this->upload->data('file_name');
      }
    }
    $data = array(
      'merk' => $merk,
      'warna' => $warna,
      'plat' => $plat,
      'kapasitas' => $kapasitas,
      'foto_kendaraan' => $foto,
    );

    $this->crud->tambah_data($data, 'mobil');
    redirect('admin/mobil/index');
    $this->session->set_flashdata('flash', 'redirect');
  } //function ini digunakan untuk memproses data yang berasal dari halaman form_tambah_data untuk dimasukkan ke dalam database
  function hapus_mobil($id_mobil)
  {
    $where = array('id_mobil' => $id_mobil);
    $this->crud->hapus_data($where, 'mobil');
    redirect('admin/mobil/index');
  } //function ini digunakan untuk menghapus data yang dipilih pada halaman tutor
  function halaman_ubah_mobil($id_mobil)
  {
    $data['mobil'] = $this->crud->detail_data(['id_mobil' => $id_mobil], 'mobil')->result();
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar');
    $this->load->view('ubah_data_mobil', $data);
    $this->load->view('template_admin/footer');
  }
  public function ubah_mobil($id_mobil)
  {

    $data['mobil'] = $this->crud->detail_data(['id_mobil' => $id_mobil], 'mobil')->result();
    $id_mobil = $this->input->post('id_mobil');
    $merk = $this->input->post('merk');
    $warna = $this->input->post('warna');
    $plat = $this->input->post('plat');
    $kapasitas = $this->input->post('kapasitas');
    $foto        = $_FILES['foto']['name'];
    if ($foto = '') {
    } else {
      $config['upload_path'] = './assets/img/';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = '2048';

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('foto')) {
        $old_foto = $data['supir']['foto'];
        if ($old_foto != '') {
          unlink(FCPATH . '/assets/img/' . $old_foto);
        }
        $new_foto = $this->upload->data('file_name');
        $this->db->set('foto_kendaraan', $new_foto);
      } else {
        echo $this->upload->display_errors();
      }
    }
    $data = array(
      'merk' => $merk,
      'warna' => $warna,
      'plat' => $plat,
      'kapasitas' => $kapasitas,
    );
    $where = array(
      'id_mobil' => $id_mobil
    );
    $this->crud->ubah_data($where, $data, 'mobil');

    $this->session->set_flashdata('message', 'Data Has Been Change');
    redirect('admin/mobil/index');
  }
}//function ini digunakan untuk mengupdate data yang dipilih pada halaman tutor
//dibuat Oleh Agung Gunawan ya gaes ya