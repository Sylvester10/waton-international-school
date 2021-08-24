<?php
defined('BASEPATH') or die('Direct access not allowed');


/* ===== Documentation ===== 
Name: Admission_primary
Role: Controller
Description: Controls access to testimonial pages and functions in super admin panel
Model: Testimonial_model
Author: Sylvester Esso Nmakwe
Date Created: 6th February, 2020
*/


class Admission_primary extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->admin_restricted(); //allow only logged in users to access this class
		$this->admin_role_restricted('User Manager'); //only admin with this role can access this module
		$this->load->model('admission_model');
		$this->admin_details = $this->common_model->get_admin_details($this->session->admin_email);
	}



	/* ========== Nursery and Primary ========== */
	public function index() {
		$inner_page_title = 'Nursery/Primary Forms (' . $this->admission_model->count_primary_form() . ')'; 
		$this->admin_header('Nursery/Primary Forms', $inner_page_title);
		$primary_forms = $this->admission_model->get_primary_form_details();
		$data['primary_forms'] = $primary_forms;
		$this->load->view('admin/admission/primary_forms', $data);
        $this->admin_footer();
	}
	
	
	public function form_profile($id) {
		//check staff exists
		$this->check_data_exists($staff_id, 'id', 'staff', 'admin');
		$staff_details = $this->common_model->get_staff_details_by_id($staff_id);
		$page_title = 'Staff Profile: '  . $staff_details->name;
		$this->admin_header($page_title, $page_title);
		$data['y'] = $staff_details;
		$this->load->view('admin/staff/staff_profile', $data);
        $this->admin_footer();
	}			
	
	
	public function delete_primary_form($id) { 
		$this->admission_model->delete_primary_form($id);
		$this->session->set_flashdata('status_msg', 'form deleted successfully.');
		redirect($this->agent->referrer());
	}
	


	

	
	
}