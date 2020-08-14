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
        $data['Allabout'] = $this->db->get('tb_aboutschool')->result(); //เกี่ย่วกับโรงเรียน
        $data['banner'] = $this->db->get('tb_banner')->result(); //ประชาสัมพันธ์

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