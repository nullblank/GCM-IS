
<?php
	class DashboardAdmin extends CI_Controller{
	    public function index(){

			$this->session->set_userdata('');
			$session_data = $this->session->userdata('id');
			$this->User_model->get_login($session_data);
			$page = $this->uri->segment(3);

			$data['user']=$this->User_model->get_login($session_data);
			$data['user_item'] =$this->User_model->get_users('25',$page);
			$data['main_content'] = 'elements/contents/pages/page_admin_welcome';										
			$this->load->view('layouts/layout_admin',$data);	   										     
	    }

		public function AdminSI(){

			$this->session->set_userdata('');
			$session_data = $this->session->userdata('id');
			$this->User_model->get_login($session_data);
			$page = $this->uri->segment(3);

			$data['user']=$this->User_model->get_login($session_data);
			$data['main_content'] = 'elements/contents/forms/form_pdi';									
			$this->load->view('layouts/layout_admin',$data);	   										     
	    }
	}
?>