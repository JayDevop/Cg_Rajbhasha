<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ExecutiveDashboardController extends CI_Controller
{
    public $data;
    function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('ExecutiveDashboardModel');
        if(($this->session->userdata('role_id') != 1) || ($this->session->userdata('role_id') != 2)) { // 1 For CEO & 2 For ACEO 
            base_url('logout');
        }
    }

    public function index() {
        $this->render_view('dashboard', $this->data);
    }

    public function tender() {
        $this->render_view('tender', $this->data);
    }
    
    private function render_view($view, $data) {
        $this->load->view('admin_includes/head', $data);
        $this->load->view('admin_includes/side_bar', $data);
        $this->load->view('admin_includes/upper_header', $data);
        $this->load->view($view, $data);
        $this->load->view('admin_includes/footer', $data);
    }
}
