<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_institutionO extends CI_Controller {
	
	var  $title = "หน่วยงาน";
	
	public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form', 'url'));
		$this->load->model('admin/Admin_model_institutionO');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}
	}

	

	public function index()
	{	
		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_institutiono');
		$this->db->order_by('instiO_id','DESC');
		$data['instiO'] =	$this->db->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/institutionO/admin_institutionO_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 
		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/institutionO') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		

		$this->db->select('*');
		$this->db->from('tb_institutiono');
		$this->db->order_by('instiO_id','DESC');
		$data['institutionO'] =	$this->db->get()->result();
		
		$num = @explode("_", $data['institutionO'][0]->instiO_id);
        $num1 = @sprintf("%04d",$num[1]+1);
        $data['instiO'] = 'instiO_'.$num1;
        $data['action'] = 'insert_institutionO';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/institutionO/admin_institutionO_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_institutionO()
	{
		//print_r($_FILES);
		
		$config['upload_path']   = 'uploads/institutionO/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 1024; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 500;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('instiO_img'))
			{
				$data = array('upload_data' => $this->upload->data());

				$data_insert = array(	'instiO_id' => $this->input->post('instiO_id'),
						'instiO_name' => $this->input->post('instiO_name'),
						'instiO_createdate' => date('Y-m-d'),
						'instiO_user' => $this->session->userdata('login_id'),
						'instiO_link' => $this->input->post('instiO_link'),
						'instiO_category' => $this->input->post('instiO_category'),
						'instiO_img' => $data['upload_data']['file_name']
					);
				if($this->Admin_model_institutionO->institutionO_insert($data_insert) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
					redirect('admin/institutionO', 'refresh');
				}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				//print_r($error['error']); exit();
				$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'ขนาดไฟล์ไม่เกิน 1 mb ขนาดรูปไม่เกิน 400 X 120 px'));
				?>
<script>
window.history.back();
</script>
<?php
			}
		
	}

	public function edit_institutionO($id)
	{
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/institutionO') => 'จัดการข้อมูล'.$this->title,'#' =>'แก้ไขข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_institutiono');
		$this->db->where('instiO_id',$id);
		$data['institutionO'] =	$this->db->get()->result();
		$data['action'] = 'update_institutionO/'.$data['institutionO'][0]->instiO_img;

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/institutionO/admin_institutionO_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_institutionO($img)
	{
		if($_FILES['instiO_img']['error'] == 0 ){
		$config['upload_path']   = 'uploads/institutionO/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 1024; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 500;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('instiO_img'))
			{
				$data = array('upload_data' => $this->upload->data());

				@unlink("./uploads/institutionO/".$img);
				$data_update = array(
						'instiO_name' => $this->input->post('instiO_name'),
						'instiO_user' => $this->session->userdata('login_id'),
						'instiO_link' => $this->input->post('instiO_link'),
						'instiO_img' => $data['upload_data']['file_name'],
						'instiO_category' => $this->input->post('instiO_category')
					);
				if($this->Admin_model_institutionO->institutionO_update($data_update) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
					redirect('admin/institutionO', 'refresh');
				}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'ขนาดไฟล์ไม่เกิน 1 mb ขนาดรูปไม่เกิน 400 X 120 px'));
				?>
				<script>
				window.history.back();
				</script>
				<?php
				
			}
		}else{
			$data_update = array(
				'instiO_name' => $this->input->post('instiO_name'),
				'instiO_user' => $this->session->userdata('login_id'),				
				'instiO_category' => $this->input->post('instiO_category'),
				'instiO_link' => $this->input->post('instiO_link')
			);
			if($this->Admin_model_institutionO->institutionO_update($data_update) == 1){
				$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
				redirect('admin/institutionO', 'refresh');
			}
		}
	}

	public function delete_institutionO($data,$img)
	{	
		@unlink("./uploads/institutionO/".$img);
		if($this->Admin_model_institutionO->institutionO_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/institutionO', 'refresh');
		}
	}

	

}

?>