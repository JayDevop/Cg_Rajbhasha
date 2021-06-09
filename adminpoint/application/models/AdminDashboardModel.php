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
}
