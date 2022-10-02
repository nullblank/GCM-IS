
<?php
	class DashboardStaff extends MY_Controller{
	    public function index(){	      						
			$this->session->set_userdata('');
			$session_data = $this->session->userdata('id');
			$this->Administrator_model->get_login($session_data);
			$users = $this->Administrator_model->get_login($session_data);
						
			$data['users']=$this->Administrator_model->get_login($session_data);												
			$data['main_content'] = 'admin/dashboard/dashboardMainUI';
			$this->load->view('admin/layouts/main',$data);	   										     
	    }
	}
?>