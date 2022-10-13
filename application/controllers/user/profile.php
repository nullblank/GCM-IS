<?php
class Profile extends CI_Controller
{
	public function index()
	{
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



	public function edit($id)
	{
	}
}
