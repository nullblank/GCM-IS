<?php
class Record extends MY_Controller
{
    public function setters(){ //Did not set user session ID for debugging

        //Student Data
        $stud_id=$this->input->post('s_id');
        $stud_first=$this->input->post('s_first');
        $stud_last=$this->input->post('s_last');
        $stud_mi=$this->input->post('s_mi');
        $stud_stat=$this->input->post('s_stat');
        $stud_email=$this->input->post('s_email');
        $stud_gender=$this->input->post('s_gender');
        $stud_bday=$this->input->post('s_bday');
        $stud_age=$this->input->post('s_age');
        $stud_eth=$this->input->post('s_eth');
        $stud_rel=$this->input->post('s_rel');
        $stud_marstat=$this->input->post('s_marstat'); //Not null
        $stud_nspouse=$this->input->post('s_nspouse'); //Can be null
        $stud_nochild=$this->input->post('s_nochild'); //Can be null
        $stud_brgy=$this->input->post('s_brgy');
        $stud_muni=$this->input->post('s_muni');
        $stud_provi=$this->input->post('s_provi');
        $stud_nor=$this->input->post('s_nor');
        //Guardian to contact incase of emerg
        $stud_guardn=$this->input->post('s_guardn');
        $stud_guardno=$this->input->post('s_guardno');
        $stud_guardadd=$this->input->post('s_guardadd');
        $stud_guardrel=$this->input->post('s_guardrel');

        //>setting
        //Student
        $this->Student_model->setSID($stud_id);
        $this->Student_model->setSFName($stud_first);
        $this->Student_model->setSLName($stud_last);
        $this->Student_model->setSMI($stud_mi);
        $this->Student_model->setSStat($stud_stat);
        $this->Student_model->setSEmail($stud_email);
        $this->Student_model->setSGender($stud_gender);
        $this->Student_model->setSBDay($stud_bday);
        $this->Student_model->setSAge($stud_age);
        $this->Student_model->setSEth($stud_eth);
        $this->Student_model->setSRel($stud_rel);
        $this->Student_model->setSmarstat($stud_marstat);
        $this->Student_model->setSNSpouse($stud_nspouse);
        $this->Student_model->setSNChild($stud_nochild);
        $this->Student_model->setSBrgy($stud_brgy);
        $this->Student_model->setSMuni($stud_muni);
        $this->Student_model->setSProvi($stud_provi);
        $this->Student_model->setSNOR($stud_nor);
        //Guardian
        $this->Student_model->setSGuardn($stud_guardn);
        $this->Student_model->setSGuardno($stud_guardno);
        $this->Student_model->setSGuardadd($stud_guardadd);
        $this->Student_model->setSGuardrel($stud_guardrel);              
    }

    public function chk_id()
    {

        //Add form validation if field is blank
        //Add form validation if field is NOT a numerical value
        $this->form_validation->set_rules('stud_id','Student ID','trim|required|min_length[8]');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('id_exist', 'Student ID number a minimum of 8 numbers');
            $data['main_content'] = 'elements/contents/pages/page_index';
			$this->load->view('layouts/layout_index', $data);
        } else {
            $stud_id = $this->input->post('stud_id');
            if ($stud_id == NULL){
                redirect('layouts/layout_index');
            }
            else {
                if ($this->Student_model->chk_id($stud_id) == false) {
                    $data['stud_id'] = $stud_id;
                    $data['nor'] = $this->Student_model->getNOR();
                    $data['eth'] = $this->Student_model->getEthnicity();
                    $data['religion'] = $this->Student_model->getReligion();
                    $data['brgy'] = $this->Student_model->getBarangay();
                    $data['municipality'] = $this->Student_model->getMunicipality();		
                    $data['province'] = $this->Student_model->getProvince();
                    $data['main_content'] = 'elements/contents/forms/form_pdi';
                    $this->load->view('layouts/layout_student', $data);
                    
                } else { //If record existing
                    $this->session->set_flashdata('id_exist', 'You already have an existing record!');
                    $data['stud_id'] = $stud_id;
                    $data['student'] = $this->Student_model->getStudent($stud_id);
                    $data['main_content'] = 'elements/contents/pages/page_student_menu';
                    $this->load->view('layouts/layout_student', $data);
                }
            }
        }
    }
    
    public function register(){
        //form validation rules
        //complete validation rules later
        $this->form_validation->set_rules('s_first','Student First Name','required');
        
        if($this->form_validation->run()==FALSE){ //if form fail
            //$this->session->set_flashdata('id_exist', 'Student ID number a minimum of 8 numbers');
            $stud_id=$this->input->post('s_id');
            $data['stud_id'] = $stud_id;
            $data['nor'] = $this->Student_model->getNOR();
            $data['eth'] = $this->Student_model->getEthnicity();
            $data['religion'] = $this->Student_model->getReligion();
            $data['brgy'] = $this->Student_model->getBarangay();
            $data['municipality'] = $this->Student_model->getMunicipality();		
            $data['province'] = $this->Student_model->getProvince();
            $data['main_content'] = 'elements/contents/forms/form_pdi';
			$this->load->view('layouts/layout_student', $data);
        } else {
            if ($this->input->post('s_id') == NULL){ //if stud_id null incase of ilegal page access
                redirect('layouts/layout_index');
            }
            else { //all user has filled out the form
                $this->setters();
                $student = $this->Student_model->insert_students();
                if($student==TRUE){
                    $data['main_content'] = 'elements/contents/pages/page_student_menu';
                    redirect('layouts/layout_student');
                }
            }
        }
    }
}
