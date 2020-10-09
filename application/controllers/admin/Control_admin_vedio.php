<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_vedio extends CI_Controller {
	
	var  $title = " Facebook Group";
	
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form', 'url'));
		$this->load->model('admin/Admin_model_vedio');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}
	}

	

	public function index()
	{	
		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_vedio');
		$this->db->order_by('vedio_rank');
		$data['vedio'] =	$this->db->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/vedio/admin_vedio_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 
		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/vedio') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$data['learning'] =	$this->db->get('tb_learning')->result();

		$this->db->select('*');
		$this->db->from('tb_vedio');
		$this->db->order_by('vedio_id','DESC');
		$data['vedio'] =	$this->db->get()->result();
		
		$num = @explode("_", $data['vedio'][0]->vedio_id);
        $num1 = @sprintf("%03d",$num[1]+1);
        $data['vedio'] = 'vedio_'.$num1;
        $data['action'] = 'insert_vedio';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/vedio/admin_vedio_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_vedio()
	{	
		$max = $this->db->select_max('vedio_rank')->from('tb_vedio')->get()->result();
		$face_rank = ($max[0]->vedio_rank+1);
		$data_insert = array(	'vedio_id' => $this->input->post('vedio_id'),
				'vedio_name' => $this->input->post('vedio_name'),
				'vedio_link' => $this->input->post('vedio_link'),
				'vedio_rank' => $face_rank,
				'vedio_userid' => $this->session->userdata('login_id')
			);
		if($this->Admin_model_vedio->vedio_insert($data_insert) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
			redirect('admin/vedio', 'refresh');
		}
	}

	public function edit_vedio($id)
	{
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/vedio') => 'จัดการข้อมูล'.$this->title,'#' =>'แก้ไขข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_vedio');
		$this->db->where('vedio_id',$id);
		$data['vedio'] =	$this->db->get()->result();
		$data['action'] = 'update_vedio';
		$data['learning'] =	$this->db->get('tb_learning')->result();


		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/vedio/admin_vedio_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_vedio()
	{
		$data_update = array(
				'vedio_name' => $this->input->post('vedio_name'),
				'vedio_link' => $this->input->post('vedio_link'),
				'vedio_userid' => $this->session->userdata('login_id')
			);
		if($this->Admin_model_vedio->vedio_update($data_update) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
			redirect('admin/vedio', 'refresh');
		}
			
	}

	public function delete_vedio($data)
	{	
		
		if($this->Admin_model_vedio->vedio_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/vedio', 'refresh');
		}
	}


	public function ranking(){
		echo print_r($this->Admin_model_vedio->vedio_ranking());
	}
	

}

?>