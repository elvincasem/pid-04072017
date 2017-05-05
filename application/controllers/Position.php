<?php

class Position extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('settings_model');
		$this->load->helper('date');
		//view module
		 $this->data = array(
            'title' => 'Position/Designation List',
			'subnavtitle' => 'Position List',
			'typeahead' => '1',
			
			'employeesclass' => '',
			'applicantclass' => '',
			'applicantsubclass' => '',
			'settingsclass' => 'active',
			'employeesclass' => '',

			
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'settings_position.js'
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;

		
		$data['positionlist'] = $this->settings_model->getposition();

		$this->load->view('inc/header_view');
		$this->load->view('settings/position_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	
	
	public function saveposition(){
		$position_designation = $this->input->post('position_designation');
		
		
		$this->settings_model->saveposition($position_designation);
	}
	
	
	public function deleteposition(){
		$positionid = $this->input->post('positionid');
		
		$this->db->delete('settings_position_designation', array('positionid' => $positionid));
		
		
	}
	
	
	

}