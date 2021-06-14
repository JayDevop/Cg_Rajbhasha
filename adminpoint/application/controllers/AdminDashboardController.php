<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminDashboardController extends CI_Controller
{

    public $upload_url = "C:/xampp/htdocs/git/Cg_Rajbhasha/";
    //public $upload_url = "E:/xampp/htdocs/Cg_Rajbhasha/";
   // public $upload_url ="http://cgrajbhasha.cgstate.gov.in/";

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('AdminDashboardModel');
        $this->load->model('CommonModel');
        $this->data = array();
        if ($this->session->userdata('user_id') == null) { // 4 For Admin 
            $this->session->set_flashdata("error", 'Please login');
            redirect(base_url('login'));
        }
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

    public function photo_upload_insert()
    {
        $pGalleryData['caption_name'] = $_POST['caption_name'];
        $pGalleryData['original_file_name'] = $_FILES['file']['name'][0];
        $pGalleryData['user_id'] = $this->session->userdata('user_id');
        $pGalleryData['system_ip'] = $_SERVER['SERVER_ADDR'];
       if (!file_exists($this->upload_url."assets/uploads")) {

        mkdir($this->upload_url."assets/uploads", 0777);
    }
        $file_directory = $this->upload_url."assets/uploads/photo_gallery";
    
        if (!file_exists($file_directory)) {
            mkdir($file_directory);
        }
        $name = "file";
        $path = $file_directory;
        $photo_file_response = $this->upload($name, $path);
        $sts = FALSE;
        $sts = $this->AdminDashboardModel->photo_gallery_upload_insert($pGalleryData, $photo_file_response);

        if ($sts) {
            echo "<script>alert('Photo Gallery Uploaded succesfully..')</script>";
        } else {
            echo "<script>alert('Try Again.');</script>";
        }
        echo "<script>location.replace(document.referrer);</script>";
        }


    public function manage_pages($contentid = 0){
        $data = array();
        $data['title'] = 'Manage page content | CG RajBhasha';
        $js_page = "admin_includes/custom_js_page";
        if($this->input->server('REQUEST_METHOD')=="POST"){
            $this->form_validation->set_rules('pageid','Page', 'required|trim');
            $this->form_validation->set_rules('content','Content', 'required');
            if ($this->form_validation->run()==TRUE) {
                $data = array(
                    'fk_pages_id' => $this->input->post('pageid'),
                    'content' => $this->input->post('content'),
                );
                if($contentid){
                    $response = $this->AdminDashboardModel->update_content($data, $contentid);
                }else{
                    $response = $this->AdminDashboardModel->insert_content($data);
                }
                if($response !== FALSE){
                    $this->session->set_flashdata('responsemsg',array('Status'=>'success','msg'=>'Successfully Inserted....!!'));
                    redirect(base_url('content-list'));
                }else{
                    $this->session->set_flashdata('responsemsg',array('Status'=>'error','msg'=>'Error occurred....!!'));
                }
            }
        }

        if($contentid){
            $data['editItem'] = $this->AdminDashboardModel->contents(1, $contentid);
        }
        $data['pageList'] = $this->AdminDashboardModel->page_list();
        $this->render_view('manage_pages', $data, $js_page);
    }

    public function photo_gallery(){
        $data = array();
        $data['title'] = 'Photo Gallery Add | CG RajBhasha';
        $js_page = "admin_includes/custom_js_page";
        $data['photoList'] = $this->AdminDashboardModel->photo_gallery_list();
        $this->render_view('add_photo_gallery', $data, $js_page);
    }

    public function content_list($delete = 0){
        $data = array();
        $data['title'] = 'Content list | CG RajBhasha';
        if($delete){
            $data = array('is_deleted' => 1);
            $response = $this->AdminDashboardModel->contents(2, $delete, $data);
            if($response !== FALSE){
                $this->session->set_flashdata('responsemsg',array('Status'=>'success','msg'=>'Successfully Deleted....!!'));
                redirect(base_url('content-list'));
            }else{
                $this->session->set_flashdata('responsemsg',array('Status'=>'error','msg'=>'Not deleted....!!'));
            }
            redirect(base_url('content-list'));
        }
        $data['result'] = $this->AdminDashboardModel->contents();
        $this->render_view('content_list', $data);
    }


    private function render_view($view, $data, $js_page = null)
    {
        $this->load->view('admin_includes/head', $data);
        $this->load->view('admin_includes/side_bar', $data);
        $this->load->view('admin_includes/upper_header', $data);
        $this->load->view($view, $data);
        $this->load->view('admin_includes/footer', $data);
        /* 
        *   if want call custom page, for specific reason. 
        */
        if (!empty($js_page) && $js_page != null) {
            $this->load->view($js_page);
        }
    }

    public function get_page_content(){
        $pageid = $this->input->post('pageid');
        if($pageid){
            $output = $this->AdminDashboardModel->page_list(1, $pageid);
            echo json_encode(array('status' => 'success', 'output' => $output));
        }else{
            echo json_encode(array('status' => 'failed', 'output' => 'Missing parameter'));
        }
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
