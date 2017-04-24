<?php


class Employees_model extends CI_Model
{
	
	public function getemployeeslist()
	{
		$sql = $this->db->query("SELECT * FROM employee");
		return $sql->result_array();
		
		
	}
	
	public function saveemployee($empno,$lname,$fname,$mname,$extension,$designation)
	{
		
		$sql = "INSERT INTO employee (empNo,lname,fname,mname,ename,designation) VALUES (".$this->db->escape($empno).",".$this->db->escape($lname).",".$this->db->escape($fname).",".$this->db->escape($mname).",".$this->db->escape($extension).",".$this->db->escape($designation).")";
		$this->db->query($sql);
				
		$sqlselect = $this->db->query("SELECT MAX(eid) AS lastid FROM employee");
		$lastidinserted = $sqlselect->result_array();
		$currentid = $lastidinserted[0]['lastid'];
		echo $currentid;
		
	}
	
	public function getprofile($id)
	{
		$itemlist = $this->db->query("SELECT * from employee where eid=".$this->db->escape($id)."");
		$singlerow = $itemlist->result_array();
		return $singlerow[0];
		
		
	}
	public function getechildren($id)
	{
		$sql = $this->db->query("SELECT * from employee_children where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function getebackground($id)
	{
		$sql = $this->db->query("SELECT * from employee_educational_background where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function getecareerservice($id)
	{
		$sql = $this->db->query("SELECT * from employee_career_service where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function geteservicerecord($id)
	{
		$sql = $this->db->query("SELECT * from employee_service_record where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function getetraining($id)
	{
		$sql = $this->db->query("SELECT * from employee_training where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function geteaward($id)
	{
		$sql = $this->db->query("SELECT * from employee_award where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function geteothers($id)
	{
		$sql = $this->db->query("SELECT * from employee_other_information where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function getefiles($id)
	{
		$sql = $this->db->query("SELECT * from employee_files where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function geterating($id)
	{
		$sql = $this->db->query("SELECT * from employee_rating where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function geteleavecredits($id)
	{
		$sql = $this->db->query("SELECT *,(leave_balance + sick_balance) as total_leave from employee_leave_credits where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function geteleaveapp($id)
	{
		$sql = $this->db->query("SELECT * from employee_leave_application where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function getetravel($id)
	{
		$sql = $this->db->query("SELECT * from employee_travel where eid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function getetravelemployees($travelid)
	{
		$sql = $this->db->query("SELECT CONCAT(employee.fname,' ',employee.lname) AS employee_name,employee.eid FROM employee_travel_eid LEFT JOIN employee ON employee_travel_eid.eid = employee.eid WHERE authtravelid=".$this->db->escape($travelid)."");
		return $sql->result_array();
		
		
	}
	public function getposition()
	{
		$sql = $this->db->query("SELECT * FROM settings_position_designation");
		return $sql->result_array();
		
		
	}
	
	public function updateemployee($eid,$lastname,$firstname,$middlename,$extension,$dateofbirth,$placeofbirth,$gender,$civilstatus,$citizenship,$height,$weight,$bloodtype,$mobileno,$email,$barangay,$towncity,$province,$zipcode,$datehired)
	{
		
		$sql = "update employee set lname=".$this->db->escape($lastname).", fname=".$this->db->escape($firstname).", mname=".$this->db->escape($middlename).", ename=".$this->db->escape($extension).", dob=".$this->db->escape($dateofbirth).", pob=".$this->db->escape($placeofbirth).", gender=".$this->db->escape($gender).", civil_status=".$this->db->escape($civilstatus).", citizenship=".$this->db->escape($citizenship).", height=".$this->db->escape($height).", weight=".$this->db->escape($weight).", blood_type=".$this->db->escape($bloodtype).", mobile_number=".$this->db->escape($mobileno).", email_address=".$this->db->escape($email).", a_barangay=".$this->db->escape($barangay).", a_towncity=".$this->db->escape($towncity).", a_province=".$this->db->escape($province).", a_zipcode=".$this->db->escape($zipcode).", date_hired=".$this->db->escape($datehired)." where eid=".$this->db->escape($eid)."";
		$this->db->query($sql);
		
		echo $sql;
						
	}
	public function updateemployeefamily($eid,$spouse_lname,$spouse_fname,$spouse_mname,$father_lname,$father_fname,$father_mname,$mother_lname,$mother_fname,$mother_mname)
	{
		
		$sql = "update employee set spouse_lname=".$this->db->escape($spouse_lname).", spouse_fname=".$this->db->escape($spouse_fname).", spouse_mname=".$this->db->escape($spouse_mname).", father_lname=".$this->db->escape($father_lname).", father_fname=".$this->db->escape($father_fname).", father_mname=".$this->db->escape($father_mname).", mother_lname=".$this->db->escape($mother_lname).", mother_fname=".$this->db->escape($mother_fname).", mother_mname=".$this->db->escape($mother_mname)." where eid=".$this->db->escape($eid)."";
		$this->db->query($sql);
		
		echo $sql;
						
	}
	
	public function addchildren($eid,$children_name,$children_dob)
	{
		
		$sql = "INSERT INTO employee_children (eid,children_name,children_bdate) VALUES (".$this->db->escape($eid).",".$this->db->escape($children_name).",".$this->db->escape($children_dob).")";
		$this->db->query($sql);
				
		
		
	}
	
	public function saveeduc($eid,$level,$nameofschool,$basiceducation,$period_from,$period_to,$highest_level,$year_graduated,$scholar_received)
	{
		
		$sql = "INSERT INTO employee_educational_background (level,name_of_school,basic_education,period_from,period_to,highest_level,year_graduated,scholar_received,eid) VALUES (".$this->db->escape($level).",".$this->db->escape($nameofschool).",".$this->db->escape($basiceducation).",".$this->db->escape($period_from).",".$this->db->escape($period_to).",".$this->db->escape($highest_level).",".$this->db->escape($year_graduated).",".$this->db->escape($scholar_received).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	public function savecareer($eid,$career_description,$career_rating,$career_date,$career_place,$career_number,$career_validity,$eid)
	{
		
		$sql = "INSERT INTO employee_career_service(career_description,career_rating,career_date,career_place,career_number,career_validity,eid) VALUES (".$this->db->escape($career_description).",".$this->db->escape($career_rating).",".$this->db->escape($career_date).",".$this->db->escape($career_place).",".$this->db->escape($career_number).",".$this->db->escape($career_validity).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	public function savework($eid,$service_from,$service_to,$service_position,$service_status,$service_salary,$service_station,$service_branch,$service_separation,$service_leave)
	{
		
		$sql = "INSERT INTO employee_service_record(service_from,service_to,service_position,service_status,service_salary,service_station,service_branch,service_leave,service_separation,eid) VALUES (".$this->db->escape($service_from).",".$this->db->escape($service_to).",".$this->db->escape($service_position).",".$this->db->escape($service_status).",".$this->db->escape($service_salary).",".$this->db->escape($service_station).",".$this->db->escape($service_branch).",".$this->db->escape($service_leave).",".$this->db->escape($service_separation).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	public function savetraining($eid,$training_title,$training_from,$training_to,$training_hours,$training_type,$training_by)
	{
		
		$sql = "INSERT INTO employee_training(training_title,training_from,training_to,training_hours,training_type,training_by,eid) VALUES (".$this->db->escape($training_title).",".$this->db->escape($training_from).",".$this->db->escape($training_to).",".$this->db->escape($training_hours).",".$this->db->escape($training_type).",".$this->db->escape($training_by).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	public function saveaward($eid,$award_date,$award_department,$award_description)
	{
		
		$sql = "INSERT INTO employee_award(award_date,award_department,award_description,eid) VALUES (".$this->db->escape($award_date).",".$this->db->escape($award_department).",".$this->db->escape($award_description).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	
	public function saveother($eid,$information_type,$information_description)
	{
		
		$sql = "INSERT INTO employee_other_information(information_type,information_description,eid) VALUES (".$this->db->escape($information_type).",".$this->db->escape($information_description).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	
	public function savefile($eid,$file_document_type,$file_description,$file_date)
	{
		
		$sql = "INSERT INTO employee_files(file_document_type,file_description,file_date,eid) VALUES (".$this->db->escape($file_document_type).",".$this->db->escape($file_description).",".$this->db->escape($file_date).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	public function saverating($eid,$rating_from,$rating_to,$rating)
	{
		
		$sql = "INSERT INTO employee_rating(rating_from,rating_to,rating_value,eid) VALUES (".$this->db->escape($rating_from).",".$this->db->escape($rating_to).",".$this->db->escape($rating).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	public function saveleavecredit($eid,$leave_from,$leave_to,$leave_particular,$leave_earned,$leave_absences,$leave_abswop,$sick_earned,$sick_abswp,$sick_abswop,$sick_action,$leave_balance,$sick_balance)
	{
		
		$sql = "INSERT INTO employee_leave_credits(leave_from,leave_to,leave_particular,leave_earned,leave_absences,leave_balance,leave_abswop,sick_earned,sick_abswp,sick_balance,sick_abswop,sick_action,eid) VALUES (".$this->db->escape($leave_from).",".$this->db->escape($leave_to).",".$this->db->escape($leave_particular).",".$this->db->escape($leave_earned).",".$this->db->escape($leave_absences).",".$this->db->escape($leave_balance).",".$this->db->escape($leave_abswop).",".$this->db->escape($sick_earned).",".$this->db->escape($sick_abswp).",".$this->db->escape($sick_balance).",".$this->db->escape($sick_abswop).",".$this->db->escape($sick_action).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	public function saveappleave($eid,$appleave_type,$appleave_location,$appleave_from,$appleave_to,$appleave_recommendation,$appleave_status,$appleave_commutation)
	{
		
		$sql = "INSERT INTO employee_leave_application(appleave_type,appleave_location,appleave_from,appleave_to,appleave_commutation,appleave_recommendation,appleave_status,eid) VALUES (".$this->db->escape($appleave_type).",".$this->db->escape($appleave_location).",".$this->db->escape($appleave_from).",".$this->db->escape($appleave_to).",".$this->db->escape($appleave_commutation).",".$this->db->escape($appleave_recommendation).",".$this->db->escape($appleave_status).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	public function saveauth($eid,$travel_from,$travel_to,$travel_location,$travel_description)
	{
		
		$sql = "INSERT INTO employee_travel(travel_from,travel_to,travel_location,travel_description,eid) VALUES (".$this->db->escape($travel_from).",".$this->db->escape($travel_to).",".$this->db->escape($travel_location).",".$this->db->escape($travel_description).",".$this->db->escape($eid).")";
		$this->db->query($sql);
				
		
		
	}
	
	
}

?>