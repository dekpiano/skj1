<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_academic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('timeago');
    }

    public function dataAll()
    {
        $data['full_url'] =
            (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
                ? 'https'
                : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['lear'] = $this->db->get('tb_learning')->result(); //กลุ่มสาระ
        $data['posi'] =	$this->db->where('posi_id >=','posi_007')->get('tb_position')->result(); //ตำแหน่งบุคลากร
        $data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
        $data['banner'] = $this->db->get('tb_banner')->result(); //ประชาสัมพันธ์
        $data['news_p'] = $news_today = $this->db->where('news_category','ข่าวประชาสัมพันธ์')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_k'] = $news_today = $this->db->where('news_category','ข่าวกิจกรรม')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_pg'] = $news_today = $this->db->where('news_category','ข่าวประกาศ')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
        return $data;
    }

    public function index()
    {
        $data = $this->dataAll();
        // Load database academic
        $db_academic = $this->load->database('db_academic', true);
        $data['c_schedule'] = $db_academic->get('tb_class_schedule`')->result(); //ค้นหาข้อมูล
        $data['title'] = 'กลุ่มบริหาวิชาการ';
        $data['description'] = 'เกี่ยวกับบริหาวิชาการ';
        $this->load->view('user/layout/header.php', $data);
        $this->load->view('user/academic/academic_main.php');
        $this->load->view('user/layout/footer.php');
    }

    public function schedule()
    {
        // Load database academic
        $db_academic = $this->load->database('db_academic', true);
        $data = $this->dataAll();
        $data['c_schedule'] = $db_academic->get('tb_class_schedule`')->result(); //ค้นหาข้อมูล
        $data['title'] = 'ตารางเรียน - สอน';
        $data['description'] = 'เกี่ยวกับตารางเรียน - สอน';
        $this->load->view('user/layout/header.php', $data);
        $this->load->view('user/academic/schedule/schedule_main.php');
        $this->load->view('user/layout/footer.php');
    }
}