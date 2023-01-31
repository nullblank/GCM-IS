<?php
class Profile extends CI_Controller
{
	public function setters()
	{
		$usr_account = $this->input->post('username');
		$usr_name = $this->input->post('name');
		$usr_password = $this->input->post('password');
		$usr_role = $this->input->post('role');
		$usr_isactive = $this->input->post('isactive');

		$this->User_model->setUserAccount($usr_account);
		$this->User_model->setUserName($usr_name);
		$this->User_model->setUserPassword($usr_password);
		$this->User_model->setUserRole($usr_role);
		$this->User_model->setUserIsActive($usr_isactive);
	}

	public function register($stud_id)
	{
        //form validation rules
        $this->form_validation->set_rules('s_first','First Name','required');
        $this->form_validation->set_rules('s_last','Last Name','required');
        $this->form_validation->set_rules('s_mi','Middle Initials','required');
        $this->form_validation->set_rules('s_course','Course','required');
        $this->form_validation->set_rules('s_year','Year','required');
        $this->form_validation->set_rules('s_stat','Status','required');
        $this->form_validation->set_rules('s_email','Email','required');
        $this->form_validation->set_rules('s_gender','Gender','required');
        $this->form_validation->set_rules('s_bday','Birthday','required');
        $this->form_validation->set_rules('s_age','Age','required');
        $this->form_validation->set_rules('s_eth','Ethnicity','required');
        $this->form_validation->set_rules('s_rel','Religion','required');
        $this->form_validation->set_rules('s_marstat','Marital Status','required');
        $this->form_validation->set_rules('s_brgy','Baranggay','required');
        $this->form_validation->set_rules('s_muni','Municipality','required');
        $this->form_validation->set_rules('s_provi','Province','required');
        $this->form_validation->set_rules('s_nor','Nature of Residence','required');

        
        
    }

	public function editUser($id) //not session locked yet
	{
		if ($this->session->has_userdata('id')) {
			$data['user'] = $this->User_model->showUser($id);
			$data['main_content'] = 'elements/contents/forms/form_user';
			$this->load->view('layouts/layout_admin', $data);
		} else {
			redirect('login');
		}
	}

	public function addUser() //not session locked yet
	{ 
		if ($this->session->has_userdata('id')) {
			$this->setters();                                                                                                                                                                                                                                                                                                                                                                                           
			$this->User_model->insert_user();
			redirect('DashboardAdmin');
		} else {
			redirect('login');
		}
	}

	public function editAccount() //not session locked yet
	{ 
		if ($this->session->has_userdata('id')) {
			$user_id = $this->input->post('user_id');
			$user = $this->User_model->showUser($user_id);
			$this->setters();
			if ($this->User_model->getUserAccount()){} else {$this->User_model->setUserAccount($user->user_account);}
			if ($this->User_model->getUserName()){} else {$this->User_model->setUserName($user->user_name);}
			if ($this->User_model->getUserRole()){} else {$this->User_model->setUserRole($user->user_role);}
			if ($this->User_model->getUserIsActive()){} else {$this->User_model->setUserIsActive($user->user_isactive);}                                                                                                                                                                                                                                                                                                                                                                           
			$this->User_model->update_user($user_id);
			redirect('DashboardAdmin');
		} else {
			redirect('login');
		}
	}
}
