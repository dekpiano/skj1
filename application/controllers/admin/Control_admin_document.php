<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_admin_document extends CI_Controller {
	
	var  $title = "เอกสาร";
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('admin/Admin_model_document');
		if ($this->session->userdata('fullname') == '') {
			redirect('login','refresh');
		}
	}

	

	public function index()
	{	
		$data['title'] = $this->title;
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_document');
		$this->db->order_by('doc_id','DESC');
		$data['doc'] =	$this->db->get()->result();

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/document/admin_document_main.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function add()
	{
		 
		$data['title'] = $this->title;
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		$data['breadcrumbs'] = array(base_url('admin/document') => 'จัดการข้อมูล'.$this->title,'#' =>'เพิ่มข้อมูล'.$this->title );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		

		$this->db->select('*');
		$this->db->from('tb_document');
		$this->db->order_by('doc_id','DESC');
		$data['doc'] =	$this->db->get()->result();
		
		$num = @explode("_", $data['doc'][0]->doc_id);
        $num1 = @sprintf("%03d",$num[1]+1);
        $data['document'] = 'doc_'.$num1;
        $data['action'] = 'insert_document';

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/document/admin_document_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function insert_document()
	{
		$target_dir="uploads/document/".$this->input->post('doc_department')."/".$this->input->post('doc_category')."/";
		if(!file_exists($target_dir)){
			mkdir('./'.$target_dir,0777, TRUE);
		}
		//print_r($_FILES);exit();
		$config['upload_path']   = $target_dir; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'txt|xls|xlsx|doc|docx|pdf'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 0; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('doc_file'))
			{
				$data = array('upload_data' => $this->upload->data());

				$data_a = array(	'doc_id' => $this->input->post('doc_id'),
						'doc_name' => $this->input->post('doc_name'),
						'doc_createdate' => $this->input->post('doc_createdate'),
						'doc_file' => $data['upload_data']['file_name'],
						'doc_category' => $this->input->post('doc_category'),
						'doc_permissive' => $this->input->post('doc_permissive'),
						'doc_department' => $this->input->post('doc_department'),
						'doc_userid' => $this->session->userdata('login_id')
					);
		if($this->Admin_model_document->document_insert($data_a) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'บันทึกข้อมูลสำเร็จ'));
			redirect('admin/document', 'refresh');
		}
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				//print_r($error['error']);exit();
				$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'รูปไม่ได้ขนาดที่กำหนดไว้'));
				?>
<script>
window.history.back();
</script>
<?php
			}
		

		
	}

	public function edit_document($id)
	{
		/* Bread crum */
		$data['title'] = $this->title;
		$data['icon'] = '<i class="fas fa-edit"></i>';
		$data['color'] = 'warning';
		$data['breadcrumbs'] = array(base_url('admin/document') => 'จัดการตำแหน่ง','#' =>'แก้ไขตำแหน่ง' );
		$data['menu'] =	$this->db->get('tb_adminmenu')->result();
		$this->db->select('*');
		$this->db->from('tb_document');
		$this->db->where('doc_id',$id);
		$data['doc'] =	$this->db->get()->result();
		$data['action'] = 'update_document/'.$data['doc'][0]->doc_department.'/'.$data['doc'][0]->doc_category.'/'.$data['doc'][0]->doc_file;

		$this->load->view('admin/layout/header.php',$data);
		$this->load->view('admin/layout/navber.php');

		$this->load->view('admin/document/admin_document_form.php');

		$this->load->view('admin/layout/footer.php');
	}

	public function update_document($department,$category,$file)
	{
		$addrass_old = 'uploads/document/'.$department.'/'.$category.'/'.$file;
		$target_dir="uploads/document/".$this->input->post('doc_department')."/".$this->input->post('doc_category')."/";
			if(!file_exists($target_dir)){
				mkdir('./'.$target_dir,0777, true);
			}
		if($_FILES['doc_file']['error'] == 0){			
			
			$config['upload_path']   = $target_dir; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
			 $config['allowed_types'] = 'txt|xls|xlsx|doc|docx|pdf'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
			 $config['max_size']      = 0; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
			 $config['max_width']     = 0; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
			 $config['max_height']    = 0;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)ป้องกันกรณีชื่อไฟล์ซ้ำกัน
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('doc_file'))
			{
				$data = array('upload_data' => $this->upload->data());

				@unlink("./".$addrass_old);
				$data = array(	
					'doc_name' => $this->input->post('doc_name'),
						'doc_createdate' => $this->input->post('doc_createdate'),
						'doc_file' => $data['upload_data']['file_name'],
						'doc_category' => $this->input->post('doc_category'),
						'doc_permissive' => $this->input->post('doc_permissive'),
						'doc_department' => $this->input->post('doc_department'),
						'doc_userid' => $this->session->userdata('login_id')
				);
				if($this->Admin_model_document->document_update($data) == 1){
					$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
					redirect('admin/document', 'refresh');
				}
			}
			else
			{
				
				$error = array('error' => $this->upload->display_errors());
					//print_r($error['error']);exit();
					$this->session->set_flashdata(array('msg_uploadfile'=> 'on','messge' => 'ไฟล์สกุลไม่ตรงตามที่กำหนด'));
					?>
					<script>
					window.history.back();
					</script>
					<?php		
				
			}
		}else{
			
			copy($addrass_old,$target_dir.$file);
			@unlink("./".$addrass_old);
			$data = array(	
						'doc_name' => $this->input->post('doc_name'),
						'doc_createdate' => $this->input->post('doc_createdate'),
						'doc_category' => $this->input->post('doc_category'),
						'doc_permissive' => $this->input->post('doc_permissive'),
						'doc_department' => $this->input->post('doc_department'),
						'doc_userid' => $this->session->userdata('login_id')
			);

			if($this->Admin_model_document->document_update($data) == 1){
				$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'แก้ไขข้อมูลสำเร็จ'));
				redirect('admin/document', 'refresh');
			}
		}
	}


	public function delete_document($data,$department,$category,$file)
	{
		@unlink("uploads/document/".$department."/".$category."/".$file);
		if($this->Admin_model_document->document_delete($data) == 1){
			$this->session->set_flashdata(array('msg'=> 'ok','messge' => 'ลบข้อมูลสำเร็จ'));
			redirect('admin/document', 'refresh');
		}
	}

	

}

?>