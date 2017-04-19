<?php

class Employees extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('employees_model');
		$this->load->helper('date');
		//view module
		 $this->data = array(
            'title' => 'Settings',
			'employeesclass' => 'active',
			'purchasesclass' => '',
			'aprclass' => '',
			'prclass' => '',
			'poclass' => '',
			'receiveclass' => '',
			'usersclass' => '',
			'userssubclass' => '',
			'reportsclass' => '',
			'assetmanagementclass' => '',
			'recevingassetsclass' => '',
			'assetclass' => '',
			'propertyclass' => '',
			'supplymanagementclass' => '',
			'settingsclass' => '',
			'requisitionclass' => '',
			'equipmentclass' => '',
			'itemsclass' => '',
			'suppliersclass' => '',
			'employeesclass' => 'active',
			'inventoryclass' => '',
			'subnavtitle' => 'Employees',
			'typeahead' => '1',
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'settings_employees.js'
			);
	}
	
	public function index()
	{
		$data = $this->data;
		$js = $this->js;

		
		$data['employeeslist'] = $this->employees_model->getemployeeslist();

		$this->load->view('inc/header_view');
		$this->load->view('employee/employees_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function details($id)
	{
		$data = $this->data;
		$js = $this->js;
		
		$base = base_url();
		$fileurl = $base."uploads/".$id.".jpg";
		 $ch = curl_init($fileurl);    
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($code == 404){
            $data['status'] = "no";
			$data['fileurl'] = "";
        }else{
            $data['status'] = "yes";
			$data['fileurl'] = $fileurl;
        }
        curl_close($ch);
		
		$data['eid'] = $id;
		$data['employee_profile'] = $this->employees_model->getprofile($id);
		$data['e_children'] = $this->employees_model->getechildren($id);
		$data['e_background'] = $this->employees_model->getebackground($id);
		$data['e_careerservice'] = $this->employees_model->getecareerservice($id);

		$this->load->view('inc/header_view');
		$this->load->view('employee/employeeprofile_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function saveemployee(){
		$empno = $this->input->post('empno');
		$lname = $this->input->post('lname');
		$fname = $this->input->post('fname');
		$mname = $this->input->post('mname');
		$extension = $this->input->post('extension');
		$designation = $this->input->post('designation');
		
		$this->employees_model->saveemployee($empno,$lname,$fname,$mname,$extension,$designation);
	}
	
	public function deleteemployee(){
		$eid = $this->input->post('eid');
		$this->db->delete('employee', array('eid' => $eid));
		
		
	}
	

}