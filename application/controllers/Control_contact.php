<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_contact extends CI_Controller {
	protected $DBPers;
	public function __construct() {
		parent::__construct();
		$this->load->library('timeago');
		$this->load->model('model_news');
		$this->DBSKJ = $this->load->database('default', TRUE);
		$this->DBPers = $this->load->database('db_personnel', TRUE);
		
	}

	public static $title = "รับสมัครนักเรียนปีการศึกษา 2563";
	public static $description = "รับสมัครนักเรียนวันนี้ จนถึง 12 พฤษภาคม 2563";

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
	
	public function contact_main()
	{
		$data = $this->dataAll();
		$data['title'] = "ติดต่อ";
        $data['description'] = "ติดต่อสอบถามเกี่ยวกับโรงเรียน";
        
        $data['Executive'] = $this->DBPers->select('tb_personnel.pers_id, 
        tb_personnel.pers_prefix, 
        tb_personnel.pers_firstname, 
        tb_personnel.pers_lastname, 
        tb_personnel.pers_phone, 
        tb_personnel.pers_position, 
        tb_position.posi_name, 
        tb_personnel.pers_img')
        ->join($this->DBSKJ->database.'.tb_position','tb_personnel.pers_position = tb_position.posi_id')
        ->where('tb_position.posi_name','ผู้อำนวยการโรงเรียน')
        ->or_where('tb_position.posi_name','รองผู้อำนวยการโรงเรียน')
        ->get('tb_personnel')->result();

        //print_r($data['Executive']);exit();

		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/contact/contact_main.php');
		$this->load->view('user/layout/footer.php');
	}


}