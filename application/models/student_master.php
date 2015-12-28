<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_master extends CI_Model {

	var $id = "";
	var $student_name = "";
	var $grade = "";
	var $board = "";
	var $address = "";
	var $student_conatct = "";
	var $resident_contact = "";
	var $parent_contact = "";
	var $email_id = "";
	var $parent_email_id = "";
	var $dob = "";
	var $reference = "";
	var $batch = "";
	var $school_name = "";
	var $prev_remark = "";
	var $walkin_remark = "";
	var $course_interested = "";
	var $field = "";
	var $program_of_interest = "";
	var $year_of_seeking_admission = "";
	var $date_of_presentation = "";
	var $data_collected = "";
	var $staff = "";
	var $date = "";
	var $calling_status = "";
	var $calling_status_abbr_id = "";
	var $student_category = "";
	var $create_date_time = "";
	var $update_date_time = "";

    function __construct(){
        parent::__construct();
    }
    public function create_student(){
    	$config['upload_path'] = 'assets/xls/';
		$config['allowed_types'] = 'xls';
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload("student_file")){
			$error["err"] = array('error' => $this->upload->display_errors());

			return $error;
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			return $data["upload_data"]["file_name"];
		}
    }
    public function read_students(){
    	if($this->input->post("student_name") == "" && $this->input->post("grade") == "" && $this->input->post("board") == "" && $this->input->post("address") == "" && $this->input->post("dob") == "" && $this->input->post("reference") == "" && $this->input->post("batch") == "" && $this->input->post("school_name") == "" && $this->input->post("field") == "" && $this->input->post("year_of_seeking_admission") == "" && $this->input->post("date_of_presentation") == "" && $this->input->post("data_collected") == "" && $this->input->post("calling_status_abbr") == "" && $this->input->post("student_category") == ""){
			return NULL;
		}else{
			
		}
    }
}
?>