<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad_Publica extends CI_Controller{

  function index()
  {
    $this->load->view('Seguridad_Publica/index');
  }

  function clonacion()
  {
    $this->load->view('Seguridad_Publica/clonacion_de_celular');
  }

  function bloqueo()
  {
    $this->load->view('Seguridad_Publica/bloqueo_de_celular');
  }

}
