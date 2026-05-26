<?php
class DosenModel extends CI_Model
{
    public function getAllDosen()
   {
        return $this->db->get('dosen')->result_array();
        
   }
   public function getDosenByNidn($nidn)
    {
        return $this->db->get_where('dosen', ['nidn' => $nidn])->row_array();
    }

    public function tambahDataDosen()
    {
        $data = [
            "nama_dosen" => $this->input->post('nama_dosen', true),
            "nidn" => $this->input->post('nidn', true),
            "program_studi" => $this->input->post('program_studi', true),
        ];
        $this->db->insert('dosen', $data);
    }
    public function hapusDataDosen($nidn)
    {
    $this->db->where('nidn', $nidn);
    $this->db->delete('dosen');
    }

    public function editDataDosen()
    {
        $data = [
            "nama_dosen" => $this->input->post('nama_dosen', true),
            "nidn" => $this->input->post('nidn', true),
            "program_studi" => $this->input->post('program_studi', true)
        ];

        $this->db->where('nidn', $this->input->post('nidn'));
        $this->db->update('dosen', $data);
    }

    public function cariDataDosen()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_dosen', $keyword);
        $this->db->or_like('nidn', $keyword);
        $this->db->or_like('program_studi', $keyword);
        return $this->db->get('dosen')->result_array();
    }

}