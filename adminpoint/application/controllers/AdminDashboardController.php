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

    public function photo_upload_insert()
    {
        $js_page = "admin_includes/custom_js_page";
        $pGalleryData['caption_name'] = $_POST['caption_name'];
        $pGalleryData['original_file_name'] = $_FILES['file']['name'][0];
        $pGalleryData['user_id'] = $this->session->userdata('user_id');
        $pGalleryData['system_ip'] = $_SERVER['SERVER_ADDR'];

        if (!empty($_FILES)) {
            if (!file_exists($this->upload_url . "assets/uploads")) {

                mkdir($this->upload_url . "assets/uploads", 0777);
            }
            $file_directory = $this->upload_url . "assets/uploads/photo_gallery";

            if (!file_exists($file_directory)) {
                mkdir($file_directory);
            }
            $name = "file";
            $path = $file_directory;
            $photo_file_response = $this->upload($name, $path);
            if ($photo_file_response['sts'] == 0) {
             //print_r($photo_file_response[0]);exit;
                echo "<script>alert($photo_file_response[0])</script>";
                echo "<script>alert('कृपया फाइल 200KB तक का अपलोड करें|')</script>";
                echo "<script>location.replace(document.referrer)</script>";
                exit();
            }
        $sts = FALSE;
        $sts = $this->AdminDashboardModel->photo_gallery_upload_insert($pGalleryData, $photo_file_response);

        if ($sts) {
            echo "<script>alert('Photo Gallery Uploaded succesfully..')</script>";
        } else {
            echo "<script>alert('Try Again.');</script>";
        }
        echo "<script>location.replace(document.referrer);</script>";

        } else {
            echo "<script>alert('कृपया फोटो अपलोड करे|')</script>";
            echo "<script>location.replace(document.referrer)</script>";
            exit();
        }
        
    }

    public function manage_pages(){
        $contentid = (isset($_GET['contentid']) && $_GET['contentid'] != '') ? $_GET['contentid'] : 0;
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
                    $data['updated_at'] = date('Y-m-d H:i:s');
                    $response = $this->AdminDashboardModel->update_content($data, $contentid);
                }else{
                    if($this->db->get_where('page_contents', array('fk_pages_id' => $this->input->post('pageid'), 'is_deleted' => 1))->num_rows() > 0){
                        // '<script>alert("Data already exist for this page");</script>';
                        redirect(base_url('content-list'));
                    }else{
                        $response = $this->AdminDashboardModel->insert_content($data);
                    }
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

    public function photo_gallery(){
        $data = array();
        $data['title'] = 'Photo Gallery Add | CG RajBhasha';
        $js_page = "admin_includes/custom_js_page";
        $data['photoList'] = $this->AdminDashboardModel->photo_gallery_list();
        $this->render_view('add_photo_gallery', $data, $js_page);
    }

    public function webinar_conduct(){
        $data = array();
        $data['title'] = 'Webinar Creation | CG RajBhasha';
        $js_page = "admin_includes/custom_js_page";
       // $data['photoList'] = $this->AdminDashboardModel->photo_gallery_list();
        $this->render_view('webinar_conduct_page', $data, $js_page);
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
               // $config['max_size']    = 200;       
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
                    $fileData['sts'] = 1;
                } else {

                    $fileData[$i] = $this->upload->display_errors();
                    $fileData['sts'] = 0;
                }
            }
        }
        return $fileData;
    }
}
