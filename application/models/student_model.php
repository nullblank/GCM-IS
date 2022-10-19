<?php
class Student_model extends CI_model
{
    //Student
    private $userid, $s_id;
    private $s_first, $s_last, $s_mi;
    private $s_stat;
    private $s_gender,$s_bday, $s_age;
    private $s_eth,$s_rel;
    private $s_marstat, $s_nspouse, $s_nochild;
    private $s_brgy, $s_muni, $s_provi;
    private $s_nor;
    private $s_guardn, $s_guardno, $s_guardadd, $s_guardrel; //Guardian
    private $searchKey; //Misc
    //>Setters
    public function setUserID($UserID) { $this->userid = $UserID; } //For account logging
    public function setSID($stud_id) { $this->s_id = $stud_id; }
    public function setSFName($stud_first) { $this->s_first = $stud_first; }
    public function setSLName($stud_last) { $this->s_last = $stud_last; }
    public function setSMI($stud_mi) { $this->s_mi = $stud_mi; }
    public function setSStat($stud_stat) { $this->s_stat = $stud_stat; }
    public function setSGender($stud_gender) { $this->s_gender = $stud_gender; }
    public function setSBDay($stud_bday) { $this->s_bday = $stud_bday; }
    public function setSAge($stud_age) { $this->s_age = $stud_age; }
    public function setSEth($stud_eth) { $this->s_eth = $stud_eth; }
    public function setSRel($stud_rel) { $this->s_rel = $stud_rel; }
    public function setSmarstat($stud_marstat) { $this->s_marstat = $stud_marstat; }
    public function setSNSpouse($stud_nspouse) { $this->s_nspouse = $stud_nspouse; }
    public function setSNChild($stud_nochild) { $this->s_nochild = $stud_nochild; }
    public function setSBrgy($stud_brgy) { $this->s_brgy = $stud_brgy; }
    public function setSMuni($stud_muni) { $this->s_muni = $stud_muni; }
    public function setSProvi($stud_provi) { $this->s_provi = $stud_provi; }
    public function setSNOR($stud_nor) { $this->s_nor = $stud_nor; }

    public function setSGuardn($stud_guardn) { $this->s_guardn = $stud_guardn; }
    public function setSGuardno($stud_guardno) { $this->s_guardno = $stud_guardno; }
    public function setSGuardadd($stud_guardadd) { $this->s_guardadd = $stud_guardadd; }
    public function setSGuardrel($stud_guardrel) { $this->s_guardrel = $stud_guardrel; }
    //>Getters
    public function getUserID() { return $this->userid; } //For account logging
    public function getSID() { return $this->s_id; }
    public function getSFName() { return $this->s_first; }
    public function getSLName() { return $this->s_last; }
    public function getSMI() { return $this->s_mi; }
    public function getSStat() { return $this->s_stat; }
    public function getSGender() { return $this->s_gender; }
    public function getSBDay() { return $this->s_bday; }
    public function getSAge() { return $this->s_age; }
    public function getSEth() { return $this->s_eth; }
    public function getSRel() { return $this->s_rel; }
    public function getSmarstat() { return $this->s_marstat; }
    public function getSNSpouse() { return $this->s_nspouse; }
    public function getSNChild() { return $this->s_nochild; }
    public function getSBrgy() { return $this->s_brgy; }
    public function getSMuni() { return $this->s_muni; }
    public function getSProvi() { return $this->s_provi; }
    public function getSNOR() { return $this->s_nor; }

    public function getSGuardn() { return $this->s_guardn; }
    public function getSGuardno() { return $this->s_guardno; }
    public function getSGuardadd() { return $this->s_guardadd; }
    public function getSGuardrel() { return $this->s_guardrel; }

    //Search funcs idk what these do tbh
    public function setSearchBy($SearchKey) { $this->searchKey = $SearchKey; }
    public function getSearchBy() { return $this->searchKey; }


//  Nothing will last forever,
//  unless it's in a sea of code!
//
//  This is Elphie bunny
//  and she's the debug bunny.
//                               __
//                      /\    .-" /
//                     /  ; .'  .' 
//                    :   :/  .'   
//                     \  ;-.'     
//        .--""""--..__/     `.    
//      .'           .'    `o  \     -I eat the bugs and make sure they dont show up!
//     /                    `   ;  
//    :                  \      :  
//  .-;        -.         `.__.-'  
// :  ;          \     ,   ;       
// '._:           ;   :   (        
//     \/  .__    ;    \   `-.     
//  bug ;     "-,/_..--"`-..__)  bunny 
//      '""--.._:




