<?php

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('employees_model');
		 $this->data = array(
            'title' => 'Purchases',
			'subnavtitle' => 'Users',
			'employeesclass' => '',
			'applicantclass' => '',
			'applicantsubclass' => '',
			'settingsclass' => 'active',
			'reportsclass' => '',
			'employeesclass' => ''
			
			);
			
		//javascript module
		$this->js = array(
            'jsfile' => 'users.js'
			);
		
		$this->load->library('session');
		$this->session;
		$utype = $this->session->userdata('usertype');
		$employee_eid = $this->session->userdata('emp_eid');
		if($utype=="staff" && $employee_eid!=$id){
			$baseurl = base_url();
			header('Location:'.$baseurl.'employees/details/'.$employee_eid);
		}else{
			//do nothing
		}
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;
		$data['page'] = "index";
		$data['details'] =array('instname'=>"Users Directory") ;
		$data['users_list'] = $this->users_model->get();
		$data['employeeslist'] = $this->employees_model->getemployeeslist();
		
		
		
		$this->load->view('inc/header_view');
		$this->load->view('users/users_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	
	
	

	
	
}