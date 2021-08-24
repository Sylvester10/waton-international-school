<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* ===== Documentation ===== 
Name: MY_Controller
Role: Core (super) Controller
Description: MY_Controller Class is the super class that holds global info accessible to the regular controller and model classes. The headers and footers for Site, Admin and Staff are created here. Database, libraries and helpers used by the app are loaded here. This class extends the main CI controller, and at such, every other controller inherits it.
Author: Sylvester Esso Nmakwe
Date Created: 14th December, 2019
*/


class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database(); 
		$this->load->dbutil(); //database utility
		$this->load->library('form_validation'); 
		$this->load->library('email');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('user_agent');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('captcha');
		$this->load->helper('date');
		$this->load->helper('inflector'); 
		$this->load->helper('file'); 
		$this->load->helper('download');
		$this->school_name = 'Waton International School';
		$this->load->helper('app'); //custom general app helper
		$this->load->helper('email'); //custom email helper
		$this->load->model('common_model'); //general model for controllers
		require_once "application/core/Constants.php"; //require constants
		//require_once "Modules.php"; //require Modules
		
		//set CSRF
		$this->set_csrf();

		//profiler
		//$this->check_profiler();
		//var_dump($this->session->is_loggedin); die;
	}
	

	private function set_csrf() {
		//get array of controllers to be excluded
		$excluded_controllers = $this->csrf_exclude_controllers();
		//get current controller class and check if it's in the array of controllers to be excluded
		$current_class = $this->router->fetch_class();
		if ( ! in_array($current_class, $excluded_controllers) ) {
			$this->config->set_item('csrf_protection', TRUE); //allow CSRF
		} else {
			$this->config->set_item('csrf_protection', FALSE); //disable CSRF
		}
	}


	private function check_profiler() {
		if (ENVIRONMENT != 'production') { 
			//allow profiling on development and testing servers only
			$this->output->enable_profiler(TRUE);
		} else {
			$this->output->enable_profiler(FALSE);
		}
	}
	
	
	private function csrf_exclude_controllers() {
		//get array of controllers to be excluded
		$excluded_controllers = array();
		return $excluded_controllers;
	}


	/* ===== Website layout===== */

	/* ===== Page Headers===== */
	public function header($title) {
		$data['title'] = $title;
		$data['school_name'] = $this->school_name;
		return $this->load->view('layout/header', $data);
	}


	public function page_header($title) {
		$data['title'] = $title;
		$data['school_name'] = $this->school_name;
		return $this->load->view('layout/page_header', $data);
	}


	/* ===== Website footer===== */
	public function footer() {
		return $this->load->view('layout/footer');
	}

	public function page_footer() {
		return $this->load->view('layout/page_footer');
	}

	/* =========== Admin =========== */
	public function admin_header($title, $inner_page_title) {
		//$this->load->model('admin_model');
		$admin_details = $this->common_model->get_admin_details($this->session->admin_email);
		$requested_data = array(
			'is_requested',
			'requested_page'
			);
		$this->session->unset_userdata($requested_data);
		
		$data['title'] = $title;
		$data['inner_page_title'] = $inner_page_title;
		$data['admin_details'] = $admin_details;
		return $this->load->view('admin/layout/header', $data);
	}
	
	
	public function admin_footer() {
		return $this->load->view('admin/layout/footer');
	}
	
	
	public function admin_restricted() {
		//check admin's session
		if ($this->session->admin_loggedin) {
			return TRUE;
		} else { //admin is not logged in or admin's session has expired
			$requested_data = array(
				'is_requested' => TRUE,
				'requested_page' => current_url()
			);
			$this->session->set_flashdata('status_msg_error', 'Your session has expired. Please login again.');
			$this->session->set_userdata($requested_data);
			redirect(site_url('login'));
		}
	}


	/* ===== Restrict access to sensitive Staff modules depending on Staff's role ===== */
	public function admin_role_restricted($role) {
		$admin_roles = $this->common_model->get_admin_details($this->session->admin_email)->roles;
		//explode the admin roles into an array
		$admin_roles_array = explode(", ", $admin_roles);
		//check if the role that has access to current module is in the array of admin roles
		$all_roles = 'All Roles';
		if ( in_array($all_roles, $admin_roles_array) || in_array($role, $admin_roles_array) ) {
			return TRUE;
		} else {
			$this->session->set_flashdata('status_msg_error', 'Sorry, the page you tried to access is restricted.');
			redirect(site_url('admin'));
		}
	}



	public function return_to_dashboard() {
		//if admin is still logged in and tries to access login page, redirect to admin dashboard
		if ( ! $this->session->admin_loggedin) {
			return TRUE;
		} else {
			redirect(site_url('admin'));
		}
	}




	/* ===== Function to check that data exists ===== */
	public function check_data_exists($data, $column, $table, $redirect_url) { 
		$query = $this->db->get_where($table, array($column => $data))->row();
		return ($query) ? TRUE : redirect(site_url($redirect_url));  
    }
	
	
}