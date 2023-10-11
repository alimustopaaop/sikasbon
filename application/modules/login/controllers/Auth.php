<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $this->load->view('v_auth');
    }

    public function validasi()
    {
        $nip = str_replace("'", "", htmlspecialchars($this->input->post('nip'), ENT_QUOTES));
        $password = str_replace("'", "", htmlspecialchars($this->input->post('password'), ENT_QUOTES));

        $passmd5 = md5($password);

        $cadmin = $this->db->query("SELECT * FROM `users` WHERE nip = '$nip' AND PASSWORD  ='$passmd5'");

        if ($cadmin->num_rows() > 0) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $nip);
            $xcadmin = $cadmin->row_array();
            $nama_lengkap = $xcadmin['nama_lengkap'];
            $id = $xcadmin['id'];
            $nip = $xcadmin['nip'];
            $email = $xcadmin['email'];
            $jabatan = $xcadmin['jabatan'];
            $role = $xcadmin['role'];
            $gambar = $xcadmin['gambar'];

            $this->session->set_userdata('nama_lengkap', $nama_lengkap);
            $this->session->set_userdata('id', $id);
            $this->session->set_userdata('nip', $nip);
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('jabatan', $jabatan);
            $this->session->set_userdata('role', $role);
            $this->session->set_userdata('gambar', $gambar);

            if ($xcadmin['role'] == 'Petugas') {
                redirect('petugas/petugas');
            } elseif ($xcadmin['role'] == 'Pimpinan') {
                # code...
                redirect('pimpinan/pimpinan');
            } elseif ($xcadmin['role'] == 'Super Admin') {
                # code...
                redirect('petugas/petugas');
            } elseif ($xcadmin['role'] == 'Admin') {
                # code...
                redirect('petugas/petugas');
            } else {
                $this->session->set_flashdata('sweet_error', 'Mohon maaf, anda gagal login :(');
                redirect('login/auth');
            }

        } else {

            $this->session->set_flashdata('sweet_error', 'Mohon maaf, anda gagal login :(');
            redirect('login/auth');

        }

    }

    public function my_profile()
    {

        echo "Test";

    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('sweet_success', 'Anda telah logout sistem !!');
        $this->load->view('v_auth');

    }
}
