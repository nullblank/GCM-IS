<?php
class Record extends MY_Controller
{
    public function setters(){ //Did not set user session ID for debugging

        //User Data
        $uid = $this->input->post('uid');
        $un = $this->input->post('un');
        $this->Student_model->setUserID($uid);
        $this->Student_model->setUserName($un);
        //Student Data
        $stud_id=$this->input->post('s_id');
        $stud_first=$this->input->post('s_first');
        $stud_last=$this->input->post('s_last');
        $stud_mi=$this->input->post('s_mi');
        $stud_course=$this->input->post('s_course');
        $stud_year=$this->input->post('s_year');
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
        $this->Student_model->setSCourse($stud_course);
        $this->Student_model->setSYear($stud_year);
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
                    $data['courses'] = $this->Student_model->getCourses();
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
                    $this->toMenu($stud_id);
                }
            }
        }
    }

    public function toMenu($stud_id){ //Ilegal access control
        if ($this->Student_model->chkStudent($stud_id) == true){
            $data['stud_id'] = $stud_id;
            $data['student'] = $this->Student_model->getStudent($stud_id);
            $data['button_1'] = $this->Student_model->getStat(1, $stud_id);
            $data['button_2'] = $this->Student_model->getStat(2, $stud_id);
            $data['button_3'] = $this->Student_model->getStat(3, $stud_id);
            $data['button_4'] = $this->Student_model->getStat(4, $stud_id);
            $data['button_5'] = $this->Student_model->getStat(5, $stud_id);
            $data['main_content'] = 'elements/contents/pages/page_student_menu';
            $this->load->view('layouts/layout_student', $data);
        } else {
            $data['main_content'] = 'elements/contents/pages/page_index';
            $this->load->view('layouts/layout_index', $data);
        }
    }
    
    public function register($stud_id){
        //form validation rules
        //complete validation rules later
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

        
        if($this->form_validation->run()==FALSE){ //if form fail
            //$this->session->set_flashdata('id_exist', 'Student ID number a minimum of 8 numbers');
            $data['stud_id'] = $stud_id;
            $data['courses'] = $this->Student_model->getCourses();
            $data['nor'] = $this->Student_model->getNOR();
            $data['eth'] = $this->Student_model->getEthnicity();
            $data['religion'] = $this->Student_model->getReligion();
            $data['brgy'] = $this->Student_model->getBarangay();
            $data['municipality'] = $this->Student_model->getMunicipality();		
            $data['province'] = $this->Student_model->getProvince();
            $data['main_content'] = 'elements/contents/forms/form_pdi';
			$this->load->view('layouts/layout_student', $data);
        } else {
            if ($stud_id == NULL){ //if stud_id null incase of ilegal page access
                $data['main_content'] = 'elements/contents/pages/page_index';
                $this->load->view('layouts/layout_index', $data);
            }
            else { //all user has filled out the form
                $this->setters();
                $student = $this->Student_model->insert_students();
                $this->toMenu($stud_id);
            }
        }
    }

    public function view(){
        if ($this->session->has_userdata('id')) {
            $id=$this->input->post('sid');
            $this->session->set_userdata('');
            $session_data = $this->session->userdata('id');
            $this->User_model->get_login($session_data);
            $data['user'] = $this->User_model->get_login($session_data);
            $data['student'] = $this->Record_model->get_student($id);
            $data['main_content'] = 'elements/contents/forms/form_studrec';
            $data['record_content'] = 'elements/contents/pages/blank';
            $this->load->view('layouts/layout_admin', $data);
        } else {
            redirect('login');
        }
    }

    public function viewrecord($page){
        if ($this->session->has_userdata('id')) {
            
            $this->session->set_userdata('');
            $session_data = $this->session->userdata('id');
            $this->User_model->get_login($session_data);
            $data['user'] = $this->User_model->get_login($session_data);

            $data = $this->getDataArray($page, $data);

            $this->load->view('layouts/layout_admin', $data);
        } else {
            redirect('login');
        }
    }

    public function getDataArray($page, $data){
        $id=$this->input->post('sid');
        $data['courses'] = $this->Student_model->getCourses();
        $data['nor'] = $this->Student_model->getNOR();
        $data['eth'] = $this->Student_model->getEthnicity();
        $data['religion'] = $this->Student_model->getReligion();
        $data['brgy'] = $this->Student_model->getBarangay();
        $data['municipality'] = $this->Student_model->getMunicipality();		
        $data['province'] = $this->Student_model->getProvince();
        $data['main_content'] = 'elements/contents/forms/form_studrec';
        $data['student'] = $this->Record_model->get_student($id);
        $data['record_content'] = $this->pagelist($page, $id);
        $data['educ'] = $this->Record_model->get_education($id);
        $data['schools'] = $this->Student_model->getSchools($id);
        return $data;
    }

    public function editrecord($page){
        if ($this->session->has_userdata('id')) {
            $id=$this->input->post('sid');
            $this->session->set_userdata('');
            $session_data = $this->session->userdata('id');
            $this->User_model->get_login($session_data);
            $data['user'] = $this->User_model->get_login($session_data);
            $data = $this->getDataArray($page, $data);
            if ($page == 'pi') {
                $data['record_content'] = 'elements/contents/forms/record_personal_information';
            }
            else if ($page == 'educ') {
                $data['record_content'] = 'elements/contents/forms/record_educational_background';
            }
            else if ($page == 'med') {
                $data['record_content'] = 'elements/contents/forms/record_medical_history';
            }
            else if ($page == 'men') {
                $data['record_content'] = 'elements/contents/forms/record_mental_health';
            }
            else if ($page == 'sur') {
                $data['record_content'] = 'elements/contents/forms/record_survey';
            }
            $data['student'] = $this->Record_model->get_student($id);
            $this->load->view('layouts/layout_admin', $data);
        } else {
            redirect('login');
        }
    }

    public function pagelist($page, $id) {
        if ($page == 'pi') {
            return 'elements/contents/pages/page_record_personal_information';
        }
        else if ($page == 'educ') {
            if ($this->Record_model->get_education($id)){
                return 'elements/contents/pages/page_record_educational_background';
            } else {
                return 'elements/contents/pages/page_record_no';
            }
        }
        else if ($page == 'med') {
            return 'elements/contents/pages/page_record_medical_history';
        }
        else if ($page == 'men') {
            return 'elements/contents/pages/page_record_mental_health';
        }
        else if ($page == 'sur') {
            return "elements/contents/pages/page_record_survey";
        }
        else {
            return false;
        }
    }

    public function updaterecord($page){
        $id=$this->input->post('sid');
        $this->session->set_userdata('');
        $session_data = $this->session->userdata('id');
        $this->User_model->get_login($session_data);
        $data['user'] = $this->User_model->get_login($session_data);
        $data['courses'] = $this->Student_model->getCourses();
        $data['nor'] = $this->Student_model->getNOR();
        $data['eth'] = $this->Student_model->getEthnicity();
        $data['religion'] = $this->Student_model->getReligion();
        $data['brgy'] = $this->Student_model->getBarangay();
        $data['municipality'] = $this->Student_model->getMunicipality();		
        $data['province'] = $this->Student_model->getProvince();
        $data['student'] = $this->Record_model->get_student($id);
        $data['main_content'] = 'elements/contents/forms/form_studrec';
        if ($this->session->has_userdata('id')) {
            $this->setters();
            $this->Student_model->update_student($id);
            $data['record_content'] = $this->pagelist($page, $id);
            $id = $this->Student_model->getSID();
            $data['student'] = $this->Record_model->get_student($id);
            $this->load->view('layouts/layout_admin', $data);

        } else {
            redirect('login');
        }
    }

}
