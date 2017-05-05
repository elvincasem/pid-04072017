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
			'applicantclass' => '',
			'applicantsubclass' => '',
						
			'usersclass' => '',
			'userssubclass' => '',
			'reportsclass' => '',
			
			'settingsclass' => '',
			
			
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
		$data['employee_list'] = $this->employees_model->getemployeeslist($id);
		$data['settings_salary'] = $this->employees_model->getsettingssalary();
		
		
		//print module settings
		$data['travel_header'] = $this->employees_model->reportdisplay("TRAVEL","HEADER");
		$data['travel_column1'] = $this->employees_model->reportdisplay("TRAVEL","COLUMN1");
		$data['travel_column2'] = $this->employees_model->reportdisplay("TRAVEL","COLUMN2");
		$data['travel_column3'] = $this->employees_model->reportdisplay("TRAVEL","COLUMN3");
		$data['travel_office'] = $this->employees_model->reportdisplay("TRAVEL","OFFICE");
		

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
	public function updateemployee2(){
		$eid = $this->input->post('eid');
		$designation = $this->input->post('designation');
		$salary = $this->input->post('salary');
		$item_no = $this->input->post('item_no');
		


		$this->employees_model->updateemployee2($eid,$designation,$salary,$item_no);
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
	
	public function upload_attachment(){
		//$fileid = 456;
		$fileid = $this->input->post('fileattachmentid');
		$folder = $this->input->post('folder_destination');
		//$form_value = 
		 //$newfilename = $fileid."jpg";
         $config['upload_path']   = './uploads/'.$folder.'/'; 
         $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|jpeg'; 
         $config['max_size']      = 2048; 
         $config['max_width']     = 2048; 
         $config['max_height']    = 2048;  
         $config['overwrite']    = true;  
         $config['file_name']    = $fileid;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('fileattachment')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
			show_404();
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
			
			$filename = $this->upload->data('file_name'); 
			
			if($folder="201_files"){
				$this->employees_model->update_file($fileid,$filename);
			}
			
            //$this->load->view('upload_success', $data); 
			//header('Location:profile/'.$eid);
         } 
		
	}
	
	public function upload_attachment_appleave(){
		//$fileid = 456;
		$fileid = $this->input->post('fileattachmentid_appleave');
		$folder = "request_approvals";
		//$form_value = 
		 //$newfilename = $fileid."jpg";
         $config['upload_path']   = './uploads/'.$folder.'/'; 
         $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|jpeg'; 
         $config['max_size']      = 2048; 
         $config['max_width']     = 2048; 
         $config['max_height']    = 2048;  
         $config['overwrite']    = true;  
         $config['file_name']    = $fileid;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('fileattachment_appleave')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
			show_404();
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
			
			$filename = $this->upload->data('file_name'); 
			
			
			$this->employees_model->update_file_appleave($fileid,$filename);
			
			
            //$this->load->view('upload_success', $data); 
			//header('Location:profile/'.$eid);
         } 
		
	}
	
	public function upload_attachment_authtravel(){
		//$fileid = 456;
		$fileid = $this->input->post('fileattachmentid_authtravel');
		$folder = "authority_travel";
		//$form_value = 
		 //$newfilename = $fileid."jpg";
         $config['upload_path']   = './uploads/'.$folder.'/'; 
         $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|jpeg'; 
         $config['max_size']      = 2048; 
         $config['max_width']     = 2048; 
         $config['max_height']    = 2048;  
         $config['overwrite']    = true;  
         $config['file_name']    = $fileid;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('fileattachment_authtravel')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload_form', $error); 
			show_404();
         }
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
			
			$filename = $this->upload->data('file_name'); 
			
			
			$this->employees_model->update_file_authtravel($fileid,$filename);
			
			
            //$this->load->view('upload_success', $data); 
			//header('Location:profile/'.$eid);
         } 
		
	}
	
	
	
	/* educational background*/
	public function saveeduc(){
		$eid = $this->input->post('eid');
		$level = $this->input->post('level');
		$nameofschool = $this->input->post('nameofschool');
		$basiceducation = $this->input->post('basiceducation');
		$period_from = $this->input->post('period_from');
		$period_to = $this->input->post('period_to');
		$highest_level = $this->input->post('highest_level');
		$year_graduated = $this->input->post('year_graduated');
		$scholar_received = $this->input->post('scholar_received');
		
		$this->employees_model->saveeduc($eid,$level,$nameofschool,$basiceducation,$period_from,$period_to,$highest_level,$year_graduated,$scholar_received);
	}
	
	public function deleteeduc(){
		$educbackgroundid = $this->input->post('educbackgroundid');
		$this->db->delete('employee_educational_background', array('educbackgroundid' => $educbackgroundid));
		
	}
	/*career service*/
	public function savecareer(){
		$eid = $this->input->post('eid');
		$career_description = $this->input->post('career_description');
		$career_rating = $this->input->post('career_rating');
		$career_date = $this->input->post('career_date');
		$career_place = $this->input->post('career_place');
		$career_number = $this->input->post('career_number');
		$career_validity = $this->input->post('career_validity');
		
		
		$this->employees_model->savecareer($eid,$career_description,$career_rating,$career_date,$career_place,$career_number,$career_validity,$eid);
	}
	
	public function deletecareer(){
		$civilserviceid = $this->input->post('civilserviceid');
		$this->db->delete('employee_career_service', array('civilserviceid' => $civilserviceid));
		
	}
	
	/* work/service record */

	public function savework(){
		$eid = $this->input->post('eid');
		$service_from = $this->input->post('service_from');
		$service_to = $this->input->post('service_to');
		$service_position = $this->input->post('service_position');
		$service_status = $this->input->post('service_status');
		$service_salary = $this->input->post('service_salary');
		$service_station = $this->input->post('service_station');
		$service_branch = $this->input->post('service_branch');
		$service_leave = $this->input->post('service_leave');
		$service_separation = $this->input->post('service_separation');
		
		
		$this->employees_model->savework($eid,$service_from,$service_to,$service_position,$service_status,$service_salary,$service_station,$service_branch,$service_separation,$service_leave);
	}
	
	public function deletework(){
		$servicerecordid = $this->input->post('servicerecordid');
		$this->db->delete('employee_service_record', array('servicerecordid' => $servicerecordid));
		
	}
	
	/* training record */

	public function savetraining(){
		$eid = $this->input->post('eid');
		$training_title = $this->input->post('training_title');
		$training_from = $this->input->post('training_from');
		$training_to = $this->input->post('training_to');
		$training_hours = $this->input->post('training_hours');
		$training_type = $this->input->post('training_type');
		$training_by = $this->input->post('training_by');

		
		
		$this->employees_model->savetraining($eid,$training_title,$training_from,$training_to,$training_hours,$training_type,$training_by);
	}
	
	public function deletetraining(){
		$trainingid = $this->input->post('trainingid');
		$this->db->delete('employee_training', array('trainingid' => $trainingid));
		
	}
	
