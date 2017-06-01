<?php


class Applicant_model extends CI_Model
{
	
	public function getapplicantlist()
	{
		$sql = $this->db->query("SELECT * FROM applicant");
		return $sql->result_array();
		
		
	}
	
	
	
	public function saveapplicant($lname,$fname,$mname,$extension,$applicanttype)
	{
		
		$sql = "INSERT INTO applicant (lname,fname,mname,ename,applicant_type) VALUES (upper(".$this->db->escape($lname)."),upper(".$this->db->escape($fname)."),upper(".$this->db->escape($mname)."),upper(".$this->db->escape($extension)."),".$this->db->escape($applicanttype).")";
		$this->db->query($sql);
				
		$sqlselect = $this->db->query("SELECT MAX(applicantid) AS lastid FROM applicant");
		$lastidinserted = $sqlselect->result_array();
		$currentid = $lastidinserted[0]['lastid'];
		echo $currentid;
		
	}
	public function saveapplicant_type($applicantid,$applicanttype)
	{
		
		$sql = "update applicant set applicant_type=".$this->db->escape($applicanttype)." where applicantid=".$this->db->escape($applicantid)."";
		$this->db->query($sql);
				
		$sqlselect = $this->db->query("SELECT MAX(applicantid) AS lastid FROM applicant");
		$lastidinserted = $sqlselect->result_array();
		$currentid = $lastidinserted[0]['lastid'];
		echo $currentid;
		
	}
	

	public function getprofile($id)
	{
		$itemlist = $this->db->query("SELECT * from applicant where applicantid=".$this->db->escape($id)."");
		$singlerow = $itemlist->result_array();
		return $singlerow[0];
		
		
	}
	public function updateapplicant($applicantid,$lastname,$firstname,$middlename,$extension,$gender,$civilstatus,$mobileno,$email,$barangay,$towncity,$province,$zipcode,$dateapplication,$age)
	{
		
		$sql = "update applicant set lname=".$this->db->escape($lastname).", fname=".$this->db->escape($firstname).", mname=".$this->db->escape($middlename).", ename=".$this->db->escape($extension).", gender=".$this->db->escape($gender).", civil_status=".$this->db->escape($civilstatus).", mobile_number=".$this->db->escape($mobileno).", email_address=".$this->db->escape($email).", a_barangay=".$this->db->escape($barangay).", a_towncity=".$this->db->escape($towncity).", a_province=".$this->db->escape($province).", a_zipcode=".$this->db->escape($zipcode).", dateofapplication=".$this->db->escape($dateapplication).", age=".$this->db->escape($age)." where applicantid=".$this->db->escape($applicantid)."";
		$this->db->query($sql);
		
		echo $sql;
						
	}
	
