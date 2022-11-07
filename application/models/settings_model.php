<?php
	class Settings_model extends CI_model{
        private $schoolfullname, $schoolacro;
        private $up_schoolfullname, $up_schoolacro;

		private $rel_name, $rel_upname;

        public function setSchoolFullName($FormData){$this->schoolfullname = $FormData;}
        public function getSchoolFullName(){ return $this->schoolfullname;}

        public function setSchoolAcronym($FormData){$this->schoolacro = $FormData;}
        public function getSchoolAcronym(){ return $this->schoolacro;}

        public function setUPSchoolFullName($FormData){$this->up_schoolfullname = $FormData;}
        public function getUPSchoolFullName(){ return $this->up_schoolfullname;}

        public function setUPSchoolAcronym($FormData){$this->up_schoolacro = $FormData;}
        public function getUPSchoolAcronym(){ return $this->up_schoolacro;}

		public function setReligionName($FormData){$this->rel_name = $FormData;}
		public function getReligionName(){return $this->rel_name;}

		public function setUPReligionName($FormData){$this->rel_upname = $FormData;}
		public function getUPReligionName(){return $this->rel_upname;}

		public function get_religions(){
			$this->db->select('*');
			$this->db->from('religion');			
			$query=$this->db->get();				
			return $query->result();
		}

		public function insert_rel(){	
			$data = array(                       
				'religion' => $this->getReligionName(),
			);
			$query = $this->db->insert('religion', $data);
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

		public function update_rel($id){
			if ($this->getUPReligionName()){
				$data = array(                       
					'religion' => $this->getUPReligionName(),
				);
				$this->db->where('id', $id);
				$query = $this->db->update('religion', $data);
			} else {}
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

		public function delete_rel($id){
			$this->db->where('id', $id);
			$query = $this->db->delete('religion');
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

        public function get_schools(){
			$this->db->select('*');
			$this->db->from('school');			
			$query=$this->db->get();				
			return $query->result();
		}

        public function insert_school(){	
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

        public function update_school($id){
            if ($this->getUPSchoolFullName() && $this->getUPSchoolAcronym()) {
                $data = array(                       
                    'school' => $this->getUPSchoolAcronym(),
                    'description' => $this->getUPSchoolFullName(),
                );
                $this->db->where('id', $id);
                $query = $this->db->update('school', $data);
            }
            else if ($this->getUPSchoolFullName()) {
                $data = [                       
                    'description' => $this->getUPSchoolFullName()
                ];
                $this->db->where('id', $id);
                $query = $this->db->update('school', $data);
            }
            else if ($this->getUPSchoolAcronym()) {
                $data = [                       
                    'school' => $this->getUPSchoolAcronym()
                ];
                $this->db->where('id', $id);
                $query = $this->db->update('school', $data);
            } else {}
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

		public function delete_school($id){
			$this->db->where('id', $id);
			$query = $this->db->delete('school');
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