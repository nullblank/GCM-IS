<?php
class Behave extends MY_Controller {
    function setters(){
        $stud_id = $this->input->post('s_id');
        $this->Student_model->setSID($stud_id);

        $beh_q1 = $this->input->post('beh_q1');
        $beh_q2 = $this->input->post('beh_q2');
        $beh_q3 = $this->input->post('beh_q3');
        $beh_q4 = $this->input->post('beh_q4');
        $beh_q5 = $this->input->post('beh_q5');
        $beh_q6 = $this->input->post('beh_q6');
        $beh_q7 = $this->input->post('beh_q7');
        $beh_q8 = $this->input->post('beh_q8');
        $beh_q9 = $this->input->post('beh_q9');
        $beh_q10 = $this->input->post('beh_q10');
        $beh_qdesc = $this->input->post('beh_qdesc');

        $this->Student_model->setBehQ1($beh_q1);
        $this->Student_model->setBehQ2($beh_q2);
        $this->Student_model->setBehQ3($beh_q3);
        $this->Student_model->setBehQ4($beh_q4);
        $this->Student_model->setBehQ5($beh_q5);
        $this->Student_model->setBehQ6($beh_q6);
        $this->Student_model->setBehQ7($beh_q7);
        $this->Student_model->setBehQ8($beh_q8);
        $this->Student_model->setBehQ9($beh_q9);
        $this->Student_model->setBehQ10($beh_q10);
        $this->Student_model->setBehQDesc($beh_qdesc);

    }

    public function beh($stud_id){
        if ($stud_id == NULL){
            $this->session->set_flashdata('id_exist', "ERROR ID IS: ".$stud_id);
            $data['main_content'] = 'elements/contents/pages/page_index';
            $this->load->view('layouts/layout_index', $data);
        } else {
            $data['stud_id'] = $stud_id;
            $data['main_content'] = 'elements/contents/forms/form_behave';
            $this->load->view('layouts/layout_student', $data);
        }
    }

    public function register($stud_id){
        $this->form_validation->set_rules('men_die','Choose','required');
        if($this->Student_model->chkStudent($stud_id) == false){ //if form fail
            $data['stud_id'] = $stud_id;
            $data['main_content'] = 'elements/contents/forms/form_behave';
            $this->load->view('layouts/layout_student', $data);
        } else {
            if ($stud_id == NULL){ //if stud_id null incase of ilegal page access
                $data['main_content'] = 'elements/contents/pages/page_index';
                $this->load->view('layouts/layout_index', $data);
            }
            else { //all user has filled out the form
                $this->setters();
                $student = $this->Student_model->insert_beh();
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