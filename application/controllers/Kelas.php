<?php

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('KelasModel');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Kelas';

        $data['kelas'] =
            $this->KelasModel->getAllKelas();

        $this->load->view('Layout/header', $data);
        $this->load->view('kelas', $data);
        $this->load->view('Layout/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Kelas';

        $data['kelas'] =
            $this->KelasModel->getKelasById($id);

        $this->load->view('Layout/header', $data);
        $this->load->view('detail_kelas', $data);
        $this->load->view('Layout/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Kelas';

        $data['matkul'] =
            $this->KelasModel->getAllMatkul();

        $data['dosen'] =
            $this->KelasModel->getAllDosen();

        $this->form_validation->set_rules(
            'kode_mk',
            'Kode MK',
            'required'
        );

        $this->form_validation->set_rules(
            'nidn',
            'NIDN',
            'required'
        );

        $this->form_validation->set_rules(
            'tahun_ajar',
            'Tahun Ajar',
            'required'
        );

        $this->form_validation->set_rules(
            'semester',
            'Semester',
            'required'
        );

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Layout/header', $data);
            $this->load->view('tambah_kelas', $data);
            $this->load->view('Layout/footer');

        } else {

            $this->KelasModel->tambahDataKelas();

            $this->session->set_flashdata(
                'flash',
                'ditambahkan'
            );

            redirect('kelas');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Kelas';

        $data['kelas'] =
            $this->KelasModel->getKelasById($id);

        $data['matkul'] =
            $this->KelasModel->getAllMatkul();

        $data['dosen'] =
            $this->KelasModel->getAllDosen();

        $this->form_validation->set_rules(
            'kode_mk',
            'Kode MK',
            'required'
        );

        $this->form_validation->set_rules(
            'nidn',
            'NIDN',
            'required'
        );

        $this->form_validation->set_rules(
            'tahun_ajar',
            'Tahun Ajar',
            'required'
        );

        $this->form_validation->set_rules(
            'semester',
            'Semester',
            'required'
        );

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Layout/header', $data);
            $this->load->view('edit_kelas', $data);
            $this->load->view('Layout/footer');

        } else {

            $this->KelasModel->editDataKelas();

            $this->session->set_flashdata(
                'flash',
                'diubah'
            );

            redirect('kelas');
        }
    }

    public function hapus($id)
    {
        $this->KelasModel->hapusDataKelas($id);

        $this->session->set_flashdata(
            'flash',
            'dihapus'
        );

        redirect('kelas');
    }
}