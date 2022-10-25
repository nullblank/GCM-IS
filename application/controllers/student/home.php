<?php
    class Home extends MY_Controller {
        public function setters(){
            $stud_id = $this->input->post('s_id');
            $this->Student_model->setSID($stud_id);

            $home_fname = $this->input->post('h_fname');
            $home_fage = $this->input->post('h_fage');
            $home_fstat = $this->input->post('h_fstat');
            $home_feduc = $this->input->post('h_feduc');
            $home_fjob = $this->input->post('h_fjob');
            $home_faddr = $this->input->post('h_faddr');
            $home_fno = $this->input->post('h_fno');
            $home_fdesc = $this->input->post('h_fdesc');
            $home_mname = $this->input->post('h_mname');
            $home_mage = $this->input->post('h_mage');
            $home_mstat = $this->input->post('h_mstat');
            $home_meduc = $this->input->post('h_meduc');
            $home_mjob = $this->input->post('h_mjob');
            $home_maddr = $this->input->post('h_maddr');
            $home_mno = $this->input->post('h_mno');
            $home_mdesc = $this->input->post('h_mdesc');
            $home_ofwchild = $this->input->post('h_ofwchild');
            $home_ofwrel = $this->input->post('h_ofwrel');
            $home_ofwemail = $this->input->post('h_ofwemail');
            $home_pmarstat = $this->input->post('h_pmarstat');
            $home_pecostat = $this->input->post('h_pecostat');
            $home_pbirthorder = $this->input->post('h_pbirthorder');
            $home_kmsdep = $this->input->post('h_kmsdep');
            $home_kmsdeprel = $this->input->post('h_kmsdeprel');
            $home_kms = $this->input->post('h_kms');
            $home_kmsrel = $this->input->post('h_kmsrel');
            $home_kmsjk = $this->input->post('h_kmsjk');
            $home_kmsjkrel = $this->input->post('h_kmsjkrel');
            $home_kmsdrinkrel_f = $this->input->post('h_kmsdrinkrel_f');
            $home_kmsdrinkrel_m = $this->input->post('h_kmsdrinkrel_m');
            $home_kmsdrinkrel_bs = $this->input->post('h_kmsdrinkrel_bs');
            $home_kmsdrinkrel_ua = $this->input->post('h_kmsdrinkrel_ua');
            $home_kmsdrinkrel_me = $this->input->post('h_kmsdrinkrel_me');
            $home_kmsdrinkrel_g = $this->input->post('h_kmsdrinkrel_g');
            $home_kmsdrinkrel_na = $this->input->post('h_kmsdrinkrel_na');

            //Set to model
            $this->Student_model->setHFName($home_fname);//Father
            $this->Student_model->setHFAge($home_fage);
            $this->Student_model->setHFStat($home_fstat);
            $this->Student_model->setHFEduc($home_feduc);
            $this->Student_model->setHFJob($home_fjob);
            $this->Student_model->setHFAddr($home_faddr);
            $this->Student_model->setHFNo($home_fno);
            $this->Student_model->setHFDesc($home_fdesc);
            $this->Student_model->setHMName($home_mname);//Mother
            $this->Student_model->setHMAge($home_mage);
            $this->Student_model->setHMStat($home_mstat);
            $this->Student_model->setHMEduc($home_meduc);
            $this->Student_model->setHMJob($home_mjob);
            $this->Student_model->setHMAddr($home_maddr);
            $this->Student_model->setHMNo($home_mno);
            $this->Student_model->setHMDesc($home_mdesc);
            $this->Student_model->setHOfwChild($home_ofwchild);
            $this->Student_model->setHOfwRel($home_ofwrel);
            $this->Student_model->setHOfwEmail($home_ofwemail);
            $this->Student_model->setHPMarStat($home_pmarstat);
            $this->Student_model->setHPEcoStat($home_pecostat);
            $this->Student_model->setHPBirthOrder($home_pbirthorder);
            $this->Student_model->setHKmsDep($home_kmsdep);
            $this->Student_model->setHKmsDepRel($home_kmsdeprel);
            $this->Student_model->setHKms($home_kms);
            $this->Student_model->setHKmsRel($home_kmsrel);
            $this->Student_model->setHKmsJk($home_kmsjk);
            $this->Student_model->setHKmsJkRel($home_kmsjkrel);
            // $home_kmsdrinkrel_f = $this->input->post('h_kmsdrinkrel_f');
            // $home_kmsdrinkrel_m = $this->input->post('h_kmsdrinkrel_m');
            // $home_kmsdrinkrel_bs = $this->input->post('h_kmsdrinkrel_bs');
            // $home_kmsdrinkrel_ua = $this->input->post('h_kmsdrinkrel_ua');
            // $home_kmsdrinkrel_me = $this->input->post('h_kmsdrinkrel_me');
            // $home_kmsdrinkrel_g = $this->input->post('h_kmsdrinkrel_g');
            $this->Student_model->setHKmsDrinkRel_F($home_kmsdrinkrel_f);
            $this->Student_model->setHKmsDrinkRel_M($home_kmsdrinkrel_m);
            $this->Student_model->setHKmsDrinkRel_BS($home_kmsdrinkrel_bs);
            $this->Student_model->setHKmsDrinkRel_UA($home_kmsdrinkrel_ua);
            $this->Student_model->setHKmsDrinkRel_ME($home_kmsdrinkrel_me);
            $this->Student_model->setHKmsDrinkRel_G($home_kmsdrinkrel_g);
            $this->Student_model->setHKmsDrinkRel_NA($home_kmsdrinkrel_na);


        }
    
        public function homefam($stud_id){
            if ($stud_id == NULL){
                $this->session->set_flashdata('id_exist', "ERROR ID IS: ".$stud_id);
                $data['main_content'] = 'elements/contents/pages/page_index';
                $this->load->view('layouts/layout_index', $data);
            } else {
                $data['stud_id'] = $stud_id;
                $data['main_content'] = 'elements/contents/forms/form_home';
                $this->load->view('layouts/layout_student', $data);
            }
        }

        public function register($stud_id){
            $this->form_validation->set_rules('h_fname','Father Name','required');

            if($this->Student_model->chkStudent($stud_id) == false){ //if form fail
                $data['stud_id'] = $stud_id;
                $data['main_content'] = 'elements/contents/forms/form_home';
                $this->load->view('layouts/layout_student', $data);
            } else {
                if ($stud_id == NULL){ //if stud_id null incase of ilegal page access
                    $data['main_content'] = 'elements/contents/pages/page_index';
                    $this->load->view('layouts/layout_index', $data);
                }
                else { //all user has filled out the form
                    $this->setters();
                    $student = $this->Student_model->insert_home();
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