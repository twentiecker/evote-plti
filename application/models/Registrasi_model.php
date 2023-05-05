<?php

class Registrasi_model extends CI_Model{
 

    public function searchktp(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get_where('ktp',['NIK'=>$keyword])->row_array();       
    }
    
    public function searchImage(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get_where('db_image',['nik'=>$keyword])->row_array();       
    }
 /*   public function insertIMG($nik,$no){
        $date = date("Y.m.D")."-".date("h.i.sa");
        $imageName = $nik."_".$no.".jpeg";
        $data = [
            "nik" => $nik,
            "date" => $date,
            "image" => $imageName
          
        ];
        $this->db->insert('image',$data);      
    }
*/
      public function tambahktp(){
        $this->load->library('session');
        $ktp = $this->session->userdata('dataktp');
        $data = [
            "Nik" => $ktp['NIK'],
            "Nama" => $ktp['Nama'],
            "Tempat_Lahir" => $ktp['Tempat_Lahir'],
            "Alamat" => $ktp['Alamat'],
            "Kel/Desa" => $ktp['Kel/Desa'],
            "Kecamatan" => $ktp['Kecamatan'],
            "Agama" => $ktp['Agama'],
            "Status" => $ktp['Status'],
            "RT/RW" => $ktp['RT/RW'],
            "JK" => $ktp['JK'],
            "Pekerjaan" => $ktp['Pekerjaan'],
            "status_pilih"=>'0'
        ];
        $this->db->insert('ktp',$data);
       
    }

    public function tambahfinger(){
        $this->load->library('session');
        $ktp = $this->session->userdata('dataktp');
        $data = [
            "nik" => $ktp['NIK'],
            "id" => $ktp['idf']
        ];
        $this->db->insert('db_finger',$data);
       
    }

    public function insertIMG($nik,$image1,$image2,$image3){
        $date = date("Y.m.D")."-".date("h.i.sa");
      //  $imageName = $nik."_".$no.".jpeg";
        $data = [
            "nik" => $nik,
            "date" => $date,
            "image1" => $image1,
            "image2" => $image2,
            "image3" => $image3
          
        ];
        $this->db->insert('db_image',$data);      
    }
 
}
?>