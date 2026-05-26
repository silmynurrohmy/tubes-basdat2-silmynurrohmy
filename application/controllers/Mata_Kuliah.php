<?php
class Mata_Kuliah extends CI_Controller 
{
    public $Mata_KuliahModel;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mata_KuliahModel');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            return redirect(base_url("auth/index"));
        }
        $data['judul'] = "Halaman Mata Kuliah";
        $data['mata_kuliah'] = $this->Mata_KuliahModel->getAllMata_Kuliah();
        if ($this->input->post('keyword')) {
            $data['mata_kuliah'] = $this->Mata_KuliahModel->cariDataMata_Kuliah();
        }
        $this->load->view('layout/header', $data);
        $this->load->view('mata_kuliah', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $data['judul'] = "Tambah Data Mata Kuliah";

        $this->form_validation->set_rules('kode_mk', 'Kode Mata Kuliah', 'required');
        $this->form_validation->set_rules('nama_mk', 'Nama Mata Kuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('tambah_mata_kuliah');
            $this->load->view('layout/footer');
        } else {
            $this->Mata_KuliahModel->tambahDataMata_Kuliah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mata_kuliah');
        }
    }
    public function hapus($kode_mk)
    {
    $this->Mata_KuliahModel->hapusDataMata_Kuliah($kode_mk);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('mata_kuliah');
    }

    public function detail($kode_mk)
    {
        $data['judul'] = "Detail Data Mata Kuliah";
        $data['mata_kuliah'] = $this->Mata_KuliahModel->getMata_KuliahByKodeMK($kode_mk);
        $this->load->view('layout/header.php', $data);
        $this->load->view('detail_mata_kuliah', $data);
        $this->load->view('layout/footer.php');
    }

    public function edit($kode_mk)
    {
        $data['judul'] = "Edit Data Mata Kuliah";
       $data['mata_kuliah'] = $this->Mata_KuliahModel->getMata_KuliahByKodeMK($kode_mk);

        $this->form_validation->set_rules('kode_mk', 'Kode Mata Kuliah', 'required');
        $this->form_validation->set_rules('nama_mk', 'Nama Mata Kuliah', 'required');
        $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('edit_mata_kuliah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Mata_KuliahModel->editDataMata_Kuliah();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('mata_kuliah');
        }
    }
}