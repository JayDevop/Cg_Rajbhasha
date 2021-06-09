<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class LoginModel extends CI_Model{

    public function __construct(){
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
        $get_salt = $this->db->query($query_salt,array($username))->result_array();
        //echo  $this->db->last_query();exit;
        //$get_salt = $get_salt->();
        
        if (!empty($get_salt) && $get_salt>0) {
            $salt = $get_salt[0]['salt'];
            $salt_password = $password . $salt;
            $hased_password = hash('SHA512', $salt_password);
            $condition = "WHERE tl.username  = '" . $username . "' AND tl.password = '" . $hased_password . "' AND tl.is_deleted = '0'";
            $login_sql = "SELECT tl.login_id, tl.username,tl.fk_master_role_id,tl.is_active,mr.role_id,mr.role_name,mr.role_type,mr.is_admin
                          FROM tbl_admin_login AS tl
                          JOIN master_roles AS mr ON mr.role_id = tl.fk_master_role_id  ". $condition ;
            $login_data = $this->db->query($login_sql);
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
}

?>