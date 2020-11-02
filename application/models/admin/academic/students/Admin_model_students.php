<?php
class Admin_model_students extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function students_insert($data)
    {
        // Load database academic
        $db_personnel = $this->load->database('db_personnel', true);
        return $db_personnel->insert('tb_students', $data);
    }

    public function students_insert_All($data)
    {
        $db_personnel = $this->load->database('db_personnel', true);

        foreach ($data as $key => $value) {
                   
            
            if($value['E'] == ''){
                $y = '';
                $md = '';
                $pass = '';
            }else{
                $y = date('Y',strtotime($value['E']))-543;
                $md = date('-m-d',strtotime($value['E']));
                $pass = md5(md5(date('dmY',strtotime($value['E']))));
            }
            $data = array('stu_id' => $value['A'], 
            'stu_prefix' => $value['B'], 
            'stu_fristName' => $value['C'], 
            'stu_lastName' => $value['D'], 
            'stu_birth' => $y.$md, 
            'stu_nationality' => $value['F'], 
            'stu_race' => $value['G'], 
            'stu_religion' => $value['H'], 
            'stu_iden' => $value['I'], 
            'stu_class' => $value['J'], 
            'stu_room' => $value['K'], 
            'stu_swine' => $value['L'], 
            'stu_houseNumber' => $value['M'], 
            'stu_subDistrict' => $value['N'], 
            'stu_district' => $value['O'], 
            'stu_province' => $value['P'], 
            'stu_postCode' => $value['Q'], 
            'stu_active' => 'กำลังศึกษา', 
            'stu_username' => $value['A'], 
            'stu_password' => $pass
            );
            
            $db_personnel->insert('tb_students', $data);
        }
       
      
        return "OK";
    }

    public function students_update($data)
    {
        // Load database academic
        $db_personnel = $this->load->database('db_personnel', true);
        return $db_personnel->update(
            'tb_students',
            $data,
            "schestu_id='" . $this->input->post('schestu_id') . "'"
        );
    }

    public function students_delete($id)
    {
        // Load database academic
        $db_personnel = $this->load->database('db_personnel', true);
        $db_personnel->where('schestu_id', $id);
        return $db_personnel->delete('tb_students');
    }
}