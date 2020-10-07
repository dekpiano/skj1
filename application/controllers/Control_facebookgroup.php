<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_facebookgroup extends CI_Controller
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
        $data['title'] = 'Facebook Gruop';
        $data['description'] = 'เกี่ยวกับเฟสบุกกลุ่มภายในโรงเรียน';
        $data['face'] = $this->db->order_by('facegroup_rank')->get('tb_facegroup')->result();
        $this->load->view('user/layout/header.php', $data);
        $this->load->view('user/facegroup/facegroup_main.php');
        $this->load->view('user/layout/footer.php');
    }

    public function count_face($da){
        $data = $this->db->where('facegroup_id',$da)->get('tb_facegroup')->result();
        $d = array('facegroup_count' => ($data[0]->facegroup_count+1));
        $this->db->where('facegroup_id',$da);
        $this->db->update('tb_facegroup',$d);

    }
}