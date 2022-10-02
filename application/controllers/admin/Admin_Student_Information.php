
<?php
	class AdminStudentInformation extends CI_Controller{
	    public function index(){	      	

			$this->session->set_userdata('');
			$session_data = $this->session->userdata('id');
			$this->Authenticate_model->get_login($session_data);

			$data['user']=$this->User_model->get_login($session_data);	
			$data['main_content'] = 'elements/contents/pages/page_admin_student';
			$this->load->view('layouts/layout_admin',$data);	        
	    }
	}
?>