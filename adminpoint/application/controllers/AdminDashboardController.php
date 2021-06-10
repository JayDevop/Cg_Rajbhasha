<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminDashboardController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('AdminDashboardModel');
        $this->load->model('CommonModel');
        $this->data = array();
        // if ($this->session->userdata('role_id') != 4) { // 4 For Admin 
        //     base_url('logout');
        // }
    }

    

    public function index()
    {
        //echo "ok";exit();
        $data['page_act'] = "home";
        $data['page_name'] = "home";
        $this->render_view('dashboard', $data);
    }

    public function tender()
    {
        //echo "ok";exit();
        $data['page_act'] = "at";
        $data['page_name'] = "tender";
        $this->render_view('tender', $data);
    }

    public function tender_upload_insert()
    {
        $tenderData['tender_name'] = $_POST['tender_name'];
        $tenderData['closing_date'] = $_POST['closing_date'];
        $tenderData['upload_type'] = $_POST['upload_type'];
        $tenderData['system_ip'] = $_SERVER['SERVER_ADDR'];

        $upload_url = "C:/xampp/htdocs/git/RDA_Web/";
        if (!file_exists($upload_url."assets/uploads")) {

            mkdir($upload_url."assets/uploads", 0777);
        }
        if ($tenderData['upload_type'] == 0) {
            $file_directory = $upload_url."assets/uploads/tender";
        } else {
            $file_directory = $upload_url."assets/uploads/corrigendum";
        }
        if (!file_exists($file_directory)) {
            mkdir($file_directory);
        }
        $name = "tender_file";
        $path = $file_directory;
        $tender_file = $this->upload($name, $path);
        $sts = FALSE;
        $sts = $this->AdminDashboardModel->tender_upload_insert($tenderData, $tender_file);

        if ($sts) {
            echo "<script>alert('Tender File Uploaded succesfully..')</script>";
        } else {
            echo "<script>alert('Try Again.');</script>";
        }
        echo "<script>location.replace(document.referrer);</script>";
    }




    private function render_view($view, $data)
    {
        $this->load->view('admin_includes/head', $data);
        $this->load->view('admin_includes/side_bar', $data);
        $this->load->view('admin_includes/upper_header', $data);
        $this->load->view($view, $data);
        $this->load->view('admin_includes/footer', $data);
    }

    public function upload($name, $path)
    {
        // echo "hi";exit;     
        $fileData = array();
        if (!empty($_FILES[$name]['name']) && count(array_filter($_FILES[$name]['name'])) > 0) {
            $filesCount = count($_FILES[$name]['name']);

            for ($i = 0; $i < $filesCount; $i++) {

                $tmpname = explode(".",$_FILES[$name]['name'][$i]);
                $fname= $tmpname[0]."_".uniqid().".".$tmpname[1];
                $_FILES['file']['name']     =  $fname;
                $_FILES['file']['type']     = $_FILES[$name]['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES[$name]['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES[$name]['error'][$i];
                $_FILES['file']['size']     = $_FILES[$name]['size'][$i];

                // File upload configuration 
                $uploadPath = $path;
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx|xls|xlsx';
                // $config['allowed_types'] = 'pdf'; 
                $config['detect_mime']  = TRUE;
                //$config['max_size']    = 102400;       
                // $config['max_width'] = '1024'; 
                // $config['max_height'] = '768';   
                //echo $_FILES['file']['type'];exit;

                // Load and initialize upload library 
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server 
                if ($this->upload->do_upload('file')) {
                    // Uploaded file data 

                    $fileData[$i] = $this->upload->data();
                } else {

                    $fileData[$i] = $this->upload->display_errors();
                }
            }
        }
        return $fileData;
    }
}
