<?php
class Home extends CI_Controller{

    public function index($nama=''){
        $data['judul'] = "Home" ;
        //$data['nama'] =$nama;
       // $this->load->view('templates/header2',$data);
        $this->load->view('home/index',$data);
       //$this->load->view('templates/footer2');
    }
}

?>