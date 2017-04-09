<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Templates/stylesheets');
                //$this->load->view('Templates/header');
                $this->load->view('AboutUs/Vision');
                $this->load->view('AboutUs/Skills');
                $this->load->view('AboutUs/Team');
                
                $this->load->view('Templates/footer');
                $this->load->view('Templates/scripts');
	}
}
