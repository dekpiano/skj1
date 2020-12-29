<?php
class Admin_model_personnel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function personnel_insert($data)
	{
		return $this->db->insert('tb_personnel',$data);
	}

	public function personnel_update($data)
	{
		return $this->db->update('tb_personnel',$data,"pers_id='".$this->input->post('pers_id')."'");
	}

	public function personnel_delete($id)
	{
				$this->db->where('pers_id', $id);
		return 	$this->db->delete('tb_personnel');
	}

	public function personnel_resetpassword($data,$id)
	{
		return $this->db->update('tb_personnel',$data,"pers_id='".$id."'");
	}

	public function personnel_changepassword($data)
	{
		return $this->db->update('tb_personnel',$data,"pers_id='".$this->session->userdata('login_id')."'");
	}

	public function personnel_UpdateSocial($data)
	{
		return $this->db->update('tb_personnel',$data,"pers_id='".$this->session->userdata('login_id')."'");
	}

	public function personnel_profile_Privateinfo($data)
	{
		return $this->db->update('tb_personnel',$data,"pers_id='".$this->session->userdata('login_id')."'");
	}

	public function personnel_ChangeNumber($data,$id)
	{
		return $this->db->update('tb_personnel',$data,"pers_id='".$id."'");
	}

	public function personnel_CheckName($frist,$last)
	{
		return $this->db->select('pers_firstname,pers_lastname')
						->where('pers_firstname',$frist)
						->where('pers_lastname',$last)
						->from('tb_personnel')
						->get()->num_rows();
	}


}