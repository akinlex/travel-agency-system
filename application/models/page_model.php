<?php

class page_model extends CI_Model{
        public function __construct() { //constructor
            parent::__construct();
            $this->load->database(); //load database
        }

        public function get_hotel_prices($start=FALSE, $end=FALSE, $order=FALSE, $rating=FALSE){
            if($start==FALSE && $end==FALSE){
                $this->db->select('unit_price');
                $query = $this->db->get('hotels');
                return $query->row_array();
            }
            else if($order){
                $this->db->order_by('unit_price', $order);
                $query = $this->db->get('hotels');
                return $query->result_array();
            }
            else if($rating){
                $this->db->order_by('h_class', $rating);
                $query = $this->db->get('hotels');
                return $query->result_array();
            }
            else if ($start && $end) {
                $this->db->where("(unit_price BETWEEN $start AND $end)"); //get prices between start and end
                $query = $this->db->get('hotels');
                return $query->result_array();
            }
        }
            
        public function get_hotels() {
            $query= $this->db->get('hotels');
            return $query->result_array();
        }
        
        public function hotel_by_location($keyword){
            $this->db->like("location", $keyword);
            $query = $this->db->get('hotels');
            return $query->result_array();
        }
        
        public function get_hotel_count() {
            $query= $this->db->get('hotels');
            return $query->num_rows();
        }
        
        public function get_hotel_max_price() {
            $this->db->select_max('unit_price');
            $query= $this->db->get('hotels');
            return $query->row_array();
        }
        
        public function get_hotel_avg_price() {
            $this->db->select_avg('unit_price');
            $query= $this->db->get('hotels');
            return $query->row_array();
        }
        
        
        public function get_tours(){
            $query= $this->db->get('tours');
            return $query->result_array();
        }
        
        public function get_cruises(){
            $query= $this->db->get('cruise');
            return $query->result_array();
        }
        
        public function get_featured_cruises(){
            $this->db->where('featured' , '1');
            $query= $this->db->get('cruise');
            return $query->result_array();
        }
        
        public function get_cars(){
            $query= $this->db->get('cars');
            return $query->result_array();
        }
        
        public function get_options_cars_bk(){
            $this->db->where('opt_id' ,'3');
            $query= $this->db->get('options');
            //return $query->result_array();
            return $query->row();
        }
        
        public function get_car_count() {
            $query= $this->db->get('cars');
            return $query->num_rows();
        }
        
        public function get_car_max_price() {
            $this->db->select_max('unit_price');
            $query= $this->db->get('cars');
            return $query->row_array();
        }
        
        public function get_car_avg_price() {
            $this->db->select_avg('unit_price');
            $query= $this->db->get('cars');
            return $query->row_array();
        }
        
        public function car_filter($model=FALSE, $colour=FALSE){
//            if($colour && $model){
//            $this->db->or_like('car_model',$model);
//            //$this->db->or_like('car_colour',$colour);
//            $query = $this->db->get('cars');
//            return $query->result_array();
//            }
            
            if($colour){
                $this->db->like('car_colour', $colour);
                $query = $this->db->get('cars');
                return $query->result_array(); 
            }
//            
            if($model){
                $this->db->like('car_model', $model);
                $query = $this->db->get('cars');
                return $query->result_array(); 
            }
        }
        
        public function get_car_prices($start=FALSE, $end=FALSE, $order=FALSE, $rating=FALSE){
            if($start==FALSE && $end==FALSE){
                $this->db->select('unit_price');
                $query = $this->db->get('cars');
                return $query->row_array();
            }
            else if($order){
                $this->db->order_by('unit_price', $order);
                $query = $this->db->get('cars');
                return $query->result_array();
            }
            else if($rating){
                $this->db->order_by('rating', $rating);
                $query = $this->db->get('cars');
                return $query->result_array();
            }
            else if ($start && $end) {
                $this->db->where("(unit_price BETWEEN $start AND $end)"); //get prices between start and end
                $query = $this->db->get('cars');
                return $query->result_array();
            }
        }
        
        public function get_options(){
            $query= $this->db->get('options');
            //return $query->result_array();
            return $query->row(); //getting result as an object
        }
        
        public function get_options_tagline(){
            $this->db->like("option_name", 'tagline');
            $query= $this->db->get('options');
            //return $query->result_array();
            return $query->result_array(); //getting result as an object
        }
        
        public function get_options_tagline_desc(){
            $this->db->like("option_name", 'home_bk_desc');
            $query= $this->db->get('options');
            //return $query->result_array();
            return $query->result_array(); //getting result as an object
        }
        
        public function get_options_hotel_bk(){
            $this->db->where('opt_id' ,'2');
            $query= $this->db->get('options');
            //return $query->result_array();
            return $query->row(); //getting result as an object
        }
        
        public function get_packages_by_order(){
            $this->db->order_by("start_date", "DESC");
            $query= $this->db->get('packages');
            return $query->result_array();
            //return $query->result(); getting result as an object
        }
        
        public function get_countries(){
            $this->db->limit(2);
            $this->db->order_by("count", "DESC");
            $query= $this->db->get('countries');
            //return $query->result_array();
            return $query->result_array(); //getting result as an object
        }
}