<?php


class Register extends CI_Controller{
	public function RegisterUser(){
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[bloguser.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('passwordagain', 'Again Password', 'required|match[password]');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Register');
		}
		else
		{
			echo "form validation true";
			die();
		}


	}


}



