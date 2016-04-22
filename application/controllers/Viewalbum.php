<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewalbum extends CI_Controller {
	public function index()
	{
		$this->load->view('viewalbum');
	}
}
