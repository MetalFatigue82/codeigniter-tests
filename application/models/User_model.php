<?php
class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                log_message('debug', 'Load User Model.');
        }
        
        public function validate_user(){
                return true;
        }
}
?>