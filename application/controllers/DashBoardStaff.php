
<?php
	class DashboardStaff extends MY_Controller{
		public function index()
		{
			$loggedin = $this->chk_session();
			if ($loggedin == true) {
				$session_data = $this->session->userdata('id');
				$this->User_model->get_login($session_data);
				$page = $this->uri->segment(2);
				$data['user'] = $this->User_model->get_login($session_data);
				$data['user_item'] = $this->User_model->get_users('25', $page);
				$data['student_number'] = $this->Student_model->getStudentsCount();
				$data['student_maleno'] = $this->Student_model->getStudentMale();
				$data['student_femaleno'] = $this->Student_model->getStudentFemale();
				//$data['add_account'] = 'elements/contents/modal/add_account';
				$data['main_content'] = 'elements/contents/pages/page_staff_welcome';
				$this->load->view('layouts/layout_staff', $data);
			}
		}

		public function StudentRecords() //sidebar link
	{
		if ($this->session->has_userdata('id')) {

			$this->session->set_userdata('');
			$session_data = $this->session->userdata('id');
			$this->User_model->get_login($session_data);
			$data['user'] = $this->User_model->get_login($session_data);

			if ($this->input->post('searchby') && $this->input->post('searchby')){
				$search = $this->input->post('search');
				$searchby = $this->input->post('searchby');
				$data['students'] = $this->Student_model->get_studentsby($search, $searchby);
				$data['main_content'] = 'elements/contents/pages/page_student_records_staff';
			}
			else if ($this->input->post('searchby')){
				$search = $this->input->post('search');
				$searchby = $this->input->post('searchby');
				$data['students'] = $this->Student_model->get_studentsby($search, $searchby);
				$data['main_content'] = 'elements/contents/pages/page_student_records_staff';
			}
			else {
				$data['students'] = $this->Student_model->get_studentnull();
				$data['main_content'] = 'elements/contents/pages/page_student_records_staff';
			}
			$this->load->view('layouts/layout_staff', $data);
		} else {
			redirect('login');
		}
	}
	}
?>