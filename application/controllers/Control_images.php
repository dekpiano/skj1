<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_images extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('timeago');
		//$this->load->model('model_images');
		
	}

	public static $title = "รูปภาพกิจกรรม";
	public static $description = "รวมรูปภาพกิจกรรททั้งหมดของโรงเรียน";

	public function dataAll()
	{
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$data['title'] = self::$title;
		$data['description'] = self::$description;
		$data['lear'] =	$this->db->get('tb_learning')->result(); //กลุ่มสาระ
		$data['posi'] =	$this->db->where('posi_id >=','posi_007')->get('tb_position')->result(); //ตำแหน่งบุคลากร
		$data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
		$data['about'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
		$data['banner'] =	$this->db->get('tb_banner')->result(); //ประชาสัมพันธ์
		$data['news_p'] = $news_today = $this->db->where('news_category','ข่าวประชาสัมพันธ์')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_k'] = $news_today = $this->db->where('news_category','ข่าวกิจกรรม')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_pg'] = $news_today = $this->db->where('news_category','ข่าวประกาศ')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();

		return $data;
	}
	
	public function show_all_album()
	{
		$data = $this->dataAll();
		$data['images'] =$this->db->order_by('img_date','DESC')->get('tb_images')->result(); //ประชาสัมพันธ์
		
		//$this->count_views($id);

		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/album/album_main.php');
		$this->load->view('user/layout/footer.php');
	}


	public function count_views($id='')
	{
		
		  $s = $this->model_images->update_count_view($id);
		 //echo '<pre>';print_r($s);
	}

}