<?php


class Reports_model extends CI_Model
{

	
	public function getstartdate()
	{
		$sql = $this->db->query("SELECT DATE_FORMAT(time_stamp,'%Y-%m-%d') as startdate FROM tickets ORDER BY time_stamp ASC LIMIT 1");
		$getcount = $sql->result_array();
		return $getcount[0]['startdate'];
		
		
	}
	
	public function getenddate()
	{
		$sql = $this->db->query("SELECT DATE_FORMAT(time_stamp,'%Y-%m-%d') as enddate FROM tickets ORDER BY time_stamp DESC LIMIT 1");
		$getcount = $sql->result_array();
		return $getcount[0]['enddate'];
		
		
	}
	
	
	public function getdesignation()
	{
		
		$sql = $this->db->query("SELECT DISTINCT(designation) FROM employee where employee_status='ACTIVE'");

		return $sql->result_array();
		
		
	}
	public function getemployee_designation($designation)
	{
		if($designation == "All"){
			$sql = $this->db->query("SELECT * FROM employee");
		}else{
			$sql = $this->db->query("SELECT * FROM employee where designation='$designation'");
		}
		

		return $sql->result_array();
		
		
	}
	
	public function getapplicant_list($applicant_type)
	{
		if($applicant_type == "All"){
			$sql = $this->db->query("SELECT * FROM applicant");
		}else{
			$sql = $this->db->query("SELECT * FROM applicant where applicant_type='$applicant_type'");
		}
		

		return $sql->result_array();
		
		
	}
	
	
	
}

?>