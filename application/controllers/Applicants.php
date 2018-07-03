<?php

class Applicants extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//model module
		$this->load->model('applicant_model');
		$this->load->helper('date');
		 $this->load->helper(array('form', 'url'));
		//view module
		 $this->data = array(
            'title' => 'Settings',
			'subnavtitle' => 'Applicants',
			'typeahead' => '1',
			'employeesclass' => '',
			'applicantclass' => 'active',
			'applicantsubclass' => 'active',
			'settingsclass' => '',
			'employeesclass' => '',
			'reportsclass' => ''
			
			
			);
		//javascript module
		$this->js = array(
            'jsfile' => 'applicants.js'
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

		
		$data['applicantlist'] = $this->applicant_model->getapplicantlist();
		$data['positionlist'] = $this->applicant_model->positionlist();
		
		$this->load->view('inc/header_view');
		$this->load->view('applicant/applicant_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function details($id)
	{
		$data = $this->data;
		$js = $this->js;
		
		$base = base_url();
		$fileurl = $base."uploads/applicant/".$id.".jpg";
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
		
		
		$data['applicantid'] = $id;
		$data['applicant_profile'] = $this->applicant_model->getprofile($id);
		$data['a_education'] = $this->applicant_model->geteducation($id);
		$data['a_training'] = $this->applicant_model->gettraining($id);
		$data['a_work'] = $this->applicant_model->getwork($id);
		$data['a_skill'] = $this->applicant_model->getskill($id);
		$data['a_eligibility'] = $this->applicant_model->geteligibility($id);
		$data['a_files'] = $this->applicant_model->getafiles($id);
		$data['positionlist'] = $this->applicant_model->positionlist();

		$this->load->view('inc/header_view');
		$this->load->view('applicant/applicantprofile_view',$data);
		$this->load->view('inc/footer_view',$js);
		
	}
	
	public function saveapplicant(){
		
		$lname = $this->input->post('lname');
		$fname = $this->input->post('fname');
		$mname = $this->input->post('mname');
		$extension = $this->input->post('extension');
		$applicanttype = $this->input->post('applicanttype');
		$position_applied = $this->input->post('position_applied');
		
		$this->applicant_model->saveapplicant($lname,$fname,$mname,$extension,$applicanttype,$position_applied);
	}
	public function saveapplicant_type(){
		
		$applicantid = $this->input->post('applicantid');
		$applicant_type = $this->input->post('applicant_type');
		$position_applied = $this->input->post('position_applied');

		$this->applicant_model->saveapplicant_type($applicantid,$applicant_type,$position_applied);
	}
	
	public function deleteapplicant(){
		$applicantid = $this->input->post('applicantid');
		$this->db->delete('applicant', array('applicantid' => $applicantid));
		$this->db->delete('applicant_education', array('applicantid' => $applicantid));
		$this->db->delete('applicant_eligibility', array('applicantid' => $applicantid));
		$this->db->delete('applicant_skill', array('applicantid' => $applicantid));
		$this->db->delete('applicant_training', array('applicantid' => $applicantid));
		$this->db->delete('applicant_training', array('applicantid' => $applicantid));
		$this->db->delete('applicant_work', array('applicantid' => $applicantid));
		
		
	}
	
	public function updateapplicant(){
		$applicantid = $this->input->post('applicantid');
		$lastname = $this->input->post('lastname');
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$extension = $this->input->post('extension');
		
		$gender = $this->input->post('gender');
		$civilstatus = $this->input->post('civilstatus');
		
		
		$mobileno = $this->input->post('mobileno');
		$email = $this->input->post('email');
		$barangay = $this->input->post('barangay');
		$towncity = $this->input->post('towncity');
		$province = $this->input->post('province');
		$zipcode = $this->input->post('zipcode');
		$dateapplication = $this->input->post('dateapplication');
		$age = $this->input->post('age');


		$this->applicant_model->updateapplicant($applicantid,$lastname,$firstname,$middlename,$extension,$gender,$civilstatus,$mobileno,$email,$barangay,$towncity,$province,$zipcode,$dateapplication,$age);
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
         $config['upload_path']   = './uploads/applicant/'; 
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
			
			if($folder="applicant_files"){
				$this->applicant_model->update_file($fileid,$filename);
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
		$applicantid = $this->input->post('applicantid');
		$educ_description = $this->input->post('educ_description');
		
		
		$this->applicant_model->saveeduc($applicantid,$educ_description);
	}
	
	public function deleteeduc(){
		$educbackgroundid = $this->input->post('educbackgroundid');
		$this->db->delete('applicant_education', array('applicanteducid' => $educbackgroundid));
		
	}
	/*career service*/
	public function savetraining(){
		$applicantid = $this->input->post('applicantid');
		$training_description = $this->input->post('training_description');
		
		$this->applicant_model->savetraining($applicantid,$training_description);
	}
	
	public function deletecareer(){
		$civilserviceid = $this->input->post('civilserviceid');
		$this->db->delete('employee_career_service', array('civilserviceid' => $civilserviceid));
		
	}
	
	/* work/service record */

	public function savework(){
		$applicantid = $this->input->post('applicantid');
		$work_description = $this->input->post('work_description');
		
		
		$this->applicant_model->savework($applicantid,$work_description);
	}
	
	public function deletework(){
		$applicantworkid = $this->input->post('applicantworkid');
		$this->db->delete('applicant_work', array('applicantworkid' => $applicantworkid));
		
	}
	/* work/service record */

	public function saveskill(){
		$applicantid = $this->input->post('applicantid');
		$skill_description = $this->input->post('skill_description');
		
		
		$this->applicant_model->saveskill($applicantid,$skill_description);
	}
	
	public function deleteskill(){
		$applicantskillid = $this->input->post('applicantskillid');
		$this->db->delete('applicant_skill', array('applicantskillid' => $applicantskillid));
		echo "deleted";
	}
	/* work/service record */

	public function saveeligibility(){
		$applicantid = $this->input->post('applicantid');
		$eligibility_description = $this->input->post('eligibility_description');
		
		
		$this->applicant_model->saveeligibility($applicantid,$eligibility_description);
	}
	
	public function deleteeligibility(){
		$applicanteligibilityid = $this->input->post('applicanteligibilityid');
		$this->db->delete('applicant_eligibility', array('applicanteligibilityid' => $applicanteligibilityid));
		//echo "deleted";
	}
	
	/* training record */

	
	
	public function deletetraining(){
		$trainingid = $this->input->post('trainingid');
		$this->db->delete('applicant_training', array('applicanttrainingid' => $trainingid));
		
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
		$applicantid = $this->input->post('applicantid');
		$file_document_type = $this->input->post('file_document_type');
		$file_description = $this->input->post('file_description');
		$file_date = $this->input->post('file_date');
		
		
		$this->applicant_model->savefile($applicantid,$file_document_type,$file_description,$file_date);
	}
	
	public function deletefile(){
		$filesid = $this->input->post('filesid');
		$this->db->delete('applicant_files', array('filesid' => $filesid));
		
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
		$file_name = $this->applicant_model->getfilename($filesid);
		
		//$fileurl = base_url("uploads/201_files/" . $file_name);
		
		$this->load->helper("url");
		//delete_files("uploads/201_files".$filesid.".pdf");
		unlink("uploads/applicant_files/" . $file_name);
		//$this->db->delete('employee_educational_background', array('educbackgroundid' => $educbackgroundid));
		$this->applicant_model->updatedeletefile($filesid);
		
		
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
	
	
	//applicant
	public function geteduc(){
		$educid = $this->input->post('educid');
		
		$educdetails = $this->applicant_model->geteduc($educid);

		echo json_encode($educdetails);
		
	}
	
	public function saveupdateeduc(){
		$educ_description = $this->input->post('educ_description');
		$applicanteducid = $this->input->post('applicanteducid');

		$this->applicant_model->saveupdateeduc($applicanteducid,$educ_description);
	}
	
	public function gettraining(){
		$applicanttrainingid = $this->input->post('applicanttrainingid');
		
		$trainingdetails = $this->applicant_model->gettrain($applicanttrainingid);

		echo json_encode($trainingdetails);
		
	}
	
	public function saveupdatetraining(){
		$training_description = $this->input->post('training_description');
		$applicanttrainingid = $this->input->post('applicanttrainingid');

		$this->applicant_model->saveupdatetraining($applicanttrainingid,$training_description);
	}
	
	public function getworkdetails(){
		$applicantworkid = $this->input->post('applicantworkid');
		
		$workdetails = $this->applicant_model->getworkdetails($applicantworkid);

		echo json_encode($workdetails);
		
	}
	
	public function saveupdatework(){
		$applicantworkid = $this->input->post('applicantworkid');
		$work_description = $this->input->post('work_description');

		$this->applicant_model->saveupdatework($applicantworkid,$work_description);
	}
	
	public function getskilldetails(){
		$applicantskillid = $this->input->post('applicantskillid');
		
		$skilldetails = $this->applicant_model->getskilldetails($applicantskillid);

		echo json_encode($skilldetails);
		
	}
	
	public function saveupdateskill(){
		$applicantskillid = $this->input->post('applicantskillid');
		$skill_description = $this->input->post('skill_description');

		$this->applicant_model->saveupdateskill($applicantskillid,$skill_description);
	}
	public function geteligibilitydetails(){
		$applicanteligibilityid = $this->input->post('applicanteligibilityid');
		
		$eligibilitydetails = $this->applicant_model->geteligibilitydetails($applicanteligibilityid);

		echo json_encode($eligibilitydetails);
		
	}
	public function saveupdateeligibility(){
		$applicanteligibilityid = $this->input->post('applicanteligibilityid');
		$eligibility_description = $this->input->post('eligibility_description');

		$this->applicant_model->saveupdateeligibility($applicanteligibilityid,$eligibility_description);
	}
	
	public function downloadapplicant($applicanttype_download)
	{
		//$applicanttype_download = $this->input->post('applicanttype_download');
		
		//$designation_value = rawurldecode($designation);
		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
		$this->excel->getActiveSheet()->setTitle('Applicant Download');
		$this->load->database();
		//$users = $this->userModel->get_users();
		
		if($applicanttype_download=="ALL"){
			//$sql = $this->db->query("SELECT lname,fname,mname,ename,age,dob,pob,gender,civil_status,citizenship,mobile_number,email_address,a_barangay,a_towncity,a_province,a_zipcode,applicant_type,dateofapplication, GROUP_CONCAT(applicant_skill.skill_description SEPARATOR ', ') AS skills, GROUP_CONCAT(applicant_training.training_description SEPARATOR ', ') AS trainings, GROUP_CONCAT(applicant_work.work_description SEPARATOR ', ') AS workexperience, GROUP_CONCAT(applicant_eligibility.eligibility_description SEPARATOR ', ') AS eligibility, GROUP_CONCAT(applicant_education.educ_description SEPARATOR ', ') AS education FROM applicant LEFT JOIN applicant_skill ON applicant.applicantid = applicant_skill.applicantid LEFT JOIN applicant_training ON applicant.applicantid = applicant_training.applicantid LEFT JOIN applicant_work ON applicant.applicantid = applicant_work.applicantid LEFT JOIN applicant_eligibility ON applicant.applicantid = applicant_eligibility.applicantid LEFT JOIN applicant_education ON applicant.applicantid = applicant_education.applicantid");
			$sql = $this->db->query("SELECT applicantid,lname,fname,mname,ename,age,dob,pob,gender,civil_status,citizenship,mobile_number,email_address,a_barangay,a_towncity,a_province,a_zipcode,applicant_type,dateofapplication FROM applicant");
			
			
		}else{
			$sql = $this->db->query("SELECT applicantid,lname,fname,mname,ename,age,dob,pob,gender,civil_status,citizenship,mobile_number,email_address,a_barangay,a_towncity,a_province,a_zipcode,applicant_type,dateofapplication FROM applicant where applicant_type=".$this->db->escape($applicanttype_download)."");
		}
		$feedbacks = $sql->result_array();
		
		$ctr =0;
		foreach ($feedbacks as $currentquery):
			$new_query[$ctr] = $currentquery;
		
			$result_subquery = $this->db->query("SELECT GROUP_CONCAT(applicant_skill.skill_description SEPARATOR ', ') AS skills FROM applicant_skill WHERE applicantid = '".$currentquery['applicantid']."'");
			$subquery = $result_subquery->result_array();
			$result_skill = $subquery[0]['skills'];
			$new_query[$ctr]['skills'] = $result_skill;
			
			
			
			$result_training = $this->db->query("SELECT GROUP_CONCAT(applicant_training.training_description SEPARATOR ', ') AS trainings FROM applicant_training WHERE applicantid = '".$currentquery['applicantid']."'");
			$training = $result_training->result_array();
			$result_trainings = $training[0]['trainings'];
			$new_query[$ctr]['trainings'] = $result_trainings;
			
			$result_work = $this->db->query("SELECT GROUP_CONCAT(applicant_work.work_description SEPARATOR ', ') AS workexperience FROM applicant_work WHERE applicantid = '".$currentquery['applicantid']."'");
			$work = $result_work->result_array();
			$result_works= $work[0]['workexperience'];
			$new_query[$ctr]['workexperience'] = $result_works;

			$result_eligibility = $this->db->query("SELECT GROUP_CONCAT(applicant_eligibility.eligibility_description SEPARATOR ', ') AS eligibility FROM applicant_eligibility WHERE applicantid = '".$currentquery['applicantid']."'");
			$eligibility = $result_eligibility->result_array();
			$result_eligible= $eligibility[0]['eligibility'];
			$new_query[$ctr]['eligibility'] = $result_eligible;
			
			$result_education = $this->db->query("SELECT GROUP_CONCAT(applicant_education.educ_description SEPARATOR ', ') AS education FROM applicant_education WHERE applicantid = '".$currentquery['applicantid']."'");
			$education = $result_education->result_array();
			$result_educations= $education[0]['education'];
			$new_query[$ctr]['education'] = $result_educations;
			

			
			$ctr++;
		endforeach;
			
		
		//print_r($new_query);
		
		//$feedbacks = $sql->result_array();
		$feedbacks = $new_query;
		//$feedbacks = $this->db->query($sql);
		$arrHeader = array('ID','Last Name','First Name','Middle Name','extension','age','Date of Birth','Place of birth','Gender','Civil Status','Citizenship', 'Mobile number','Email','Barangay','Town City','Province','zipcode','applicant type','Date of Application','Skills','Trainings','Work Experience','Eligibility','Education');
		$this->excel->getActiveSheet()->fromArray($arrHeader,'2','A1');
		//$this->excel->getActiveSheet()->setCellValueByColumnAndRow(A);
		$this->excel->getActiveSheet()->fromArray($feedbacks,'','A2');
		$filename='Applicant_download.xls';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
		$objWriter->save('php://output');
		
	}
	
	
	

}