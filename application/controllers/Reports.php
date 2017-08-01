<?php

class Reports extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('reports_model');
		//$this->load->model('employees_model');
		$this->load->helper('date');
		//view module
		 $this->data = array(
            'title' => 'Reports',
			'employeesclass' => '',
			'applicantclass' => '',
			'applicantsubclass' => '',
						
			'usersclass' => '',
			'userssubclass' => '',
			'reportsclass' => '',
			
			'settingsclass' => '',
			'reportsclass' => 'active',
			
			
			'inventoryclass' => '',
			'subnavtitle' => 'Reports',
			'typeahead' => '1',
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'reports.js'
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
	public function ticketbyagentdownload($designation)
	{
		$designation_value = rawurldecode($designation);
		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
		$this->excel->getActiveSheet()->setTitle('Employee by Designation');
		$this->load->database();
		//$users = $this->userModel->get_users();
		
		if($designation_value=="All"){
			$sql = $this->db->query("SELECT item_no,lname,fname,mname,ename,designation,salary,dob,pob,gender,civil_status,citizenship,mobile_number,email_address,a_barangay,a_towncity,a_province,date_hired,employee_status FROM employee");
			
			
		}else{
			$sql = $this->db->query("SELECT item_no,lname,fname,mname,ename,designation,salary,dob,pob,gender,civil_status,citizenship,mobile_number,email_address,a_barangay,a_towncity,a_province,date_hired,employee_status FROM employee WHERE designation=".$this->db->escape($designation_value)."");
		}
		
		
		$feedbacks = $sql->result_array();
		//$feedbacks = $this->db->query($sql);
		$arrHeader = array('Item No.', 'Last Name','First Name','Middle Name','extension','Designation','Salary','Date of Birth','Place of birth','Gender','Civil Status','Citizenship', 'Mobile number','Email','Barangay','Town/City','Province','Date Hired','Status');
		$this->excel->getActiveSheet()->fromArray($arrHeader,'2','A1');
		//$this->excel->getActiveSheet()->setCellValueByColumnAndRow(A);
		$this->excel->getActiveSheet()->fromArray($feedbacks,'','A2');
		$filename='Employeebydesignation.xls';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
		$objWriter->save('php://output');
		
	}
	
	public function edesignation(){
		
		$data = $this->data;
		$js = $this->js;

		$data['designation_list'] = $this->reports_model->getdesignation();
		//$data['startdate'] = $this->reports_model->getstartdate();
		//$data['enddate'] = $this->reports_model->getenddate();
		$this->load->view('inc/header_view');
		$this->load->view('reports/employeebydesignation_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	public function edesignation_view(){
		
		$designation=$this->input->post('designation');
		
		
		$data = $this->data;
		$js = $this->js;

		$data['designation_list'] = $this->reports_model->getdesignation();
		$data['employee_list'] = $this->reports_model->getemployee_designation($designation);
		$data['designation_value']=$designation;
	
		
		$this->load->view('inc/header_view');
		$this->load->view('reports/employeebydesignation_report_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function applicanttype(){
		
		$data = $this->data;
		$js = $this->js;

		//$data['designation_list'] = $this->reports_model->getdesignation();
		//$data['startdate'] = $this->reports_model->getstartdate();
		//$data['enddate'] = $this->reports_model->getenddate();
		$this->load->view('inc/header_view');
		$this->load->view('reports/applicanttype_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function applicanttype_view(){
		
		$applicant_type=$this->input->post('applicant_type');
		$education_keyword=$this->input->post('education_keyword');
		
		
		$data = $this->data;
		$js = $this->js;

		//$data['designation_list'] = $this->reports_model->getdesignation();
		$data['applicant_list'] = $this->reports_model->getapplicant_list($applicant_type,$education_keyword);
		$data['applicant_type']=$applicant_type;
	
		
		$this->load->view('inc/header_view');
		$this->load->view('reports/applicanttype_report_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	
	
}