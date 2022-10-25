<?php
    class Education extends MY_Controller {
        public function setters(){
            $stud_id = $this->input->post('s_id');
            $this->Student_model->setSID($stud_id);

            $educ_ename = $this->input->post('e_ename');
            $educ_eyear = $this->input->post('e_eyear');
            $educ_ehonor = $this->input->post('e_ehonor');

            $educ_jname = $this->input->post('e_jname');
            $educ_jyear = $this->input->post('e_jyear');
            $educ_jhonor = $this->input->post('e_jhonor');

            $educ_sname = $this->input->post('e_sname');
            $educ_syear = $this->input->post('e_syear');
            $educ_shonor = $this->input->post('e_shonor');

            $educ_cname = $this->input->post('e_cname');
            $educ_cyear = $this->input->post('e_cyear');
            $educ_chonor = $this->input->post('e_chonor');

            $this->Student_model->setEEName($educ_ename);
            $this->Student_model->setEEYear($educ_ehonor);
            $this->Student_model->setEEHonor($educ_ehonor);

            $this->Student_model->setEJName($educ_jname);
            $this->Student_model->setEJYear($educ_jhonor);
            $this->Student_model->setEJHonor($educ_jhonor);

            $this->Student_model->setESName($educ_sname);
            $this->Student_model->setESYear($educ_shonor);
            $this->Student_model->setESHonor($educ_shonor);

            $this->Student_model->setECName($educ_cname);
            $this->Student_model->setECYear($educ_chonor);
            $this->Student_model->setECHonor($educ_chonor);
        }
    
        public function educ($stud_id){
            if ($stud_id == NULL){
                $this->session->set_flashdata('id_exist', "ERROR ID IS: ".$stud_id);
                $data['main_content'] = 'elements/contents/pages/page_index';
                $this->load->view('layouts/layout_index', $data);
            } else {
                $data['stud_id'] = $stud_id;
                $data['schools'] = $this->Student_model->getSchools();
                $data['main_content'] = 'elements/contents/forms/form_educ';
                $this->load->view('layouts/layout_student', $data);
            }
        }

        public function register($stud_id){
            $this->form_validation->set_rules('e_ename','Elementary Name','required');
            $this->form_validation->set_rules('e_eyear','Elementary Year','required');

            $this->form_validation->set_rules('e_jname','Junior High Name','required');
            $this->form_validation->set_rules('e_jyear','Junior High Name','required');

            $this->form_validation->set_rules('e_sname','Senior High Name','required');
            $this->form_validation->set_rules('e_syear','Senior High Year','required');

            if($this->Student_model->chkStudent($stud_id) == false){ //if form fail
                $data['stud_id'] = $stud_id;
                $data['schools'] = $this->Student_model->getSchools();
                $data['main_content'] = 'elements/contents/forms/form_educ';
                $this->load->view('layouts/layout_student', $data);
            } else {
                if ($stud_id == NULL){ //if stud_id null incase of ilegal page access
                    $data['main_content'] = 'elements/contents/pages/page_index';
                    $this->load->view('layouts/layout_index', $data);
                }
                else { //all user has filled out the form
                    $this->setters();
                    $student = $this->Student_model->insert_educ();
                    $data['stud_id'] = $stud_id;
                    $data['student'] = $this->Student_model->getStudent($stud_id);

                    $data['button_1'] = $this->Student_model->getStat(1, $stud_id);
                    $data['button_2'] = $this->Student_model->getStat(2, $stud_id);
                    $data['button_3'] = $this->Student_model->getStat(3, $stud_id);
                    $data['button_4'] = $this->Student_model->getStat(4, $stud_id);
                    $data['main_content'] = 'elements/contents/pages/page_student_menu';
                    $this->load->view('layouts/layout_student', $data);
                }
            }
        }
    }
?>