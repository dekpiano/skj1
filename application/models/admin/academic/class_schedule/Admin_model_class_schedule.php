<?php
class Admin_model_class_schedule extends CI_Model
{
	public function __construct()
	{
		parent::__construct();		  
	
	}

	public function class_schedule_insert($data)
	{
		// Load database academic
		$db_academic = $this->load->database('db_academic', TRUE);
		return $db_academic->insert('tb_class_schedule',$data);
	}

	public function class_schedule_update($data)
	{
		// Load database academic
		$db_academic = $this->load->database('db_academic', TRUE);
		return $db_academic->update('tb_class_schedule',$data,"schestu_id='".$this->input->post('schestu_id')."'");
	}

	public function class_schedule_delete($id)
	{
		// Load database academic
		$db_academic = $this->load->database('db_academic', TRUE);
				$db_academic->where('schestu_id', $id);
		return 	$db_academic->delete('tb_class_schedule');
	}

}