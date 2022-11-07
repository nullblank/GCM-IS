<?php
	class Settings_model extends CI_model{
        private $schoolfullname, $schoolacro;
        private $up_schoolfullname, $up_schoolacro;

		private $rel_name, $rel_upname;

		private $barangay, $municipality, $province;
		private $upbarangay, $upmunicipality, $upprovince;
		//Address
		public function setBarangay($FormData){$this->barangay = $FormData;}
		public function setMunicipality($FormData){$this->municipality = $FormData;}
		public function setProvince($FormData){$this->province = $FormData;}
		public function getBarangay(){ return $this->barangay;}
		public function getMunicipality(){ return $this->municipality;}
		public function getProvince(){ return $this->province;}

		public function setUPBarangay($FormData){$this->upbarangay = $FormData;}
		public function setUPMunicipality($FormData){$this->upmunicipality = $FormData;}
		public function setUPProvince($FormData){$this->upprovince = $FormData;}
		public function getUPBarangay(){ return $this->upbarangay;}
		public function getUPMunicipality(){ return $this->upmunicipality;}
		public function getUPProvince(){ return $this->upprovince;}
		//School
        public function setSchoolFullName($FormData){$this->schoolfullname = $FormData;}
        public function getSchoolFullName(){ return $this->schoolfullname;}
        public function setSchoolAcronym($FormData){$this->schoolacro = $FormData;}
        public function getSchoolAcronym(){ return $this->schoolacro;}
        public function setUPSchoolFullName($FormData){$this->up_schoolfullname = $FormData;}
        public function getUPSchoolFullName(){ return $this->up_schoolfullname;}
        public function setUPSchoolAcronym($FormData){$this->up_schoolacro = $FormData;}
        public function getUPSchoolAcronym(){ return $this->up_schoolacro;}
		//Religion
		public function setReligionName($FormData){$this->rel_name = $FormData;}
		public function getReligionName(){return $this->rel_name;}
		public function setUPReligionName($FormData){$this->rel_upname = $FormData;}
		public function getUPReligionName(){return $this->rel_upname;}

		//address
		public function get_barangay(){
			$this->db->select('*');
			$this->db->from('barangay');			
			$query=$this->db->get();				
			return $query->result();
		}
		public function get_municipality(){
			$this->db->select('*');
			$this->db->from('municipality');			
			$query=$this->db->get();				
			return $query->result();
		}
		public function get_province(){
			$this->db->select('*');
			$this->db->from('province');			
			$query=$this->db->get();				
			return $query->result();
		}

		public function insert_barangay(){	
			$data = array(                       
				'barangay' => $this->getBarangay(),
			);
			$query = $this->db->insert('barangay', $data);
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
		public function update_barangay($id){
			if ($this->getUPBarangay()){
				$data = array(                       
					'barangay' => $this->getUPBarangay(),
				);
				$this->db->where('id', $id);
				$query = $this->db->update('barangay', $data);
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

		public function delete_barangay($id){
			$this->db->where('id', $id);
			$query = $this->db->delete('barangay');
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

		//religion
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
		//school
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