<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class CommonModel extends CI_Model {

    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');     
    }


    public function upload($name,$path){  
       // echo "hi";exit;      
      
        if(!empty($_FILES[$name]['name']) && count(array_filter($_FILES[$name]['name'])) > 0){ 
            $filesCount = count($_FILES[$name]['name']); 
            
            for($i = 0; $i < $filesCount; $i++){ 

                $_FILES['file']['name']     = $_FILES[$name]['name'][$i]; 
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
                if($this->upload->do_upload('file')){ 
                    // Uploaded file data 
                  
                    $fileData[$i] = $this->upload->data(); 
                    
                }else{                      
                   
                    $fileData[$i] = $this->upload->display_errors(); 
                }               
            } 
        }  
        return $fileData;    
    }
}

?>