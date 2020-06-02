<?php
class Model_journal extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	
	}


	public function update_count_view($id)
	{
		 $check = $this->db->select('jour_id ,jour_counttview')->from('tb_journal')->where('jour_id',$id)->get()->result();

		 $data = array('jour_counttview' => ($check[0]->jour_counttview+1) );
				$this->db->where('jour_id',$id);
		return 	$this->db->update('tb_journal',$data);
		
	}

	

}