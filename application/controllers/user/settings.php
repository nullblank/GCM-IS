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
	//Address
	public function addBarangay()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setBar();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_barangay();
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function addMunicipality()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setMun();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_municipality();
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function addProvince()
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setPro();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->insert_province();
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function editBarangay($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setBar();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_barangay($id);
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function editMunicipality($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setMun();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_municipality($id);
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function editProvince($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setPro();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_province($id);
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function deleteBarangay($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setBar();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_barangay($id);
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function deleteMunicipality($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setMun();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_municipality($id);
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}
	public function deleteProvince($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setPro();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_province($id);
			redirect('DashboardAdmin/Settings');
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
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function editReligion($id)
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setRel();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_rel($id);
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function deleteReligion($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setRel();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_rel($id);
			redirect('DashboardAdmin/Settings');
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
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function editSchool($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setSchool();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->update_school($id);
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}

	public function deleteSchool($id)
	{
		if ($this->session->has_userdata('id')) {
			$this->setSchool();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->Settings_model->delete_school($id);
			redirect('DashboardAdmin/Settings');
		} else {
			redirect('login');
		}
	}
}
