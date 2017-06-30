<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_retail_inventario extends CI_Controller{

  function index()
  {
    $this->load->view('Control_retail_inventario/index');
  }

}
