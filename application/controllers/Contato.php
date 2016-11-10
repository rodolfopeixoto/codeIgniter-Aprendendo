<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','session'));
    $this->load->helper('form');
  }

  public function FaleConosco(){
    $data['title'] = "Rodolfo Peixoto | Fale Conosco";
    $data['description'] = "Está com alguma dúvida? entre em contato conosco agora!";
    $data['formErrors'] = null;


    $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required|min_length[5]');
    $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required|min_length[30]');

    if($this->form_validation->run() == FALSE){
      $data['formErrors'] = validation_errors();

    }else{

      $this->session->set_flashdata('success_msg','Contato recebido com sucesso!');
      $data['formErrors'] = null;
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