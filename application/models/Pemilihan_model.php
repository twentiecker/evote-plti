<?php

class Pemilihan_model extends CI_Model{
 

    public function searchktp(){
        $keyword = $this->input->post('keyword',true);
        return $this->db->get_where('ktp',['NIK'=>$keyword])->row_array();       
    }

    public function searchfinger($nik){
        return $this->db->get_where('db_finger',['nik'=>$nik])->row_array();       
    }


    public function inputvote($nik,$vote){
        $date = date("Y.m.D")."-".date("h.i.sa");
     /*  $k1 =0;
       $k2 =0;
       $k3 =0;
        if ($vote==1){
            $k1 =1;
            $k2 =0;
            $k3 =0;

        }
        else if ($vote==2){
            $k1 =0;
            $k2 =1;
            $k3 =0;

        }
        else if ($vote==3){
            $k1 =0;
            $k2 =0;
            $k3 =1;

        }

        */
        $data = [
            "id" => $nik,
            "date" => $date,
            "kandidate" => $vote,
          
        ];
        $this->db->insert('hasil',$data);    
    }
    public function updatestatus($nik){
       
        $this->db->set('status_pilih', '1');
        $this->db->where('NIK', $nik);
        $this->db->update('ktp'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2 
    }

}
?>