<?php
	class Profile extends MY_Controller{
		public function __construct(){
			parent:: __construct();
			if(!$this->session->userdata('loggedin')){
				redirect("login");
			}
			else{
				$this->get_usersession();
			}
		}
		public function index(){			
			$this->load->library('pagination');						
			$config['base_url'] = base_url().'student/profile/';
			$config['first_link'] = 'First';			
			$config['total_rows']= $this->Student_model->getStudentsCount();
			$config['per_page'] = '25'; 
			$config['uri_segment'] = 3;
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close']= '</ul>';			
			$config['first_tag_open'] = '<li>';
			$config['last_tag_open']= '<li>';			
			$config['next_tag_open'] = '<li>';
			$config['prev_tag_open']= '<li>';			
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close']= '</li>';			
			$config['first_tag_close'] = '</li>';
			$config['last_tag_close']= '</li>';			
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_close']= '</li>';			
			$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
			$config['cur_tag_close']= "</b></span></li>";			
			$this->pagination->initialize($config);
			$page= $this->uri->segment(3);
									
			$data['students'] =$this->Student_model->get_students('25',$page);
			$data['links'] = $this->pagination->create_links();
			$session_data = $this->session->userdata('id');
          	$data['usersession']=$this->Administrator_model->get_login($session_data);
			
			$data['main_content'] = 'student/profile/manageStudentUI';			
			$this->load->view('student/layouts/main',$data);
		}
			
		public function search(){
			$this->load->library('pagination');
			$this->load->model('Student_model');
			$key=$this->input->post('searchKey');			
			$this->Student_model->setSearchBy($key);			
			$searchStudent =$this->Student_model->search_student();
			
			if($searchStudent != null){
				$data['students']=$this->Student_model->search_student();
				$data['links'] = $this->pagination->create_links();
				$data['main_content'] = 'student/profile/manageStudentUI';
				$this->load->view('student/layouts/main',$data);
			}elseif($searchStudent == null)
			{
				$data['students']="";
				$data['links'] = $this->pagination->create_links();
				$data['main_content'] = 'student/profile/manageStudentUI';
				$this->load->view('student/layouts/main',$data);
			}
		}

		public function showStudent($id){			
			$this->load->library('pagination');			
			$data['students']=$this->Student_model->showStudent($id);
			$data['links'] = $this->pagination->create_links();			
			$data['main_content'] = 'student/profile/manageStudentUI';			
			$this->load->view('student/layouts/main',$data);			
		}		
				
		public function setters(){
			$pid =$this->input->post('pid');
			$p_last =$this->input->post('p_last');
			$p_first = $this->input->post('p_first');
			$p_mi =$this->input->post('p_mi');
			$p_brgy =$this->input->post('p_brgy');
			$p_municipality =$this->input->post('p_municipality');
			$p_province =$this->input->post('p_province');
			$p_bday =$this->input->post('p_bday');
			$p_gender=$this->input->post('p_gender');
			$p_age=$this->input->post('p_age');	
			$p_cpnumber=$this->input->post('p_cpnumber');				
			$p_photo =$this->input->post('p_photo');
									
			$this->Student_model->setPID($pid);
			$this->Student_model->setPLast($p_last);			
			$this->Student_model->setPFirst($p_first);
			$this->Student_model->setPmi($p_mi);
			$this->Student_model->setPBrgy($p_brgy);
			$this->Student_model->setPMunicipality($p_municipality);
			$this->Student_model->setPProvince($p_province);
			$this->Student_model->setPBday($p_bday);
			$this->Student_model->setPGender($p_gender);
			$this->Student_model->setPAge($p_age);									
			$this->Student_model->setPCPNumber($p_cpnumber);																				
			$this->Student_model->setPPhoto($p_photo);	
							
		}			
		public function add(){
			$this->form_validation->set_rules('pid','ID','required');
			$this->form_validation->set_rules('p_first','First Name','required');
			$this->form_validation->set_rules('p_last','Last Name','required');					
			$data['brgy'] = $this->Student_model->getBarangay();
			$data['municipality'] = $this->Student_model->getMunicipality();		
			$data['province'] = $this->Student_model->getProvince();		
				
			if($this->form_validation->run()==FALSE){
				$data['main_content'] = 'student/profile/addStudentUI';
				$this->load->view('student/layouts/main',$data);
			}
			else{
				if($_FILES['photo']['size'] != 0){
					$upload_dir = './uploads/';
					if (!is_dir($upload_dir)) {
						 mkdir($upload_dir);
					}	
					$config['upload_path'] = './photos/';
					$config['allowed_types']= 'jpg|jpeg|JPG|png|PNG|gif|Gif';
					$config['max_size'] = 1000;					
					$this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('photo'))
					{
						$this->session->set_flashdata('upload_error', "The filetype you are attempting to upload is not allowed. Please upload Jpg,Jpeg,Gif and Png files only.");
						$data['main_content'] = 'student/profile/addStudentUI';
						$this->load->view('student/layouts/main',$data, 'refresh');
					}
					else
					{						
						$this->setters();
						$upload_data = $this->upload->data();
						$image = $upload_data['file_name'];
						$session_data = $this->session->userdata('id');
						$user = $this->Administrator_model->get_login($session_data);
						
						$adminid = $user->user_id;	
						$adminname = $user->user_name;	
						$this->Student_model->setUserID($adminid);
						$this->Student_model->setUserName($adminname);						
						$this->Student_model->setPPhoto($image);
						$student = $this->Student_model->insert_student();
						if($student==TRUE){
							$this->session->set_flashdata('student_saved','New Student record has been Saved.');
							redirect('student/profile');
						}	
					}
				}
				else{
					$this->setters();				
					$upload_data = $this->upload->data();
					$image = $upload_data['file_name'];
					$session_data = $this->session->userdata('id');
					$user = $this->Administrator_model->get_login($session_data);
					$adminid = $user->user_id;	
					$adminname = $user->user_name;						
					$this->Student_model->setUserID($adminid);
					$this->Student_model->setUserName($adminname);						
					$this->Student_model->setPPhoto($image);					
					
					$student = $this->Student_model->insert_students();
					if($student==TRUE){
						$this->session->set_flashdata('student_saved','New Student record has been Saved.');
						redirect('student/profile');
					}	
				}					
			}	
		}

		public function manageStudent($id){			
			$this->load->library('pagination');			
			$page = $this->uri->segment(3);
			$data['students']=$this->Student_model->getStudent($id);		
			$data['main_content'] = 'student/profile/manageStudentUI';			
			$this->load->view('student/layouts/main',$data);			
		}

		public function edit($id)
		{					
			$this->Student_model->setPID($id);
			$vstudent=$this->Student_model->get_student_edit();		
			
			$mstudent= $vstudent->pid;
			if($vstudent == null)
			{
				$this->load->view('404notfoundadmin');
			}
			else
			{
				$this->form_validation->set_rules('p_last','Last Name','required');
				$this->form_validation->set_rules('p_first','First Name','required');
				$this->Student_model->setPID($id);
				$data['student']=$this->Student_model->get_student_edit();							
				$data['brgy'] = $this->Student_model->getBarangay();
				$data['municipality'] = $this->Student_model->getMunicipality();		
				$data['province'] = $this->Student_model->getProvince();		

				if($this->form_validation->run()==FALSE)
				{
					$data['main_content'] = 'student/profile/editStudentUI';
					$this->load->view('student/layouts/main',$data);
				}
				else
				{
					if($_FILES['photo']['size'] != 0){
					$upload_dir = './uploads/';
					if (!is_dir($upload_dir)) {
						 mkdir($upload_dir);
					}	
					$config['upload_path'] = './photos/';					
					$config['allowed_types']= 'jpg|jpeg|JPG|png|PNG|gif|Gif';
					$config['max_size'] = 1000;					
					$this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('photo'))
					{
						$this->session->set_flashdata('upload_error', "The filetype you are attempting to upload is not allowed. Please upload Jpg,Jpeg,Gif and Png files only.");
						$data['main_content'] = 'student/profile/editStudentUI';
						$this->load->view('student/layouts/main',$data, 'refresh');
					}
					else
					{						
						$this->setters();
						$upload_data = $this->upload->data();
						$image = $upload_data['file_name'];
						$session_data = $this->session->userdata('id');
						$user = $this->Administrator_model->get_login($session_data);
						$adminid = $user->user_id;
						$adminname = $user->user_name;							
						$this->Student_model->setUserID($adminid);
						$this->Student_model->setUserName($adminname);						
						$this->Student_model->setPPhoto($image);	
						
						$student = $this->Student_model->update_student();
						if($student==TRUE){
							$this->session->set_flashdata('student_edit','Student record has been updated.');					
							redirect('student/profile/showStudent/'.$mstudent);
						}	
					}
				}
				else{
						$this->setters();
						
						$session_data = $this->session->userdata('id');
						$user = $this->Administrator_model->get_login($session_data);
						$adminid = $user->user_id;	
						$adminname = $user->user_name;							
						$this->Student_model->setUserID($adminid);
						$this->Student_model->setUserName($adminname);						
						//$this->Student_model->setPPhoto($image);	
						
						$student = $this->Student_model->update_student();
						if($student==TRUE){
							$this->session->set_flashdata('student_edit','Student record has been updated.');					
							redirect('student/profile/showStudent/'.$mstudent);
						}												
					}				
				}
			}
		}													
	}
?>