<?php
class Home_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                log_message('debug', 'Load Home Model.');
        }
        
        public function validate_user(){
                return false;
        }
}
?>