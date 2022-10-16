<?php
class Record extends MY_Controller
{

    public function chk_id()
    {

        //Add form validation if field is blank
        //Add form validation if field is NOT a numericl value
        //Add add value validation (Session mockup) 32644172 = [8]
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

    public function setters(){
        //Still incomplete
        $stud_id=$this->input->post('s_id');
        $stud_first=$this->input->post('s_first');
        $stud_last=$this->input->post('s_last');
        $stud_mi=$this->input->post('s_mi');
        $stud_gender=$this->input->post('s_gender');
        $stud_bday=$this->input->post('s_bday');
        $stud_age=$this->input->post('s_age');
        $stud_eth=$this->input->post('s_eth');
        $stud_marstat=$this->input->post('s_marstat');


        //Remove all below soon
        $p_last =$this->input->post('s_last');
        $p_first = $this->input->post('s_first');
        $p_mi =$this->input->post('s_mi');
        $p_brgy =$this->input->post('s_brgy');
        $p_municipality =$this->input->post('s_municipality');
        $p_province =$this->input->post('s_province');
        $p_bday =$this->input->post('s_bday');
        $p_gender=$this->input->post('s_gender');
        $p_age=$this->input->post('s_age');	
        $p_cpnumber=$this->input->post('s_cpnumber');				
        $p_photo =$this->input->post('s_photo');
                                
        $this->Patient_model->setPID($pid);
        $this->Patient_model->setPLast($p_last);			
        $this->Patient_model->setPFirst($p_first);
        $this->Patient_model->setPmi($p_mi);
        $this->Patient_model->setPBrgy($p_brgy);
        $this->Patient_model->setPMunicipality($p_municipality);
        $this->Patient_model->setPProvince($p_province);
        $this->Patient_model->setPBday($p_bday);
        $this->Patient_model->setPGender($p_gender);
        $this->Patient_model->setPAge($p_age);									
        $this->Patient_model->setPCPNumber($p_cpnumber);																				
        $this->Patient_model->setPPhoto($p_photo);	
                        
    }
}
