<?php
class Pemilihan extends CI_Controller{

    var $data  = array();

    function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
        $this->data['judul'] = "Pemilihan";
        // $this->data can be accessed from anywhere in the controller.
    }  
    public function index(){
        //$data = $this->data;
       // $this->data['judul'] = "Pemilihan" ;
        $data = $this->data;

        //$data['nama'] =$nama;
        $this->load->library('form_validation');
        $this->load->model('Pemilihan_model');
        $this->load->model('Registrasi_model');
        if($this->input->post('keyword')){
           $data['ktp'] = $this->Pemilihan_model->searchktp();
           $data['keyword']= $this->input->post('keyword');
           $data['judul'] = "Pemilihan" ;
           //$data['nama'] =$nama;
           $data['image'] = [
            "image1" => 0

              ];
              $data['image2'] =$this->Registrasi_model->searchImage();
              if ( $data['image2'] ){
                $data['image'] = $data['image2'] ;
              }
           If( $data['ktp']){

            if( $data['ktp']['status_pilih']=='0'){
              $data['tujuan']= 'pemilihan/fingerprint';
              $this->load->view('templates/header',$data);
              $this->load->view('notif/tampiluser',$data);
              $this->load->view('templates/footer');

            }
            else {

              $this->load->view('templates/header',$data);
              $this->load->view('notif/telahpilih',$data);
              $this->load->view('templates/footer');
            }
           
           }
           else{
            $this->load->view('templates/header',$data);
            $this->load->view('notif/tidakditemukan',$data);
            $this->load->view('templates/footer');
           }
        }
        else {
            $this->load->view('templates/header',$data);
            $this->load->view('pemilihan/index',$data);
            $this->load->view('templates/footer');
        }
       
    }

    public function fingerprint2(){
       //$x =  $this->load->view('view2','',true);
       
       $myfile = fopen("view2.html", "r") or die("Unable to open file!");
       $teks = fread($myfile,filesize("view2.html"));
       fclose($myfile);    
    
       $data = array('html'=>$teks);

       print_r(json_encode($data));
    }

    public function fingerprint($nik){
       // $data['judul'] = "Pemilihan" ;
       $data = $this->data;
        $data['nik']=$nik;
        

        $this->load->model('Pemilihan_model');

        $data['datafinger'] = $this->Pemilihan_model->searchfinger($nik);
      //$this->load->view('templates/header',$data);
        $this->load->view('pemilihan/fingerprint',$data);
       //$this->load->view('templates/footer');
    }
    public function tidakcocok(){
        $data['judul'] = "Pemilihan" ;
      

      $this->load->view('templates/header',$data);
        $this->load->view('notif/tidakcocok',$data);
       $this->load->view('templates/footer');
    }

    public function pilihcalon($nik){
        $data['judul'] = "Pemilihan" ;
        $data['nik']=$nik;
        $this->load->helper(array('form', 'url'));
        $this->load->model('Pemilihan_model');
        if($this->input->method() === 'post'){
           $vote = $this->input->post('calon');

            $this->Pemilihan_model->updatestatus($nik);
            redirect('pemilihan/sukses/'.$nik.'/'.$vote);
          
         }
         else {
            $this->load->view('templates/header',$data);
            $this->load->view('pemilihan/pilihcalon',$data);
            $this->load->view('templates/footer');
           
            
         }


    }

    public function facerecognation($nik){
        $data['judul'] = "Pemilihan" ;
     $this->load->helper(array('form', 'url'));
        $data['nik']=$nik;
       $this->load->view('templates/header',$data);
        $this->load->view('pemilihan/facerecognation',$data);
       $this->load->view('templates/footer');
    }

    public function sukses($nik,$vote){
        $data['judul'] = "Pemilihan" ;
     
        $data['nik']=$nik;
        $data['vote']=$vote;
        
      // $this->load->view('templates/header',$data);
        $this->load->view('pemilihan/sukses',$data);
        redirect('notif/sukses');
        //$this->load->view('templates/footer');
    }

    public function aksesfin(){
        $data['judul'] = "Pemilihan" ;
      // $this->load->view('templates/header',$data);
        $this->load->view('pemilihan/aksesfin');
      //  $this->load->view('templates/footer');
    }


}
?>