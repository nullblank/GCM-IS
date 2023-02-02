<?php
class Settings extends CI_Controller
{
	public function setSchool()
	{
		$school_fullname = $this->input->post('fullschoolname');
		$school_acro = $this->input->post('schoolacronym');
		$school_upfullname = $this->input->post('up_fullschoolname');
		$school_upacro = $this->input->post('up_schoolacronym');
		$this->Settings_model->setSchoolFullName($school_fullname);
		$this->Settings_model->setSchoolAcronym($school_acro);
		$this->Settings_model->setUPSchoolFullName($school_upfullname);
		$this->Settings_model->setUPSchoolAcronym($school_upacro);
	}

	public function setRel(){
		$religion_name = $this->input->post('relname');
		$religion_upname = $this->input->post('uprelname');
		$this->Settings_model->setReligionName($religion_name);
		$this->Settings_model->setUPReligionName($religion_upname);
	}

	public function setBar(){
		$barangay = $this->input->post('barangay');
		$upbarangay = $this->input->post('upbarangay');
		$this->Settings_model->setBarangay($barangay);
		$this->Settings_model->setUPBarangay($upbarangay);
	}

	public function setMun(){
		$municipality = $this->input->post('municipality');
		$upmunicipality = $this->input->post('upmunicipality');
		$this->Settings_model->setMunicipality($municipality);
		$this->Settings_model->setUPMunicipality($upmunicipality);
	}

	public function setPro(){
		$province = $this->input->post('province');
		$upprovince = $this->input->post('upprovince');
		$this->Settings_model->setProvince($province);
		$this->Settings_model->setUPProvince($upprovince);
	}

	public function setCourse(){
		$course = $this->input->post('course');
		$upcourse = $this->input->post('upcourse');
		$this->Settings_model->setCourse($course);
		$this->Settings_model->setUPCourse($upcourse);
	}

	public function setEth(){
		$ethnicity = $this->input->post('ethnicity');
		$upethnicity = $this->input->post('upethnicity');
		$this->Settings_model->setEthnicity($ethnicity);
		$this->Settings_model->setUPEthnicity($upethnicity);
	}
	//Ethnicity
	public function addEthnicity()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setEth();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_ethnicity();
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function editEthnicity($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setEth();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_ethnicity($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function deleteEthnicity($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setEth();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_ethnicity($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	//Address
	public function addBarangay()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setBar();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_barangay();
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function addMunicipality()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setMun();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_municipality();
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function addProvince()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setPro();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_province();
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function addCourse()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setCourse();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_course();
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function editBarangay($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setBar();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_barangay($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function editMunicipality($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setMun();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_municipality($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function editProvince($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setPro();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_province($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function editCourse($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setCourse();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_course($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function deleteBarangay($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setBar();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_barangay($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function deleteMunicipality($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setMun();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_municipality($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function deleteProvince($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setPro();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_province($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	//Religion
	public function addReligion()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setRel();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_rel();
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function editReligion($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setRel();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_rel($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function deleteReligion($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setRel();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_rel($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
	//School
	public function addSchool()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setSchool();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_school();
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function editSchool($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setSchool();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_school($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function deleteSchool($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setSchool();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_school($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function deleteCourse($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setCourse();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_course($id);
			redirect('Dashboardadmin/Settings');
		} else {
			redirect('login');
		}
	}
}
