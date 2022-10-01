<?php
	class Counselor_model extends CI_model{	

		private $userid, $cid;
		private $c_last, $c_first, $c_mi;
		private $c_brgy, $c_municipality, $c_province;
		private $c_bday, $c_gender, $c_age;
		private $c_cpnumber, $c_photo;
		private $username, $searchKey;
		
		public function setUserID($UserID){$this->userid = $UserID;}
		public function getUserID(){return $this->userid;}
		
		public function setUserName($UserName){$this->username = $UserName;}
		public function getUserName(){return $this->username;}
		
		public function setCID($CID){$this->cid = $CID;}
		public function getCID(){return $this->cid;}
	
		public function setCLast($CLast){$this->c_last = $CLast;}
		public function getCLast(){return $this->c_last;}	

		public function setCFirst($CFirst){$this->c_first = $CFirst;}
		public function getCFirst(){return $this->c_first;}	

		public function setCmi($Cmi){$this->c_mi = $Cmi;}
		public function getCmi(){return $this->c_mi;}	
		
		public function setCBrgy($CBrgy){$this->c_brgy = $CBrgy;}
		public function getCBrgy(){return $this->c_brgy;}				

		public function setCMunicipality($CMunicipality){$this->c_municipality = $CMunicipality;}
		public function getCMunicipality(){return $this->c_municipality;}				


		public function setCProvince($CProvince){$this->c_province = $CProvince;}
		public function getCProvince(){return $this->c_province;}				

		public function setCBday($CBday){$this->c_bday = $CBday;}
		public function getCBday(){return $this->c_bday;}				

		public function setCGender($CGender){$this->c_gender = $CGender;}
		public function getCGender(){return $this->c_gender;}				


		public function setCAge($CAge){$this->c_age = $CAge;}
		public function getCAge(){return $this->c_age;}
		
		public function setCCPNumber($CCPNumber){$this->c_cpnumber = $CCPNumber;}
		public function getCCPNumber(){return $this->c_cpnumber;}
		
		public function setCPhoto($CPhoto){$this->c_photo = $CPhoto;}
		public function getCPhoto(){return $this->c_photo;}
		
		public function setSearchBy($SearchKey){$this->searchKey = $SearchKey;}
		public function getSearchBy(){return $this->searchKey;}
		
		public function insert_counselor(){			
			$data=array(						
				'cid' =>$this->getCID(),
				'c_last' =>$this->getCLast(),
				'c_first' =>$this->getCFirst(),
				'c_mi' =>$this->getCmi(),
				'c_brgy' =>$this->getCBrgy(),
				'c_municipality' =>$this->getCMunicipality(),
				'c_province' =>$this->getCProvince(),
				'c_bday' =>$this->getCBday(),
				'c_gender'=>$this->getCGender(),
				'c_age' =>$this->getCAge(),	
				'c_cpnumber' => $this->getCCPNumber(),		
				'c_photo' =>$this->getCPhoto()
			);									
			$query = $this->db->insert('tblcounselor',$data);				
			if($query==true){
				$data=array(
					'action' => 'INSERTED the record of '.$this->getCFirst().' '.$this->getCLast(),
					'tablename' => 'tblcounselor',
					'userid' => $this->getUserID(),
					'username' => $this->getUserName()				
				);
				$this->db->insert('audit',$data);
				return true;
			}								
		}
		public function update_counselor(){
			if($this->getCPhoto()==null){
				if($this->getCBday()==null){
					$data=array(				
						'cid' =>$this->getCID(),
						'c_last' =>$this->getCLast(),
						'c_first' =>$this->getCFirst(),
						'c_mi' =>$this->getCmi(),
						'c_brgy' =>$this->getCBrgy(),
						'c_municipality' =>$this->getCMunicipality(),
						'c_province' =>$this->getCProvince(),
						'c_bday' =>$this->getCBday(),
						'c_gender'=>$this->getCGender(),
						'c_age' =>$this->getCAge(),	
						'c_cpnumber' => $this->getCCPNumber()							
							
				);
				}else{
					$data=array(				
						'cid' =>$this->getCID(),
						'c_last' =>$this->getCLast(),
						'c_first' =>$this->getCFirst(),
						'c_mi' =>$this->getCmi(),
						'c_brgy' =>$this->getCBrgy(),
						'c_municipality' =>$this->getCMunicipality(),
						'c_province' =>$this->getCProvince(),
						'c_bday' =>$this->getCBday(),
						'c_gender'=>$this->getCGender(),
						'c_age' =>$this->getCAge(),	
						'c_cpnumber' => $this->getCCPNumber()							
											
					);
				}				
			} else {
				if($this->getCBday()==null){
					$data=array(
						'cid' =>$this->getCID(),
						'c_last' =>$this->getCLast(),
						'c_first' =>$this->getCFirst(),
						'c_mi' =>$this->getCmi(),
						'c_brgy' =>$this->getCBrgy(),
						'c_municipality' =>$this->getCMunicipality(),
						'c_province' =>$this->getCProvince(),						
						'c_gender'=>$this->getCGender(),
						'c_age' =>$this->getCAge(),	
						'c_cpnumber' => $this->getCCPNumber(),							
						'c_photo' =>$this->getCPhoto()
					);
				}else {				
				$data=array(
						'cid' =>$this->getCID(),
						'c_last' =>$this->getCLast(),
						'c_first' =>$this->getCFirst(),
						'c_mi' =>$this->getCmi(),
						'c_brgy' =>$this->getCBrgy(),
						'c_municipality' =>$this->getCMunicipality(),
						'c_province' =>$this->getCProvince(),
						'c_bday' =>$this->getCBday(),
						'c_gender'=>$this->getCGender(),
						'c_age' =>$this->getCAge(),	
						'c_cpnumber' => $this->getCCPNumber(),							
						'c_photo' =>$this->getCPhoto()						
					);
				}
			}
			$this->db->where('cid',$this->getCID());
			$query = $this->db->update('tblcounselor',$data);			
												
			if($query==true){
				$data=array(
					'action' => 'UPDATED the record of '.$this->getCFirst().' '.$this->getCLast(),
					'tablename' => 'tblcounselor',
					'userid' => $this->getUserID(),
					'username' => $this->getUserName()					
				);
				$this->db->insert('audit',$data);
				return true;
			}		
		}		
		public function getCounselorsCount() {
			return $this->db->count_all('tblcounselor');			
		}	
		
		public function get_counselors($limit,$offset){
			$this->db->limit($limit,$offset);
			$this->db->select('*');
			$this->db->from('tblcounselor');			
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
					
		public function get_counselor(){
			
			$this->db->select('*');
			$this->db->from('tblcounselor');	
			$this->db->where('cid',$this->getCID());			
			$query=$this->db->get();				
			return $query->result();
		}

		public function showCounselor($id){
			$this->db->select('*');
			$this->db->from('tblcounselor');	
			$this->db->where('cid',$id);			
			$query=$this->db->get();				
			return $query->result();			
		}
		public function getCounselor($id){
			$this->db->select('*');
			$this->db->from('tblcounselor');	
			$this->db->where('cid',$id);			
			$query=$this->db->get();				
			return $query->row();			
		}	
		
		public function get_counselor_edit(){
			$this->db->select('*');
			$this->db->from('tblcounselor');	
			$this->db->where('cid',$this->getCID());			
			$query=$this->db->get();				
			return $query->row();						
		}

		public function search_counselor(){			
			$this->db->select('*');
			$this->db->from('tblcounselor');			
			$this->db->like('cid',$this->getSearchBy(),'after');		
			$this->db->or_like('c_last',$this->getSearchBy(),'after');
			$this->db->or_like('c_first',$this->getSearchBy(),'after');
			$this->db->order_by('c_last','asc');
			$query=$this->db->get();
			return $query->result();			
		}	

		public function getCounselorMasterList()	{
			$this->db->select('*');
			$this->db->from('tblcounselor');	
			$this->db->order_by('c_last','asc');			
			$query=$this->db->get();				
			return $query->result();						
		}	
		public function getMaleCounselorMasterList()	{
			$this->db->select('*');
			$this->db->from('tblcounselor');	
			$this->db->where('c_gender','Male');	
			$this->db->order_by('c_last','asc');			
			$query=$this->db->get();				
			return $query->result();						
		}

		public function getFemaleCounselorMasterList()	{
			$this->db->select('*');
			$this->db->from('tblcounselor');	
			$this->db->where('c_gender','Female');	
			$this->db->order_by('c_last','asc');			
			$query=$this->db->get();				
			return $query->result();						
		}
		public function getCounselorGender() {			
			$this->db->select('*');
			$this->db->from('view_counselor_gender');		
			$query=$this->db->get();			
			$query->num_rows();			
			return $query->result();
		}	
		public function getCounselorTotal() {
			$this->db->select('count(cid) as total');
			$this->db->from('tblcounselor');				
			$query=$this->db->get();											
			return $query->row();			
		}	
		
	}	
?>