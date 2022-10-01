<?php
	class Dashboard_model extends CI_model{

		private $semstarted;
		private $semended;
		private $thisyear;

		public function setSemStarted($SemStarted){
			$this->semstarted = $SemStarted;
		}
		public function getSemStarted(){
			return $this->semstarted;
		}

		public function setSemEnded($SemEnded){
			$this->semended = $SemEnded;
		}
		public function getSemEnded(){
			return $this->semended;
		}

		public function setThisYear($ThisYear){ $this->thisyear = $ThisYear;}
		public function getThisYear(){return $this->thisyear;}
	/*
		public function get_articles($limit){
			$this->db->limit($limit);

			$this->db->select('a.*,b.categoryname AS category,c.username AS username,CONCAT(c.firstname," ",c.lastname) AS USER,
			d.issueno AS issueno,d.volumeno AS volumeno,DATE_FORMAT(d.monthstarted, "%M") AS month_from,DATE_FORMAT(d.monthended, "%M %Y") AS month_to,
			c.avatar as avatar');
			$this->db->from('tbldiseases AS a');
			$this->db->where('a.approve = 1');
			$this->db->join('tblcategories as b','b.id = a.categoryid','left');
			$this->db->join('tblusers as c','c.id=a.userid','left');
			$this->db->join('tblissues as d','d.id=a.issueid','left');
			$this->db->order_by('a.articleid','DESC');
			$this->db->group_by('a.articleid');
			
			$query=$this->db->get();
			
			$query->num_rows();
			
			return $query->result();
		}
		
		public function get_allarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			
			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_pendingarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu != 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_contributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('contribute = 1');
			
			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_publishedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('ispublished = 1');
			$this->db->where('islatest != 1');
			$this->db->where('inmenu = 1');


			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_publishedflashreportarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu = 1');
			$this->db->where('ispublished = 1');
			$this->db->where('islatest = 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		
		public function get_flashreportarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu = 1');
			$this->db->where('ispublished != 1');
			$this->db->where('islatest = 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_approvecontributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('approve = 1');
			$this->db->where('contribute = 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_pendingcontributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('approve = 0');
			$this->db->where('contribute = 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		*/
		
		public function getUserRoles()
		{
			$this->db->select('*');
			$this->db->from('view_user_role');	
			
			$query=$this->db->get();
			$query->num_rows();
			return $query->result();
		}
		
		public function get_allusers(){

			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers');	
			$query=$this->db->get();
			$query->num_rows();		
			return $query->row();		
		}
		public function get_approveusers(){

			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers');
			$this->db->where('approve = 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_pendingusers(){

			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers');
			$this->db->where('approve = 0');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_administrator(){
			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers AS a');
			$this->db->join('tblusergroups AS b','a.groupid=b.id','left');
			$this->db->where('b.groupname','Administrator');
			$query=$this->db->get();
			$query->num_rows();			
			return $query->row();
		}
		
		
		public function get_students(){

			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers AS a');
			$this->db->join('tblusergroups AS b','a.groupid=b.id','left');
			$this->db->where('b.groupname','Student');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_guest(){

			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers AS a');
			$this->db->join('tblusergroups AS b','a.groupid=b.id','left');
			$this->db->where('b.groupname','Guest');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_facultyandstaff(){

			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers AS a');
			$this->db->join('tblusergroups AS b','a.groupid=b.id','left');
			$this->db->where('b.groupname','Faculty & Staff');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_schoolpaperstaff(){

			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers AS a');
			$this->db->join('tblusergroups AS b','a.groupid=b.id','left');
			$this->db->where('b.groupname','School Paper Staff');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_alumni(){

			$this->db->select('COUNT(*) AS users');
			$this->db->from('tblusers AS a');
			$this->db->join('tblusergroups AS b','a.groupid=b.id','left');
			$this->db->where('b.groupname','Alumni');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		//
		public function get_alltopic(){

			$this->db->select('COUNT(*) AS alltopic');
			$this->db->from('tblforums');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		
		public function get_summary_absences_today(){

			$this->db->select('*');
			$this->db->from('summary_absences_report_today');	
			$this->db->where('schoolyear',$this->getThisYear());
			$this->db->order_by('section','asc');
			$query=$this->db->get();
			$query->num_rows();
			return $query->result();
		}
		
		public function get_summary_absences_overall(){

			$this->db->select('*');
			$this->db->from('summary_absences_report_overall');		
			
			$query=$this->db->get();
			$query->num_rows();
			return $query->result();
		}
		public function get_total_pupils(){

			$this->db->select('*');
			$this->db->from('view_total_pupils');		
			$query=$this->db->get();
			$query->num_rows();
			return $query->result();
		}
		public function get_latesttopic(){

			$this->db->select('*');
			$this->db->from('tblforums');
			$this->db->where('islatest = 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		//
		public function get_allissues(){

			$this->db->select('COUNT(*) AS allissues');
			$this->db->from('tblissues');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_latestissue(){

			$this->db->select('id,issueno,volumeno,islatest,specialissue,daystarted,dayended,DATE_FORMAT(monthstarted, "%M") AS month_from,DATE_FORMAT(monthended, "%M %Y") AS month_to');
			$this->db->from('tblissues');
			$this->db->where('islatest = 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_specialissue(){

			$this->db->select('COUNT(*) AS specialissue');
			$this->db->from('tblissues');
			$this->db->where('specialissue = 1');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_archives(){

			$this->db->select('COUNT(*) AS archives');
			$this->db->from('tblarchives');

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		//
		public function get_auditlog($limit){

			$this->db->select('*,CONCAT(b.firstname," ",b.lastname) AS user');
			$this->db->from('auditlog as a');
			$this->db->join('tblusers as b','b.id=a.userid','left');
			$this->db->limit($limit);
			$this->db->order_by('logno','DESC');


			$query=$this->db->get();
			
			return $query->result();
		}
		public function get_userdownloadpdf($limit){

			$this->db->select('*');
			$this->db->from('tbldownloads');
			$this->db->limit($limit);
			$this->db->order_by('id','DESC');


			$query=$this->db->get();
			
			return $query->result();
		}
		//
		public function get_backup($limit){

			$this->db->select('*');
			$this->db->from('backup');
			$this->db->limit($limit);

			$query=$this->db->get();
			
			return $query->result();
		}

		/* THIS SEMESTER -------------------------------------------------------------------------------------- */

		public function get_sem_allarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('created >=',$this->getSemStarted());
			$this->db->where('created <=',$this->getSemEnded());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_sem_pendingarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu != 1');
			$this->db->where('created >=',$this->getSemStarted());
			$this->db->where('created <=',$this->getSemEnded());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_sem_contributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('contribute = 1');
			$this->db->where('created >=',$this->getSemStarted());
			$this->db->where('created <=',$this->getSemEnded());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_sem_publishedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('ispublished = 1');
			$this->db->where('islatest != 1');
			$this->db->where('inmenu = 1');
			$this->db->where('created >=',$this->getSemStarted());
			$this->db->where('created <=',$this->getSemEnded());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_sem_publishedflashreportarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu = 1');
			$this->db->where('ispublished = 1');
			$this->db->where('islatest = 1');
			$this->db->where('created >=',$this->getSemStarted());
			$this->db->where('created <=',$this->getSemEnded());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		
		public function get_sem_flashreportarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu = 1');
			$this->db->where('ispublished != 1');
			$this->db->where('islatest = 1');
			$this->db->where('created >=',$this->getSemStarted());
			$this->db->where('created <=',$this->getSemEnded());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_sem_approvecontributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('approve = 1');
			$this->db->where('contribute = 1');
			$this->db->where('created >=',$this->getSemStarted());
			$this->db->where('created <=',$this->getSemEnded());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_sem_pendingcontributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('approve = 0');
			$this->db->where('contribute = 1');
			$this->db->where('created >=',$this->getSemStarted());
			$this->db->where('created <=',$this->getSemEnded());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}

		
		/* THIS YEAR ---------------------------------------------------------------------------------------------- */

		public function get_year_allarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->like('created',$this->getThisYear());


			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
		}
		public function get_year_pendingarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu != 1');
			$this->db->like('created',$this->getThisYear());


			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_year_contributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('contribute = 1');
			$this->db->like('created',$this->getThisYear());


			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_year_publishedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('ispublished = 1');
			$this->db->where('islatest != 1');
			$this->db->where('inmenu = 1');
			$this->db->like('created',$this->getThisYear());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_year_publishedflashreportarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu = 1');
			$this->db->where('ispublished = 1');
			$this->db->where('islatest = 1');
			$this->db->like('created',$this->getThisYear());


			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		
		public function get_year_flashreportarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('inmenu = 1');
			$this->db->where('ispublished != 1');
			$this->db->where('islatest = 1');
			$this->db->like('created',$this->getThisYear());

			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_year_approvecontributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('approve = 1');
			$this->db->where('contribute = 1');
			$this->db->like('created',$this->getThisYear());


			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
		public function get_year_pendingcontributedarticles(){

			$this->db->select('COUNT(*) AS articles');
			$this->db->from('tbldiseases');
			$this->db->where('approve = 0');
			$this->db->where('contribute = 1');
			$this->db->like('created',$this->getThisYear());


			$query=$this->db->get();

			$query->num_rows();
			
			return $query->row();
			
		}
	
	
		
	}
?>