    //CRUD
    public function insert_students() //INSERT
    { //Update to audit staff		
        $data = array(                              //Table DRAFT
            'stud_id' => $this->getSID(),              //int(11) NN
            's_first' => $this->getSFName(),        //varchar(50) NN, NULL
            's_last' => $this->getSLName(),         //varchar(50) NN, NULL
            's_mi' => $this->getSMI(),              //varchar(25) NN, NULL
            's_stat' => $this->getSStat(),          //varchar(25) NN, NULL
            's_gender' => $this->getSGender(),      //varchar(25) NN, NULL
            's_bday' => $this->getSBDay(),          //varchar(25) NN, NULL
            's_age' => $this->getSAge(),            //int(5) NN, NULL
            's_eth' => $this->getSEth(),            //varchar(25) NN, NULL
            's_rel' => $this->getSRel(),            //varchar(25) NN, NULL
            's_marstat' => $this->getSmarstat(),    //varchar(45) NN, NULL
            's_nspouse' => $this->getSNSpouse(),    //varchar(80) NN, NULL
            's_nchild' => $this->getSNChild(),      //int(2) NN, NULL
            's_brgy' => $this->getSBrgy(),          //varchar(45) NN, NULL
            's_muni' => $this->getSMuni(),          //varchar(45) NN, NULL
            's_provi' => $this->getSProvi(),        //varchar(45) NN, NULL
            's_nor' => $this->getSNOR(),            //varchar(45) NN, NULL
            's_guardn' => $this->getSGuardn(),      //varchar(80) NN, NULL
            's_guardno' => $this->getSGuardno(),    //int(11) NN, NULL
            's_guardadd' => $this->getSGuardadd(),   //varchar(200) NN, NULL
            's_guardrel' => $this->getSGuardrel(),  //varchar(20) NN, NULL
            's_datecreated' => date('Y-m-d H:i:s', time())                //TIMESTAMP, NN, CURRENT_TIMESTAMP
        );
        $query = $this->db->insert('tblstudents', $data);
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
        // }
    }

    // public function update_student() //UPDATE
    // {
    //     if ($this->getSPhoto() == null) {
    //         if ($this->getSBday() == null) {
    //             $data = array(
    //                 'sid' => $this->getSID(),
    //                 's_last' => $this->getSLast(),
    //                 's_first' => $this->getSFirst(),
    //                 's_mi' => $this->getSmi(),
    //                 's_brgy' => $this->getSBrgy(),
    //                 's_municipality' => $this->getSMunicipality(),
    //                 's_province' => $this->getSProvince(),
    //                 's_bday' => $this->getSBday(),
    //                 's_gender' => $this->getSGender(),
    //                 's_age' => $this->getSAge(),
    //                 's_cpnumber' => $this->getSCPNumber()

    //             );
    //         } else {
    //             $data = array(
    //                 'sid' => $this->getSID(),
    //                 's_last' => $this->getSLast(),
    //                 's_first' => $this->getSFirst(),
    //                 's_mi' => $this->getSmi(),
    //                 's_brgy' => $this->getSBrgy(),
    //                 's_municipality' => $this->getSMunicipality(),
    //                 's_province' => $this->getSProvince(),
    //                 's_bday' => $this->getSBday(),
    //                 's_gender' => $this->getSGender(),
    //                 's_age' => $this->getSAge(),
    //                 's_cpnumber' => $this->getSCPNumber()

    //             );
    //         }
    //     } else {
    //         if ($this->getSBday() == null) {
    //             $data = array(
    //                 'sid' => $this->getSID(),
    //                 's_last' => $this->getSLast(),
    //                 's_first' => $this->getSFirst(),
    //                 's_mi' => $this->getSmi(),
    //                 's_brgy' => $this->getSBrgy(),
    //                 's_municipality' => $this->getSMunicipality(),
    //                 's_province' => $this->getSProvince(),
    //                 's_gender' => $this->getSGender(),
    //                 's_age' => $this->getSAge(),
    //                 's_cpnumber' => $this->getSCPNumber(),
    //                 's_photo' => $this->getSPhoto()
    //             );
    //         } else {
    //             $data = array(
    //                 'sid' => $this->getSID(),
    //                 's_last' => $this->getSLast(),
    //                 's_first' => $this->getSFirst(),
    //                 's_mi' => $this->getSmi(),
    //                 's_brgy' => $this->getSBrgy(),
    //                 's_municipality' => $this->getSMunicipality(),
    //                 's_province' => $this->getSProvince(),
    //                 's_bday' => $this->getSBday(),
    //                 's_gender' => $this->getSGender(),
    //                 's_age' => $this->getSAge(),
    //                 's_cpnumber' => $this->getSCPNumber(),
    //                 's_photo' => $this->getSPhoto()
    //             );
    //         }
    //     }
    //     $this->db->where('sid', $this->getSID());
    //     $query = $this->db->update('tblstudent', $data);

