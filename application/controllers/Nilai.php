<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('NilaiModel', 'nilaimodel');
    }

    public function index() {
        $keyword = $this->input->get('keyword');
        $data['data_nilai'] = $this->nilaimodel->get_all_nilai($keyword);

        $this->load->view('layout/header', $data);
        $this->load->view('nilai', $data);
        $this->load->view('layout/footer');
    }

    public function detail($id_nilai) {
        $data['nilai'] = $this->nilaimodel->get_nilai_by_id($id_nilai);

        $this->load->view('layout/header', $data);
        $this->load->view('detail_nilai', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id_nilai) {
        $this->nilaimodel->delete_nilai($id_nilai);
        redirect('nilai');
    }

    public function tambah() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('id_kelas', 'ID Kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            $this->load->view('tambah_nilai');
            $this->load->view('layout/footer');
        } else {
            $insert_data = [
                'nim' => $this->input->post('nim'),
                'id_kelas' => $this->input->post('id_kelas'),
                'nilai_tugas' => $this->input->post('nilai_tugas'),
                'nilai_uts' => $this->input->post('nilai_uts'),
                'nilai_uas' => $this->input->post('nilai_uas'),
                'nilai_akhir' => (0.3 * $this->input->post('nilai_tugas')) + (0.3 * $this->input->post('nilai_uts')) + (0.4 * $this->input->post('nilai_uas'))
            ];
            
            $this->nilaimodel->insert_nilai($insert_data);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('nilai');
        }
    }

    public function edit($id_nilai) {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('id_kelas', 'ID Kelas', 'required');

        $data['nilai'] = $this->nilaimodel->get_nilai_by_id($id_nilai);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header', $data);
            $this->load->view('edit_nilai', $data);
            $this->load->view('layout/footer');
        } else {
            $update_data = [
                'nim' => $this->input->post('nim'),
                'id_kelas' => $this->input->post('id_kelas'),
                'nilai_tugas' => $this->input->post('nilai_tugas'),
                'nilai_uts' => $this->input->post('nilai_uts'),
                'nilai_uas' => $this->input->post('nilai_uas'),
                'nilai_akhir' => (0.3 * $this->input->post('nilai_tugas')) + (0.3 * $this->input->post('nilai_uts')) + (0.4 * $this->input->post('nilai_uas'))
            ];
            
            $this->nilaimodel->update_nilai($id_nilai, $update_data);
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('nilai');
        }
    }
}