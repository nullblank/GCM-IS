<?php
    class Home extends MY_Controller {
        public function setters(){
            $stud_id = $this->input->post('s_id');
            $this->Student_model->setSID($stud_id);

            $home_fname = $this->input->post('h_fname');
            $home_fage = $this->input->post('h_fage');
            $home_feduc = $this->input->post('h_feduc');
            $home_fjob = $this->input->post('h_fjob');
            $home_faddr = $this->input->post('h_faddr');
            $home_fno = $this->input->post('h_fno');
            $home_fdesc = $this->input->post('h_fdesc');

            $home_mname = $this->input->post('h_mname');
            $home_mage = $this->input->post('h_mage');
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

            $home_kmsdrink = $this->input->post('h_kmsdrink');
            $home_kmsdrinkrel = $this->input->post('h_kmsdrinkrel');



            //$this->Student_model->setEEName($educ_ename);

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
            $this->form_validation->set_rules('e_eyear','Elementary Year','required');

            if($this->form_validation->run()==FALSE){ //if form fail
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
                    $student = $this->Student_model->insert_educ();
                    $data['stud_id'] = $stud_id;
                    $data['student'] = $this->Student_model->getStudent($stud_id);

                    $data['button_1'] = $this->Student_model->getStat(1, $stud_id);
                    $data['main_content'] = 'elements/contents/pages/page_student_menu';
                    $this->load->view('layouts/layout_student', $data);
                }
            }
        }
    }
?>