<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/navbar');
                $this->load->view('Portfolio/Portfolio');
                $this->load->view('Templates/footer');
                $this->load->view('Templates/scripts');
	}
}
