<?php
class Mata_KuliahModel extends CI_Model
{
    public function getAllMata_Kuliah()
   {
        return $this->db->get('mata_kuliah')->result_array();
       
   }
    public function getMata_kuliahByKodeMK($kode_mk)
    {
        return $this->db->get_where('mata_kuliah', ['kode_mk' => $kode_mk])->row_array();
    }

    public function tambahDataMata_Kuliah()
    {
        $data = [
        
            "kode_mk" => $this->input->post('kode_mk', true),
            "nama_mk" => $this->input->post('nama_mk', true),
            "sks" => $this->input->post('sks', true),
        ];
        $this->db->insert('mata_kuliah', $data);
    }
    public function hapusDataMata_Kuliah($kode_mk)
    {
    $this->db->where('kode_mk', $kode_mk);
    $this->db->delete('mata_kuliah');
    }

    public function editDataMata_Kuliah()
    {
        $data = [
        
            "kode_mk" => $this->input->post('kode_mk', true),
            "nama_mk" => $this->input->post('nama_mk', true),
            "sks" => $this->input->post('sks', true),
        ];

        $this->db->where('kode_mk', $this->input->post('kode_mk'));
        $this->db->update('mata_kuliah', $data);
    }

    public function cariDataMata_Kuliah()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name_mata_kuliah', $keyword);
        $this->db->or_like('kode_mata_kuliah', $keyword);
        $this->db->or_like('sks', $keyword);
        return $this->db->get('mata_kuliah')->result_array();
    }

}