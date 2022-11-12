<?php
    class Record_model extends CI_model {


        public function get_student($id)
        {
            $this->db->select('*');
            $this->db->from('tblstudents');
            $this->db->where('stud_id', $id);
            $query = $this->db->get();
            if ($query->num_rows() == 0){
                return false;
            } else {
                return $query->row();
            }
            
        }



    }
?>