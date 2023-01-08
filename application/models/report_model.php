<?php
    class Report_model extends CI_Model{

        function fetch_PersonalInfo(){
            $this->db->select("
                stud_id,
                s_first,
                s_last,
                s_mi,
                s_course,
                s_school,
                s_year,
                s_yearreg,
                s_stat,
                s_email,
                s_gender,
                s_bday,
                s_age, 
                s_eth, 
                s_rel,
                s_marstat,
                s_nspouse,
                s_nchild,
                s_brgy,
                s_muni,
                s_provi,
                s_nor
            ");
            $this->db->from('tblstudents');
            return $this->db->get();
        }

        function fetch_fPersonalInfo($filter){
            $this->db->select("
                stud_id,
                s_first,
                s_last,
                s_mi,
                s_course,
                s_school,
                s_year,
                s_yearreg,
                s_stat,
                s_email,
                s_gender,
                s_bday,
                s_age, 
                s_eth, 
                s_rel,
                s_marstat,
                s_nspouse,
                s_nchild,
                s_brgy,
                s_muni,
                s_provi,
                s_nor
            ");
            $this->db->from('tblstudents');
            $this->db->where('s_yearreg', $filter);
            return $this->db->get();
        }

        function fetch_Education(){
            $this->db->select("
                stud_id,
                s_first,
                s_last,
                s_mi,
                s_course,
                s_school,
                s_year,
                s_schoolyear,
                s_stat,
                s_email,
                s_gender,
                s_bday,
                s_age, 
                s_eth, 
                s_rel,
                s_marstat,
                s_nspouse,
                s_nchild,
                s_brgy,
                s_muni,
                s_provi,
                s_nor
            ");
            $this->db->from('tbleducation');
            return $this->db->get();
        }

    }
?>