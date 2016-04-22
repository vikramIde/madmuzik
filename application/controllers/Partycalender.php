<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partycalender extends CI_Controller {
	public function index()
	{
		$this->load->view('partycalender');
	}
}
