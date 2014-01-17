<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
	
		$data['title'] = ucfirst($page); // Capitalize the first letter
	
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);
	}
	
	/**public function login($page = 'login')
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Log-in form';		
	
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('login', $data);			
		}
		else
		{			
			$this->load->view('templates/header', $data);
			$this->load->view('success', $data);
			$this->load->view('templates/footer', $data);
		}
		
	}*/
}



