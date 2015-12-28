<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Student_master");
	}
	// Create Data.
	public function create_student_data(){
		$res = $this->Student_master->create_student();
		print_r($res);
	}
	// Read Data.
	public function read_student_data(){
		$data["student_data"] = $this->Student_master->read_students();
		if($data["student_data"] == NULL){
			$this->load->view("theme/student_master");
		}else{
			$this->load->view("theme/student_master", $data);
		}
	}
	// Update Data.
	public function update_student_data(){

	}
	// Delete Data.
	public function delete_student_data(){

	}
}