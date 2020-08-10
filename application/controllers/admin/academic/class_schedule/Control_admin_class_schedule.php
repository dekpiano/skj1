<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_class_schedule extends CI_Controller {
	
	var  $title = "ตารางเรียน";
	 
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form', 'url'));
		
		$this->load->model('admin/academic/class_schedule/Admin_model_class_schedule');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}
	}

	

	public function index()
	{	
		 // Load database academic
		$db_academic = $this->load->database('db_academic', TRUE);

		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$db_academic->select('*');
		$db_academic->from('tb_class_schedule');
		$db_academic->order_by('schestu_id','DESC');
		$data['class_schedule'] = $db_academic->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/academic/class_schedule/admin_class_schedule_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 // Load database academic
		$db_academic = $this->load->database('db_academic', TRUE);

		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/academic/class_schedule') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		
		$db_academic->select('*');
		$db_academic->from('tb_class_schedule');
		$db_academic->order_by('schestu_id','DESC');
		$data['class_schedule'] = $db_academic->get()->result();
		
		$num = @explode("_", $data['class_schedule'][0]->schestu_id);
        $num1 = @sprintf("%03d",$num[1]+1);
        $data['class_schedule'] = 'schestu_'.$num1;
        $data['action'] = 'insert_class_schedule';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/academic/class_schedule/admin_class_schedule_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_class_schedule()
	{
		//print_r($_FILES);
		
		$config['upload_path']   = 'uploads/academic/class_schedule/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'pdf|PDF'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 2048; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('schestu_filename'))
			{
				$data = array('upload_data' => $this->upload->data());

				$data_insert = array(
						'schestu_id' => $this->input->post('schestu_id'),
						'schestu_classname' => $this->input->post('schestu_classname'),
						'schestu_filename' => $data['upload_data']['file_name'],
						'schestu_datetime' => date('Y-m-d H:i:s'),
						'schestu_user' => $this->session->userdata('login_id')
					);
				if($this->Admin_model_class_schedule->class_schedule_insert($data_insert) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
					redirect('admin/class-schedule', 'refresh');
				}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				//print_r($error['error']);
				$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'เพิ่มได้แค่ไฟล์ PDF ไม่เกิ้น 2 mb'));
				?>
<script>
window.history.back();
</script>
<?php
			}
		
	}

	public function edit_class_schedule($id)
	{
		// Load database academic
		$db_academic = $this->load->database('db_academic', TRUE);
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/academic/class_schedule') => 'จัดการข้อมูล'.$this->title,'#' =>'แก้ไขข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$db_academic->select('*');
		$db_academic->from('tb_class_schedule');
		$db_academic->where('schestu_id',$id);
		$data['class_schedule'] =	$db_academic->get()->result();
		$data['action'] = 'update_class_schedule/'.$data['class_schedule'][0]->schestu_filename;

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/academic/class_schedule/admin_class_schedule_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_class_schedule($img)
	{

		$config['upload_path']   = 'uploads/academic/class_schedule/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'pdf|PDF'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 2048; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('schestu_filename'))
			{
				$data = array('upload_data' => $this->upload->data());

				@unlink("./uploads/academic/class_schedule/".$img);
				$data_update = array(
					'schestu_classname' => $this->input->post('schestu_classname'),
					'schestu_filename' => $data['upload_data']['file_name'],
					'schestu_datetime' => date('Y-m-d H:i:s'),
					'schestu_user' => $this->session->userdata('login_id')
					);
				if($this->Admin_model_class_schedule->class_schedule_update($data_update) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
					redirect('admin/class-schedule', 'refresh');
				}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				
				$data_update = array(
					'schestu_classname' => $this->input->post('schestu_classname'),
					'schestu_datetime' => date('Y-m-d H:i:s'),
					'schestu_user' => $this->session->userdata('login_id')
					);
				if($this->Admin_model_class_schedule->class_schedule_update($data_update) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
					redirect('admin/class-schedule', 'refresh');
				}
			}
	}

	public function delete_class_schedule($data,$img)
	{	
		@unlink("./uploads/academic/class_schedule/".$img);
		if($this->Admin_model_class_schedule->class_schedule_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/class-schedule', 'refresh');
		}
	}

	

	

}

?>