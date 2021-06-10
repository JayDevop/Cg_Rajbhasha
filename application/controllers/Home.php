<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public $data;
    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
       $this->load->model('Home_model');  
        $this->data = array();
    }

  	public function index()
  	{
      $this->render_view('index',$this->data);
  	}
      public function log_in()
  	{
      $this->login();
  	}

       /* Login and Logout Function Start */ 
    public function login() {
        if ($this->session->userdata('user_logged') != null) {
            redirect(base_url('admin-dashboard'));
        }else if(isset($_POST) && !empty($_POST)) {
            //print_r($_POST);exit;
           
            $this->data['title'] = 'Rajbhasha | Admin Login';
            $this->form_validation->set_rules('username', 'Username', 'required|trim|stripslashes');
            $this->form_validation->set_rules('password', 'Password', 'required|trim|stripslashes');
            //if form validation is true
            if ($this->form_validation->run() == TRUE) {
                
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $login_resp = $this->Home_model->get_login($username,$password);
                if($login_resp['status'] === TRUE) {
                   //print_r($login_resp);exit;
                    $session_array = array('user_id'=>$login_resp['data'][0]['login_id'],'username'=>$login_resp['data'][0]['username'],
                                            'role_id'=>$login_resp['data'][0]['role_id'],'role_name'=>$login_resp['data'][0]['role_name'],
                                            'role_type'=>$login_resp['data'][0]['role_type'],'is_admin'=>$login_resp['data'][0]['is_admin'],
                                            'is_active'=>$login_resp['data'][0]['is_active']
                                        );
                    $this->session->set_userdata($session_array);
                    //print_r($session_array);
                    $this->role_wise_redirection();
                }else {
                    $this->session->set_flashdata("error", $login_resp['data']);
                    $this->load->view('login', $this->data);
                }
                //if user exists            
            }else {
                $this->load->view('login', $this->data);
            }
        }else {
            $this->load->view('login', $this->data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Successfully Logged Out.....!!');
        $this->data['title'] = 'Rajbhasha | Admin Login';
        $this->load->view('login', $this->data);
    }
    /* Login and Logout Function End */ 

    /* Role Wise User Redirection Method Start */
    public function role_wise_redirection() {
        if ($this->session->userdata('role_id') == 4) { // 1 For CEO 
            redirect(base_url('adminpoint/admin-dashboard'), "refresh");
        // }else if($this->session->userdata('role_id') == 2) { // 2 For ACEO 
        //     redirect(base_url('aceo-dashboard'), "refresh");
        // }else if($this->session->userdata('role_id') == 3) { // 3 For CashCounter 
        //     redirect(base_url('cashcounter-dashboard'), "refresh");
        // }else if($this->session->userdata('role_id') == 4) { // 4 For Admin 
        //     redirect(base_url('admin-dashboard'), "refresh");
        }else {
            $this->session->set_flashdata("error", "No Such User Exists");
        }
    }
    /* Role Wise User Redirection Method End */
   
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
