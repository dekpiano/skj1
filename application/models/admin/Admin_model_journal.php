<?php
class Admin_model_journal extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function journal_insert($data)
	{
		return $this->db->insert('tb_journal',$data);
	}

	public function journal_update($data)
	{
		return $this->db->update('tb_journal',$data,"jour_id='".$this->input->post('jour_id')."'");
	}

	public function journal_delete($id)
	{
				$this->db->where('jour_id', $id);
		return 	$this->db->delete('tb_journal');
	}

}