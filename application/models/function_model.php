<?php

class function_model extends CI_Model{
    public function __construct() { //constructor
        parent::__construct();
        $this->load->database(); //load database
    }
    
    public function hotel_search($hotel_name) {
        $row_set = array();
        $this->db->select('*');
        $this->db->like('hname', $hotel_name);
        $query = $this->db->get('hotels');

        if (count($query->result_array()) > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = htmlentities(stripslashes($row['hname']));
            }

        }

    return json_encode($row_set);
    }
    
   public function hotel_search_by_loc($keyword) {
        $row_set = array();
        $this->db->select('*');
        $this->db->like('location', $keyword);
        $query = $this->db->get('hotels');

        if (count($query->result_array()) > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = htmlentities(stripslashes($row['location']));
            }

        }

    return json_encode($row_set);
    }
}

