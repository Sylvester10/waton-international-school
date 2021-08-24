<?php
defined('BASEPATH') or exit('Direct access to script not allowed');


class Admission_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->admin_details = $this->common_model->get_admin_details($this->session->admin_email);
	}



	//Creche
    public function get_creche_form($limit, $offset) {		
		$this->db->limit($limit, $offset); //limit to be used as per_page, offset to be used as pagination segment
		$this->db->order_by("date_added", "DESC"); //order by date_unix ASC so that the dates appear chronologically
		$query = $this->db->get_where('admission_creche');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function get_creche_form_by_id($id) { //get staff info by id
		return $this->db->get_where('admission_creche', array('id' => $id))->row();
	}

  	public function get_creche_form_details() { //get staff info by id
		$query = $this->db->where('class', 'creche/pre-nursery');
		$this->db->order_by("date_registered", "DESC"); //order by date_unix ASC so that the dates appear chronologically
		return $this->db->get_where('admission_creche')->result();
	}

	public function count_creche_form() { //get all creche forms
		$query = $this->db->where('class', 'creche/pre-nursery');
		return $this->db->get_where('admission_creche')->num_rows();
	}


	public function count_form() { //get all staff
		return $this->db->get_where('admission_creche')->num_rows();
	}	
	
	
	public function delete_creche_form($id) {
		return $this->db->delete('admission_creche', array('id' => $id));
    }



    //Primary
    public function get_primary_form($limit, $offset) {		
		$this->db->limit($limit, $offset); //limit to be used as per_page, offset to be used as pagination segment
		$this->db->order_by("date_added", "DESC"); //order by date_unix ASC so that the dates appear chronologically
		$query = $this->db->get_where('admission_creche');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function get_primary_form_by_id($id) { //get primary info by id
		return $this->db->get_where('admission_creche', array('id' => $id))->row();
	}

  	public function get_primary_form_details() { //get primary info by id
		$query = $this->db->where('class', 'nursery/primary');
		$this->db->order_by("date_registered", "DESC"); //order by date_unix ASC so that the dates appear chronologically
		return $this->db->get_where('admission_creche')->result();
	}

	public function count_primary_form() { //get all primary forms
		$query = $this->db->where('class', 'nursery/primary');
		return $this->db->get_where('admission_creche')->num_rows();
	}



	
	
	public function delete_primary_form($id) {
		return $this->db->delete('admission_creche', array('id' => $id));
    }





}