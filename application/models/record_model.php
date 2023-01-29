<?php
    class Record_model extends CI_model {

        public function get_student($id){
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


        public function get_education($id){
            $this->db->select('*');
            $this->db->from('tbleducation');
            $this->db->where('stud_id', $id);
            $query = $this->db->get();
            if ($query->num_rows() == 0){
                return false;
            } else {
                return $query->row();
            }
        }

        public function get_medical($id){
            $this->db->select('*');
            $this->db->from('tblmedical');
            $this->db->where('stud_id', $id);
            $query = $this->db->get();
            if ($query->num_rows() == 0){
                return false;
            } else {
                return $query->row();
            }
        }

        public function get_mental($id){
            $this->db->select('*');
            $this->db->from('tblmental');
            $this->db->where('stud_id', $id);
            $query = $this->db->get();
            if ($query->num_rows() == 0){
                return false;
            } else {
                return $query->row();
            }
        }

        public function get_survey($id){
            $this->db->select('*');
            $this->db->from('tblbehave');
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