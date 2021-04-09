<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_aboutschool extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('timeago');
		$this->load->model('model_news');
		
		
	}
	
	public static $description = "รับสมัครนักเรียนวันนี้ จนถึง 12 พฤษภาคม 2563";

	public function dataAll()
	{		
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$data['lear'] =	$this->db->get('tb_learning')->result(); //กลุ่มสาระ
		$data['posi'] =	$this->db->where('posi_id >=','posi_007')->get('tb_position')->result(); //ตำแหน่งบุคลากร
		$data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน		
		$data['banner'] =	$this->db->get('tb_banner')->result(); //ประชาสัมพันธ์
		
		$data['news_p'] = $news_today = $this->db->where('news_category','ข่าวประชาสัมพันธ์')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_k'] = $news_today = $this->db->where('news_category','ข่าวกิจกรรม')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_pg'] = $news_today = $this->db->where('news_category','ข่าวประกาศ')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		return $data;
	}
	
	public function aboutschool_detail($id)
	{		
		$data = $this->dataAll();
		$data['about'] = $this->db->where('about_id',$id)->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน		
		$data['title'] =$data['about'][0]->about_menu;
		$data['description'] = "เกี่ยวกับ ".$data['about'][0]->about_menu;
		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/aboutschool/aboutschool_detail.php');
		$this->load->view('user/layout/footer.php');
	}


	public function count_views($id='')
	{
		
		  $s = $this->model_news->update_count_view($id);
		 //echo '<pre>';print_r($s);
	}


	public function contact()
	{
		$data = $this->dataAll();
		$data['title'] = "ติดต่อ";
		$data['description'] = "ติดต่อสอบถามเกี่ยวกับโรงเรียน";
		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/contact/contact_main.php');
		$this->load->view('user/layout/footer.php');
	}

}