<?php
class Admin_model_facegroup extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function facegroup_insert($data)
	{
		return $this->db->insert('tb_facegroup',$data);
	}

	public function facegroup_update($data)
	{
		return $this->db->update('tb_facegroup',$data,"facegroup_id='".$this->input->post('facegroup_id')."'");
	}

	public function facegroup_delete($id)
	{
				$this->db->where('facegroup_id', $id);
		return 	$this->db->delete('tb_facegroup');
	}

	public function facegroup_ranking(){
		
		$position = $this->input->post('position');
		
		$i=1;
			foreach($position as $k=>$v){
				$data = array('facegroup_rank' => $i );
				$this->db->update('tb_facegroup',$data,"facegroup_id='".$v."'");
				$i++;
			}
		

		return $position;
	}

}