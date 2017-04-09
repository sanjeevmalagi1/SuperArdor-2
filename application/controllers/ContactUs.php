<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/navbar');
                //$this->load->view('AboutUs/Vision');
                $this->load->view('ContactUs/Address');
                $this->load->view('ContactUs/Mail');
                
                $this->load->view('Templates/footer');
                $this->load->view('Templates/scripts');
	}
}
