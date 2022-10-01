<?php
	class Student_model extends CI_model{	

		private $userid, $sid;
		private $s_last, $s_first, $s_mi;
		private $s_brgy, $s_municipality, $s_province;
		private $s_bday, $s_gender, $s_age;
		private $s_cpnumber, $s_photo;
		private $username, $searchKey;
		
		public function setUserID($UserID){$this->userid = $UserID;}
		public function getUserID(){return $this->userid;}
		
		public function setUserName($UserName){$this->username = $UserName;}
		public function getUserName(){return $this->username;}
		
		public function setSID($SID){$this->sid = $SID;}
		public function getSID(){return $this->sid;}
	
		public function setSLast($SLast){$this->s_last = $SLast;}
		public function getSLast(){return $this->s_last;}	

		public function setSFirst($SFirst){$this->s_first = $SFirst;}
		public function getSFirst(){return $this->s_first;}	

		public function setSmi($Smi){$this->s_mi = $Smi;}
		public function getSmi(){return $this->s_mi;}	
		
		public function setSBrgy($SBrgy){$this->s_brgy = $SBrgy;}
		public function getSBrgy(){return $this->s_brgy;}				

		public function setSMunicipality($SMunicipality){$this->s_municipality = $SMunicipality;}
		public function getSMunicipality(){return $this->s_municipality;}				


		public function setSProvince($SProvince){$this->s_province = $SProvince;}
		public function getSProvince(){return $this->s_province;}				

		public function setSBday($SBday){$this->s_bday = $SBday;}
		public function getSBday(){return $this->s_bday;}				

		public function setSGender($SGender){$this->s_gender = $SGender;}
		public function getSGender(){return $this->s_gender;}				


		public function setSAge($SAge){$this->s_age = $SAge;}
		public function getSAge(){return $this->s_age;}
		
		public function setSCPNumber($SCPNumber){$this->s_cpnumber = $SCPNumber;}
		public function getSCPNumber(){return $this->s_cpnumber;}
		
		public function setSPhoto($SPhoto){$this->s_photo = $SPhoto;}
		public function getSPhoto(){return $this->s_photo;}
		
		public function setSearchBy($SearchKey){$this->searchKey = $SearchKey;}
		public function getSearchBy(){return $this->searchKey;}
		
		public function insert_student(){			
			$data=array(						
				'sid' =>$this->getSID(),
				's_last' =>$this->getSLast(),
				's_first' =>$this->getSFirst(),
				's_mi' =>$this->getSmi(),
				's_brgy' =>$this->getSBrgy(),
				's_municipality' =>$this->getSMunicipality(),
				's_province' =>$this->getSProvince(),
				's_bday' =>$this->getSBday(),
				's_gender'=>$this->getSGender(),
				's_age' =>$this->getSAge(),	
				's_cpnumber' => $this->getSCPNumber(),		
				's_photo' =>$this->getSPhoto()
			);									
			$query = $this->db->insert('tblstudent',$data);				
			if($query==true){
				$data=array(
					'action' => 'INSERTED the record of '.$this->getSFirst().' '.$this->getSLast(),
					'tablename' => 'tblstudent',
					'userid' => $this->getUserID(),
					'username' => $this->getUserName()				
				);
				$this->db->insert('audit',$data);
				return true;
			}								
		}
		public function update_student(){
			if($this->getSPhoto()==null){
				if($this->getSBday()==null){
					$data=array(				
						'sid' =>$this->getSID(),
						's_last' =>$this->getSLast(),
						's_first' =>$this->getSFirst(),
						's_mi' =>$this->getSmi(),
						's_brgy' =>$this->getSBrgy(),
						's_municipality' =>$this->getSMunicipality(),
						's_province' =>$this->getSProvince(),
						's_bday' =>$this->getSBday(),
						's_gender'=>$this->getSGender(),
						's_age' =>$this->getSAge(),	
						's_cpnumber' => $this->getSCPNumber()							
							
				);
				}else{
					$data=array(				
						'sid' =>$this->getSID(),
						's_last' =>$this->getSLast(),
						's_first' =>$this->getSFirst(),
						's_mi' =>$this->getSmi(),
						's_brgy' =>$this->getSBrgy(),
						's_municipality' =>$this->getSMunicipality(),
						's_province' =>$this->getSProvince(),
						's_bday' =>$this->getSBday(),
						's_gender'=>$this->getSGender(),
						's_age' =>$this->getSAge(),	
						's_cpnumber' => $this->getSCPNumber()							
											
					);
				}				
			} else {
				if($this->getSBday()==null){
					$data=array(
						'sid' =>$this->getSID(),
						's_last' =>$this->getSLast(),
						's_first' =>$this->getSFirst(),
						's_mi' =>$this->getSmi(),
						's_brgy' =>$this->getSBrgy(),
						's_municipality' =>$this->getSMunicipality(),
						's_province' =>$this->getSProvince(),						
						's_gender'=>$this->getSGender(),
						's_age' =>$this->getSAge(),	
						's_cpnumber' => $this->getSCPNumber(),							
						's_photo' =>$this->getSPhoto()
					);
				}else {				
				$data=array(
						'sid' =>$this->getSID(),
						's_last' =>$this->getSLast(),
						's_first' =>$this->getSFirst(),
						's_mi' =>$this->getSmi(),
						's_brgy' =>$this->getSBrgy(),
						's_municipality' =>$this->getSMunicipality(),
						's_province' =>$this->getSProvince(),
						's_bday' =>$this->getSBday(),
						's_gender'=>$this->getSGender(),
						's_age' =>$this->getSAge(),	
						's_cpnumber' => $this->getSCPNumber(),							
						's_photo' =>$this->getSPhoto()						
					);
				}
			}
			$this->db->where('sid',$this->getSID());
			$query = $this->db->update('tblstudent',$data);			
												
			if($query==true){
				$data=array(
					'action' => 'UPDATED the record of '.$this->getSFirst().' '.$this->getSLast(),
					'tablename' => 'tblstudent',
					'userid' => $this->getUserID(),
					'username' => $this->getUserName()					
				);
				$this->db->insert('audit',$data);
				return true;
			}		
		}		
		public function getStudentsCount() {
			return $this->db->count_all('tblstudent');			
		}	
		
		public function get_students($limit,$offset){
			$this->db->limit($limit,$offset);
			$this->db->select('*');
			$this->db->from('tblstudent');			
			$query=$this->db->get();				
			return $query->result();
		}
		
		public function getBarangay(){
			$this->db->select('*');
			$this->db->from('barangay');
			$this->db->order_by('barangay','asc');
			$query=$this->db->get();
			$query->num_rows();
			return $query->result();
		}
		public function getMunicipality(){
			$this->db->select('*');
			$this->db->from('municipality');
			$this->db->order_by('municipality','asc');
			$query=$this->db->get();
			$query->num_rows();
			return $query->result();
		}		
		
		public function getProvince(){
			$this->db->select('*');
			$this->db->from('province');
			$this->db->order_by('province','asc');
			$query=$this->db->get();
			$query->num_rows();
			return $query->result();
		}	
					
		public function get_student(){
			
			$this->db->select('*');
			$this->db->from('tblstudent');	
			$this->db->where('sid',$this->getSID());			
			$query=$this->db->get();				
			return $query->result();
		}

		public function showStudent($id){
			$this->db->select('*');
			$this->db->from('tblstudent');	
			$this->db->where('sid',$id);			
			$query=$this->db->get();				
			return $query->result();			
		}
		public function getStudent($id){
			$this->db->select('*');
			$this->db->from('tblstudent');	
			$this->db->where('sid',$id);			
			$query=$this->db->get();				
			return $query->row();			
		}	
		
		public function get_student_edit(){
			$this->db->select('*');
			$this->db->from('tblstudent');	
			$this->db->where('sid',$this->getSID());			
			$query=$this->db->get();				
			return $query->row();						
		}

		public function search_student(){			
			$this->db->select('*');
			$this->db->from('tblstudent');			
			$this->db->like('sid',$this->getSearchBy(),'after');		
			$this->db->or_like('s_last',$this->getSearchBy(),'after');
			$this->db->or_like('s_first',$this->getSearchBy(),'after');
			$this->db->order_by('s_last','asc');
			$query=$this->db->get();
			return $query->result();			
		}	

		public function getStudentMasterList()	{
			$this->db->select('*');
			$this->db->from('tblstudent');	
			$this->db->order_by('s_last','asc');			
			$query=$this->db->get();				
			return $query->result();						
		}	
		public function getMaleStudentMasterList()	{
			$this->db->select('*');
			$this->db->from('tblstudent');	
			$this->db->where('s_gender','Male');	
			$this->db->order_by('s_last','asc');			
			$query=$this->db->get();				
			return $query->result();						
		}

		public function getFemaleStudentMasterList()	{
			$this->db->select('*');
			$this->db->from('tblstudent');	
			$this->db->where('s_gender','Female');	
			$this->db->order_by('s_last','asc');			
			$query=$this->db->get();				
			return $query->result();						
		}
		public function getStudentGender() {			
			$this->db->select('*');
			$this->db->from('view_student_gender');		
			$query=$this->db->get();			
			$query->num_rows();			
			return $query->result();
		}	
		public function getStudentTotal() {
			$this->db->select('count(sid) as total');
			$this->db->from('tblstudent');				
			$query=$this->db->get();											
			return $query->row();			
		}	
		
	}	
?>