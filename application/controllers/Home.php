<?php
class Home extends CI_Controller {
public function index()
{
    $data['judul']='Halaman Mahasiswa';
    $this->load->view('layout/header', $data);
     $this->load->view('index');
      $this->load->view('layout/footer');
    }
}

