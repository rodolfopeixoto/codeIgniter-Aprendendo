<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Institucional extends CI_Controller{
    public function index(){
      $data['title'] = "Rodolfo Peixoto | Home";
      $data['description'] = "Desenvolvimento da página Institucional";
      $this->load->view('home', $data);
    }

    public function Empresa(){
      $data['title'] = "Rodolfo Peixoto | Empresa";
      $data['description'] = "Conheça melhor a Soul Code";
      $this->load->view('empresa', $data);
    }

    public function Servicos(){
      $data['title'] = "Rodolfo Peixoto | Servicos";
      $data['description'] = "Página Servicos, todo o nosso trabalho";
      $this->load->view('commons/header');
      $this->load->view('servicos', $data);
      $this->load->view('commons/footer');
    }
  }
?>