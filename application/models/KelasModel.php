<?php

class KelasModel extends CI_Model
{
    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function getKelasById($id)
    {
        return $this->db->get_where(
            'kelas',
            ['id_kelas' => $id]
        )->row_array();
    }

    public function tambahDataKelas()
    {
        $data = [
            "kode_mk" => $this->input->post('kode_mk', true),
            "nidn" => $this->input->post('nidn', true),
            "tahun_ajar" => $this->input->post('tahun_ajar', true),
            "semester" => $this->input->post('semester', true)
        ];

        $this->db->insert('kelas', $data);
    }

    public function editDataKelas()
    {
        $data = [
            "kode_mk" => $this->input->post('kode_mk', true),
            "nidn" => $this->input->post('nidn', true),
            "tahun_ajar" => $this->input->post('tahun_ajar', true),
            "semester" => $this->input->post('semester', true)
        ];

        $this->db->where(
            'id_kelas',
            $this->input->post('id_kelas')
        );

        $this->db->update('kelas', $data);
    }

    public function hapusDataKelas($id)
    {
        $this->db->where('id_kelas', $id);

        $this->db->delete('kelas');
    }

    public function getAllMatkul()
    {
        return $this->db->get('mata_kuliah')->result_array();
    }

    public function getAllDosen()
    {
        return $this->db->get('dosen')->result_array();
    }
}