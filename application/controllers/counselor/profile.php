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
			$config['base_url'] = base_url().'counselor/profile/';			
			$this->pagination->initialize($config);
			$page= $this->uri->segment(3);
									
			$data['counselors'] =$this->Counselor_model->get_counselors('25',$page);
			$data['links'] = $this->pagination->create_links();
			$session_data = $this->session->userdata('id');
          	$data['usersession']=$this->Administrator_model->get_login($session_data);
			
			$data['main_content'] = 'counselor/profile/manageCounselorUI';			
			$this->load->view('counselor/layouts/main',$data);
		}
			
		public function search(){
			$this->load->library('pagination');
			$this->load->model('Counselor_model');
			$key=$this->input->post('searchKey');			
			$this->Counselor_model->setSearchBy($key);			
			$searchCounselor =$this->Counselor_model->search_counselor();
			
			if($searchCounselor != null){
				$data['counselors']=$this->Counselor_model->search_counselor();
				$data['links'] = $this->pagination->create_links();
				$data['main_content'] = 'counselor/profile/manageCounselorUI';
				$this->load->view('counselor/layouts/main',$data);
			}elseif($searchCounselor == null)
			{
				$data['counselors']="";
				$data['links'] = $this->pagination->create_links();
				$data['main_content'] = 'counselor/profile/manageCounselorUI';
				$this->load->view('counselor/layouts/main',$data);
			}
		}

		public function showCounselor($id){			
			$this->load->library('pagination');			
			$data['counselors']=$this->Counselor_model->showCounselor($id);
			$data['links'] = $this->pagination->create_links();			
			$data['main_content'] = 'counselor/profile/manageCounselorUI';			
			$this->load->view('counselor/layouts/main',$data);			
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
									
			$this->Counselor_model->setPID($pid);
			$this->Counselor_model->setPLast($p_last);			
			$this->Counselor_model->setPFirst($p_first);
			$this->Counselor_model->setPmi($p_mi);
			$this->Counselor_model->setPBrgy($p_brgy);
			$this->Counselor_model->setPMunicipality($p_municipality);
			$this->Counselor_model->setPProvince($p_province);
			$this->Counselor_model->setPBday($p_bday);
			$this->Counselor_model->setPGender($p_gender);
			$this->Counselor_model->setPAge($p_age);									
			$this->Counselor_model->setPCPNumber($p_cpnumber);																				
			$this->Counselor_model->setPPhoto($p_photo);	
							
		}			
		public function add(){
			$this->form_validation->set_rules('pid','ID','required');
			$this->form_validation->set_rules('p_first','First Name','required');
			$this->form_validation->set_rules('p_last','Last Name','required');					
			$data['brgy'] = $this->Counselor_model->getBarangay();
			$data['municipality'] = $this->Counselor_model->getMunicipality();		
			$data['province'] = $this->Counselor_model->getProvince();		
				
			if($this->form_validation->run()==FALSE){
				$data['main_content'] = 'counselor/profile/addCounselorUI';
				$this->load->view('counselor/layouts/main',$data);
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
						$data['main_content'] = 'counselor/profile/addCounselorUI';
						$this->load->view('counselor/layouts/main',$data, 'refresh');
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
						$this->Counselor_model->setUserID($adminid);
						$this->Counselor_model->setUserName($adminname);						
						$this->Counselor_model->setPPhoto($image);
						$counselor = $this->Counselor_model->insert_counselor();
						if($counselor==TRUE){
							$this->session->set_flashdata('counselor_saved','New Counselor record has been Saved.');
							redirect('counselor/profile');
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
					$this->Counselor_model->setUserID($adminid);
					$this->Counselor_model->setUserName($adminname);						
					$this->Counselor_model->setPPhoto($image);					
					
					$counselor = $this->Counselor_model->insert_counselors();
					if($counselor==TRUE){
						$this->session->set_flashdata('counselor_saved','New Counselor record has been Saved.');
						redirect('counselor/profile');
					}	
				}					
			}	
		}

		public function manageCounselor($id){			
			$this->load->library('pagination');			
			$page = $this->uri->segment(3);
			$data['counselors']=$this->Counselor_model->getCounselor($id);		
			$data['main_content'] = 'counselor/profile/manageCounselorUI';			
			$this->load->view('counselor/layouts/main',$data);			
		}

		public function edit($id)
		{					
			$this->Counselor_model->setPID($id);
			$vcounselor=$this->Counselor_model->get_counselor_edit();		
			
			$mcounselor= $vcounselor->pid;
			if($vcounselor == null)
			{
				$this->load->view('404notfoundadmin');
			}
			else
			{
				$this->form_validation->set_rules('p_last','Last Name','required');
				$this->form_validation->set_rules('p_first','First Name','required');
				$this->Counselor_model->setPID($id);
				$data['counselor']=$this->Counselor_model->get_counselor_edit();							
				$data['brgy'] = $this->Counselor_model->getBarangay();
				$data['municipality'] = $this->Counselor_model->getMunicipality();		
				$data['province'] = $this->Counselor_model->getProvince();		

				if($this->form_validation->run()==FALSE)
				{
					$data['main_content'] = 'counselor/profile/editCounselorUI';
					$this->load->view('counselor/layouts/main',$data);
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
						$data['main_content'] = 'counselor/profile/editCounselorUI';
						$this->load->view('counselor/layouts/main',$data, 'refresh');
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
						$this->Counselor_model->setUserID($adminid);
						$this->Counselor_model->setUserName($adminname);						
						$this->Counselor_model->setPPhoto($image);	
						
						$counselor = $this->Counselor_model->update_counselor();
						if($counselor==TRUE){
							$this->session->set_flashdata('counselor_edit','Counselor record has been updated.');					
							redirect('counselor/profile/showCounselor/'.$mcounselor);
						}	
					}
				}
				else{
						$this->setters();
						
						$session_data = $this->session->userdata('id');
						$user = $this->Administrator_model->get_login($session_data);
						$adminid = $user->user_id;	
						$adminname = $user->user_name;							
						$this->Counselor_model->setUserID($adminid);
						$this->Counselor_model->setUserName($adminname);						
						//$this->Counselor_model->setPPhoto($image);	
						
						$counselor = $this->Counselor_model->update_counselor();
						if($counselor==TRUE){
							$this->session->set_flashdata('counselor_edit','Counselor record has been updated.');					
							redirect('counselor/profile/showCounselor/'.$mcounselor);
						}												
					}				
				}
			}
		}													
	}
?>