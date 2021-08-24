<?php
defined('BASEPATH') or die('Direct access not allowed');


/* ===== Documentation ===== 
Name: Admission_creche
Role: Controller
Description: Controls access to testimonial pages and functions in super admin panel
Model: Testimonial_model
Author: Sylvester Esso Nmakwe
Date Created: 6th February, 2020
*/


class Admission_creche extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->admin_restricted(); //allow only logged in users to access this class
		$this->admin_role_restricted('User Manager'); //only admin with this role can access this module
		$this->load->model('admission_model');
		$this->admin_details = $this->common_model->get_admin_details($this->session->admin_email);
	}



	/* ========== Creche and Pre Nursery ========== */
	public function index() {
		$inner_page_title = 'Creche/Pre Nursery Forms (' . $this->admission_model->count_creche_form() . ')'; 
		$this->admin_header('Creche Forms', $inner_page_title);
		$creche_forms = $this->admission_model->get_creche_form_details();
		$data['creche_forms'] = $creche_forms;
		$this->load->view('admin/admission/creche_forms', $data);
        $this->admin_footer();
	}
	
	
	public function admission_form($id) {
		//check staff exists
		$this->check_data_exists($id, 'id', 'admission_creche', 'admission_creche/admission_form');
		$forms = $this->admission_model->get_creche_form_by_id($id);
		$page_title = 'Registration Form: '  . $forms->student_name;
		$this->admin_header($page_title, $page_title);
		$data['y'] = $forms;
		$this->load->view('admin/admission/view_form', $data);
        $this->admin_footer();
	}			
	
	
	public function delete_creche_form($id) { 
		$this->admission_model->delete_creche_form($id);
		$this->session->set_flashdata('status_msg', 'form deleted successfully.');
		redirect($this->agent->referrer());
	}
	
	

	
	
}