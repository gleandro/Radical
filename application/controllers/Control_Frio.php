<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Frio extends CI_Controller{

  function index()
  {
    $this->load->view('Control_Frio/index');
  }

}
