<?php
	class User_model extends CI_model{
		private $userid;		
		private $user_name;
		private $user_role;
		private $user_account;
		private $user_password;
		private $user_created;
		private $user_isactive;
		private $user_photo;
				
		public function setUserName($Username) { $this->user_name=$Username;}
		public function getUserName(){ return $this->user_name;}
		
		public function setUserRole($Userrole) { $this->user_role=$Userrole;}
		public function getUserRole(){ return $this->user_role;}
		
		public function setUserAccount($Useraccount) { $this->user_account=$Useraccount;}
		public function getUserAccount(){ return $this->user_account;}
			
		public function setUserPassword($Userpassword) { $this->user_password=$Userpassword;}
		public function getUserPassword(){ return $this->user_password;}
			
		public function setUserCreated($Usercreated) { $this->user_created=$Usercreated;}
		public function getUserCreated(){ return $this->user_created;}
	
		public function setUserIsActive($Userisactive) { $this->user_isactive=$Userisactive;}
		public function getUserIsActive(){ return $this->user_isactive;}
	
		public function setUserPhoto($Userphoto) { $this->user_photo=$Userphoto;}
		public function getUserPhoto(){ return $this->user_photo;}
									
		public function setUserID($UserID){$this->userid = $UserID;}
		public function getUserID(){return $this->userid;}

		public function get_user_details(){
			$this->db->select('*');
			$this->db->from('tblusers');
			$this->db->where('user_account',trim($this->getUsername()));					
			$query=$this->db->get();				
			return $query->row();	
		}
		public function get_login($session_data){
			$this->db->select('*');
			$this->db->from('tblusers');
			$this->db->where('user_id', $session_data);
			$this->db->where('user_isactive = 1');					
			$result=$this->db->get();			
			if($result->num_rows() == 1){
				return $result->row();
			}else{
				return false;
			}
		}

		public function get_users($limit,$offset){
			$this->db->limit($limit,$offset);
			$this->db->select('*');
			$this->db->from('tblusers');			
			$query=$this->db->get();				
			return $query->result();
		}

		public function login_user($username,$password){						
			$enc_password = md5($password);	
			$this->db->select('*'); 
			$this->db->from('tblusers');
			$this->db->where('user_account',$username);
			$this->db->where('user_password',$enc_password);
			$this->db->where('user_isactive = 1');						
			$result=$this->db->get();			
			if($result->num_rows() == 1){
				return $result->row();
			}else{
				return false;
			}			
		}

		public function showUser($id){ //working
			$this->db->select('*');
			$this->db->from('tblusers');	
			$this->db->where('user_id',$id);			
			$result=$this->db->get();			
			if($result->num_rows() == 1){
				return $result->row();
			}else{
				return false;
			}			
		}

		public function insert_user(){ //Update to audit staff		
			$enc_password = md5($this->getUserPassword()); 
			$data = array(                       
				'user_name' => $this->getUserName(),
				'user_account' => $this->getUserAccount(),
				'user_password' => $enc_password,
				'user_role' => $this->getUserRole(),
				'user_isactive' => $this->getUserIsActive(),
			);
			$query = $this->db->insert('tblusers', $data);
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