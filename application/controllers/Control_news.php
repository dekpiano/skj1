<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_news extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('timeago');
		$this->load->model('model_news');
		
	}
	

	public function dataAll()
	{
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		$data['lear'] =	$this->db->get('tb_learning')->result(); //กลุ่มสาระ
		$data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
		$data['about'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
		$data['banner'] =	$this->db->get('tb_banner')->result(); //ประชาสัมพันธ์

		return $data;
	}
	
	public function news_detail($id)
	{
		$data = $this->dataAll();
		$data['news'] =	$this->db->where('news_id',$id)->get('tb_news')->result(); //ประชาสัมพันธ์
		$data['title'] = $data['news'][0]->news_topic;
		$data['description'] = 'ข่าวประชาสัมพันธ์โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์';
		$this->count_views($id);

		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/news/news_detail.php');
		$this->load->view('user/layout/footer.php');
	}


	public function count_views($id='')
	{		
		  $s = $this->model_news->update_count_view($id);
		 //echo '<pre>';print_r($s);
	}

	public function news_all()
	{
		$data = $this->dataAll();
		$data['title'] = 'ข่าวประชาสัมพันธ์ทั้งหมด';
		$data['description'] = 'ข่าวประชาสัมพันธ์ทั้งหมด';
		$data['news'] =	$this->db->order_by("news_date", "desc")->get('tb_news')->result(); 

		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/news/news_all.php');
		$this->load->view('user/layout/footer.php');
	}

}
