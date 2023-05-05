<?php
class Settps extends CI_Controller{

    public function index(){

        $this->load->library('session');
        $data['judul'] = "Pendaftaran Capil" ;
        //$data['nama'] =$nama;
        $this->load->library('form_validation');
        $this->load->library('session');
       // $this->load->model('Capil_model');
        $this->form_validation->set_rules('tpsid','TPSID','required');
            if ($this->form_validation->run()== False){
                $this->load->view('templates/header',$data);
                $this->load->view('settps/index',$data);
                $this->load->view('templates/footer');
            }
            else 
            {
                $newdata = [
                    "ID" => $this->input->post('tpsid',true),
                    "Adress" => $this->input->post('tpsip',true),
                    "Port" => $this->input->post('port',true),
                 
                ];                
                $this->session->set_userdata('tps',$newdata);
               // $this->Capil_model->tambahktp();
               // $this->session->set_flashdata('flash','Ditambahkan');
                redirect('settps/configsukses/');
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

        public function configsukses(){
            $data['judul'] = "Pendaftaran Capil" ;
            //$data['nama'] =$nama;
           // $data['nik']=$nik;
            $this->load->view('templates/header',$data);
            $this->load->view('settps/configsukses',$data);
            $this->load->view('templates/footer');
        }
    
}

?>