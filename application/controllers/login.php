<?php

class Login extends CI_Controller {
	public function index(){		
		$this->load->library('form_validation');
		$data['title'] = 'Log-in form';				
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('login_view', $data);			
		}
		else
		{	
			$this->load->view('templates/header', $data);
			$this->load->view('home', $data);
			$this->load->view('templates/footer', $data);
		}
	}
	
}



