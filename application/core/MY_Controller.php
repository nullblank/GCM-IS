<?php
	class MY_Controller extends CI_Controller{	
		
		protected $data;

		public function chk_session(){
			$session_data = $this->session->userdata('id');       
          	$users = $this->Authenticate_model->get_login($session_data);
			  if ($users == false){
				$this->load->view('pre_page');
				return false;
			} else {
				return true;
			}
		}
		
		public function getusersession(){
			
			$session_data = $this->session->userdata('id');       
          	$users = $this->Authenticate_model->get_login($session_data);
			if ($users == false){
				$this->load->view('pre_page');
				return false;
			} else {
				$userrole=$users->user_role;
			}
			
			
			if($userrole =='Administrator'){
				$page = $this->uri->segment(2);
				$data['user'] = $this->User_model->get_login($session_data);
				$data['user_item'] = $this->User_model->get_users('25', $page);
				$data['main_content'] = 'elements/contents/pages/page_admin_welcome';
				$this->load->view('layouts/layout_admin',$data);
			}

			if($userrole == 'Staff'){

			}
		}
	}
?>