/* award record */

	public function saveaward(){
		$eid = $this->input->post('eid');
		$award_date = $this->input->post('award_date');
		$award_department = $this->input->post('award_department');
		$award_description = $this->input->post('award_description');
		
		
		
		$this->employees_model->saveaward($eid,$award_date,$award_department,$award_description);
	}
	
	public function deleteaward(){
		$awardid = $this->input->post('awardid');
		$this->db->delete('employee_award', array('awardid' => $awardid));
		
	}
	/* award record */

	public function saveother(){
		$eid = $this->input->post('eid');
		$information_type = $this->input->post('information_type');
		$information_description = $this->input->post('information_description');
		
		
		$this->employees_model->saveother($eid,$information_type,$information_description);
	}
	
	public function deleteother(){
		$otherid = $this->input->post('otherid');
		$this->db->delete('employee_other_information', array('otherid' => $otherid));
		
	}

	public function savefile(){
		$eid = $this->input->post('eid');
		$file_document_type = $this->input->post('file_document_type');
		$file_description = $this->input->post('file_description');
		$file_date = $this->input->post('file_date');
		
		
		$this->employees_model->savefile($eid,$file_document_type,$file_description,$file_date);
	}
	
	public function deletefile(){
		$filesid = $this->input->post('filesid');
		$this->db->delete('employee_files', array('filesid' => $filesid));
		
	}
	public function saverating(){
		$eid = $this->input->post('eid');
		$rating_from = $this->input->post('rating_from');
		$rating_to = $this->input->post('rating_to');
		$rating = $this->input->post('rating');
		
		
		$this->employees_model->saverating($eid,$rating_from,$rating_to,$rating);
	}
	
	public function deleterating(){
		$ratingid = $this->input->post('ratingid');
		$this->db->delete('employee_rating', array('ratingid' => $ratingid));
		
	}
	public function saveleavecredit(){
		$eid = $this->input->post('eid');
		$leave_from = $this->input->post('leave_from');
		$leave_to = $this->input->post('leave_to');
		$leave_particular = $this->input->post('leave_particular');
		$leave_earned = $this->input->post('leave_earned');
		$leave_absences = $this->input->post('leave_absences');
		$leave_abswop = $this->input->post('leave_abswop');
		$sick_earned = $this->input->post('sick_earned');
		$sick_abswp = $this->input->post('sick_abswp');
		$sick_abswop = $this->input->post('sick_abswop');
		$sick_action = $this->input->post('sick_action');
		$leave_balance = $this->input->post('leave_balance');
		$sick_balance = $this->input->post('sick_balance');
		
		
		$this->employees_model->saveleavecredit($eid,$leave_from,$leave_to,$leave_particular,$leave_earned,$leave_absences,$leave_abswop,$sick_earned,$sick_abswp,$sick_abswop,$sick_action,$leave_balance,$sick_balance);
	}
	
	public function deleteleavecredit(){
		$leavecreditsid = $this->input->post('leavecreditsid');
		$this->db->delete('employee_leave_credits', array('leavecreditsid' => $leavecreditsid));
		
	}
	
	public function saveappleave(){
		$eid = $this->input->post('eid');
		$appleave_type = $this->input->post('appleave_type');
		$appleave_location = $this->input->post('appleave_location');
		$appleave_from = $this->input->post('appleave_from');
		$appleave_to = $this->input->post('appleave_to');
		$appleave_recommendation = $this->input->post('appleave_recommendation');
		$appleave_status = $this->input->post('appleave_status');
		$sick_earned = $this->input->post('sick_earned');
		$sick_abswp = $this->input->post('sick_abswp');
		$sick_abswop = $this->input->post('sick_abswop');
		$sick_action = $this->input->post('sick_action');
		$leave_balance = $this->input->post('leave_balance');
		$sick_balance = $this->input->post('sick_balance');
		$appleave_commutation = $this->input->post('appleave_commutation');
		
		
		$this->employees_model->saveappleave($eid,$appleave_type,$appleave_location,$appleave_from,$appleave_to,$appleave_recommendation,$appleave_status,$appleave_commutation);
	}
	
	public function deleteappleave(){
		$appleaveid = $this->input->post('appleaveid');
		$this->db->delete('employee_leave_application', array('appleaveid' => $appleaveid));
		
	}
	
	public function saveauth(){
		$eid = $this->input->post('eid');
		$travel_from = $this->input->post('travel_from');
		$travel_to = $this->input->post('travel_to');
		$travel_location = $this->input->post('travel_location');
		$travel_description = $this->input->post('travel_description');
		
		
		
		$this->employees_model->saveauth($eid,$travel_from,$travel_to,$travel_location,$travel_description);
	}
	
	public function deleteauth(){
		$authtravelid = $this->input->post('authtravelid');
		$this->db->delete('employee_travel', array('authtravelid' => $authtravelid));
		
	}
	
	public function addemployee(){
		$traveleid = $this->input->post('traveleid');
		$authtravelid = $this->input->post('authtravelid');
		$this->employees_model->addemployee($traveleid,$authtravelid);
		
	}
	
	public function removetraveleid(){
		$travelemployeeid = $this->input->post('travelemployeeid');
		$this->db->delete('employee_travel_eid', array('travelemployeeid' => $travelemployeeid));
		
		
	}
	
	public function printtravel(){
		$travelid = $this->input->post('travelid');
		$traveldetails = $this->employees_model->gettraveldetails($travelid);

		echo json_encode($traveldetails);
		
	}
	public function printtravel_employee(){
		$travelid = $this->input->post('travelid');
		$traveldetails = $this->employees_model->gettraveldetails_eid($travelid);

		echo json_encode($traveldetails);
		
	}
	
	public function deleteuploadedfile(){
		$filesid = $this->input->post('filesid');
		//get filename
		$file_name = $this->employees_model->getfilename($filesid);
		
		//$fileurl = base_url("uploads/201_files/" . $file_name);
		
		$this->load->helper("url");
		//delete_files("uploads/201_files".$filesid.".pdf");
		unlink("uploads/201_files/" . $file_name);
		//$this->db->delete('employee_educational_background', array('educbackgroundid' => $educbackgroundid));
		$this->employees_model->updatedeletefile($filesid);
		
		
	}
	public function deleteuploadedfile_appleaveid(){
		$appleaveid = $this->input->post('appleaveid');
		//get filename
		$file_name = $this->employees_model->getfilename_appleaveid($appleaveid);
		$this->load->helper("url");
		unlink("uploads/request_approvals/" . $file_name);
		$this->employees_model->updatedeletefile_appleave($appleaveid);
		
		
	}
	public function deleteuploadedfile_authtravel(){
		$authtravelid = $this->input->post('authtravelid');
		//get filename
		$file_name = $this->employees_model->getfilename_authtravel($authtravelid);
		$this->load->helper("url");
		unlink("uploads/authority_travel/" . $file_name);
		$this->employees_model->updatedeletefile_authtravel($authtravelid);
		
		
	}
	

}