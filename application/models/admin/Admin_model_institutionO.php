<?php
class Admin_model_institutionO extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function institutionO_insert($data)
	{
		return $this->db->insert('tb_institutiono',$data);
	}

	public function institutionO_update($data)
	{
		return $this->db->update('tb_institutiono',$data,"instiO_id='".$this->input->post('instiO_id')."'");
	}

	public function institutionO_delete($id)
	{
				$this->db->where('instiO_id', $id);
		return 	$this->db->delete('tb_institutiono');
	}

}