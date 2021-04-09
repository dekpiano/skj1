<?php
class Model_news extends CI_Model
{

	protected $table = 'tb_news';

	public function __construct()
	{
		parent::__construct();
	
	}


	public function update_count_view($id)
	{
		 $check = $this->db->select('news_id,news_view')->from('tb_news')->where('news_id',$id)->get()->result();

		 $data = array('news_view' => ($check[0]->news_view+1) );
				$this->db->where('news_id',$id);
		return 	$this->db->update('tb_news',$data);
		
	}


	public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_news($limit, $start) {
		$this->db->where('news_vision',0);
		$this->db->limit($limit, $start);
		$this->db->order_by('news_date','DESC');
		$query = $this->db->get($this->table);
		
		if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;

    }

	

}