<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class ExecutiveDashboardModel extends CI_Model{

    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');     
    }
}

?>