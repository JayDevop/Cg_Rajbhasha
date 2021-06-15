<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class AdminDashboardModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }

    /* Photo Gallery Upload.*/
    public function photo_gallery_upload_insert($pGalleryData, $photo_file_response)
    {
        //print_r($tender_file[0]);exit();
        if ($photo_file_response != null && $photo_file_response != '') {
            $this->db->trans_begin();
            $count = sizeof($photo_file_response);
            if ($count > 0) {
                $parameters = array(
                    'caption_name' => $pGalleryData['caption_name'],
                    'original_file_name' => $pGalleryData['original_file_name'],
                    'uploaded_file_name' => $photo_file_response[0]['file_name'],
                    'file_url' => $photo_file_response[0]['full_path'],
                    'file_type' => $photo_file_response[0]['file_type'],
                    'file_size' => $photo_file_response[0]['file_size'],
                    'ip_address' => $pGalleryData['system_ip'],
                    'created_by' => $pGalleryData['user_id']
                );

                $this->db->insert('tbl_photo_gallery', $parameters);
                //echo $this->db->last_query();exit();
                // exit;
            }
        }
        $sts = FALSE;
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            $sts = TRUE;
        }
        return $sts;
    }
    /* Photo Gallery Upload */
    
    
     /* Photo Gallery list */
  public function photo_gallery_list(){
          $sql = "SELECT tp.photo_id photo_id,tp.caption_name caption_name,tp.original_file_name,tp.file_url 
          from  tbl_photo_gallery tp ORDER BY tp.photo_id Desc";
          $return = $this->db->query($sql);
          //echo $this->db->last_query();exit;
          $return_list = $return->result_array();
          return $return_list;
      }
  /* Photo Gallery list  */


    /* Page list */
    public function page_list($case = '', $pageid = 0){
        switch($case){
            case 1:
                return $this->db->get_where('page_contents', array('fk_pages_id', $pageid))->row_array();
            break;

            default:
                return $this->db->get('pages')->result_array();
            break;
        }
    }

    public function update_content($data, $id){
        $this->db->where('md5(id)',$id);
        $lastid = $this->db->update('page_contents',$data);
        if($lastid){
            return $lastid;
        }else{
            return false;
        }
    }

    public function insert_content($data){
        $lastid = $this->db->insert('page_contents',$data);
        if($lastid){
            return $lastid;
        }else{
            return false;
        }
    }

    public function contents($case = '', $id = 0, $data = ''){
        switch($case){
            case 1:
                return $this->db->get_where('page_contents', array('md5(id)' => $id))->row_array();
            break;

            case 2:
                $this->db->where('id',$id);
                $lastid = $this->db->update('page_contents',$data);
                if($lastid){
                    return $lastid;
                }else{
                    return false;
                }

            default:
                $this->db->select('page_contents.*, pages.page')
                            ->from('page_contents')
                            ->join('pages', 'pages.id = page_contents.fk_pages_id')
                            ->where('page_contents.is_deleted', 0)
                            ->order_by("page_contents.id", "desc");
                return $this->db->get()->result_array();
            break;
        }
    }
    /* Page list */
}
