<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Institucional';
$route['empresa'] = "Institucional/Empresa";
$route['servicos'] = "Institucional/Servicos";
$route['fale-conosco'] = 'Contato/FaleConosco';
$route['trabalhe-conosco'] = 'Contato/TrabalheConosco';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
