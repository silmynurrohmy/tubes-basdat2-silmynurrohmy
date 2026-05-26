<?php
class Dosen extends CI_Controller 
{
    public $DosenModel;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DosenModel');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            return redirect(base_url("auth/index"));
        }
        $data['judul'] = "Halaman Dosen";
        $data['dosen'] = $this->DosenModel->getAllDosen();
        if ($this->input->post('keyword')) {
            $data['dosen'] = $this->DosenModel->cariDataDosen();
        }
        $this->load->view('layout/header', $data);
        $this->load->view('dosen', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $data['judul'] = "Tambah Data Dosen";

       
        $this->form_validation->set_rules('nidn', 'Nidn', 'required');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('program_studi', 'Program studi', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('tambah_dosen');
            $this->load->view('layout/footer');
        } else {
            $this->DosenModel->tambahDataDosen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('dosen');
        }
    }
    public function hapus($nidn)
    {
    $this->DosenModel->hapusDataDosen($nidn);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('dosen');
    }

    public function detail($nidn)
    {
        $data['judul'] = "Detail Data Dosen";
        $data['dosen'] = $this->DosenModel->getDosenByNidn($nidn);
        $this->load->view('layout/header.php', $data);
        $this->load->view('detail_dosen', $data);
        $this->load->view('layout/footer.php');
    }

    public function edit($nidn)
    {
        $data['judul'] = "Edit Data Dosen";
        $data['dosen'] = $this->DosenModel->getDosenByNidn($nidn);

        $this->form_validation->set_rules('nidn', 'Nidn', 'required');
        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('program_studi', 'Program studi', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('edit_dosen', $data);
            $this->load->view('layout/footer');
        } else {
            $this->DosenModel->editDataDosen();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('dosen');
        }
    }
}