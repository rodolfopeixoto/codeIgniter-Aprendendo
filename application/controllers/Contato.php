<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('form');
  }

  public function FaleConosco(){
    $data['title'] = "Rodolfo Peixoto | Fale Conosco";
    $data['description'] = "Está com alguma dúvida? entre em contato conosco agora!";
    if($this->form_validation->run() == FALSE){

    }else{

    }

    $this->load->view('fale-conosco',$data);
  }

  public function TrabalheConosco(){
    $data['title'] = "Rodolfo Peixoto - Trabalhe Conosco";
    $data['description'] = "Venha trabalhar na melhor empresa de TI do país.";
    $this->load->view('trabalhe-conosco',$data);
  }
}
?>