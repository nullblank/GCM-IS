<?php
    class Report_model extends CI_Model{

        function fetch_data(){
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
            $this->db->from('tblstudents');
            return $this->db->get();
        }

    }
?>