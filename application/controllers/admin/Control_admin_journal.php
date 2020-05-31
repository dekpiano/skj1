<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_journal extends CI_Controller {
	
	var  $title = "วารสาร";
	
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form', 'url'));
		$this->load->model('admin/Admin_model_journal');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}
	}

	

	public function index()
	{	
		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_journal');
		$this->db->order_by('jour_id','DESC');
		$data['jour'] =	$this->db->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/journal/admin_journal_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 
		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/journal') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		

		$this->db->select('*');
		$this->db->from('tb_journal');
		$this->db->order_by('jour_id','DESC');
		$data['journal'] =	$this->db->get()->result();
		
		$num = @explode("_", $data['journal'][0]->jour_id);
        $num1 = @sprintf("%04d",$num[1]+1);
        $data['jour'] = 'jour_'.$num1;
        $data['action'] = 'insert_journal';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/journal/admin_journal_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_journal()
	{
		//print_r($_FILES);
		
		$config['upload_path']   = 'uploads/journal/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 1024; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('jour_img'))
			{
				$data = array('upload_data' => $this->upload->data());

				$data_insert = array(	'jour_id' => $this->input->post('jour_id'),
						'jour_issue' => $this->input->post('jour_issue'),
						'jour_subject' => $this->input->post('jour_subject'),
						'jour_period' => $this->input->post('jour_period'),
						'jour_term' => $this->input->post('jour_term'),
						'jour_schoolyear' => $this->input->post('jour_schoolyear'),
						'jour_img' => $data['upload_data']['file_name'],
						'jour_createdate' => $this->input->post('jour_createdate'),
						'jour_user' => $this->session->userdata('login_id')
					);
				if($this->Admin_model_journal->journal_insert($data_insert) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
					redirect('admin/journal', 'refresh');
				}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				//print_r($error['error']); exit();
				$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'ขนาดไฟล์ไม่เกิน 1 mb'));
				?>
				<script>					
					  window.history.back();					
					</script>
				<?php
			}
		
	}

	public function edit_journal($id)
	{
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/journal') => 'จัดการข้อมูล'.$this->title,'#' =>'แก้ไขข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_journal');
		$this->db->where('jour_id',$id);
		$data['journal'] =	$this->db->get()->result();
		$data['action'] = 'update_journal/'.$data['journal'][0]->jour_img;

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/journal/admin_journal_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_journal($img)
	{

		$config['upload_path']   = 'uploads/journal/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 1024; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('jour_img'))
			{
				$data = array('upload_data' => $this->upload->data());

				@unlink("./uploads/journal/".$img);
				$data_update = array(
					'jour_issue' => $this->input->post('jour_issue'),
					'jour_subject' => $this->input->post('jour_subject'),
					'jour_period' => $this->input->post('jour_period'),
					'jour_term' => $this->input->post('jour_term'),
					'jour_schoolyear' => $this->input->post('jour_schoolyear'),
					'jour_img' => $data['upload_data']['file_name'],					
					'jour_createdate' => $this->input->post('jour_createdate'),
					'jour_user' => $this->session->userdata('login_id')
					);
				if($this->Admin_model_journal->journal_update($data_update) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
					redirect('admin/journal', 'refresh');
				}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				
				$data_update = array(
					'jour_issue' => $this->input->post('jour_issue'),
					'jour_subject' => $this->input->post('jour_subject'),
					'jour_period' => $this->input->post('jour_period'),
					'jour_term' => $this->input->post('jour_term'),
					'jour_schoolyear' => $this->input->post('jour_schoolyear'),
					'jour_user' => $this->session->userdata('login_id')	,				
					'jour_createdate' => $this->input->post('jour_createdate')
					);
				if($this->Admin_model_journal->journal_update($data_update) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
					redirect('admin/journal', 'refresh');
				}
			}


	
		
	}

	public function delete_journal($data,$img)
	{	
		@unlink("./uploads/journal/".$img);
		if($this->Admin_model_journal->journal_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/journal', 'refresh');
		}
	}

	

}

?>