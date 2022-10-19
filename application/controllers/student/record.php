<?php
class Record extends MY_Controller
{

    public function chk_id()
    {

        //Add form validation if field is blank
        //Add form validation if field is NOT a numerical value
        $this->form_validation->set_rules('stud_id','Student ID','trim|required|min_length[8]');
        $stud_id = $this->input->post('stud_id');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('id_exist', 'Student ID number a minimum of 8 numbers');
            $data['main_content'] = 'elements/contents/pages/page_index';
			$this->load->view('layouts/layout_index', $data);
        } else {
            if ($stud_id == NULL){
                redirect('layouts/layout_index');
            }
            else {
                if ($this->Student_model->chk_id($stud_id) == false) {
                    $data['stud_id'] = $stud_id;

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
                    $data['main_content'] = 'elements/contents/pages/page_index';
                    $this->load->view('layouts/layout_index', $data);
                }
            }
        }
    }
    
    public function register(){

    }

    public function setters(){
        //Student Data
        $stud_id=$this->input->post('s_id');
        $stud_first=$this->input->post('s_first');
        $stud_last=$this->input->post('s_last');
        $stud_mi=$this->input->post('s_mi');
        $stud_stat=$this->input->post('s_stat');
        $stud_gender=$this->input->post('s_gender');
        $stud_bday=$this->input->post('s_bday');
        $stud_age=$this->input->post('s_age');
        $stud_eth=$this->input->post('s_eth');
        $stud_rel=$this->input->post('s_rel');
        $stud_marstat=$this->input->post('s_marstat'); //Not null
        $stud_nspouse=$this->input->post('s_nspouse'); //Can be null
        $stud_nochild=$this->input->post('s_nochild'); //Can be null
        $stud_brgy=$this->input->post('s_brgy');
        $stud_muni=$this->input->post('s_municipality');
        $stud_provi=$this->input->post('s_province');
        $stud_nor=$this->input->post('s_nor');
        //Guardian to contact incase of emerg
        $stud_guardn=$this->input->post('s_guardn');
        $stud_guardno=$this->input->post('s_guardno');
        $stud_guardadd=$this->input->post('s_guardadd');
        $stud_guardrel=$this->input->post('s_guardrel');

        //setting
        $this->Student_model->setPID('$stud_id');
                        
    }
}
