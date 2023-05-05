<?php
class Capil extends CI_Controller{

    public function index2(){
        $data['judul'] = "Pendaftaran Capil" ;
        //$data['nama'] =$nama;
        $this->load->library('form_validation');
        $this->load->model('Capil_model');
        $this->form_validation->set_rules('nik','NIK','required');
            if ($this->form_validation->run()== False){
                $this->load->view('templates/header',$data);
                $this->load->view('capil/index',$data);
                $this->load->view('templates/footer');
            }
            else 
            {
               
                $this->Capil_model->tambahktp();
                $this->session->set_flashdata('flash','Ditambahkan');
                redirect('capil/fingerprint/'.$this->input->post('nik',true));
            }

        }

        public function fingerprint($nik){
            $data['judul'] = "Pendaftaran Capil" ;
            //$data['nama'] =$nama;
            $data['nik']=$nik;
            $this->load->view('templates/header',$data);
            $this->load->view('capil/fingerprint',$data);
            $this->load->view('templates/footer');
        }

        public function index3(){
            $data['judul'] = "Pendaftaran Capil" ;
            //$data['nama'] =$nama;
            $this->load->library('form_validation');
            $this->load->model('Capil_model');
            $this->form_validation->set_rules('nik','NIK','required');
                if ($this->form_validation->run()== False){
                    $this->load->view('templates/header',$data);
                    $this->load->view('capil/index',$data);
                    $this->load->view('templates/footer');
                }
                else 
                {
                   
                    $this->Capil_model->tambahktp();
                    $this->session->set_flashdata('flash','Ditambahkan');
                    redirect('capil/fingerprint/'.$this->input->post('nik',true));
                }
    
            }
    
            public function index(){
                $data['judul'] = "Pendaftaran Capil" ;
                //$data['nama'] =$nama;
              
               
                $this->load->view('capil/index',$data);
             
            }
        public function getdata(){
            $data['judul'] = "Pendaftaran Capil" ;
            //$data['nama'] =$nama;
           // $data['nik']=$nik;
            $this->load->view('templates/header',$data);
            $this->load->view('capil/getdata',$data);
            $this->load->view('templates/footer');
        }
    
}

?>