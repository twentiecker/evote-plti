<?php
class Registrasi extends CI_Controller{


    function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
        $this->data['judul'] = "Pemilihan";
        $this->load->library('session');

        // $this->data can be accessed from anywhere in the controller.
    }  


    public function index(){
        $data['judul'] = "Registrasi" ;

        if($this->input->method() === 'post'){
            $data['ktp'] = $this->input->post();
            $this->session->set_userdata('dataktp',$this->input->post());
            $data['image'] = [
                "image1" => 0
    
                  ];
            $data['tujuan']= 'registrasi/fingerprint';
            $this->load->view('templates/header',$data);
           $this->load->view('notif/tampiluser',$data);
           $this->load->view('templates/footer');
          
         }
         else {
            $this->load->view('registrasi/index',$data);
         }
         
       
    }

    public function index2(){
        $data['judul'] = "Registrasi" ;
        //$data['nama'] =$nama;
        $this->load->library('form_validation');
        $this->load->model('Registrasi_model');
        if($this->input->post('keyword')){
           $data['ktp'] = $this->Registrasi_model->searchktp();
           $data['image'] = [
                "image1" => 0

           ];
           $data['image2'] =$this->Registrasi_model->searchImage();
           if ( $data['image2'] ){
            $data['image'] = $data['image2'] ;
           }
           
           $data['keyword']= $this->input->post('keyword');
           $data['judul'] = "Registrasi" ;
           //$data['nama'] =$nama;

           If( $data['ktp']){
           $data['tujuan']= 'registrasi/fingerprint';
            $this->load->view('templates/header',$data);
           $this->load->view('notif/tampiluser',$data);
           $this->load->view('templates/footer');
           }
           else{
            $this->load->view('templates/header',$data);
            $this->load->view('notif/tidakditemukan',$data);
            $this->load->view('templates/footer');
           }
        }
        else {
            $this->load->view('templates/header',$data);
            $this->load->view('registrasi/index',$data);
            $this->load->view('templates/footer');
        }
       
    }

  /*  public function tampiluser(){
        $data['judul'] = "Registrasi" ;
        //$data['nama'] =$nama;
       $this->load->view('templates/header',$data);
        $this->load->view('registrasi/tampiluser',$data);
        $this->load->view('templates/footer');
    }
*/

    public function fingerprint($nik){
        $data['judul'] = "Registrasi" ;
        $data['nik']=$nik;
     //   $this->load->model('Pemilihan_model');
       // $data['datafinger'] = $this->Pemilihan_model->searchfinger($nik);
      // $this->load->view('templates/header',$data);
        $this->load->view('registrasi/fingerprint',$data);
       // $this->load->view('templates/footer');
    }


    public function facerecognation($nik){
        $data['judul'] = "Registrasi" ;
     
    if($this->input->method() === 'post'){
        $image1 = $this->input->post('image1');
       $image2= $this->input->post('image2');
       $image3= $this->input->post('image3');
       $this->load->model('Registrasi_model');  
       $this->Registrasi_model->tambahktp();   
       $this->Registrasi_model->tambahfinger();  
       $this->Registrasi_model->insertIMG($nik,$image1,$image2,$image3);
       redirect('registrasi/finish');
      
     }
     else {
        $data['nik']=$nik;
        //$this->load->view('templates/header',$data);
         $this->load->view('registrasi/facerecognation',$data);
        // $this->load->view('templates/footer');
       
        
     }
    }

   /* 
   
      public function facerecognation($nik){
        $data['judul'] = "Registrasi" ;
     
        $data['nik']=$nik;
       $this->load->view('templates/header',$data);
        $this->load->view('registrasi/facerecognation',$data);
        $this->load->view('templates/footer');
    }

   public function uploadImage($nik = 0,$no = 0){
        $data['judul'] = "Registrasi" ;
        $this->load->model('Registrasi_model');
        $data['nik']=$nik;
        $data['no'] = $no;
        $this->load->view('registrasi/uploadImage',$data);
        $this->Registrasi_model->insertIMG($nik,$no);
    }
    */

    public function uploadImage(){
        $data['judul'] = "Registrasi" ;
        $this->load->model('Registrasi_model');     
        $this->Registrasi_model->insertIMG($nik,$image1,$image2,$image3);
        $this->load->view('notif/sukses',$data);
    }

    public function finish(){
        $data['judul'] = "Registrasi" ;
        
     // $this->load->view('templates/header',$data);
      $this->load->view('registrasi/sukses',$data);
      // $this->load->view('templates/footer');
    }
}

?>