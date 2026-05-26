<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiModel extends CI_Model {

    public function get_all_nilai($keyword = null) {
        $this->db->select('*');
        $this->db->from('nilai');
        
        if ($keyword) {
            $this->db->group_start();
            $this->db->like('nim', $keyword);
            $this->db->or_like('id_kelas', $keyword);
            $this->db->group_end();
        }
        
        return $this->db->get()->result_array();
    }

    public function get_nilai_by_id($id_nilai) {
        return $this->db->get_where('nilai', ['id_nilai' => $id_nilai])->row_array();
    }

    public function count_all_nilai() {
        return $this->db->count_all('nilai');
    }

    public function insert_nilai($data) {
        return $this->db->insert('nilai', $data);
    }

    public function update_nilai($id_nilai, $data) {
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->update('nilai', $data);
    }

    public function delete_nilai($id_nilai) {
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->delete('nilai');
    }
}