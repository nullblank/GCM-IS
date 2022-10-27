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

            $med_conf = $this->input->post('m_conf');
            $this->Student_model->setMConf($med_conf);
            $med_confdesc = $this->input->post('m_confdesc');
            $this->Student_model->setMConfDesc($med_confdesc);
            $med_medill = $this->input->post('m_medill');
            $this->Student_model->setMMedIll($med_medill);
            $med_medcon1 = $this->input->post('m_medcon1');
            $this->Student_model->setMMedcon1($med_medcon1);
            $med_medcon2 = $this->input->post('m_medcon2');
            $this->Student_model->setMMedcon2($med_medcon2);
            $med_medcon3 = $this->input->post('m_medcon3');
            $this->Student_model->setMMedcon3($med_medcon3);
            $med_medcon4 = $this->input->post('m_medcon4');
            $this->Student_model->setMMedcon4($med_medcon4);
            $med_medcon5 = $this->input->post('m_medcon5');
            $this->Student_model->setMMedcon5($med_medcon5);
            $med_medcon6 = $this->input->post('m_medcon6');
            $this->Student_model->setMMedcon6($med_medcon6);
            $med_medcon7 = $this->input->post('m_medcon7');
            $this->Student_model->setMMedcon7($med_medcon7);
            $med_medcon8 = $this->input->post('m_medcon8');
            $this->Student_model->setMMedcon8($med_medcon8);
            $med_medcon9 = $this->input->post('m_medcon9');
            $this->Student_model->setMMedcon9($med_medcon9);
            $med_medcon10 = $this->input->post('m_medcon10');
            $this->Student_model->setMMedcon10($med_medcon10);
            $med_medcon11 = $this->input->post('m_medcon11');
            $this->Student_model->setMMedcon11($med_medcon11);
            $med_medcon12 = $this->input->post('m_medcon12');
            $this->Student_model->setMMedcon12($med_medcon12);
            $med_medcon13 = $this->input->post('m_medcon13');
            $this->Student_model->setMMedcon13($med_medcon13);
            $med_medcon14 = $this->input->post('m_medcon14');
            $this->Student_model->setMMedcon14($med_medcon14);
            $med_medcon15 = $this->input->post('m_medcon15');
            $this->Student_model->setMMedcon15($med_medcon15);
            $med_medcon16 = $this->input->post('m_medcon16');
            $this->Student_model->setMMedcon16($med_medcon16);
            $med_medcon17 = $this->input->post('m_medcon17');
            $this->Student_model->setMMedcon17($med_medcon17);
            $med_medcon18 = $this->input->post('m_medcon18');
            $this->Student_model->setMMedcon18($med_medcon18);
            $med_medcon19 = $this->input->post('m_medcon19');
            $this->Student_model->setMMedcon19($med_medcon19);
            $med_medcon20 = $this->input->post('m_medcon20');
            $this->Student_model->setMMedcon20($med_medcon20);
            $med_medconO = $this->input->post('m_medconO');
            $this->Student_model->setMMedconO($med_medconO);
            $med_medcwhen = $this->input->post('m_medwhen');
            $this->Student_model->setMMedWhen($med_medcwhen);
            $med_presmed = $this->input->post('m_presmed');
            $this->Student_model->setMPresMed($med_presmed);
            $med_presmeddesc = $this->input->post('m_presmeddesc');
            $this->Student_model->setMPresMedDesc($med_presmeddesc);
            $med_pastmed = $this->input->post('m_pastmed');
            $this->Student_model->setMPastMed($med_pastmed);
            $med_pastmeddesc = $this->input->post('m_pastmeddesc');
            $this->Student_model->setMPastMedDesc($med_pastmeddesc);
            $med_dis = $this->input->post('m_dis');
            $this->Student_model->setMDis($med_dis);
            $med_disdesc = $this->input->post('m_disdesc');
            $this->Student_model->setMDisDesc($med_disdesc);
            $med_disass = $this->input->post('m_disass');
            $this->Student_model->setMDisAss($med_disass);
            $med_dismonth = $this->input->post('m_dismonth');
            $this->Student_model->setMDisMonth($med_dismonth);
            $med_disyear = $this->input->post('m_disyear');
            $this->Student_model->setMDisYear($med_disyear);

        }

        public function med($stud_id) {
            if ($this->Student_model->chkStudent($stud_id) == false){
                $this->session->set_flashdata('id_exist', "ERROR ID IS: ".$stud_id);
                $data['main_content'] = 'elements/contents/pages/page_index';
                $this->load->view('layouts/layout_index', $data);
            } else {
                $data['stud_id'] = $stud_id;
                $data['main_content'] = 'elements/contents/forms/form_medical';
                $this->load->view('layouts/layout_student', $data);
            }
        }

        public function register($stud_id) {
            $this->form_validation->set_rules('m_conf','Confinement','required');

            if($this->form_validation->run()==FALSE){ //if form fail
                $data['stud_id'] = $stud_id;
                $data['main_content'] = 'elements/contents/forms/form_medical';
                $this->load->view('layouts/layout_student', $data);
            } else {
                if ($stud_id == NULL){ //if stud_id null incase of ilegal page access
                    $data['main_content'] = 'elements/contents/pages/page_index';
                    $this->load->view('layouts/layout_index', $data);
                }
                else { //all user has filled out the form
                    $this->setters();
                    $student = $this->Student_model->insert_med();
                    $data['stud_id'] = $stud_id;
                    $data['student'] = $this->Student_model->getStudent($stud_id);
                    $data['button_1'] = $this->Student_model->getStat(1, $stud_id);
                    $data['button_2'] = $this->Student_model->getStat(2, $stud_id);
                    $data['button_3'] = $this->Student_model->getStat(3, $stud_id);
                    $data['button_4'] = $this->Student_model->getStat(4, $stud_id);
                    $data['button_5'] = $this->Student_model->getStat(5, $stud_id);
                    $data['main_content'] = 'elements/contents/pages/page_student_menu';
                    $this->load->view('layouts/layout_student', $data);
                }
            }
        }

    }
?>