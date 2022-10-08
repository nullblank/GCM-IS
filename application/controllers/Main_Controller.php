<?php
	class Main_Controller extends CI_Controller{			
		public function index(){				
			// add logic for if user is not a staff member 
			// but a student
			$this->session->set_userdata('');
			if ($this->session->has_userdata('id')) {
				$session_data = $this->session->userdata('id');
				$this->User_model->get_login($session_data);
				$page = $this->uri->segment(2);
				$data['user'] = $this->User_model->get_login($session_data);
				$data['user_item'] = $this->User_model->get_users('25', $page);
				$data['main_content'] = 'elements/contents/pages/page_admin_welcome';
				$this->load->view('layouts/layout_admin', $data);
			} else {
				$this->load->view('pre_page');
			}
		}				
	}
?>