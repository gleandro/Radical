<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radical extends CI_Controller {

	public function index()
	{
		$this->load->view('radical/principal');
	}

	public function exitos()
	{
		$this->load->view('radical/casos_de_exitos');
	}

	public function nosotros()
	{
		$this->load->view('radical/nosotros');
	}

	public function contacto()
	{
		$this->load->view('radical/contacto');
	}

}
