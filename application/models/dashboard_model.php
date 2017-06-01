<?php


class Dashboard_model extends CI_Model
{
	
	public function getapplicantcount()
	{
		$sql = $this->db->query("SELECT count(*) as totalapplicant FROM applicant");
		$applicant = $sql->result_array();
		return $applicant[0]['totalapplicant'];
		
		
	}
	public function getemployeecount()
	{
		$sql = $this->db->query("SELECT count(*) as totalemployee FROM employee where employee_status='ACTIVE'");
		$employee = $sql->result_array();
		return $employee[0]['totalemployee'];
		
		
	}
	
	public function getdesignationchart()
	{
			
			$result = $this->db->query("SELECT COUNT(*) AS VALUE, designation AS label FROM employee WHERE employee_status='ACTIVE' GROUP BY label");
			return $result->result_array();
			
		
	}
	
	
	
	
	
}

?>