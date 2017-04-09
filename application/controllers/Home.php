<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/header');
                $this->load->view('Home/Features');
                $this->load->view('Home/Introduction');
                $this->load->view('Home/Products');
                $this->load->view('Templates/footer');
                $this->load->view('Templates/scripts');
	}
}
