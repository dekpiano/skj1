<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_personnel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->model('model_personnel');
		

	}
	public static $title = "บุคลากรโรงเรียน";
	public static $description = "บุคลากรโรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์";
	
	public function show_per_all()
	{
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		// print_r($id);
		$data['title'] = self::$title;
		$data['description'] = self::$description;
		$data['lear'] =	$this->db->get('tb_learning')->result(); //กลุ่มสาระ
		$data['news_p'] = $news_today = $this->db->where('news_category','ข่าวประชาสัมพันธ์')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_k'] = $news_today = $this->db->where('news_category','ข่าวกิจกรรม')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_pg'] = $news_today = $this->db->where('news_category','ข่าวประกาศ')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
						$this->db->select('tb_personnel.pers_id, 
											tb_personnel.pers_prefix, 
											tb_personnel.pers_firstname, 
											tb_personnel.pers_lastname, 
											tb_position.posi_name, 
											tb_personnel.pers_position, 
											tb_personnel.pers_academic,
											tb_personnel.pers_img');
						$this->db->from('tb_personnel');
						$this->db->join('tb_position','tb_personnel.pers_position = tb_position.posi_id');
		$data['pers'] = $this->db->get()->result(); 
		$this->db->select('tb_personnel.pers_id, 
											tb_personnel.pers_prefix, 
											tb_personnel.pers_firstname, 
											tb_personnel.pers_lastname, 
											tb_position.posi_name, 
											tb_personnel.pers_position, 
											tb_personnel.pers_academic,
											tb_personnel.pers_img');
						$this->db->from('tb_personnel');
						$this->db->join('tb_position','tb_personnel.pers_position = tb_position.posi_id');
		$data['pers_type'] = $this->db->get()->result(); 

		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/personnel/personnel_all.php');
		$this->load->view('user/layout/footer.php');
	}

	public function show_per_type($name){

		if($name == "สายสนับสนุนการสอน"){
			$idtype = "posi_007";
			$idtype1 = "posi_008";
		}
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$data['title'] = self::$title;
		$data['description'] = self::$description;
		$data['news_p'] = $news_today = $this->db->where('news_category','ข่าวประชาสัมพันธ์')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_k'] = $news_today = $this->db->where('news_category','ข่าวกิจกรรม')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_pg'] = $news_today = $this->db->where('news_category','ข่าวประกาศ')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['lear'] =	$this->db->get('tb_learning')->result(); //กลุ่มสาระ	
		$data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
						$this->db->select('	tb_personnel.pers_id, 
										tb_personnel.pers_prefix, 
										tb_personnel.pers_firstname, 
										tb_personnel.pers_lastname, 
										tb_personnel.pers_facebook,
										tb_personnel.pers_instagram,
										tb_personnel.pers_youtube,
										tb_personnel.pers_line,
										tb_personnel.pers_twitter,
										tb_position.posi_name, 
										tb_personnel.pers_position, 
										tb_personnel.pers_academic,
										tb_personnel.pers_img');
						$this->db->from('tb_personnel');
						$this->db->join('tb_position','tb_personnel.pers_position = tb_position.posi_id');
		$data['pers'] = $this->db->get()->result(); 

		$this->db->select('	tb_personnel.pers_id, 
							tb_personnel.pers_prefix, 
							tb_personnel.pers_firstname, 
							tb_personnel.pers_lastname, 
							tb_personnel.pers_facebook,
							tb_personnel.pers_instagram,
							tb_personnel.pers_youtube,
							tb_personnel.pers_line,
							tb_personnel.pers_twitter,
							tb_position.posi_name, 
							tb_personnel.pers_position, 
							tb_personnel.pers_img, 
							tb_personnel.pers_groupleade,
							tb_personnel.pers_learning,
							tb_personnel.pers_academic,
							tb_personnel.pers_numberGroup,
							tb_learning.lear_namethai');
						$this->db->from('tb_personnel');
						$this->db->join('tb_position','tb_personnel.pers_position = tb_position.posi_id','LEFT');
						$this->db->join('tb_learning','tb_personnel.pers_learning = tb_learning.lear_id','LEFT');
						$this->db->where('lear_namethai',$name);
						$this->db->or_where('posi_name',$name);
						$this->db->or_where('pers_position',@$idtype);
						$this->db->or_where('pers_position',@$idtype1);
						$this->db->order_by('pers_groupleade','asc');
						$this->db->order_by('pers_numberGroup','asc');
		$data['pers_type'] = $this->db->get()->result(); 

		//print_r($data['pers_type']); exit();
		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/personnel/personnel_all.php');
		$this->load->view('user/layout/footer.php');

	}


}