<?php
class Settings extends CI_Controller
{
	public function setters()
	{
		$school_fullname = $this->input->post('fullschoolname');
		$school_acro = $this->input->post('schoolacronym');

		$this->Settings_model->setSchoolFullName($school_fullname);
		$this->Settings_model->setSchoolAcronym($school_acro);
	}

	public function addSchool()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setters();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_school();
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}
}
