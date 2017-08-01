<?php


class Users_model extends CI_Model
{
	
	public function get()
	{
		//$result = $this->db->get('contacts');
		$users = $this->db->query("SELECT * from users left join employee on users.employee_eid = employee.eid");
		return $users->result_array();
		
		
	}

}

?>