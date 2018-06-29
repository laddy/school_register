<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch extends CI_Controller
{

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home/index');
		$this->load->view('footer');
		return true;
	}
	
	
	public function import()
	{
		// sampledata/personal_infomation.csv
		$FP = fopen("sampledata/personal_infomation.csv", 'r');
		$query = $this->db->get('m_school');
		var_dump($query->result());
		exit();
		
		
		$i = 1;
		while ( false !== ($line = fgetcsv($FP, '10000', ',')) )
		{
			if     ( $line[14] <= '2018-04-01' && $line[15] <= 6 )  { $school_id = 1; }
			elseif ( $line[14] <= '2018-04-01' && $line[15] <= 12 ) { $school_id = 3; }
			elseif ( $line[14] <= '2018-04-01' && $line[15] <= 15 ) { $school_id = 4; }
			elseif ( $line[14] <= '2018-04-01' && $line[15] <= 18 ) { $school_id = 5; }
			else   { $school_id = 6; }
			
			$insert = [
				'pupil_id' => $i,
				'school_id' => $school_id,
				'course_id' => 1,
				'lastname' => $line[1],
				'firstname' => $line[2],
				'lastname_kana' => $line[3],
				'firstname_kana' => $line[4],
				'birthday' => $line[14],
				'blood' => $line[16],
				'sex' => $line[5],
				'mail' => $line[7],
				'entrance_day' => '2018-04-01',
				'leave_day' => '',
				'memo' => '',
				'pref' => $line[9],
				'address' => $line[10] . ' '. $line[11] . ' '. $line[12] . ' '. $line[13], 
				'zipcode' => $line[8],
				'tel1' => $line[6],
				'tel2' => null,
				'tel3' => null,
				'created' => date('Y-m-d H:i:s'),
			];
			
			var_dump($insert);
			
			$i++;
		}  
		
	}
	
	public function logout()
	{
		
	}
}
