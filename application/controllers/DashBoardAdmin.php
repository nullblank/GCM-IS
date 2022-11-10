
<?php
class DashboardAdmin extends MY_Controller
{
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
			//$data['add_account'] = 'elements/contents/modal/add_account';
			$data['main_content'] = 'elements/contents/pages/page_admin_welcome';
			$this->load->view('layouts/layout_admin', $data);
		}
	}

	public function StudentRecords() //sidebar link
	{
		$this->session->set_userdata('');
		$session_data = $this->session->userdata('id');
		$this->User_model->get_login($session_data);
		$data['user'] = $this->User_model->get_login($session_data);
		$data['students'] = $this->Student_model->get_students();
		$data['main_content'] = 'elements/contents/pages/page_student_records';
		$this->load->view('layouts/layout_admin', $data);
	}

	public function Settings(){
		if ($this->session->has_userdata('id')) {
			$this->session->set_userdata('');
			$session_data = $this->session->userdata('id');
			$this->User_model->get_login($session_data);
			$data['user'] = $this->User_model->get_login($session_data);
			$data['schools'] = $this->Settings_model->get_schools();
			$data['religions'] = $this->Settings_model->get_religions();
			$data['barangays'] = $this->Settings_model->get_barangay();
			$data['municipalities'] = $this->Settings_model->get_municipality();
			$data['provinces'] = $this->Settings_model->get_province();
			$data['courses'] = $this->Settings_model->get_courses();
			$data['ethnicities'] = $this->Settings_model->get_ethnicities();
			$data['main_content'] = 'elements/contents/forms/form_settings';
			$this->load->view('layouts/layout_admin', $data);
		} else {
			redirect('login');
		}
	}
}
?>