<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Activos extends CI_Controller{

  public function index()
	{
		$this->load->view('control_activos/index');
	}

  public function control()
	{
		$this->load->view('control_activos/control_de_retornables');
	}

}
