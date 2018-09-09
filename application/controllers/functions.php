<?php

class functions extends CI_Controller {
	public function hotel_search()
	{
            if(isset($_GET['term'])){
                $hotel_name = strtolower($_GET['term']);      
                echo $this->function_model->hotel_search($hotel_name);
                
            }
	}
        
        public function hotel_search_by_location()
	{
            if(isset($_POST['loc'])){
                $keyword = $_POST['loc'];    
                echo $this->function_model->hotel_search_by_loc($keyword);
                
            }
	}
        
        public function get_hotel(){
            $data['prices']= $this->function_model->get_hotel_prices();
        }
}