<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class AdminDashboardModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }

    /* Tender Upload.*/
    public function tender_upload_insert($tenderData, $tender_file)
    {
        //print_r($tender_file[0]);exit();
        if ($tender_file != null && $tender_file != '') {
            $this->db->trans_begin();
            $count = sizeof($tender_file);
            if ($count > 0) {
                $parameters = array(
                    'tender_name' => $tenderData['tender_name'],
                    'tender_type' => $tenderData['upload_type'],
                    'tender_closing_date' => $tenderData['closing_date'],
                    'file_name' => $tender_file[0]['file_name'],
                    'file_url' => $tender_file[0]['full_path'],
                    'file_type' => $tender_file[0]['file_type'],
                    'ip_address' => $tenderData['system_ip']
                );

                $this->db->insert('tbl_tender', $parameters);
                // echo $this->db->last_query();
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
    /* Tender Upload. */


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
                            ->where('page_contents.is_deleted', 0);
                return $this->db->get()->result_array();
            break;
        }
    }
    /* Page list */
}
