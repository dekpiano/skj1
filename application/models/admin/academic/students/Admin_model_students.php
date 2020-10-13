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
        $db_academic = $this->load->database('db_academic', true);
        return $db_academic->insert('tb_students', $data);
    }

    public function students_update($data)
    {
        // Load database academic
        $db_academic = $this->load->database('db_academic', true);
        return $db_academic->update(
            'tb_students',
            $data,
            "schestu_id='" . $this->input->post('schestu_id') . "'"
        );
    }

    public function students_delete($id)
    {
        // Load database academic
        $db_academic = $this->load->database('db_academic', true);
        $db_academic->where('schestu_id', $id);
        return $db_academic->delete('tb_students');
    }
}