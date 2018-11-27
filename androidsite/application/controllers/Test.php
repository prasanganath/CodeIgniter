<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function phone()
	{
		$this->load->view('phone');
	}
	public function tablet()
	{
		$this->load->view('tablets');
	}

	public function wear()
	{
		$this->load->view('wear');
	}

	public function tv()
	{
		$this->load->view('tv');
	}

	public function auto()
	{
		$this->load->view('auto');
	}

	public function one()
	{
		$this->load->view('one');
	}

	public function play()
	{
		$this->load->view('play');
	}
    
    public function lolipop()
	{
		$this->load->view('lolipop');
	}

	public function kitkat()
	{
		$this->load->view('kitkat');
	}

	public function jellybean()
	{
		$this->load->view('jellybean');
	}

	public function version()
	{
		$this->load->view('version');
	}

	public function resourses()
	{
		$this->load->view('resourses');
	}
	public function login()
	{
		$this->load->view('login');
	}
	
	public function androidauto()
	{
		$this->load->view('androidauto');
	}

	public function getFormData(){
		$data=array(
			'uname'=>$this->input->post('uname'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email'),
			'rpassword'=>$this->input->post('rpassword')
		);
		$this->load->model('singUp');
		$this->singUp->setSignUpData($data);
		return redirect('/Test/login');
	}

	public function log(){
		$data=array(
			'uname'=>$this->input->post('uname'),
			'password'=>$this->input->post('password'),
			'email'=>$this->input->post('email')

		);

		$this->load->model('singUp');
		$result=$this->singUp->setSignInData($data);
		if($result=="true"){
			return redirect('/');
		}
		if($_GET['$password']==$_GET['$confirmpassword']){
			//succes
		}
		else{
			//nosucess
		}
	}



}
