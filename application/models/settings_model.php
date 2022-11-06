<?php
	class Settings_model extends CI_model{
        private $schoolfullname, $schoolacro;

        public function setSchoolFullName($FormData){$this->schoolfullname = $FormData;}
        public function getSchoolFullName(){ return $this->schoolfullname;}

        public function setSchoolAcronym($FormData){$this->schoolacro = $FormData;}
        public function getSchoolAcronym(){ return $this->schoolacro;}

        public function get_schools(){
			$this->db->select('*');
			$this->db->from('school');			
			$query=$this->db->get();				
			return $query->result();
		}

        public function insert_school(){ //Update to audit staff		
			$data = array(                       
				'school' => $this->getSchoolAcronym(),
				'description' => $this->getSchoolFullName(),
			);
			$query = $this->db->insert('school', $data);
			// AUDIT PLS FIX FOR LOGGING SESSION AND DEVICE DATA FOR TRACE
			// if ($query == true) {
			//     $data = array(
			//         'action' => 'INSERTED the record of ' . $this->getSFirst() . ' ' . $this->getSLast(),
			//         'tablename' => 'tblstudent',
			//         'userid' => $this->getUserID(),
			//         'username' => $this->getUserName()
			//     );
			//     $this->db->insert('audit', $data);
			//     return true;
			//
    	}
							
	}
?>