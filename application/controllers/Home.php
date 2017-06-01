<?php

class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		  $this->data = array(
            'title' => 'Dashboard',
			'typeahead' => '1',
			'employeesclass' => '',
			'applicantclass' => '',
			'applicantsubclass' => '',
			'settingsclass' => '',
			'employeesclass' => '',
			'reportsclass' => '',
			'subnavtitle' => 'Dashboard'
			);
			
			$this->js = array(
            'jsfile' => null,
			'typeahead' => '0'
			);
	}
	
	public function index()
	{
		/*$this->load->helper('url');
		$data['title'] = "Welcome";
		$data['heiclass'] = "";
		$data['heilist'] = "";
		$data['programlist'] = "";
		$data['deanslist'] = "";
		$data['contacts'] = "";
		$data['accounts'] = "";
		$data['programapplication'] = "";
		$data['permits'] = "";*/
		$js = $this->js;
		$data = $this->data;
		//$data['totalprojects'] = $this->dashboard_model->gettotalprojects();
		
		$data['dashboardchart'] = json_encode($this->dashboard_model->getdesignationchart());
		//$data['totalreq'] = $this->dashboard_model->gettotalreq();
		//$data['totalproperty'] = $this->dashboard_model->gettotalproperty();
		//$data['totalitems'] = $this->dashboard_model->gettotalitems();
		//$data['lowstock'] = $this->dashboard_model->getlowstock();
		
		
		$data['applicantcount'] = $this->dashboard_model->getapplicantcount();
		
		$data['employeecount'] = $this->dashboard_model->getemployeecount();
		
		$this->load->view('inc/header_view');
		

		$this->load->view('home/home_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	

	
	
}