<?php

    //Variables Legend:
    // m_medcon1 = Heart Failure
    // m_medcon2 = Asthma
    // m_medcon3 = HIV/AIDS Disease
    // m_medcon4 = Sleeping Problem
    // m_medcon5 = Allergies
    // m_medcon6 = UTI
    // m_medcon7 = Hepatitis
    // m_medcon8 = Lung Conditions
    // m_medcon9 = Depression
    // m_medcon10 = Hypertension
    // m_medcon11 = Hearing Loss
    // m_medcon12 = Kidney Problem
    // m_medcon13 = Diabetes
    // m_medcon14 = Covid-19
    // m_medcon15 = Speech Problem
    // m_medcon16 = Visual Problem
    // m_medcon17 = Anxiety
    // m_medcon18 = Anemia
    // m_medcon19 = Skin
    // m_medcon20 = Cancer
    // m_medconO = 'User Specified'

    class Medical extends MY_Controller {

        public function setters() {
            $stud_id = $this->input->post('s_id');
            $this->Student_model->setSID($stud_id);

            
        }

        public function med($stud_id) {
            if ($stud_id == NULL){
                $this->session->set_flashdata('id_exist', "ERROR ID IS: ".$stud_id);
                $data['main_content'] = 'elements/contents/pages/page_index';
                $this->load->view('layouts/layout_index', $data);
            } else {
                $data['stud_id'] = $stud_id;
                $data['main_content'] = 'elements/contents/forms/form_medical';
                $this->load->view('layouts/layout_student', $data);
            }
        }

        public function register() {

        }

    }
?>