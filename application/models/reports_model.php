<?php


class Reports_model extends CI_Model
{

	
	public function getstartdate()
	{
		$sql = $this->db->query("SELECT dateofapplication as startdate FROM applicant ORDER BY dateofapplication ASC LIMIT 1");
		$getcount = $sql->result_array();
		return $getcount[0]['startdate'];
		
	}
	
	public function getenddate()
	{
		$sql = $this->db->query("SELECT dateofapplication as enddate FROM applicant ORDER BY dateofapplication DESC LIMIT 1");
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
	
	public function getapplicant_list($applicant_type,$education_keyword)
	{
		
		$keyword_array = explode(",", $education_keyword);
		
		$keyword="";
		
		
		$array_length = count($keyword_array);
		if($array_length >0){
			$ctr = 0;
			$keyword .=" WHERE ";
			foreach($keyword_array as $kwarray):
				$ctr++;
				$keyword .= "educ_description like '%".trim($kwarray,' ')."%'";
				
				if($ctr < $array_length){
					$keyword .=" OR ";
				}
				
				
			endforeach;
			
			
		}
		
		
	
		
		if($applicant_type == "All"){
			$sql = $this->db->query("SELECT * FROM applicant_education LEFT JOIN applicant ON applicant_education.applicantid = applicant.applicantid $keyword GROUP BY applicant.applicantid");
			//echo "SELECT * FROM applicant_education LEFT JOIN applicant ON applicant_education.applicantid = applicant.applicantid $keyword";
		}else{
			if($keyword !=""){
				$sql = $this->db->query("SELECT * FROM applicant_education LEFT JOIN applicant ON applicant_education.applicantid = applicant.applicantid $keyword AND applicant_type='$applicant_type' GROUP BY applicant.applicantid");
			}else{
				$sql = $this->db->query("SELECT * FROM applicant_education LEFT JOIN applicant ON applicant_education.applicantid = applicant.applicantid where applicant_type='$applicant_type' GROUP BY applicant.applicantid");
			}
			
		}
		
			//print_r($sql);

		return $sql->result_array();
		
		
	}
	
	public function positionapplied_list($applicant_type,$position_applied,$startdate,$enddate)
	{
		
		
		
	
		
		if($applicant_type == "All"){
			
			if($position_applied== "All"){
				$sql = $this->db->query("SELECT * FROM applicant left join applicant_education on applicant.applicantid = applicant_education.applicantid WHERE dateofapplication between '$startdate' AND '$enddate' GROUP BY applicant.applicantid");
				//$sss = "SELECT * FROM applicant left join applicant_education on applicant.applicantid = applicant_education.applicantid AND dateofapplication between $startdate AND $enddate GROUP BY applicant.applicantid";
				
				//print_r($sss);
				
			}else{
				$sql = $this->db->query("SELECT * FROM applicant left join applicant_education on applicant.applicantid = applicant_education.applicantid where position_applied='$position_applied' AND dateofapplication between '$startdate' AND '$enddate' GROUP BY applicant.applicantid");
				//$sss = "2";
			}
		}else{
			if($position_applied== "All"){
			$sql = $this->db->query("SELECT * FROM applicant_education LEFT JOIN applicant ON applicant_education.applicantid = applicant.applicantid where applicant_type='$applicant_type' AND dateofapplication between '$startdate' AND '$enddate' GROUP BY applicant.applicantid");
				//$sss = "3";
			}
			else{
				$sql = $this->db->query("SELECT * FROM applicant_education LEFT JOIN applicant ON applicant_education.applicantid = applicant.applicantid where applicant_type='$applicant_type' and position_applied='$position_applied' AND dateofapplication between '$startdate' AND '$enddate' GROUP BY applicant.applicantid");
				
				//$sss = "4";
			}
			//}else{
				//$sql = $this->db->query("SELECT * FROM applicant_education LEFT JOIN applicant ON applicant_education.applicantid = applicant.applicantid where applicant_type='$applicant_type' GROUP BY applicant.applicantid");
			//}
			
		}
		
			//print_r($sql);
//print_r($sss);
		return $sql->result_array();
		
		
	}
	
	
	public function geteducational($applicantid)
	{
		
		$sql = $this->db->query("SELECT * FROM applicant_education where applicantid='$applicantid'");

		return $sql->result_array();
		
		
	}
	
	public function gettraining($applicantid)
	{
		
		$sql = $this->db->query("SELECT * FROM applicant_training where applicantid='$applicantid'");

		return $sql->result_array();
		
		
	}
	public function getwork($applicantid)
	{
		
		$sql = $this->db->query("SELECT * FROM applicant_work where applicantid='$applicantid'");

		return $sql->result_array();
		
		
	}
	public function getskills($applicantid)
	{
		
		$sql = $this->db->query("SELECT * FROM applicant_skill where applicantid='$applicantid'");

		return $sql->result_array();
		
		
	}
	
	public function geteligibility($applicantid)
	{
		
		$sql = $this->db->query("SELECT * FROM applicant_eligibility where applicantid='$applicantid'");

		return $sql->result_array();
		
		
	}
	
	public function getpositionlist()
	{
		
		$sql = $this->db->query("SELECT * FROM settings_position_designation");

		return $sql->result_array();
		
		
	}
	
	
	
}

?>