	public function geteducation($id)
	{

		$sql = $this->db->query("SELECT * from applicant_education where applicantid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	
	public function gettraining($id)
	{

		$sql = $this->db->query("SELECT * from applicant_training where applicantid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function getwork($id)
	{

		$sql = $this->db->query("SELECT * from applicant_work where applicantid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function getskill($id)
	{

		$sql = $this->db->query("SELECT * from applicant_skill where applicantid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function geteligibility($id)
	{

		$sql = $this->db->query("SELECT * from applicant_eligibility where applicantid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function saveeduc($applicantid,$educ_description)
	{
		
		$sql = "INSERT INTO applicant_education(applicantid,educ_description) VALUES (".$this->db->escape($applicantid).",".$this->db->escape($educ_description).")";
		$this->db->query($sql);
				
		
		
	}
	public function savetraining($applicantid,$training_description)
	{
		
		$sql = "INSERT INTO applicant_training(applicantid,training_description) VALUES (".$this->db->escape($applicantid).",".$this->db->escape($training_description).")";
		$this->db->query($sql);
				
		
		
	}
	public function savework($applicantid,$work_description)
	{
		
		$sql = "INSERT INTO applicant_work(applicantid,work_description) VALUES (".$this->db->escape($applicantid).",".$this->db->escape($work_description).")";
		$this->db->query($sql);
				
		
		
	}
	public function saveskill($applicantid,$skill_description)
	{
		
		$sql = "INSERT INTO applicant_skill(applicantid,skill_description) VALUES (".$this->db->escape($applicantid).",".$this->db->escape($skill_description).")";
		$this->db->query($sql);
				
		
		
	}
	public function saveeligibility($applicantid,$eligibility_description)
	{
		
		$sql = "INSERT INTO applicant_eligibility(applicantid,eligibility_description) VALUES (".$this->db->escape($applicantid).",".$this->db->escape($eligibility_description).")";
		$this->db->query($sql);
				
		
		
	}
	
	public function geteduc($educid)
	{

		$sql = $this->db->query("SELECT * from applicant_education where applicanteducid=".$this->db->escape($educid)."");
		
		$result = $sql->result_array();
		return $result[0];
		
		
	}
	
	public function saveupdateeduc($applicanteducid,$educ_description)
	{
		
		$sql = "update applicant_education set educ_description=".$this->db->escape($educ_description)." where applicanteducid=".$this->db->escape($applicanteducid)."";
		$this->db->query($sql);
		
		//echo $sql;
						
	}
	
	public function gettrain($applicanttrainingid)
	{

		$sql = $this->db->query("SELECT * from applicant_training where applicanttrainingid=".$this->db->escape($applicanttrainingid)."");
		
		$result = $sql->result_array();
		return $result[0];
		
		
	}
	
	public function saveupdatetraining($applicanttrainingid,$training_description)
	{
		
		$sql = "update applicant_training set training_description=".$this->db->escape($training_description)." where applicanttrainingid=".$this->db->escape($applicanttrainingid)."";
		$this->db->query($sql);
		
		//echo $sql;
						
	}
	
	public function getworkdetails($applicantworkid)
	{

		$sql = $this->db->query("SELECT * from applicant_work where applicantworkid=".$this->db->escape($applicantworkid)."");
		
		$result = $sql->result_array();
		return $result[0];
		
		
	}
	public function saveupdatework($applicantworkid,$work_description)
	{
		
		$sql = "update applicant_work set work_description=".$this->db->escape($work_description)." where applicantworkid=".$this->db->escape($applicantworkid)."";
		$this->db->query($sql);
		
		//echo $sql;
						
	}
	
	public function getskilldetails($applicantskillid)
	{

		$sql = $this->db->query("SELECT * from applicant_skill where applicantskillid=".$this->db->escape($applicantskillid)."");
		
		$result = $sql->result_array();
		return $result[0];
		
		
	}
	
	public function saveupdateskill($applicantskillid,$skill_description)
	{
		
		$sql = "update applicant_skill set skill_description=".$this->db->escape($skill_description)." where applicantskillid=".$this->db->escape($applicantskillid)."";
		$this->db->query($sql);
		
		//echo $sql;
						
	}
	
	public function geteligibilitydetails($applicanteligibilityid)
	{

		$sql = $this->db->query("SELECT * from applicant_eligibility where applicanteligibilityid=".$this->db->escape($applicanteligibilityid)."");
		
		$result = $sql->result_array();
		return $result[0];
		
		
	}
	
	public function saveupdateeligibility($applicanteligibilityid,$eligibility_description)
	{
		
		$sql = "update applicant_eligibility set eligibility_description=".$this->db->escape($eligibility_description)." where applicanteligibilityid=".$this->db->escape($applicanteligibilityid)."";
		$this->db->query($sql);
		
		//echo $sql;
						
	}
	
	public function getafiles($id)
	{
		$sql = $this->db->query("SELECT * from applicant_files where applicantid=".$this->db->escape($id)."");
		return $sql->result_array();
		
		
	}
	public function savefile($applicantid,$file_document_type,$file_description,$file_date)
	{
		
		$sql = "INSERT INTO applicant_files(file_document_type,file_description,file_date,applicantid) VALUES (".$this->db->escape($file_document_type).",".$this->db->escape($file_description).",".$this->db->escape($file_date).",".$this->db->escape($applicantid).")";
		$this->db->query($sql);
				
		
		
	}
	
	public function update_file($fileid,$filename)
	{
		
		$sql = "update applicant_files set file_name=".$this->db->escape($filename)." where filesid=".$this->db->escape($fileid)."";
		$this->db->query($sql);
		
		echo $sql;
						
	}
	
	public function updatedeletefile($filesid)
	{
		
		$sql = "update applicant_files set file_name='NONE' where filesid=".$this->db->escape($filesid)."";
		$this->db->query($sql);
		
		//echo $sql;
						
	}
	
	public function getfilename($filesid)
	{
		$sql2 = $this->db->query("SELECT file_name FROM applicant_files where filesid='$filesid'");
		
		$result = $sql2->result_array();
		return $result[0]['file_name'];
		
		
	}
	
	
	
	
}

?>