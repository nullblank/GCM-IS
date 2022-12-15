
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
			$data['student_maleno'] = $this->Student_model->getStudentMale();
			$data['student_femaleno'] = $this->Student_model->getStudentFemale();
			//$data['add_account'] = 'elements/contents/modal/add_account';
			$data['main_content'] = 'elements/contents/pages/page_admin_welcome';
			$this->load->view('layouts/layout_admin', $data);
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
				$data['main_content'] = 'elements/contents/pages/page_student_records';
			}
			else if ($this->input->post('searchby')){
				$search = $this->input->post('search');
				$searchby = $this->input->post('searchby');
				$data['students'] = $this->Student_model->get_studentsby($search, $searchby);
				$data['main_content'] = 'elements/contents/pages/page_student_records';
			}
			else {
				$data['students'] = $this->Student_model->get_studentnull();
				$data['main_content'] = 'elements/contents/pages/page_student_records';
			}
			$this->load->view('layouts/layout_admin', $data);
		} else {
			redirect('login');
		}
	}
	

	public function Reports(){
		if ($this->session->has_userdata('id')) {
			$this->session->set_userdata('');
			$session_data = $this->session->userdata('id');
			$this->User_model->get_login($session_data);
			$data['user'] = $this->User_model->get_login($session_data);
			//$data['main_content'] = 'elements/contents/pages/page_report_menu';
			$data['main_content'] = 'elements/contents/report/exportStudentList';
			$this->load->view('layouts/layout_admin', $data);
		} else {
			redirect('login');
		}
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

	function export(){
		$file_name = 'student_PI_records_'.date('m').'-'.date('d').'-'.date('Y').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$file_name"); 
		header("Content-Type: application/csv;");
		$student_data = $this->Report_model->fetch_data();
		$file = fopen('php://output', 'w');
		$header = array("ID Number","First Name","Last Name","Middle Initial","Course","School","Year","School Year","Status","Email","Gender","Birthday","Age","Ethnicity","Religion","Marital Status","Name of Spouse","Number of Children","Barangay","Municipality","Province","Nature of Residence"); 
		fputcsv($file, $header);
		foreach ($student_data->result_array() as $key => $value){ 
			fputcsv($file, $value); 
		}
		fclose($file); 
		exit; 
	}
}
?>