<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_admin_students extends CI_Controller
{
    var $title = 'นักเรียน';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'url']);
        
        $this->load->model('admin/academic/students/Admin_model_students');
        if ($this->session->userdata('fullname') == '') {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        // Load database academic
        $db_personnel = $this->load->database('db_personnel', true);

        $data['title'] = $this->title;
        $data['menu'] = $this->db->get('tb_adminmenu')->result();
        $db_personnel->select('*');
        $db_personnel->from('tb_students');
        $db_personnel->order_by('stu_id', 'DESC');
        $data['students'] = $db_personnel->get()->result();

        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/layout/navber.php');

        $this->load->view('admin/academic/students/admin_students_main.php');

        $this->load->view('admin/layout/footer.php');
    }

    public function add()
    {
        // Load database academic
        $db_personnel = $this->load->database('db_personnel', true);

        $data['title'] = $this->title;
        $data['icon'] = '<i class="far fa-plus-square"></i>';
        $data['color'] = 'primary';
        $data['breadcrumbs'] = [
            base_url('admin/academic/students') =>
                'จัดการข้อมูล' . $this->title,
            '#' => 'เพิ่มข้อมูล' . $this->title,
        ];
        $data['menu'] = $this->db->get('tb_adminmenu')->result();

        $db_personnel->select('*');
        $db_personnel->from('tb_students');
        $db_personnel->order_by('stu_id', 'DESC');
        $data['students'] = $db_personnel->get()->result();

        $num = @explode('_', $data['students'][0]->stu_id);
        $num1 = @sprintf('%03d', $num[1] + 1);
        $data['students'] = 'stu_' . $num1;
        $data['action'] = 'insert_students';

        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/layout/navber.php');

        $this->load->view('admin/academic/students/admin_students_form.php');

        $this->load->view('admin/layout/footer.php');
    }

    public function insert_students()
    {
        //print_r($_FILES);

        $config['upload_path'] = 'uploads/academic/students/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
        $config['allowed_types'] = 'pdf|PDF'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
        $config['max_size'] = 2048; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
        $config['encrypt_name'] = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('stu_filename')) {
            $data = ['upload_data' => $this->upload->data()];

            $data_insert = [
                'stu_id' => $this->input->post('stu_id'),
                'stu_classname' => $this->input->post('stu_classname'),
                'stu_filename' => $data['upload_data']['file_name'],
                'stu_datetime' => date('Y-m-d H:i:s'),
                'stu_user' => $this->session->userdata('login_id'),
            ];
            if (
                $this->Admin_model_students->students_insert($data_insert) == 1
            ) {
                $this->session->set_flashdata([
                    'msg' => 'ok',
                    'messge' => 'บันทึกข้อมูลสำเร็จ',
                ]);
                redirect('admin/class-schedule', 'refresh');
            }
        } else {

            $error = ['error' => $this->upload->display_errors()];
            //print_r($error['error']);
            $this->session->set_flashdata([
                'msg_uploadfile' => 'on',
                'messge' => 'เพิ่มได้แค่ไฟล์ PDF ไม่เกิ้น 2 mb',
            ]);
            ?>
<script>
window.history.back();
</script>
<?php
        }
    }

    public function edit_students($id)
    {
        // Load database academic
        $db_personnel = $this->load->database('db_personnel', true);
        /* Bread crum */
        $data['title'] = $this->title;
        $data['icon'] = '<i class="fas fa-edit"></i>';
        $data['color'] = 'warning';
        $data['breadcrumbs'] = [
            base_url('admin/academic/students') =>
                'จัดการข้อมูล' . $this->title,
            '#' => 'แก้ไขข้อมูล' . $this->title,
        ];
        $data['menu'] = $this->db->get('tb_adminmenu')->result();
        $db_personnel->select('*');
        $db_personnel->from('tb_students');
        $db_personnel->where('stu_id', $id);
        $data['students'] = $db_personnel->get()->result();
        $data['action'] =
            'update_students/' . $data['students'][0]->stu_filename;

        $this->load->view('admin/layout/header.php', $data);
        $this->load->view('admin/layout/navber.php');

        $this->load->view('admin/academic/students/admin_students_form.php');

        $this->load->view('admin/layout/footer.php');
    }

    public function update_students($img)
    {
        $config['upload_path'] = 'uploads/academic/students/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
        $config['allowed_types'] = 'pdf|PDF'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
        $config['max_size'] = 2048; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
        $config['encrypt_name'] = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('stu_filename')) {
            $data = ['upload_data' => $this->upload->data()];

            @unlink('./uploads/academic/students/' . $img);
            $data_update = [
                'stu_classname' => $this->input->post('stu_classname'),
                'stu_filename' => $data['upload_data']['file_name'],
                'stu_datetime' => date('Y-m-d H:i:s'),
                'stu_user' => $this->session->userdata('login_id'),
            ];
            if (
                $this->Admin_model_students->students_update($data_update) == 1
            ) {
                $this->session->set_flashdata([
                    'msg' => 'ok',
                    'messge' => 'แก้ไขข้อมูลสำเร็จ',
                ]);
                redirect('admin/class-schedule', 'refresh');
            }
        } else {
            $error = ['error' => $this->upload->display_errors()];

            $data_update = [
                'stu_classname' => $this->input->post('stu_classname'),
                'stu_datetime' => date('Y-m-d H:i:s'),
                'stu_user' => $this->session->userdata('login_id'),
            ];
            if (
                $this->Admin_model_students->students_update($data_update) == 1
            ) {
                $this->session->set_flashdata([
                    'msg' => 'ok',
                    'messge' => 'แก้ไขข้อมูลสำเร็จ',
                ]);
                redirect('admin/class-schedule', 'refresh');
            }
        }
    }

    public function delete_students($data, $img)
    {
        @unlink('./uploads/academic/students/' . $img);
        if ($this->Admin_model_students->students_delete($data) == 1) {
            $this->session->set_flashdata([
                'msg' => 'ok',
                'messge' => 'ลบข้อมูลสำเร็จ',
            ]);
            redirect('admin/class-schedule', 'refresh');
        }
    }


    public function importStudent_All()
	{ 
	
		
		
    }
    
    
}

?>