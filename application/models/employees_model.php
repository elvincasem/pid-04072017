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
	
	
}

?>