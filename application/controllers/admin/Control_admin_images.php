<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_images extends CI_Controller {
	
	var  $title = "รูปภาพกิจกรรม";
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('admin/Admin_model_images');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}
	}

	public function index()
	{	
		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_images');
		if($this->session->userdata('login_id') != 1){
			$this->db->where('img_userid',$this->session->userdata('login_id'));
		}
		$this->db->order_by('img_id','DESC');
		$data['img'] =	$this->db->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/images/admin_images_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 
		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/images') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		

		$this->db->select('*');
		$this->db->from('tb_images');
		$this->db->order_by('img_id','DESC');
		$data['img'] =	$this->db->get()->result();
		
		$num = @explode("_", $data['img'][0]->img_id);
        $num1 = @sprintf("%03d",$num[1]+1);
        $data['images'] = 'img_'.$num1;
        $data['action'] = 'insert_images';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/images/admin_images_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_images()
	{
		$config['upload_path']   = 'uploads/images/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 1024; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('img_mainpic'))
			{
				$data = array('upload_data' => $this->upload->data());

				$data_a = array(	'img_id' => $this->input->post('img_id'),
						'img_title' => $this->input->post('img_title'),
						'img_link' => $this->input->post('img_link'),
						'img_mainpic' => $data['upload_data']['file_name'],
						'img_date' => $this->input->post('img_date'),
						'img_userid' => $this->session->userdata('login_id')
					);
		if($this->Admin_model_images->images_insert($data_a) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
			redirect('admin/images', 'refresh');
		}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				//print_r($error['error']);
				$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'รูปไม่ได้ขนาดที่กำหนดไว้'));
				?>
				<script>					
					  window.history.back();					
					</script>
				<?php
			}
		

		
	}

	public function edit_images($id)
	{
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/images') => 'จัดการตำแหน่ง','#' =>'แก้ไขตำแหน่ง' );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_images');
		$this->db->where('img_id',$id);
		$data['img'] =	$this->db->get()->result();
		$data['action'] = 'update_images/'.$data['img'][0]->img_mainpic;

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/images/admin_images_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_images($img)
	{
		//print_r($_FILES['img_mainpic']['error']);exit();
		if($_FILES['img_mainpic']['error'] == 0){
		$config['upload_path']   = 'uploads/images/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 1024; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('img_mainpic'))
			{
				$data = array('upload_data' => $this->upload->data());

				@unlink("./uploads/images/".$img);
				$data = array(	
					'img_title' => $this->input->post('img_title'),
					'img_link' => $this->input->post('img_link'),
					'img_mainpic' => $data['upload_data']['file_name'],
					'img_date' => $this->input->post('img_date'),
					'img_userid' => $this->session->userdata('login_id')
				);
				if($this->Admin_model_images->images_update($data) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
					redirect('admin/images', 'refresh');
				}
			}
			else
			{
				
				$error = array('error' => $this->upload->display_errors());
					//print_r($error['error']);exit();
					$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'ขนาดไฟล์ใหญ่เกินไป'));
					?>
					<script>					
						  window.history.back();					
						</script>
					<?php		
				
			}
		}else{
			$data = array(	
				'img_title' => $this->input->post('img_title'),
				'img_link' => $this->input->post('img_link'),
				'img_date' => $this->input->post('img_date'),
				'img_userid' => $this->session->userdata('login_id')
			);
			if($this->Admin_model_images->images_update($data) == 1){
				$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
				redirect('admin/images', 'refresh');
			}
		}
	}


	public function delete_images($data,$img)
	{
		@unlink("./uploads/images/".$img);
		if($this->Admin_model_images->images_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/images', 'refresh');
		}
	}

	

}

?>