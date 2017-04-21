<?php

class Employees extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('employees_model');
		$this->load->helper('date');
		 $this->load->helper(array('form', 'url'));
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
		$data['position_designation'] = $this->employees_model->getposition();
		$data['employee_profile'] = $this->employees_model->getprofile($id);
		$data['e_children'] = $this->employees_model->getechildren($id);
		$data['e_background'] = $this->employees_model->getebackground($id);
		$data['e_careerservice'] = $this->employees_model->getecareerservice($id);
		$data['e_servicerecord'] = $this->employees_model->geteservicerecord($id);
		$data['e_training'] = $this->employees_model->getetraining($id);
		$data['e_award'] = $this->employees_model->geteaward($id);
		$data['e_others'] = $this->employees_model->geteothers($id);
		$data['e_files'] = $this->employees_model->getefiles($id);
		$data['e_rating'] = $this->employees_model->geterating($id);
		$data['e_leavecredits'] = $this->employees_model->geteleavecredits($id);
		$data['e_leaveapp'] = $this->employees_model->geteleaveapp($id);
		$data['e_travel'] = $this->employees_model->getetravel($id);
		

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
	
	public function updateemployee(){
		$eid = $this->input->post('eid');
		$lastname = $this->input->post('lastname');
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$extension = $this->input->post('extension');
		$dateofbirth = $this->input->post('dateofbirth');
		$placeofbirth = $this->input->post('placeofbirth');
		$gender = $this->input->post('gender');
		$civilstatus = $this->input->post('civilstatus');
		$citizenship = $this->input->post('citizenship');
		$height = $this->input->post('height');
		$weight = $this->input->post('weight');
		$bloodtype = $this->input->post('bloodtype');
		$mobileno = $this->input->post('mobileno');
		$email = $this->input->post('email');
		$barangay = $this->input->post('barangay');
		$towncity = $this->input->post('towncity');
		$province = $this->input->post('province');
		$zipcode = $this->input->post('zipcode');
		$datehired = $this->input->post('datehired');


		$this->employees_model->updateemployee($eid,$lastname,$firstname,$middlename,$extension,$dateofbirth,$placeofbirth,$gender,$civilstatus,$citizenship,$height,$weight,$bloodtype,$mobileno,$email,$barangay,$towncity,$province,$zipcode,$datehired);
		//$this->employees_model->updateemployee($eid,$lastname);
	}
	public function updateemployeefamily(){
		$eid = $this->input->post('eid');
		$spouse_lname = $this->input->post('spouse_lname');
		$spouse_fname = $this->input->post('spouse_fname');
		$spouse_mname = $this->input->post('spouse_mname');
		$father_lname = $this->input->post('father_lname');
		$father_fname = $this->input->post('father_fname');
		$father_mname = $this->input->post('father_mname');
		$mother_lname = $this->input->post('mother_lname');
		$mother_fname = $this->input->post('mother_fname');
		$mother_mname = $this->input->post('mother_mname');
		

		$this->employees_model->updateemployeefamily($eid,$spouse_lname,$spouse_fname,$spouse_mname,$father_lname,$father_fname,$father_mname,$mother_lname,$mother_fname,$mother_mname);
		//$this->employees_model->updateemployee($eid,$lastname);
	}
	
	public function addchildren(){
		$eid = $this->input->post('eid');
		$children_name = $this->input->post('children_name');
		$children_dob = $this->input->post('children_dob');
		

		$this->employees_model->addchildren($eid,$children_name,$children_dob);
		//$this->employees_model->updateemployee($eid,$lastname);
	}
	public function deletechildren(){
		$childrenid = $this->input->post('childrenid');
		$this->db->delete('employee_children', array('childrenid' => $childrenid));
		
		
	}
	
	public function uploadprofile(){
		//$fileid = 456;
		$fileid = $this->input->post('fileid');
		//$form_value = 
		 //$newfilename = $fileid."jpg";
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         $config['max_size']      = 2048; 
         $config['max_width']     = 2048; 
         $config['max_height']    = 2048;  
         $config['overwrite']    = true;  
         $config['file_name']    = $fileid.".jpg";  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('profileimage')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
			//show_404();
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            //$this->load->view('upload_success', $data); 
			//header('Location:profile/'.$eid);
         } 
		
	}
	

}