<?php
class Student_model extends CI_model
{

    private $userid, $sid;
    private $s_last, $s_first, $s_mi;
    private $s_brgy, $s_municipality, $s_province;
    private $s_bday, $s_gender, $s_age;
    private $s_cpnumber, $s_photo;
    private $username, $searchKey;

    //setters
    public function setUserID($UserID)
    {
        $this->userid = $UserID;
    }


    //getters
    public function getUserID()
    {
        return $this->userid;
    }
    



    //Search funcs
    public function setSearchBy($SearchKey)
    {
        $this->searchKey = $SearchKey;
    }
    public function getSearchBy()
    {
        return $this->searchKey;
    }
    //CRUD

    public function insert_student() //INSERT
    { //Update to audit staff		
        $data = array(
            'sid' => $this->getSID(),
            's_last' => $this->getSLast(),
            's_first' => $this->getSFirst(),
            's_mi' => $this->getSmi(),
            's_brgy' => $this->getSBrgy(),
            's_municipality' => $this->getSMunicipality(),
            's_province' => $this->getSProvince(),
            's_bday' => $this->getSBday(),
            's_gender' => $this->getSGender(),
            's_age' => $this->getSAge(),
            's_cpnumber' => $this->getSCPNumber(),
            's_photo' => $this->getSPhoto()
        );
        $query = $this->db->insert('tblstudent', $data);
        if ($query == true) {
            $data = array(
                'action' => 'INSERTED the record of ' . $this->getSFirst() . ' ' . $this->getSLast(),
                'tablename' => 'tblstudent',
                'userid' => $this->getUserID(),
                'username' => $this->getUserName()
            );
            $this->db->insert('audit', $data);
            return true;
        }
    }

    public function update_student() //UPDATE
    {
        if ($this->getSPhoto() == null) {
            if ($this->getSBday() == null) {
                $data = array(
                    'sid' => $this->getSID(),
                    's_last' => $this->getSLast(),
                    's_first' => $this->getSFirst(),
                    's_mi' => $this->getSmi(),
                    's_brgy' => $this->getSBrgy(),
                    's_municipality' => $this->getSMunicipality(),
                    's_province' => $this->getSProvince(),
                    's_bday' => $this->getSBday(),
                    's_gender' => $this->getSGender(),
                    's_age' => $this->getSAge(),
                    's_cpnumber' => $this->getSCPNumber()

                );
            } else {
                $data = array(
                    'sid' => $this->getSID(),
                    's_last' => $this->getSLast(),
                    's_first' => $this->getSFirst(),
                    's_mi' => $this->getSmi(),
                    's_brgy' => $this->getSBrgy(),
                    's_municipality' => $this->getSMunicipality(),
                    's_province' => $this->getSProvince(),
                    's_bday' => $this->getSBday(),
                    's_gender' => $this->getSGender(),
                    's_age' => $this->getSAge(),
                    's_cpnumber' => $this->getSCPNumber()

                );
            }
        } else {
            if ($this->getSBday() == null) {
                $data = array(
                    'sid' => $this->getSID(),
                    's_last' => $this->getSLast(),
                    's_first' => $this->getSFirst(),
                    's_mi' => $this->getSmi(),
                    's_brgy' => $this->getSBrgy(),
                    's_municipality' => $this->getSMunicipality(),
                    's_province' => $this->getSProvince(),
                    's_gender' => $this->getSGender(),
                    's_age' => $this->getSAge(),
                    's_cpnumber' => $this->getSCPNumber(),
                    's_photo' => $this->getSPhoto()
                );
            } else {
                $data = array(
                    'sid' => $this->getSID(),
                    's_last' => $this->getSLast(),
                    's_first' => $this->getSFirst(),
                    's_mi' => $this->getSmi(),
                    's_brgy' => $this->getSBrgy(),
                    's_municipality' => $this->getSMunicipality(),
                    's_province' => $this->getSProvince(),
                    's_bday' => $this->getSBday(),
                    's_gender' => $this->getSGender(),
                    's_age' => $this->getSAge(),
                    's_cpnumber' => $this->getSCPNumber(),
                    's_photo' => $this->getSPhoto()
                );
            }
        }
        $this->db->where('sid', $this->getSID());
        $query = $this->db->update('tblstudent', $data);

        if ($query == true) {
            $data = array(
                'action' => 'UPDATED the record of ' . $this->getSFirst() . ' ' . $this->getSLast(),
                'tablename' => 'tblstudent',
                'userid' => $this->getUserID(),
                'username' => $this->getUserName()
            );
            $this->db->insert('audit', $data);
            return true;
        }
    }

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
