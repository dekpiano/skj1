<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_document extends CI_Controller {

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
		$data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน		
		$data['banner'] =	$this->db->get('tb_banner')->result(); //ประชาสัมพันธ์

		return $data;
	}
	
	public function document_all()
	{
		
		$data = $this->dataAll();
        $data['doc'] = $this->db->get('tb_document')->result(); //ค้นหาข้อมูล
        $data['doc_menu_left'] = $this->db->select('doc_department')->group_by('doc_department')->get('tb_document')->result(); //ค้นหาข้อมูล
        $data['doc_menu_right'] = $this->db->select('doc_category')->group_by('doc_category')->get('tb_document')->result(); //ค้นหาข้อมูล
		$data['title'] = 'งานเอกสาร ไฟล์ดาวน์โหลด';
		$data['description'] = "เกี่ยวกับเอกสาร แบบฟอร์ม หนังสื่อต่าง ๆ ";
		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/document/document_detail.php');
		$this->load->view('user/layout/footer.php');
	}

	public function document_liststudent()
	{
		
		$data = $this->dataAll();
		$data['title'] = 'รายชื่อนักเรียน ปี 63';
		$data['description'] = "รายชื่อนักเรียนตามกลุ่ม Covid-19 และรายชื่อนักเรียนตามกลุ่มปกติ";
		$this->load->view('user/layout/header.php',$data);
		$this->load->view('user/document/document_liststudent.php');
		$this->load->view('user/layout/footer.php');
	}
	



	

}