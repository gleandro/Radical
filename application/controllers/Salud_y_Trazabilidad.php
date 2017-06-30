<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salud_y_Trazabilidad extends CI_Controller{

  function index()
  {
    $this->load->view('Salud_y_Trazabilidad/index');
  }

  function medicamentos()
  {
    $this->load->view('Salud_y_Trazabilidad/trazabilidad_de_medicamentos');
  }

  function seguimiento()
  {
    $this->load->view('Salud_y_Trazabilidad/seguimiento_pacientes_personal');
  }

}
