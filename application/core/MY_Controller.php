<?php
	//Global Controller
	class MY_Controller extends CI_Controller{

		public function get_usersession(){
			
			// Planned user roles:
			// - Administrator
			// - Councilor
			// - Student

			$session_data = $this->session->userdata('id');       
          	$data['user']=$this->Administrator_model->get_login($session_data);
          	$users = $this->Administrator_model->get_login($session_data);
          	$userid = $users->user_id;
			$userrole=$users->user_role;
			
			if($userrole=='Administrator'){
				$this->load->view('admin/layouts/includes/header',$data);
			}
			if($userrole=='Counselor'){
				$this->load->view('counselor/layouts/includes/header',$data);
			}
			if($userrole=='Student'){
				$this->load->view('student/layouts/includes/header',$data);
			}
						
		}			
	}
?>