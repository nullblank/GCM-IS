
<?php
	class AdminDashboard extends MY_Controller{
		public function __construct(){
			parent:: __construct();
			if(!$this->session->userdata('loggedin')){
				redirect("login");
			}
			else{
				$this->get_usersession();
				$this->load->model('Dashboard_model'); 
			}
		}	
	    public function index(){	      						
			
			$this->session->set_userdata('');
			$session_data = $this->session->userdata('id');
			$this->Administrator_model->get_login($session_data);
			$users = $this->Administrator_model->get_login($session_data);
			//All Table Data
			$page = $this->uri->segment(3);
			$data['students'] =$this->Student_model->get_students('25',$page);
			$data['counselors'] =$this->Counselor_model->get_counselors('25',$page);
			$data['totalStudent']=$this->Student_model->getStudentTotal();
			$data['genders']=$this->Student_model->getStudentGender();
			//default			
			$data['users']=$this->Administrator_model->get_login($session_data);
			$data['main_content'] = 'admin/dashboard/dashboardMainUI';
			$this->load->view('admin/layouts/main',$data);	   										     
	    }
	}
?>