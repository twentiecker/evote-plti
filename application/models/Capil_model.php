<?php

class Capil_model extends CI_Model{
    public function getAllMahasiswa(){
        $query = $this->db->get('coba');

        return $query->result_array();
    }

    public function tambahktp(){
        $data = [
            "Nik" => $this->input->post('nik',true),
            "Nama" => $this->input->post('nama',true),
            "Tempat_Lahir" => $this->input->post('lahir',true),
            "Alamat" => $this->input->post('alamat',true),
            "Kel/Desa" => $this->input->post('kel',true),
            "Kecamatan" => $this->input->post('kec',true),
            "Agama" => $this->input->post('agama',true),
            "Status" => $this->input->post('status',true),
            "RT/RW" => $this->input->post('rt',true),
            "JK" => $this->input->post('jk',true),
            "Pekerjaan" => $this->input->post('pekerjaan',true)
        ];
        $this->db->insert('ktp',$data);
       
    }
}
?>