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
	
	
}

?>