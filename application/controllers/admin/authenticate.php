<?php
	class Authenticate extends MY_Controller{
		public function __construct(){
			parent:: __construct();
			date_default_timezone_set('Asia/Manila');
			
		}
		public function login(){
			$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[4]');			
			if($this->form_validation->run()==FALSE){
				$this->load->view('login');							
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$this->Administrator_model->setUsername($username);
				$userdetails = $this->Administrator_model->get_user_details();
				$userid = $userdetails->user_id;
				
				$id = $userdetails->user_id;
				//$this->load->model('Authenticate_model');
				if($this->Administrator_model->login_user($username,$password))
				{
					$session_data = array(
						'id' => $id,
						'username' => $username,
						'created' => $created,
						'userid' => $userid,
						'last_login' => date('Y-m-d H:i:s'),
						'loggedin' => true
					);
					$this->session->set_userdata($session_data);
				    $session_data = $this->session->userdata('id');
				   	$this->Administrator_model->get_login($session_data);
					$users = $this->Administrator_model->get_login($session_data);
					
					
				   	$this->load->library('session');	
					
					if($users->user_role=='Administrator'){
						redirect('admin/AdminDashboard');				 	
					}
					if($users->user_role=='Counselor'){
						redirect('counselor/CounselorDashboard');				 	
					}					
					if($users->user_role == 'Student'){
						redirect('student/StudentDashboard');				 	
					}
						
				}
				else
				{
					$this->session->set_flashdata('fail_login', 'Invalid Username and Password');
					redirect("login");
				}
			}				
		}
		public function logout(){
			
			$this->session->unset_userdata('loggedin');
			$this->session->unset_userdata('userid');
			$this->session->unset_userdata('id');
			$this->session->session_destroy;			
			redirect('login');
		}
		public function logout_guest(){
			
			$this->session->unset_userdata('loggedin');
			$this->session->unset_userdata('userid');
			$this->session->unset_userdata('id');
			$this->session->session_destroy;			
			redirect('login');
		}				
	}
?>