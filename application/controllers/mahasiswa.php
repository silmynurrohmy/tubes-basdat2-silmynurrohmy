<?php
class Mahasiswa extends CI_Controller 
{
    public $MahasiswaModel;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if ($this->session->userdata('status') != "login") {
            return redirect(base_url("auth/index"));
        }
        $data['judul'] = "Halaman Mahasiswa";
        $data['mahasiswa'] = $this->MahasiswaModel->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->MahasiswaModel->cariDataMahasiswa();
        }
        $this->load->view('layout/header', $data);
        $this->load->view('mahasiswa', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $data['judul'] = "Tambah Data Mahasiswa";

        $this->form_validation->set_rules('nim', 'nim', 'required|numeric');
        $this->form_validation->set_rules('nama_mahasiswa', 'nama_mahasiswa', 'required');
        $this->form_validation->set_rules('program_studi', 'progran_studi', 'required');
        $this->form_validation->set_rules('angkatan', 'angkatan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('tambah_mahasiswa');
            $this->load->view('layout/footer');
        } else {
            $this->MahasiswaModel->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }
    public function hapus($nim)
    {
    $this->MahasiswaModel->hapusDataMahasiswa($nim);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('mahasiswa');
    }

    public function detail($nim)
    {
        $data['judul'] = "Detail Data Mahasiswa";
        $data['mahasiswa'] = $this->MahasiswaModel->getMahasiswaByNim($nim);
        $this->load->view('layout/header.php', $data);
        $this->load->view('detail_mahasiswa', $data);
        $this->load->view('layout/footer.php');
    }

    public function edit($nim)
    {
        $data['judul'] = "Edit Data Mahasiswa";
        $data['mahasiswa'] = $this->MahasiswaModel->getMahasiswaByNim($nim);

        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('nama_mahasiswa', 'nama_mahasiswa', 'required');
        $this->form_validation->set_rules('program_studi', 'progran_studi', 'required');
        $this->form_validation->set_rules('angkatan', 'angkatan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('edit_mahasiswa', $data);
            $this->load->view('layout/footer');
        } else {
            $this->MahasiswaModel->editDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('mahasiswa');
        }
    }
}