    //     if ($query == true) {
    //         $data = array(
    //             'action' => 'UPDATED the record of ' . $this->getSFirst() . ' ' . $this->getSLast(),
    //             'tablename' => 'tblstudent',
    //             'userid' => $this->getUserID(),
    //             'username' => $this->getUserName()
    //         );
    //         $this->db->insert('audit', $data);
    //         return true;
    //     }
    // }

    //Extra funky funcs
    public function getStudentsCount()
    {
        return $this->db->count_all('tblstudents');
    }

    public function get_students($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        $this->db->select('*');
        $this->db->from('tblstudent');
        $query = $this->db->get();
        return $query->result();
    }

    public function getNOR()
    {
        $this->db->select('*');
        $this->db->from('nor');
        $this->db->order_by('residence', 'asc');
        $query = $this->db->get();
        $query->num_rows();
        return $query->result();
    }

    public function getEthnicity()
    {
        $this->db->select('*');
        $this->db->from('ethnicity');
        $this->db->order_by('ethnicity', 'asc');
        $query = $this->db->get();
        $query->num_rows();
        return $query->result();
    }

    public function getReligion()
    {
        $this->db->select('*');
        $this->db->from('religion');
        $this->db->order_by('religion', 'asc');
        $query = $this->db->get();
        $query->num_rows();
        return $query->result();
    }

    public function getBarangay()
    {
        $this->db->select('*');
        $this->db->from('barangay');
        $this->db->order_by('barangay', 'asc');
        $query = $this->db->get();
        $query->num_rows();
        return $query->result();
    }
    public function getMunicipality()
    {
        $this->db->select('*');
        $this->db->from('municipality');
        $this->db->order_by('municipality', 'asc');
        $query = $this->db->get();
        $query->num_rows();
        return $query->result();
    }

    public function getProvince()
    {
        $this->db->select('*');
        $this->db->from('province');
        $this->db->order_by('province', 'asc');
        $query = $this->db->get();
        $query->num_rows();
        return $query->result();
    }

    public function get_student()
    {

        $this->db->select('*');
        $this->db->from('tblstudent');
        $this->db->where('sid', $this->getSID());
        $query = $this->db->get();
        return $query->result();
    }

    public function showStudent($id)
    {
        $this->db->select('*');
        $this->db->from('tblstudent');
        $this->db->where('sid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getStudent($id)
    {
        $this->db->select('*');
        $this->db->from('tblstudent');
        $this->db->where('sid', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_student_edit()
    {
        $this->db->select('*');
        $this->db->from('tblstudent');
        $this->db->where('sid', $this->getSID());
        $query = $this->db->get();
        return $query->row();
    }

    public function search_student()
    {
        $this->db->select('*');
        $this->db->from('tblstudent');
        $this->db->like('sid', $this->getSearchBy(), 'after');
        $this->db->or_like('s_last', $this->getSearchBy(), 'after');
        $this->db->or_like('s_first', $this->getSearchBy(), 'after');
        $this->db->order_by('s_last', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getStudentMasterList()
    {
        $this->db->select('*');
        $this->db->from('tblstudent');
        $this->db->order_by('s_last', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function getMaleStudentMasterList()
    {
        $this->db->select('*');
        $this->db->from('tblstudent');
        $this->db->where('s_gender', 'Male');
        $this->db->order_by('s_last', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getFemaleStudentMasterList()
    {
        $this->db->select('*');
        $this->db->from('tblstudent');
        $this->db->where('s_gender', 'Female');
        $this->db->order_by('s_last', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    public function getStudentGender()
    {
        $this->db->select('*');
        $this->db->from('view_student_gender');
        $query = $this->db->get();
        $query->num_rows();
        return $query->result();
    }
    public function getStudentTotal()
    {
        $this->db->select('count(sid) as total');
        $this->db->from('tblstudent');
        $query = $this->db->get();
        return $query->row();
    }
    //new shit below

    public function chk_id($id){
        $this->db->select('*');
        $this->db->from('tblstudents');
        $this->db->where('stud_id', $id);				
        $result=$this->db->get();			
        if($result->num_rows() == 1){
            return $result->row();
        }else{
            return false;
        }
    }
}
