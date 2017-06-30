<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trazabilidad_de_carga extends CI_Controller{

  function index()
  {
    $this->load->view('Trazabilidad_de_carga/index');
  }

  function contenedores()
  {
    $this->load->view('Trazabilidad_de_carga/control_de_contenedores');
  }

  function carga_suelta()
  {
    $this->load->view('Trazabilidad_de_carga/control_de_carga_suelta');
  }

}
