<?php

class pages extends CI_Controller {
    
//        public function foo() {
//        $this->send(array('foo' => 'bar'));
//        }
//
//        private function send($array) {
//
//        if (!is_array($array)) return false;
//
//        $send = array('token' => $this->security->get_csrf_hash()) + $array;
//
//        if (!headers_sent()) {
//            header('Cache-Control: no-cache, must-revalidate');
//            header('Expires: ' . date('r'));
//            header('Content-type: application/json');
//        }
//
//        exit(json_encode($send, JSON_FORCE_OBJECT));
//
//        }
//    
	public function home()
	{
            $data['prices']= $this->page_model->get_hotel_prices();//display hotel prices
            $data['cruises']= $this->page_model->get_cruises();//display cruises
            $data['packages']= $this->page_model->get_packages_by_order();//display packages
            $data['options']= $this->page_model->get_options();
            $data['taglines']= $this->page_model->get_options_tagline();
            $data['taglines_desc']= $this->page_model->get_options_tagline_desc();
            $data['countries']= $this->page_model->get_countries();
                        
            $this->load->view('templates/header');
            $this->load->view('pages/body', $data);
            $this->load->view('templates/footer');
	}
        
        public function hotel($page='hotel_list') {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();//page not exists
            }
            
            $data['hotels']= $this->page_model->get_hotels(); //display hotel info
            $data['options']= $this->page_model->get_options_hotel_bk();
            $data['num_of_hotels']= $this->page_model->get_hotel_count(); //number of hotles in db
            $data['max_price']= $this->page_model->get_hotel_max_price();
            $data['avg_price']= $this->page_model->get_hotel_avg_price();
            
            $this->load->view('templates/header');
            $this->load->view('pages/hotel_list', $data);
            $this->load->view('templates/footer');  
        }
        
        public function filter_hotel_by_loc(){
        if(isset($_POST['keyword'])){
            $keyword=$this->input->post('keyword');
            $data=$this->page_model->hotel_by_location($keyword);        
            echo json_encode($data);
            }
        }
        
        public function filter_hotel_by_rat(){
        $keyword=$this->input->get('srch');
        $data=$this->admin_model->search_post($keyword);        
        echo json_encode($data);
        }
        
        public function filter_hotel_by_pri(){
        if(isset($_POST['start_price']) || isset($_POST['end_price']) || isset($_POST['order']) || isset($_POST['rating'])){
            $start=$this->input->post('start_price');
            $start++;
            $end=$this->input->post('end_price');
            $order=$this->input->post('order');
            $rating=$this->input->post('rating');
            $data=$this->page_model->get_hotel_prices($start, $end, $order, $rating);        
            echo json_encode($data);
            }
        }
        
        public function flights($page='flights') {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            $this->load->view('templates/header');
            $this->load->view('pages/flights');
            $this->load->view('templates/footer'); 
        }
        
        public function cars($page='cars') {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            $data['cars']= $this->page_model->get_cars(); //display car info
            $data['num_of_cars']= $this->page_model->get_car_count(); //number of cars in db
            $data['options']= $this->page_model->get_options_cars_bk();
            $data['max_price']= $this->page_model->get_car_max_price();
            $data['avg_price']= $this->page_model->get_car_avg_price();
            
            $this->load->view('templates/header');
            $this->load->view('pages/cars', $data);
            $this->load->view('templates/footer'); 
        }
        
        public function filter_car_by_colour_model(){
        if(isset($_POST['colour'])&& isset($_POST['model'])){
            $model=$this->input->post('model');
            $colour=$this->input->post('colour');
            $data=$this->page_model->car_filter($model, $colour);        
            echo json_encode($data);
            }
        }
        
        public function filter_car_by_order(){
        if(isset($_POST['start_price']) || isset($_POST['end_price']) || isset($_POST['order']) || isset($_POST['rating'])){
            $start=$this->input->post('start_price');
            $start++;
            $end=$this->input->post('end_price');
            $order=$this->input->post('order');
            $rating=$this->input->post('rating');
            $data=$this->page_model->get_car_prices($start, $end, $order, $rating);        
            echo json_encode($data);
            }
        }
        
        public function cruises($page='cruises') {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            
            $data['cruises']= $this->page_model->get_cruises(); //display cruise info
            $data['f_cruises']= $this->page_model->get_featured_cruises();
            
            $this->load->view('templates/header');
            $this->load->view('pages/cruises', $data);
            $this->load->view('templates/footer'); 
        }
        
        public function about_us($page='about') {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            $this->load->view('templates/header');
            $this->load->view('pages/about');
            $this->load->view('templates/footer'); 
        }
        
        public function error_404() {
            $this->output->set_status_header('404'); 
            $this->load->view('templates/header');
            $this->load->view('pages/404');
            $this->load->view('templates/footer');
        }
}
