<?php
class MahasiswaModel extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function getMahasiswaByNim($nim)
    {
        return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
    }

   public function tambahDataMahasiswa()
{
    $data = [
        "nim" => $this->input->post('nim', true),
        "nama_mahasiswa" => $this->input->post('nama_mahasiswa', true),
        "program_studi" => $this->input->post('program_studi', true),
        "angkatan" => $this->input->post('angkatan', true),
        "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
        "alamat" => $this->input->post('alamat', true)
    ];

    $this->db->insert('mahasiswa', $data);
}
    public function hapusDataMahasiswa($nim)
    {
    $this->db->where('nim', $nim);
    $this->db->delete('mahasiswa');
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
    }

    public function editDataMahasiswa()
    {
       $data = [
        "nim" => $this->input->post('nim', true),
        "nama_mahasiswa" => $this->input->post('nama_mahasiswa', true),
        "program_studi" => $this->input->post('program_studi', true),
        "angkatan" => $this->input->post('angkatan', true),
        "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
        "alamat" => $this->input->post('alamat', true)
    ];

        $this->db->where('nim', $this->input->post('nim'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
{
    $keyword = $this->input->post('keyword', true);

    $this->db->like('nim', $keyword);
    $this->db->or_like('nama_mahasiswa', $keyword);
    $this->db->or_like('program_studi', $keyword);
    $this->db->or_like('angkatan', $keyword);
    $this->db->or_like('jenis_kelamin', $keyword);
    $this->db->or_like('alamat', $keyword);

    return $this->db->get('mahasiswa')->result_array();
}
}