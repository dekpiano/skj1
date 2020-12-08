<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('timeago');
    }
    public static $title = 'โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์';
    public static $description = 'เป็นผู้นำ รักเพื่อน นับถือพี่ เคารพครู กตัญญูพ่อแม่ ดูแลน้อง สนองคุณแผ่นดิน โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์';

    public function index()
    {
        $data['full_url'] =
            (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
                ? 'https'
                : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['title'] = self::$title;
        $data['description'] = self::$description;
        $data['lear'] = $this->db->get('tb_learning')->result(); //กลุ่มสาระ
        $data['news'] = $this->db
            ->order_by('news_date', 'desc')
            ->limit(6)
            ->get('tb_news')
            ->result(); //ประชาสัมพันธ์
        $data['banner'] = $this->db
            ->order_by('banner_id', 'desc')
            ->get('tb_banner')
            ->result(); //ประชาสัมพันธ์
        $data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
        $data['images'] = $this->db
            ->order_by('img_date', 'DESC')
            ->limit(6)
            ->get('tb_images')
            ->result(); //ประชาสัมพันธ์
        $data['journal'] = $this->db
            ->order_by('jour_createdate', 'DESC')
            ->limit(10)
            ->get('tb_journal')
            ->result(); //วารสาร
        $data['institution'] = $this->db
            ->where('instiO_category', 'ภายนอก')
            ->limit(10)
            ->get('tb_institutiono')
            ->result(); //หน่วยงาน
            $data['news_p'] = $news_today = $this->db->where('news_category','ข่าวประชาสัมพันธ์')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
		$data['news_k'] = $news_today = $this->db->where('news_category','ข่าวกิจกรรม')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
        $data['news_pg'] = $news_today = $this->db->where('news_category','ข่าวประกาศ')->order_by('news_date','DESC')->limit('5')->get('tb_news')->result();
        $data['video'] = $news_today = $this->db->order_by('video_date','DESC')->get('tb_video')->result();
        $this->load->view('user/layout/header.php', $data);
        $this->load->view('user/main/index.php');
        $this->load->view('user/layout/footer.php');
    }

    public function not_404()
    {
        $this->load->view('errors/404.php');
    }

    function father29_day()
    {
        $this->load->view('user/popupSpecial/father_day.php');
    }
    function mother_day()
    {
        $this->load->view('user/popupSpecial/mother_day.php');
    }
    function mother_day12()
    {
        $this->load->view('user/popupSpecial/mother_day12.php');
    }

    function r5_23()
    {
        $this->load->view('user/popupSpecial/23.php');
    }

    function father5_day()
    {
        $this->load->view('user/popupSpecial/father5_day.php');
    }



    
}