<?php
class Model_login extends CI_Model
{
	protected $DBSKJ,$DBPers;
	public function __construct()
	{
		parent::__construct();
		$this->DBSKJ = $this->load->database('default', TRUE);
		$this->DBPers = $this->load->database('db_personnel', TRUE);
	}

	public function record_count($username,$password)
	{
		$this->DBPers->where('pers_username',$username);
		$this->DBPers->where('pers_password',$password);
		return $this->DBPers->count_all_results('tb_personnel');
	}

	public function fetch_user_login($username,$password)
	{
		$this->DBPers->where('pers_username',$username);
		$this->DBPers->where('pers_password',$password);
		$query = $this->DBPers->get('tb_personnel');
		return $query->row();
	}

	public function record_count_admin($username,$password)
	{
		$this->db->where('admin_username',$username);
		$this->db->where('admin_password',$password);
		return $this->db->count_all_results('tb_admin');
	}

	public function fetch_user_login_admin($username,$password)
	{
		$this->db->where('admin_username',$username);
		$this->db->where('admin_password',$password);
		$query = $this->db->get('tb_admin');
		return $query->row();
	}

}