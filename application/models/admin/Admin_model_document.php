<?php
class Admin_model_document extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function document_insert($data)
	{
		return $this->db->insert('tb_document',$data);
	}

	public function document_update($data)
	{
		return $this->db->update('tb_document',$data,"doc_id='".$this->input->post('doc_id')."'");
	}

	public function document_delete($id)
	{
			$this->db->where('doc_id', $id);
		return $this->db->delete('tb_document');
	}

}