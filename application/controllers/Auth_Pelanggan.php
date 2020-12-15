<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('pusername', 'pusername', 'trim|required');
        $this->form_validation->set_rules('ppassword', 'ppassword', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('template_pelanggan/header', $data);
            $this->load->view('auth/login_pelanggan');
            $this->load->view('template_pelanggan/footer');
        } else {
            //     //validasi success
            $this->_login();
        }
    }


    private function _login()
    {
        $username = $this->input->post('pusername');
        $password = $this->input->post('ppassword');

        $pelanggan = $this->db->get_where('pelanggan', ['username_pelanggan' => $username])->row_array();

        //usernya ada
        if ($pelanggan) {
            //cek password
            if (password_verify($password, $pelanggan['password_pelanggan'])) {
                $data = [
                    'username_pelanggan' => $pelanggan['username_pelanggan'],
                ];
                $this->session->set_userdata($data);
                redirect('pelanggan/home/index');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth_pelanggan');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username salah!</div>');
            redirect('auth_pelanggan');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('pnama', 'Pnama', 'required|trim');
        $this->form_validation->set_rules('pphone', 'Pusername', 'required|trim');
        $this->form_validation->set_rules('pusername', 'Pusername', 'required|trim');
        $this->form_validation->set_rules('ppassword1', 'Ppassword', 'required|trim|min_length[8]|matches[ppassword2]', [
            'matches' => 'password dont matches!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('ppassword2', 'Ppassword', 'required|trim|matches[ppassword1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_pelanggan/header');
            $this->load->view('auth/registrasi_pelanggan');
            $this->load->view('template_pelanggan/footer');
        } else {
            $data = [
                'nama_pelanggan' => htmlspecialchars($this->input->post('pnama', true)),
                'telp' => htmlspecialchars($this->input->post('pphone', true)),
                'username_pelanggan' => htmlspecialchars($this->input->post('pusername', true)),
                'password_pelanggan' => password_hash($this->input->post('ppassword1'), PASSWORD_DEFAULT),
            ];

            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda berhasil dibuat. silahkan login</div>');
            redirect('auth_pelanggan/');
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil logged out!</div>');
        redirect('auth/login_pelanggan/');
    }
}
