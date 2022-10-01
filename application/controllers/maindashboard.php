<?php
	class Maindashboard extends MY_Controller{		
		public function __construct(){
			parent:: __construct();
			$this->load->helper('inflector');			
		}		
		public function index(){				
			$session_data = $this->session->userdata('id');
		    $data['user']=$this->Administrator_model->get_login($session_data);
			// print_r("Hello");exit();
			$this->load->view('login');			
		}				
	}
?>