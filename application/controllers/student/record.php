<?php
class Record extends MY_Controller
{

    public function chk_id()
    {

        //Add form validation if field is blank
        //Add form validation if field is NOT a numericl value
        //Add add value validation (Session mockup)
        $stud_id = $this->input->post("stud_id");
        if ($this->Student_model->chk_id($stud_id) == false) {
            $data['stud_id'] = $stud_id;
            $data['main_content'] = 'elements/contents/forms/form_pdi';
            $this->load->view('layouts/layout_student', $data);
        } else {
            redirect('pre_page');
        }
    }
}
