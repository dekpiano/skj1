<?php
class Admin_model_personnel extends CI_Model
{
	protected $DBPers;
	public function __construct()
	{
		parent::__construct();	
		$this->DBPers = $this->load->database('db_personnel', TRUE);	
	}
		
	public function personnel_insert($data)
	{
		return $this->DBPers->insert('tb_personnel',$data);
	}

	public function personnel_update($data)
	{	
		return $this->DBPers->update('tb_personnel',$data,"pers_id='".$this->session->userdata('login_id')."'");
	}

	public function personnel_delete($id)
	{		
				$this->DBPers->where('pers_id', $id);
		return 	$this->DBPers->delete('tb_personnel');
	}

	public function personnel_resetpassword($data,$id)
	{
		
		return $this->DBPers->update('tb_personnel',$data,"pers_id='".$id."'");
	}

	public function personnel_changepassword($data)
	{
		
		return $this->DBPers->update('tb_personnel',$data,"pers_id='".$this->session->userdata('login_id')."'");
	}

	public function personnel_UpdateSocial($data)
	{
		return $this->DBPers->update('tb_personnel',$data,"pers_id='".$this->session->userdata('login_id')."'");
	}

	public function personnel_profile_Privateinfo($data)
	{
		return $this->DBPers->update('tb_personnel',$data,"pers_id='".$this->session->userdata('login_id')."'");
	}

	public function personnel_ChangeNumber($data,$id)
	{
		return $this->DBPers->update('tb_personnel',$data,"pers_id='".$id."'");
	}

	public function personnel_CheckName($frist,$last)
	{
		return $this->DBPers->select('pers_firstname,pers_lastname')
						->where('pers_firstname',$frist)
						->where('pers_lastname',$last)
						->from('tb_personnel')
						->get()->num_rows();
	}


}


