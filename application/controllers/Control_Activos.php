<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Activos extends CI_Controller{

  public function index()
	{
		$this->load->view('control_activos/index');
	}

  public function retornables()
	{
		$this->load->view('control_activos/control_de_retornables');
	}

  public function activos()
  {
    $this->load->view('control_activos/control_activos_fijos');
  }

  public function equipos()
  {
    $this->load->view('control_activos/control_de_equipos');
  }

  public function neumaticos()
  {
    $this->load->view('control_activos/control_de_neumaticos');
  }

  public function documental()
  {
    $this->load->view('control_activos/control_documental');
  }

}
