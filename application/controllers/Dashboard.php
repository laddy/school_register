<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
 		if ( empty($this->session->user_data('is_login')) )
        {
            redirect('/login');
        }
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
