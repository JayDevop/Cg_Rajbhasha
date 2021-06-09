<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public $data;
    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
       //$this->load->model('Dashboard_model');  
        $this->data = array();
    }

  	public function index()
  	{
      $this->render_view('index',$this->data);
  	}

    // public function dashboard_hindi()
    // {
    //   $this->render_view_hindi('dashboard_hindi',$this->data);
    // }
    
    // private function render_view_hindi($view, $data) 
    //   {
    //     $this->load->view('user_include/upper_header',$data);
    //     $this->load->view('user_include/header_hindi',$data);
    //     $this->load->view($view,$data);
    //     $this->load->view('user_include/footer_hindi',$data);
    //     $this->load->view('user_include/footer_link',$data);        
    //   }
    
	   private function render_view($view, $data) 
     	 {
          $this->load->view('user_include/upper_header',$data);
          $this->load->view('user_include/header',$data);
          $this->load->view($view,$data);
          $this->load->view('user_include/footer',$data);
          $this->load->view('user_include/footer_link',$data);        
     	 }

}
?>
