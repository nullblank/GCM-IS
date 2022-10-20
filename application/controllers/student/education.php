<?php
    class Education extends MY_Controller {
        public function index(){
            
        }
    
        public function educ($stud_id){
            if ($stud_id == NULL){
                $this->session->set_flashdata('id_exist', "ERROR ID IS: ".$stud_id);
                $data['main_content'] = 'elements/contents/pages/page_index';
                $this->load->view('layouts/layout_index', $data);
            } else {
                $data['stud_id'] = $stud_id;
                $data['main_content'] = 'elements/contents/forms/form_educ';
                $this->load->view('layouts/layout_student', $data);
            }
        }
    }
?>