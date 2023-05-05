<?php

class Mahasiswa_model extends CI_Model{
    public function getAllMahasiswa(){
        $query = $this->db->get('coba');

        return $query->result_array();
    }
}
?>