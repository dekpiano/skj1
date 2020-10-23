<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_news extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('timeago');
		$this->load->model('model_news');
		$this->load->library("pagination");
		
	}
	

	public function dataAll()
	{
		$data['full_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$data['lear'] =	$this->db->get('tb_learning')->result(); //กลุ่มสาระ
		$data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
		$data['about'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
		$data['banner'] =	$this->db->get('tb_banner')->result(); //ประชาสัมพันธ์
		$data['news_p'] = $news_today = $this->db->where('news_category','ข่าวประชาสัมพันธ์')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_k'] = $news_today = $this->db->where('news_category','ข่าวกิจกรรม')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_pg'] = $news_today = $this->db->where('news_category','ข่าวประกาศ')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();

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
		//$data['news'] =	$this->db->order_by("ABS(news_date)", "desc")->get('tb_news')->result(); 

		$config = array();
        $config["base_url"] = base_url() . "news/all";
        $config["total_rows"] = $this->model_news->get_count();
        $config["per_page"] = 9;
		$config["uri_segment"] = 3;
		
		
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
		// Bootstrap 4, work very fine.
		$config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['first_link']       = false;
    $config['last_link']        = false;
    $config['full_tag_open']    = '<ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul>';
    $config['attributes']       = ['class' => 'page-link'];
    $config['first_tag_open']   = '<li class="page-item">';
    $config['first_tag_close']  = '</li>';
    $config['prev_tag_open']    = '<li class="page-item">';
    $config['prev_tag_close']   = '</li>';
    $config['next_tag_open']    = '<li class="page-item">';
    $config['next_tag_close']   = '</li>';
    $config['last_tag_open']    = '<li class="page-item">';
    $config['last_tag_close']   = '</li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['num_tag_open']     = '<li class="page-item">';
    $config['num_tag_close']    = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3)-1 : 0;

        $data["links"] = $this->pagination->create_links();

        $data['news'] = $this->model_news->get_news($config["per_page"], $page*$config["per_page"]);

		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/news/news_all.php');
		$this->load->view('user/layout/footer.php');
	}

	

}