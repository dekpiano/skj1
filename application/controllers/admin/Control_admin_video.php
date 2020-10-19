<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_video extends CI_Controller {
	
	var  $title = "วีดิโอ";
	
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form', 'url'));
		$this->load->model('admin/Admin_model_video');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}
	}

	

	public function index()
	{	
		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_video');
		if($this->session->userdata('login_id') != 1){
			$this->db->where('video_userid',$this->session->userdata('login_id'));
		}$this->db->order_by('video_id','DESC');
		$data['video'] =	$this->db->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/video/admin_video_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 
		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/video') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$data['learning'] =	$this->db->get('tb_learning')->result();

		$this->db->select('*');
		$this->db->from('tb_video');
		$this->db->order_by('video_id','DESC');
		$data['video'] =	$this->db->get()->result();
		
		$num = @explode("_", $data['video'][0]->video_id);
        $num1 = @sprintf("%03d",$num[1]+1);
        $data['video'] = 'video_'.$num1;
        $data['action'] = 'insert_video';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/video/admin_video_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_video()
	{	
		
		$data_insert = array(	'video_id' => $this->input->post('video_id'),
				'video_name' => $this->input->post('video_name'),
				'video_link' => $this->input->post('video_link'),
				'video_date' => date('Y-m-d H:i:s'),
				'video_userid' => $this->session->userdata('login_id')
			);
		if($this->Admin_model_video->video_insert($data_insert) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
			redirect('admin/video', 'refresh');
		}
	}

	public function edit_video($id)
	{
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/video') => 'จัดการข้อมูล'.$this->title,'#' =>'แก้ไขข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_video');
		$this->db->where('video_id',$id);
		$data['video'] =	$this->db->get()->result();
		$data['action'] = 'update_video';
		$data['learning'] =	$this->db->get('tb_learning')->result();


		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/video/admin_video_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_video()
	{
		$data_update = array(
				'video_name' => $this->input->post('video_name'),
				'video_link' => $this->input->post('video_link'),
				'video_userid' => $this->session->userdata('login_id')
			);
		if($this->Admin_model_video->video_update($data_update) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
			redirect('admin/video', 'refresh');
		}
			
	}

	public function delete_video($data)
	{	
		
		if($this->Admin_model_video->video_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/video', 'refresh');
		}
	}


	public function ranking(){
		echo print_r($this->Admin_model_video->video_ranking());
	}
	

}

?>