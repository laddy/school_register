<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{        
		$this->load->view('header');
		$this->load->view('home/index');
		$this->load->view('footer');
		return true;
	}
	
	
	public function login()
	{
		echo "Login";
		return true;
	}
	
	public function logout()
	{
		
	}
}
