<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['judul'] = "Halaman Login";
        $this->load->view('layout/header_login.php',$data);
        $this->load->view('login');
        $this->load->view('layout/footer_login.php');
    }
    function login()
{
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $where = array(
        'username' => $username,
        'password' => md5($password)
    );

    $cek = $this->AuthModel->login("user", $where)->num_rows();

    if ($cek > 0) {

        $data_session = array(
            'nama' => $username,
            'status' => "login"
        );

        $this->session->set_userdata($data_session);

        redirect(base_url("dashboard"));
    } else {
        echo "Username dan password salah !";
    }
}
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth/index'));
    }
}