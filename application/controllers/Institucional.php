<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Institucional extends CI_Controller{

    // Adiciona cache globalmente
    public function __construct(){
    	parent::__construct();
    	$this->output->cache(1440);
    }

    public function index(){
      // $this->output->cache(1440); adiciona cache localmente
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