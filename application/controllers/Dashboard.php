<?php

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';

        $data['jumlah_mahasiswa'] = $this->db->count_all('mahasiswa');
        $data['jumlah_dosen'] = $this->db->count_all('dosen');
        $data['jumlah_mk'] = $this->db->count_all('mata_kuliah');
        $data['jumlah_nilai'] = $this->db->count_all('nilai');

        $data['mata_kuliah'] = $this->db->get('mata_kuliah')->result();

        $this->load->view('layout/header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('layout/footer');
    }

}