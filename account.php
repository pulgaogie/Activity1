<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class account extends CI_Controller {

 public function __construct(){

		parent::__construct();
		
		$this->load->model('register_model');
}
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('main_page');
		$this->load->view('footer');

	}

	
	public function registration()
	{
		$this->registration_submit();
		$this->load->view('header');
		$this->load->view('registration');
		$this->load->view('footer');
	}

	public function registration_submit()
	{
		if( $this->input->post('submit'))

		{


			
			$this->load->model('register_model');
		   $this->register_model->registration_submit();


			
		}
	}
	public function user_admin()
	{
		if( $this->input->post('save'))

		{


			
			$this->load->model('register_model');
		   $this->register_model->user_admin();


			
		}
	}
	public function search_student()
	{
		if( $this->input->post('search'))

		{


			
			$this->load->model('register_model');
		   $this->register_model->search_student();


			
		}
	}

	public function enter()
	{
		if( $this->input->post('In'))

		{
			$this->load->model('register_model');
		   $this->register_model->enter();

			
		}else{
			$this->input->post('Out');
			$this->load->model('register_model');
		   $this->register_model->exit();

		}
	}
	public function login()
	{
		 
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function masterlist()

	{
		
		$data['entrance'] = $this->register_model->get_student();
		$data['register'] = $this->register_model->get_register();
		$this->load->view('header');
		$this->load->view('masterlist',$data);
		$this->load->view('footer');
	}
	public function student_entrance()
	{
		$data['entrance'] = $this->register_model->get_student();
		$this->load->view('header');
		$this->load->view('student_entrance',$data);
		$this->load->view('footer');
	}

	public function user_login()
	{
		if( $this->input->post('login'))

		{


			
			$this->load->model('register_model');
		   $this->register_model->user_login();


			
		}
	}
	public function main_page()
	{
		if( $this->input->post('Admin'))

		{


			$this->load->view('header');
			$this->load->view('admin');
		  	$this->load->view('footer');


			
		}
		else
		{

			$this->input->post('Student');
			$this->load->view('header');
			$this->load->view('index');
		  	$this->load->view('footer');
		}
	}
	public function admin()
	{
		if( $this->input->post('admin'))

		{
			redirect('account/masterlist');


			
		}

	}
	public function admin_register()
	{

		$this->load->view('header');
		$this->load->view('admin_register');
		$this->load->view('footer');
	}
	
}


