<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('timeago');
        $this->DBSKJ = $this->load->database('default', TRUE);
        $this->DBPers = $this->load->database('db_personnel', TRUE);
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
            ->where('news_vision',0)
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
        $data['posi'] =	$this->db->where('posi_id >=','posi_007')->get('tb_position')->result(); //ตำแหน่งบุคลากร
       
        $data['pers'] = $this->DBPers->select('tb_personnel.pers_prefix,
                                        tb_personnel.pers_firstname,
                                        tb_personnel.pers_lastname,
                                        tb_personnel.pers_department,
                                        tb_personnel.pers_img,
                                        tb_personnel.pers_department,
                                        tb_personnel.pers_position,
                                        tb_position.posi_name')
                                        ->from('tb_personnel')
                                        ->join($this->DBSKJ->database.'.tb_department','tb_personnel.pers_department = tb_department.depart_id')
                                        ->join($this->DBSKJ->database.'.tb_position','tb_personnel.pers_position = tb_position.posi_id')
                                        ->where('pers_department','depart_001')
                                       ->get()->result(); 
        //print_r( $data['pers'] ); exit();
        $this->load->view('user/layout/header.php', $data);
        $this->load->view('user/main/index.php');
      $this->load->view('user/layout/footer.php');
    }

    public function not_404()
    {
        $this->load->view('errors/404.php');
    }

    public function mother_day()
    {
        $this->load->view('user/popupSpecial/mother_day.php');
    }

    public function father29_day()
    {
        $this->load->view('user/popupSpecial/father29_day.php');
    }

    public function mother_day12()
    {
        $this->load->view('user/popupSpecial/mother_day12.php');
    }

    public function father5_day()
    {
        $this->load->view('user/popupSpecial/father5_day.php');
    }
    

    
}