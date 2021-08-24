<?php
defined('BASEPATH') or exit('Direct access to script not allowed');


class Form_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
	

	public function admission_form() { 
		$class = ucwords($this->input->post('class', TRUE));
		$student_name = ucwords($this->input->post('student_name', TRUE)); 
		$date_of_birth = $this->input->post('date_of_birth', TRUE);
		$sex = $this->input->post('sex', TRUE); 
		$religion = ucfirst($this->input->post('religion', TRUE));
		$state_of_origin = ucwords($this->input->post('state_of_origin', TRUE));  
		$father_name = ucwords($this->input->post('father_name', TRUE)); 
		$father_address = ucfirst($this->input->post('father_address', TRUE)); 
		$occupation = ucwords($this->input->post('occupation', TRUE)); 
		$father_number = $this->input->post('father_number', TRUE); 
		$father_email = strtolower($this->input->post('father_email', TRUE)); 
		$father_office_address = $this->input->post('father_office_address', TRUE); 
		$mother_name = ucwords($this->input->post('mother_name', TRUE)); 
		$mother_address = ucfirst($this->input->post('mother_address', TRUE)); 
		$mother_occupation = ucwords($this->input->post('mother_occupation', TRUE)); 
		$mother_number = $this->input->post('mother_number', TRUE); 
		$mother_email = strtolower($this->input->post('mother_email', TRUE)); 
		$mother_office_address = ucfirst($this->input->post('mother_office_address', TRUE)); 
		$emergency_contact = $this->input->post('emergency_contact', TRUE); 
		$medical_history = ucfirst($this->input->post('medical_history', TRUE)); 
		$family_doctor = ucfirst($this->input->post('family_doctor', TRUE)); 
		$doctor_number = $this->input->post('doctor_number', TRUE); 
		$contact_doctor = $this->input->post('contact_doctor', TRUE); 
		$immunization_info = ucfirst($this->input->post('immunization_info', TRUE)); 
		$special_diet = $this->input->post('special_diet', TRUE); 
		$special_diet_info = ucfirst($this->input->post('special_diet_info', TRUE)); 
		$food = $this->input->post('food', TRUE); 
		$drink = $this->input->post('drink', TRUE); 
		$drink_others = ucfirst($this->input->post('drink_others', TRUE)); 
		$food_frequency = $this->input->post('food_frequency', TRUE); 
		$sleep = $this->input->post('sleep', TRUE); 
		$sleep_frequency = $this->input->post('sleep_frequency', TRUE); 
		$sleep_interval = $this->input->post('sleep_interval', TRUE); 
		$special_sleep = $this->input->post('special_sleep', TRUE); 
		$sleep_routine = $this->input->post('sleep_routine', TRUE); 
		$diapers = ucfirst($this->input->post('diapers', TRUE)); 
		$potty_toilet = ucfirst($this->input->post('potty_toilet', TRUE)); 
		$potty_alert = ucfirst($this->input->post('potty_alert', TRUE)); 
		$potty_reminder = ucfirst($this->input->post('potty_reminder', TRUE)); 
		$child_development_concern = $this->input->post('child_development_concern', TRUE); 
		$child_development = ucfirst($this->input->post('child_development', TRUE)); 
		$child_development_info = ucfirst($this->input->post('child_development_info', TRUE)); 
		$child_primary_language = ucfirst($this->input->post('child_primary_language', TRUE)); 
		$other_language = ucfirst($this->input->post('other_language', TRUE)); 
		$child_care = $this->input->post('child_care', TRUE); 
		$child_temperament = ucfirst($this->input->post('child_temperament', TRUE)); 
		$cry_soother = ucfirst($this->input->post('cry_soother', TRUE)); 
		$fav_song_game = ucfirst($this->input->post('fav_song_game', TRUE)); 
		$pet_name = ucfirst($this->input->post('pet_name', TRUE)); 
		$child_expectations = ucfirst($this->input->post('child_expectations', TRUE)); 
		$pickup_name = ucwords($this->input->post('pickup_name', TRUE)); 
		$pickup_relationship = ucfirst($this->input->post('pickup_relationship', TRUE)); 
		$pickup_address = ucfirst($this->input->post('pickup_address', TRUE)); 
		$pickup_number = $this->input->post('pickup_number', TRUE); 
		$pickup_name2 = ucwords($this->input->post('pickup_name2', TRUE)); 
		$pickup_relationship2 = ucfirst($this->input->post('pickup_relationship2', TRUE)); 
		$pickup_address2 = ucfirst($this->input->post('pickup_address2', TRUE)); 
		$pickup_number2 = $this->input->post('pickup_number2', TRUE); 
 
        $data = array (
			'class' => $class,
			'student_name' => $student_name,
			'date_of_birth' => $date_of_birth,
			'sex' => $sex,
			'religion' => $religion,
			'state_of_origin' => $state_of_origin,
			'father_name' => $father_name,
			'father_address' => $father_address,
			'occupation' => $occupation,
			'father_number' => $father_number,
			'father_email' => $father_email,
			'father_office_address' => $father_office_address,
			'mother_name' => $mother_name,
			'mother_address' => $mother_address,
			'mother_occupation' => $mother_occupation,
			'mother_number' => $mother_number,
			'mother_email' => $mother_email,
			'mother_office_address' => $mother_office_address,
			'emergency_contact' => $emergency_contact,
			'medical_history' => $medical_history,
			'family_doctor' => $family_doctor,
			'doctor_number' => $doctor_number,
			'contact_doctor' => $contact_doctor,
			'immunization_info' => $immunization_info,
			'special_diet' => $special_diet,
			'special_diet_info' => $special_diet_info,
			'food' => $food,
			'drink' => $drink,
			'drink_others' => $drink_others,
			'food_frequency' => $food_frequency,
			'sleep' => $sleep,
			'sleep_frequency' => $sleep_frequency,
			'sleep_interval' => $sleep_interval,
			'special_sleep' => $special_sleep,
			'sleep_routine' => $sleep_routine,
			'diapers' => $diapers,
			'potty_toilet' => $potty_toilet,
			'potty_alert' => $potty_alert,
			'potty_reminder' => $potty_reminder,
			'child_development_concern' => $child_development_concern,
			'child_development' => $child_development,
			'child_development_info' => $child_development_info,
			'child_primary_language' => $child_primary_language,
			'other_language' => $other_language,
			'child_care' => $child_care,
			'child_temperament' => $child_temperament,
			'cry_soother' => $cry_soother,
			'fav_song_game' => $fav_song_game,
			'pet_name' => $pet_name,
			'child_expectations' => $child_expectations,
			'pickup_name' => $pickup_name,
			'pickup_relationship' => $pickup_relationship,
			'pickup_address' => $pickup_address,
			'pickup_number' => $pickup_number,
			'pickup_name2' => $pickup_name2,
			'pickup_relationship2' => $pickup_relationship2,
			'pickup_address2' => $pickup_address2,
			'pickup_number2' => $pickup_number2,
		);
		$this->db->insert('admission_creche', $data);

		//email admins
		//$this->notify_admins($name, $email, $subject, $message);
	}


	private function notify_admins($name, $email, $subject, $message) {
		$school_name = school_name;
		$level = 1;
		$admins = $this->common_model->get_admins();
		$message = 	"Hi admin, <br />
					You have a new contact message from {$school_name}. <br />
					<b>Contact Details:</b><br /> 
					Name: {$name} <br />
					Email: {$email} <br /><br /> 
					{$message}";
		email_multiple($admins, $subject, $message); //email admins 
	}



	/* ===================== Admin ================= */
	public function get_message_details($msg_id)	{ 
		return $this->db->get_where('contact_messages', array('id' => $msg_id))->row();
	}


	public function get_messages($limit, $offset) {		
		$this->db->limit($limit, $offset); //limit to be used as per_page, offset to be used as pagination segment
		$this->db->order_by("date_sent", "DESC"); 
		$query = $this->db->get('contact_messages');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }


    public function count_messages() { 
		return $this->db->get_where('contact_messages')->num_rows();
	}


	public function get_latest_message() { 
		$this->db->order_by("date_sent", "DESC"); 
		$this->db->limit(1); //just one
		return $this->db->get_where('contact_messages')->row();
	}


	public function reply_message($msg_id) {
		$message = nl2br(ucfirst($this->input->post('message', TRUE))); 
		$y = $this->get_message_details($msg_id);
		$subject = 'RE: ' . $y->subject;
		$email = $y->email;
		return email_user($email, $subject, $message);
    } 


	public function delete_message($msg_id) {
		return $this->db->delete('contact_messages', array('id' => $msg_id));
    } 
	
	
	public function bulk_actions_messages() {
		$selected_rows = count($this->input->post('check_bulk_action', TRUE)); 
		$bulk_action_type = $this->input->post('bulk_action_type', TRUE);
		$row_id = $this->input->post('check_bulk_action', TRUE);		
		foreach ($row_id as $msg_id) {
			$this->delete_message($msg_id);
			$this->session->set_flashdata('status_msg', "{$selected_rows} messages deleted successfully.");
		} 
	}




	
}