<?php
	class MY_Controller extends CI_Controller{	
		
		protected $data;

		public function chk_session(){ //use this for between account pages
			$session_data = $this->session->userdata('id');       
          	$users = $this->Authenticate_model->get_login($session_data);
			  if ($users == false){
				$data['main_content'] = 'elements/contents/pages/page_index';
				$this->load->view('layouts/layout_index', $data);
				return false;
			} else {
				return true;
			}
		}
		
		public function getusersession(){ //use this for post login handling
			
			//User session capture
			$session_data = $this->session->userdata('id');       
          	$users = $this->Authenticate_model->get_login($session_data);
			if ($users == false){
				$data['main_content'] = 'elements/contents/pages/page_index';
				$this->load->view('layouts/layout_index', $data);
				return false;
			} else {
				$userrole = $users->user_role;
				$useractive = $users->user_isactive;
			}
			
			//User login roles
			if ($useractive == 1){
				if($userrole =='Administrator'){ //Admin
					$page = $this->uri->segment(2);
					$data['user'] = $this->User_model->get_login($session_data);
					$data['user_item'] = $this->User_model->get_users('25', $page);
					$data['main_content'] = 'elements/contents/pages/page_admin_welcome';
					$this->load->view('layouts/layout_admin',$data);
				}

				if($userrole == 'Staff'){ //Staff

				}
			} else { // make this landing page for user if exist but is set inactive
				$this->load->view('ASSNUGGET'); //LOL stressrelief. I'll change later.
			}
		}
	}
?>