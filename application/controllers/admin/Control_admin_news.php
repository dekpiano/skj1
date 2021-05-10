<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_news extends CI_Controller {
	
	var  $title = "ประชาสัมพันธ์/กิจกรรม";
	protected $DBSKJ,$DBPers;

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('admin/Admin_model_news');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}

		$this->DBSKJ = $this->load->database('default', TRUE);
		$this->DBPers = $this->load->database('db_personnel', TRUE);
	}

	public function index()
	{	
		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('tb_personnel.pers_prefix, 
							tb_personnel.pers_firstname, 
							tb_personnel.pers_lastname, 
							tb_news.*');
		$this->db->from('tb_news');
		$this->db->join($this->DBPers->database.'.tb_personnel','tb_news.personnel_id = tb_personnel.pers_id','LEFT');
		if($this->session->userdata('login_id') != 1){
			$this->db->where('tb_news.personnel_id',$this->session->userdata('login_id'));
		}
		
		$this->db->order_by('news_id','DESC');
		$data['news'] =	$this->db->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/news/admin_news_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 
		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/news') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		

		$this->db->select('*');
		$this->db->from('tb_news');
		$this->db->order_by('news_id','DESC');
		$data['news'] =	$this->db->get()->result();
		
		$num = @explode("_", $data['news'][0]->news_id);
        $num1 = @sprintf("%03d",$num[1]+1);
        $data['news'] = 'news_'.$num1;
        $data['action'] = 'insert_news';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/news/admin_news_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_news()
	{
		if($this->input->post('sub_facebook') == 'btn_facebook'){
			$date_time = $this->input->post('news_date').' '.date('H:i:s');	
			$data = array(	'news_id' => $this->input->post('news_id'),
							'news_topic' => $this->input->post('news_topic'),
							'news_facebook' => $this->input->post('news_facebook'),
							'news_date' => $date_time,
							'news_category' => $this->input->post('news_category'),
							'personnel_id' => $this->session->userdata('login_id')
						);
			if($this->Admin_model_news->news_insert($data) == 1){
				$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
				redirect('admin/news', 'refresh');
			}
		}else{

			if($_FILES['banner_img']['error'] == 0){
				$config['upload_path']   = 'uploads/news/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
				$config['allowed_types'] = '*'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
				$config['max_size']      = 2048; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
				$config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
				$config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
				$config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			   $this->load->library('upload', $config);
			   $this->upload->initialize($config);
				   if($this->upload->do_upload('banner_img'))
				   {
					   $data = array('upload_data' => $this->upload->data());
   
					   $date_time = $this->input->post('news_date').' '.date('H:i:s');	
						   $data = array(	'news_id' => $this->input->post('news_id'),
										   'news_topic' => $this->input->post('news_topic'),
										   'news_content' => $this->input->post('news_content'),
										   'news_date' => $date_time,
										   'news_category' => $this->input->post('news_category'),
										   'personnel_id' => $this->session->userdata('login_id'),
										   'news_img' => $data['upload_data']['file_name']
									   );
						   if($this->Admin_model_news->news_insert($data) == 1){
							   $this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
							   redirect('admin/news', 'refresh');
						   }
				   }
				   else
				   {
					   $error = array('error' => $this->upload->display_errors());
					   //print_r($error['error']);
					   $this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'ขนาดไฟล์ใหญ่เกินไป'));
					   ?>
<script>
window.history.back();
</script>
<?php					
				   }
   
		   }else{
				   $date_time = $this->input->post('news_date').' '.date('H:i:s');	
					   $data = array(	'news_id' => $this->input->post('news_id'),
									   'news_topic' => $this->input->post('news_topic'),
									   'news_content' => $this->input->post('news_content'),
									   'news_date' => $date_time,
									   'news_category' => $this->input->post('news_category'),
									   'personnel_id' => $this->session->userdata('login_id')
								   );
					   if($this->Admin_model_news->news_insert($data) == 1){
						   $this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
						   redirect('admin/news', 'refresh');
					   }
			   }
			   
		}
		
		
	}

	public function edit_news($id)
	{
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/news') => 'จัดการข้อมูล'.$this->title,'#' =>'แก้ไขข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_news');
		$this->db->where('news_id',$id);
		$data['news'] =	$this->db->get()->result();
		$img = $data['news'][0]->news_img == '' ? '0' : $data['news'][0]->news_img;
		$data['action'] = 'update_news/'.$img;

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/news/admin_news_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_news($img)
	{
		if($this->input->post('sub_facebook') == 'btn_facebook'){
			$data = array(	
				'news_topic' => $this->input->post('news_topic'),
				'news_facebook' => $this->input->post('news_facebook'),
				'news_category' => $this->input->post('news_category'),
				'personnel_id' => $this->session->userdata('login_id')
			);
			if($this->Admin_model_news->news_update($data) == 1){
				$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
				redirect('admin/news', 'refresh');
			}
		}else{

		
		if($_FILES['banner_img']['error'] == 0){
		$config['upload_path']   = 'uploads/news/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = '*'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 2048; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('banner_img'))
			{
				$data = array('upload_data' => $this->upload->data());

				@unlink("./uploads/news/".$img);

				$date_time = $this->input->post('news_date').' '.date('H:i:s');	
						$data = array(	
										'news_topic' => $this->input->post('news_topic'),
										'news_content' => $this->input->post('news_content'),
										'news_category' => $this->input->post('news_category'),
										'news_date' => $date_time,
										'personnel_id' => $this->session->userdata('login_id'),
										'news_img' => $data['upload_data']['file_name']
									);
						if($this->Admin_model_news->news_update($data) == 1){
							$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
							redirect('admin/news', 'refresh');
						}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
					print_r($error['error']);
					$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'ขนาดไฟล์ใหญ่เกินไป'));
					?>
<script>
window.history.back();
</script>
<?php
				
			}
		}else{
			$date_time = $this->input->post('news_date').' '.date('H:i:s');	
					$data = array(	
						'news_topic' => $this->input->post('news_topic'),
						'news_content' => $this->input->post('news_content'),
						'news_date' => $date_time,
						'news_category' => $this->input->post('news_category'),
						'personnel_id' => $this->session->userdata('login_id')
					);
					if($this->Admin_model_news->news_update($data) == 1){
						$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
						redirect('admin/news', 'refresh');
					}
		}


	}
}

	public function delete_news($data,$img)
	{
		@unlink("./uploads/news/".$img);
		if($this->Admin_model_news->news_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/news', 'refresh');
		}
	}

	public function news_uploads()
	{
		   // Allowed extentions.
		   $allowedExts = array("gif", "jpeg", "jpg", "png");

		   // Get filename.
		   $temp = explode(".", $_FILES["image_param"]["name"]);
	   
		   // Get extension.
		   $extension = end($temp);
	   
		   // An image check is being done in the editor but it is best to
		   // check that again on the server side.
		   // Do not use $_FILES["file"]["type"] as it can be easily forged.
		   $finfo = finfo_open(FILEINFO_MIME_TYPE);
		   $mime = finfo_file($finfo, $_FILES["image_param"]["tmp_name"]);
	   
		   if ((($mime == "image/gif")
		   || ($mime == "image/jpeg")
		   || ($mime == "image/JPEG")
		   || ($mime == "image/pjpeg")
		   || ($mime == "image/x-png")
		   || ($mime == "image/png"))
		   && in_array($extension, $allowedExts)) {
			   // Generate new random name.
			   $directory = getcwd() . "/uploads/news/detail/";
			   $date =date('Y-m-d');
			   $name = sha1(microtime()) . "." . $extension;
			   if (!file_exists($directory.$date)) {				
				mkdir($directory.$date, 0777, true);
			   }			 
			   // Save file in the uploads folder.
			   move_uploaded_file($_FILES["image_param"]["tmp_name"], getcwd() . "/uploads/news/detail/".$date."/".$name);		 
			 			  		  
			   // Generate response.
			   $response = new StdClass;
			   $response->link = base_url()."uploads/news/detail/".$date."/". $name;
			   echo stripslashes(json_encode($response));

			   
		   }
	}
	public function news_uploads_delete()
	{
		   // Get src.
			$src = explode(base_url(),$_POST["src"]);
			@unlink($src[1]);

			echo $src[1];
			
	}

	
	

}

?>