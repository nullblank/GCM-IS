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
            $data['brgy'] = $this->Student_model->getBarangay();
			$data['municipality'] = $this->Student_model->getMunicipality();		
			$data['province'] = $this->Student_model->getProvince();
            $data['main_content'] = 'elements/contents/forms/form_pdi';
            $this->load->view('layouts/layout_student', $data);
        } else {
            redirect('pre_page');
        }
    }

    public function setters(){
        $stud_id =$this->input->post('s_id');
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
