<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_facegroup extends CI_Controller {
	
	var  $title = " Facebook Group";
	
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form', 'url'));
		$this->load->model('admin/Admin_model_facegroup');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}
	}

	

	public function index()
	{	
		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_facegroup');
		$this->db->order_by('facegroup_rank');
		$data['facegroup'] =	$this->db->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/facegroup/admin_facegroup_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 
		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/facegroup') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$data['learning'] =	$this->db->get('tb_learning')->result();

		$this->db->select('*');
		$this->db->from('tb_facegroup');
		$this->db->order_by('facegroup_id','DESC');
		$data['facegroup'] =	$this->db->get()->result();
		
		$num = @explode("_", $data['facegroup'][0]->facegroup_id);
        $num1 = @sprintf("%03d",$num[1]+1);
        $data['facegroup'] = 'facegroup_'.$num1;
        $data['action'] = 'insert_facegroup';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/facegroup/admin_facegroup_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_facegroup()
	{	
		$max = $this->db->select_max('facegroup_rank')->from('tb_facegroup')->get()->result();
		$face_rank = ($max[0]->facegroup_rank+1);
		$data_insert = array(	'facegroup_id' => $this->input->post('facegroup_id'),
				'facegroup_name' => $this->input->post('facegroup_name'),
				'facegroup_link' => $this->input->post('facegroup_link'),
				'facegroup_rank' => $face_rank,
				'facegroup_userid' => $this->session->userdata('login_id')
			);
		if($this->Admin_model_facegroup->facegroup_insert($data_insert) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
			redirect('admin/facegroup', 'refresh');
		}
	}

	public function edit_facegroup($id)
	{
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/facegroup') => 'จัดการข้อมูล'.$this->title,'#' =>'แก้ไขข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_facegroup');
		$this->db->where('facegroup_id',$id);
		$data['facegroup'] =	$this->db->get()->result();
		$data['action'] = 'update_facegroup';
		$data['learning'] =	$this->db->get('tb_learning')->result();


		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/facegroup/admin_facegroup_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_facegroup()
	{
		$data_update = array(
				'facegroup_name' => $this->input->post('facegroup_name'),
				'facegroup_link' => $this->input->post('facegroup_link'),
				'facegroup_userid' => $this->session->userdata('login_id')
			);
		if($this->Admin_model_facegroup->facegroup_update($data_update) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
			redirect('admin/facegroup', 'refresh');
		}
			
	}

	public function delete_facegroup($data)
	{	
		
		if($this->Admin_model_facegroup->facegroup_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/facegroup', 'refresh');
		}
	}


	public function ranking(){
		echo print_r($this->Admin_model_facegroup->facegroup_ranking());
	}
	

}

?>