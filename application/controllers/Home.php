<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }
    
	public function index()
	{
		if ($this->Home_model->validate_user()) {
			$this->load->view('home');
		}
		else {
			redirect('user');
		}
		echo "cenas";
	}
}
?>