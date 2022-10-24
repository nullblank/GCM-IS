<?php
class Mental extends MY_Controller {
    function setters(){
        $stud_id = $this->input->post('s_id');
        $mental_die = $this->input->post('men_die');
        $mental_q1 = $this->input->post('men_q1');
        $mental_q2 = $this->input->post('men_q2');
        $mental_q3 = $this->input->post('men_q3');
        $mental_q4 = $this->input->post('men_q4');
        $mental_q5 = $this->input->post('men_q5');
        $mental_diein = $this->input->post('men_diein');
        $mental_hurtdesc = $this->input->post('men_hurtdesc');
        $mental_hurtres = $this->input->post('men_hurtres');
        $mental_hurtfirst = $this->input->post('men_hurtfirst');
        $mental_hurtlast = $this->input->post('men_hurtlast');
        $mental_hurtdesc = $this->input->post('men_hurtdesc');

        $this->Student_model->setSID($stud_id);

    }

    function men($stud_id){
        if ($stud_id == NULL){
            $this->session->set_flashdata('id_exist', "ERROR ID IS: ".$stud_id);
            $data['main_content'] = 'elements/contents/pages/page_index';
            $this->load->view('layouts/layout_index', $data);
        } else {
            $data['stud_id'] = $stud_id;
            $data['main_content'] = 'elements/contents/forms/form_mental';
            $this->load->view('layouts/layout_student', $data);
        }
    }

    public function register($stud_id){
        $this->form_validation->set_rules('e_ename','Elementary Name','required');
        if($this->Student_model->chkStudent($stud_id) == false){ //if form fail
            $data['stud_id'] = $stud_id;
            $data['main_content'] = 'elements/contents/forms/form_mental';
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
                $data['main_content'] = 'elements/contents/pages/page_student_menu';
                $this->load->view('layouts/layout_student', $data);
            }
        }
    }

}
?>