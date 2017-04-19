<?php


class Settings_model extends CI_Model
{
	
	public function articlelist()
	{
		//$result = $this->db->get('contacts');
		$list = $this->db->query("SELECT * from settings_article");
		return $list->result_array();
		
		
	}
	
	public function classificationlist()
	{
		//$result = $this->db->get('contacts');
		$list = $this->db->query("SELECT * from settings_classification");
		return $list->result_array();
		
		
	}
	
	public function getposition()
	{
		//$result = $this->db->get('contacts');
		$list = $this->db->query("SELECT * from settings_position_designation");
		return $list->result_array();
		
		
	}

	public function saveposition($position_designation)
	{
		
		$sql = "INSERT INTO settings_position_designation (position_designation) VALUES (".$this->db->escape($position_designation).")";
		$this->db->query($sql);
				
		
		
	}
}

?>