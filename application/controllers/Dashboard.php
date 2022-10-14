<?php
	class Dashboard extends MY_Controller{		
		public function __construct(){
			parent:: __construct();
			$this->load->helper('inflector');			
		}		
		public function index(){
            $session = $this->getusersession();
		}				
	}
?>