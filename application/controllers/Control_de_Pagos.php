<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_de_Pagos extends CI_Controller{

  function index()
  {
    $this->load->view('Control_de_Pagos/index');
  }

}
