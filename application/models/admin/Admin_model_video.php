<?php
class Admin_model_video extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	
	}

	public function video_insert($data)
	{
		return $this->db->insert('tb_video',$data);
	}

	public function video_update($data)
	{
		return $this->db->update('tb_video',$data,"video_id='".$this->input->post('video_id')."'");
	}

	public function video_delete($id)
	{
				$this->db->where('video_id', $id);
		return 	$this->db->delete('tb_video');
	}

	// public function video_ranking(){
		
	// 	$position = $this->input->post('position');
		
	// 	$i=1;
	// 		foreach($position as $k=>$v){
	// 			$data = array('video_rank' => $i );
	// 			$this->db->update('tb_video',$data,"video_id='".$v."'");
	// 			$i++;
	// 		}
		

	// 	return $position;
	// }

}