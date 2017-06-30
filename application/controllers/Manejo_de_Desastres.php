<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manejo_de_Desastres extends CI_Controller{

  function index()
  {
    $this->load->view('Manejo_de_Desastres/index');
  }

}
