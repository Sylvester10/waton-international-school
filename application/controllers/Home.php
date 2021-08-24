<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/* ===== Documentation ===== 
Name: Home
Role: Controller
Description: Controls access to testimonial pages and functions in super admin panel
Model: Testimonial_model
Author: Sylvester Esso Nmakwe
Date Created: 6th February, 2020
*/



class Home extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('message_model');
		$this->load->model('blog_model');
		//$this->load->model('newsletter_model');
		$this->load->model('gallery_model');
		$this->load->model('testimonial_model');
		$this->load->model('form_model');
	}


	public function index()
	{	
		$this->header('Home');
		$data['recent_photos'] = $this->gallery_model->get_recent_published_photos(12);
		$data['blog_news'] = $this->blog_model->get_recent_published_blog(5);
		$data['testimony'] = $this->testimonial_model->get_recent_published_testimonials(10);
		$data['staff'] = $this->common_model->get_staff();
		$this->load->view('home', $data);
		$this->footer();
	}


	public function contact_us()
	{	
		$this->page_header('Contact Us');
		$this->load->view('contact');
		$this->footer();
	}
	

	/* ===== Contact Us ===== */
	public function contact_ajax() { 
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
		$this->form_validation->set_rules('subject', 'Subject', 'trim');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');

		
		if ($this->form_validation->run())  {	
			$this->message_model->contact_us(); //insert the data into db
			echo 1;
		} else { 
			echo validation_errors();
		}
	}



	/* ====== Blog ====== */
	public function blog() {
		$this->page_header('Blog');	
		//config for pagination
        $config = array();
		$per_page = 2;  //number of items to be displayed per page
        $uri_segment = 3;  //pagination segment id
		$config["base_url"] = base_url('home/blog');
        $config["total_rows"] = $this->blog_model->count_published_blog();
        $config["per_page"] = $per_page;
		$config["uri_segment"] = $uri_segment;
		$config['cur_tag_open'] = '<a class="pagination-active-page" href="#!">';	//disable click event of current link
        $config['cur_tag_close'] = '</a>';
        $config['first_link'] = 'First';
        $config['next_link'] = '&raquo;';	// >>
        $config['prev_link'] = '&laquo;';	// <<
		$config['last_link'] = 'Last';
		$config['display_pages'] = TRUE; //show pagination link digits
		$config['num_links'] = 3; //number of digit links

		//initize config using the pagination library
        $this->pagination->initialize($config);

		$page = $this->uri->segment($uri_segment) ? $this->uri->segment($uri_segment) : 0;
		$data["blog"] = $this->blog_model->get_published_blog($per_page, $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links); //explode the links 1 2 3 4 into distinct items for styling.
		$data['total_records'] = $this->blog_model->count_published_blog();
		$this->load->view('blog/blog', $data);
		$this->page_footer();
	}


	public function single_blog($post_id, $slug) {
		//check blog exists
		$this->check_data_exists($post_id, 'id', 'blog', 'home/blog');
		$this->check_data_exists($slug, 'slug', 'blog', 'home/blog');
		$this->blog_model->check_blog_is_published($post_id);
		$this->page_header('Blog Post');	
		$blog_details = $this->blog_model->get_blog_details($post_id);
		$total_comments = $this->blog_model->count_post_comments($post_id);
		
		//config for pagination
        $config = array();
		$per_page = 100;  //number of items to be displayed per page
        $uri_segment = 5;  //pagination segment id
		$config["base_url"] = base_url('home/single_blog/'.$post_id.'/'.$slug);
        $config["total_rows"] = $total_comments;
        $config["per_page"] = $per_page;
		$config["uri_segment"] = $uri_segment;
		$config['cur_tag_open'] = '<a class="pagination-active-page" href="#!">';	//disable click event of current link
        $config['cur_tag_close'] = '</a>';
        $config['first_link'] = 'First';
        $config['next_link'] = '&raquo;';	// >>
        $config['prev_link'] = '&laquo;';	// <<
		$config['last_link'] = 'Last';
		$config['display_pages'] = TRUE; //show pagination link digits
		$config['num_links'] = 3; //number of digit links

		//initize config using the pagination library
        $this->pagination->initialize($config);

		$page = $this->uri->segment($uri_segment) ? $this->uri->segment($uri_segment) : 0;
		$data["comments"] = $this->blog_model->get_comments_by_post_id($post_id, $per_page, $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links); //explode the links 1 2 3 4 into distinct items for styling.
		$data['total_comments'] = $total_comments;
		$data['y'] = $blog_details;
		$data['post_id'] = $post_id;
		$this->load->view('blog/blog_post', $data);
		$this->footer();
	}


	public function create_comment_ajax($post_id) {
		//check blog exists
		$this->check_data_exists($post_id, 'id', 'blog', 'home/blog');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('comment', 'Comment', 'trim|required');
		if ($this->form_validation->run()) {
			$this->blog_model->create_comment($post_id);
			echo 1;
	    } else {	
			echo validation_errors();
		}
	}



	public function admission()
	{	
		$this->page_header('Admissions');
		$this->load->view('admission');
		$this->footer();
	}


	public function admission_form()
	{	
		$this->page_header('Admission Form');
		$this->load->view('form');
		$this->footer();
	}


	/* ===== Contact Us ===== */
	public function form_ajax() { 
		$this->form_validation->set_rules('class', 'Select Class:', 'trim|required');
		$this->form_validation->set_rules('student_name', 'Child name:', 'trim|required');
		$this->form_validation->set_rules('date_of_birth', 'Date of Birth e.g 01/01/2020:', 'trim|required');
		$this->form_validation->set_rules('sex', 'Gender:', 'trim');
		$this->form_validation->set_rules('religion', 'Religion:', 'trim|required');
		$this->form_validation->set_rules('state_of_origin', 'State of Origin:', 'trim|required');
		$this->form_validation->set_rules('father_name', 'Name of Father:', 'trim|required');
		$this->form_validation->set_rules('father_address', 'Address:', 'trim');
		$this->form_validation->set_rules('occupation', 'Occupation:', 'trim|required');
		$this->form_validation->set_rules('father_number', 'Phone number:', 'trim|is_natural|required');
		$this->form_validation->set_rules('father_email', 'Active Email Address:', 'trim|valid_email|required');
		$this->form_validation->set_rules('father_office_address', 'Office Address:', 'trim|required');
		$this->form_validation->set_rules('mother_name', 'Name of Mother:', 'trim|required');
		$this->form_validation->set_rules('mother_address', 'Address:', 'trim|required');
		$this->form_validation->set_rules('mother_occupation', 'Occupation:', 'trim|required');
		$this->form_validation->set_rules('mother_number', 'Phone  number:', 'trim|is_natural|required');
		$this->form_validation->set_rules('mother_email', 'Active Email Address:', 'trim|valid_email|required');
		$this->form_validation->set_rules('mother_office_address', 'Office Address:', 'trim|required');
		$this->form_validation->set_rules('emergency_contact', 'Who to call if parents cannot be reached:', 'trim|required');
		$this->form_validation->set_rules('medical_history', 'Please state if the child has any Deformity or Health Challenge:', 'trim|required');
		$this->form_validation->set_rules('family_doctor', 'Name of Family Doctor (If any):', 'trim|required');
		$this->form_validation->set_rules('doctor_number', 'Phone number:', 'trim|is_natural|required');
		$this->form_validation->set_rules('contact_doctor', 'In case of any emergency, should the family doctor be consulted?:', 'trim|required');
		$this->form_validation->set_rules('immunization_info', 'Please attach photocopy of all immunization taken:', 'trim|required');
		$this->form_validation->set_rules('special_diet', 'Is your child on any special diet?:', 'trim|required');
		$this->form_validation->set_rules('special_diet_info', 'If yes, please indicate:', 'trim|required');
		$this->form_validation->set_rules('food', 'Mode of food preparation eg. Warm, hot, thick, etc:', 'trim|required');
		$this->form_validation->set_rules('drink', 'What does your child use to drink?', 'trim|required');
		$this->form_validation->set_rules('drink_others', 'others, Specify:', 'trim|required');
		$this->form_validation->set_rules('food_frequency', 'How often does your child eat?:', 'trim|required');
		$this->form_validation->set_rules('sleep', 'Does your child nap?:', 'trim|required');
		$this->form_validation->set_rules('sleep_frequency', 'How many times per day?:', 'trim|required');
		$this->form_validation->set_rules('sleep_interval', 'How long?:', 'trim|required');
		$this->form_validation->set_rules('special_sleep', 'Does your child sleep with a special blanket, toy or pacifier?:', 'trim|required');
		$this->form_validation->set_rules('sleep_routine', 'Are there specific bedtime routines at home?:', 'trim|required');
		$this->form_validation->set_rules('diapers', 'Does your child use diapers?:', 'trim|required');
		$this->form_validation->set_rules('potty_toilet', 'Does your child use a potty or the toilet?:', 'trim|required');
		$this->form_validation->set_rules('potty_alert', 'How does your child let you know that it’s time “to go”?:', 'trim|required');
		$this->form_validation->set_rules('potty_reminder', 'Does your child need regular reminders to use the bathroom?:', 'trim|required');
		$this->form_validation->set_rules('child_development_concern', 'Do you have any concerns about your child’s development?:', 'trim|required');
		$this->form_validation->set_rules('child_development', 'If yes, please indicate:', 'trim|required');
		$this->form_validation->set_rules('child_development_info', 'Other, specify:', 'trim|required');
		$this->form_validation->set_rules('child_primary_language', 'What is your child’s primary spoken language?:', 'trim|required');
		$this->form_validation->set_rules('other_language', 'Are there other languages being used with your child?:', 'trim|required');
		$this->form_validation->set_rules('child_care', 'Has your child been in child care before?:', 'trim|required');
		$this->form_validation->set_rules('child_temperament', 'How would you describe your child’s temperament and personality?:', 'trim|required');
		$this->form_validation->set_rules('cry_soother', 'What soothes your child when crying?:', 'trim|required');
		$this->form_validation->set_rules('fav_song_game', 'Does your child have any favorite songs or games that comfort them?:', 'trim|required');
		$this->form_validation->set_rules('pet_name', 'Does your child have any Pet name eg Chu chu?:', 'trim|required');
		$this->form_validation->set_rules('child_expectations', 'What are your expectations or hopes for your child at Waton International School?:', 'trim|required');
		$this->form_validation->set_rules('pickup_name', 'Name:', 'trim|required');
		$this->form_validation->set_rules('pickup_relationship', 'Relationship:', 'trim|required');
		$this->form_validation->set_rules('pickup_address', 'Address:', 'trim');
		$this->form_validation->set_rules('pickup_number', 'Mobile line:', 'trim|required');
		$this->form_validation->set_rules('pickup_name2', 'Name 2:', 'trim|required');
		$this->form_validation->set_rules('pickup_relationship2', 'Relationship 2:', 'trim|required');
		$this->form_validation->set_rules('pickup_address2', 'Address 2:', 'trim');
		$this->form_validation->set_rules('pickup_number2', 'Mobile line 2:', 'trim|required');

		
		if ($this->form_validation->run())  {	
			$this->form_model->admission_form(); //insert the data into db
			echo 1;
		} else { 
			echo validation_errors();
		}
	}





}
