<?php
class Notif extends CI_Controller{

    public function sukses(){
        $data['judul'] = "Home" ;
        //$data['nama'] =$nama;
        $this->load->view('templates/header',$data);
        $this->load->view('notif/sukses',$data);
       $this->load->view('templates/footer');
    }
}

?>