<?php
//  Nothing will last forever...
//  Unless it's in a line of code!
//

//
//      Happy birthday to me.
//
//
//                                     (
//                        (
//                )                    )             (
//                        )           (o)    )
//                (      (o)    )     ,|,            )
//               (o)     ,|,          |~\    (      (o)
//               ,|,     |~\    (     \ |   (o)     ,|,
//               \~|     \ |   (o)    |`\   ,|,     |~\
//               |`\     |`\@@@,|,@@@@\ |@@@\~|     \ |
//               \ | o@@@\ |@@@\~|@@@@|`\@@@|`\@@@o |`\
//              o|`\@@@@@|`\@@@|`\@@@@\ |@@@\ |@@@@@\ |o
//            o@@\ |@@@@@\ |@@@\ |@@@@@@@@@@|`\@@@@@|`\@@o
//           @@@@|`\@@@@@@@@@@@|`\@@@@@@@@@@\ |@@@@@\ |@@@@
//           p@@@@@@@@@@@@@@@@@\ |@@@@@@@@@@|`\@@@@@@@@@@@q
//           @@o@@@@@@@@@@@@@@@|`\@@@@@@@@@@@@@@@@@@@@@@o@@
//           @:@@@o@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@o@@::@
//           ::@@::@@o@@@@@@@@@@@@@@@@@@@@@@@@@@@@o@@:@@::@
//           ::@@::@@@@::oo@@@@oo@@@@@ooo@@@@@o:::@@@::::::
//           %::::::@::::::@@@@:::@@@:::::@@@@:::::@@:::::%
//           %%::::::::::::@@::::::@:::::::@@::::::::::::%%
//           ::%%%::::::::::@::::::::::::::@::::::::::%%%::
//         .#::%::%%%%%%:::::::::::::::::::::::::%%%%%::%::#.
//       .###::::::%%:::%:%%%%%%%%%%%%%%%%%%%%%:%:::%%:::::###.
//     .#####::::::%:::::%%::::::%%%%:::::%%::::%::::::::::#####.
//    .######`:::::::::::%:::::::%:::::::::%::::%:::::::::'######.
//    .#########``::::::::::::::::::::::::::::::::::::''#########.
//    `.#############```::::::::::::::::::::::::'''#############.'
//     `.######################################################.'
//       ` .###########,._.,,,. #######<_\##################. '
//          ` .#######,;:      `,/____,__`\_____,_________,_____
//             `  .###;;;`.   _,;>-,------,,--------,----------'
//                 `  `,;' ~~~ ,'\######_/'#######  .  '
//                     ''~`''''    -  .'/;  -    '  




//  This is Elphie Bunny
//  and she's the debug bunny.
//                               __
//                      /\    .-" /
//                     /  ; .'  .' 
//                    :   :/  .'   
//                     \  ;-.'     
//        .--""""--..__/     `.    
//      .'           .'    `o  \     -"I eat the bugs and make sure they dont show up!~"
//     /                    `   ;  
//    :                  \      :  
//  .-;        -.         `.__.-'  
// :  ;          \     ,   ;       
// '._:           ;   :   (        
//     \/  .__    ;    \   `-.     
//  bug ;     "-,/_..--"`-..__)  bunny 
//      '""--.._:
//
// >| Walls have ears.
// >| Doors have eyes.
//
// >| Trees have voices.
// >| Beasts tell lies.
//
// >| Beware the rain.
// >| Beware the snow.
//
// >| Beware the man
// >| You think you know.
//

class Student_model extends CI_model
{
    
    //>>Student
    private $userid, $s_id;
    private $s_first, $s_last, $s_mi;
    private $s_course, $s_year;
    private $s_email;
    private $s_stat;
    private $s_gender,$s_bday, $s_age;
    private $s_eth,$s_rel;
    private $s_marstat, $s_nspouse, $s_nochild;
    private $s_brgy, $s_muni, $s_provi;
    private $s_nor;
    private $s_guardn, $s_guardno, $s_guardadd, $s_guardrel; //Guardian

    //>>FORMS

    //Behave
    private $beh_q1, $beh_q2, $beh_q3, $beh_q4, $beh_q5;
    private $beh_q6, $beh_q7, $beh_q8, $beh_q9, $beh_q10;
    private $beh_qdesc;
    //Mental
    private $mt_die, $mt_q1, $mt_q2, $mt_q3, $mt_q4, $mt_q5;
    private $mt_diein;
    private $mt_hurtdesc, $mt_hurtres, $mt_hurtfirst, $mt_hurtlast, $mt_hurtquan, $mt_hurttalk;
    //Medical History
    private $m_conf, $m_confdesc;
    private $m_medill;
    private $m_medcon1, $m_medcon2, $m_medcon3, $m_medcon4, $m_medcon5;
    private $m_medcon6, $m_medcon7, $m_medcon8, $m_medcon9, $m_medcon10;
    private $m_medcon11, $m_medcon12, $m_medcon13, $m_medcon14, $m_medcon15;
    private $m_medcon16, $m_medcon17, $m_medcon18, $m_medcon19, $m_medcon20;
    private $m_medconO;
    private $m_medwhen;
    private $m_presmed, $m_presmeddesc;
    private $m_pastmed, $m_pastmeddesc;
    private $m_dis, $m_disdesc, $m_disass, $m_dismonth, $m_disyear;
    //Education & Background
    private $e_ename, $e_eyear, $e_ehonor;
    private $e_jname, $e_jyear, $e_jhonor;
    private $e_sname, $e_syear, $e_shonor;
    private $e_cname, $e_cyear, $e_chonor;
    //Home stuff
    private $h_fname, $h_fage, $h_fstat, $h_feduc, $h_fjob, $h_faddr, $h_fno, $h_fdesc; //Father
    private $h_mname, $h_mage, $h_mstat, $h_meduc, $h_mjob, $h_maddr, $h_mno, $h_mdesc; //Mother
    private $h_ofwchild, $h_ofwrel, $h_ofwemail;
    private $h_pmarstat, $h_pecostat, $h_pbirthorder;
    private $h_kmsdep, $h_kmsdeprel, $h_kms, $h_kmsrel, $h_kmsjk, $h_kmsjkrel;
    private $h_kmsdrinkrel_f, $h_kmsdrinkrel_m, $h_kmsdrinkrel_bs, $h_kmsdrinkrel_ua, $h_kmsdrinkrel_me, $h_kmsdrinkrel_g, $h_kmsdrinkrel_na;
    //
    private $searchKey; //Misc
    //>>Setters
    //BEHAVE
    public function setBehQ1($beha_q1) { $this->beh_q1 = $beha_q1; }
    public function setBehQ2($beha_q2) { $this->beh_q2 = $beha_q2; }
    public function setBehQ3($beha_q3) { $this->beh_q3 = $beha_q3; }
    public function setBehQ4($beha_q4) { $this->beh_q4 = $beha_q4; }
    public function setBehQ5($beha_q5) { $this->beh_q5 = $beha_q5; }
    public function setBehQ6($beha_q6) { $this->beh_q6 = $beha_q6; }
    public function setBehQ7($beha_q7) { $this->beh_q7 = $beha_q7; }
    public function setBehQ8($beha_q8) { $this->beh_q8 = $beha_q8; }
    public function setBehQ9($beha_q9) { $this->beh_q9 = $beha_q9; }
    public function setBehQ10($beha_q10) { $this->beh_q10 = $beha_q10; }
    public function setBehQDesc($beha_qdesc) { $this->beh_qdesc = $beha_qdesc; }
    //MENTAL
    public function setMTDie($men_die) { $this->mt_die = $men_die; }
    public function setMTQ1($men_q1) { $this->mt_q1 = $men_q1; }
    public function setMTQ2($men_q2) { $this->mt_q2 = $men_q2; }
    public function setMTQ3($men_q3) { $this->mt_q3 = $men_q3; }
    public function setMTQ4($men_q4) { $this->mt_q4 = $men_q4; }
    public function setMTQ5($men_q5) { $this->mt_q5 = $men_q5; }
    public function setMTDieIn($men_diein) { $this->mt_diein = $men_diein; }
    public function setMTHurtDesc($men_hurtdesc) { $this->mt_hurtdesc = $men_hurtdesc; }
    public function setMTHurtRes($men_hurtres) { $this->mt_hurtres = $men_hurtres; }
    public function setMTHurtFirst($men_hurtfirst) { $this->mt_hurtfirst = $men_hurtfirst; }
    public function setMTHurtLast($men_hurtlast) { $this->mt_hurtlast = $men_hurtlast; }
    public function setMTHurtQuan($men_hurtquan) { $this->mt_hurtquan = $men_hurtquan; }
    public function setMTHurtTalk($men_hurttalk) { $this->mt_hurttalk = $men_hurttalk; }
    //MEDICAL
    public function setMConf($medic_conf) { $this->m_conf = $medic_conf; }
    public function setMConfDesc($medic_confdesc) { $this->m_confdesc = $medic_confdesc; }
    public function setMMedIll($medic_medill) { $this->m_medill = $medic_medill; }
    public function setMMedCon1($medic_medcon1) { $this->m_medcon1 = $medic_medcon1; }
    public function setMMedCon2($medic_medcon2) { $this->m_medcon2 = $medic_medcon2; }
    public function setMMedCon3($medic_medcon3) { $this->m_medcon3 = $medic_medcon3; }
    public function setMMedCon4($medic_medcon4) { $this->m_medcon4 = $medic_medcon4; }
    public function setMMedCon5($medic_medcon5) { $this->m_medcon5 = $medic_medcon5; }
    public function setMMedCon6($medic_medcon6) { $this->m_medcon6 = $medic_medcon6; }
    public function setMMedCon7($medic_medcon7) { $this->m_medcon7 = $medic_medcon7; }
    public function setMMedCon8($medic_medcon8) { $this->m_medcon8 = $medic_medcon8; }
    public function setMMedCon9($medic_medcon9) { $this->m_medcon9 = $medic_medcon9 ; }
    public function setMMedCon10($medic_medcon10) { $this->m_medcon10 = $medic_medcon10; }
    public function setMMedCon11($medic_medcon11) { $this->m_medcon11 = $medic_medcon11; }
    public function setMMedCon12($medic_medcon12) { $this->m_medcon12 = $medic_medcon12; }
    public function setMMedCon13($medic_medcon13) { $this->m_medcon13 = $medic_medcon13; }
    public function setMMedCon14($medic_medcon14) { $this->m_medcon14 = $medic_medcon14; }
    public function setMMedCon15($medic_medcon15) { $this->m_medcon15 = $medic_medcon15; }
    public function setMMedCon16($medic_medcon16) { $this->m_medcon16 = $medic_medcon16; }
    public function setMMedCon17($medic_medcon17) { $this->m_medcon17 = $medic_medcon17; }
    public function setMMedCon18($medic_medcon18) { $this->m_medcon18 = $medic_medcon18; }
    public function setMMedCon19($medic_medcon19) { $this->m_medcon19 = $medic_medcon19; }
    public function setMMedCon20($medic_medcon20) { $this->m_medcon20 = $medic_medcon20; }
    public function setMMedConO($medic_medconO) { $this->m_medconO = $medic_medconO; }
    public function setMMedWhen($medic_medwhen) { $this->m_medwhen = $medic_medwhen; }
    public function setMPresMed($medic_presmed) { $this->m_presmed = $medic_presmed; }
    public function setMPresMedDesc($medic_presmeddesc) { $this->m_presmeddesc = $medic_presmeddesc; }
    public function setMPastMed($medic_pastmed) { $this->m_pastmed = $medic_pastmed; }
    public function setMPastMedDesc($medic_pastmeddesc) { $this->m_pastmeddesc = $medic_pastmeddesc; }
    public function setMDis($medic_dis) { $this->m_dis = $medic_dis; }
    public function setMDisDesc($medic_disdesc) { $this->m_disdesc = $medic_disdesc; }
    public function setMDisAss($medic_disass) { $this->m_disass = $medic_disass; }
    public function setMDisMonth($medic_dismonth) { $this->m_dismonth = $medic_dismonth; }
    public function setMDisYear($medic_disyear) { $this->m_disyear = $medic_disyear; }
    //HOME
    public function setHFName($home_fname) { $this->h_fname = $home_fname; }//Father
    public function setHFAge($home_fage) { $this->h_fage = $home_fage; }
    public function setHFStat($home_fstat) { $this->h_fstat = $home_fstat; }
    public function setHFEduc($home_feduc) { $this->h_feduc = $home_feduc; }
    public function setHFJob($home_fjob) { $this->h_fjob = $home_fjob; }
    public function setHFAddr($home_faddr) { $this->h_faddr = $home_faddr; }
    public function setHFNo($home_fno) { $this->h_fno = $home_fno; }
    public function setHFDesc($home_fdesc) { $this->h_fdesc = $home_fdesc; }
    public function setHMName($home_mname) { $this->h_mname = $home_mname; }//Mother
    public function setHMAge($home_mage) { $this->h_mage = $home_mage; }
    public function setHMStat($home_mstat) { $this->h_mstat = $home_mstat; }
    public function setHMEduc($home_meduc) { $this->h_meduc = $home_meduc; }
    public function setHMJob($home_mjob) { $this->h_mjob = $home_mjob; }
    public function setHMAddr($home_maddr) { $this->h_maddr = $home_maddr; }
    public function setHMNo($home_mno) { $this->h_mno = $home_mno; }
    public function setHMDesc($home_mdesc) { $this->h_mdesc = $home_mdesc; }
    public function setHOfwChild($home_ofwchild) { $this->h_ofwchild = $home_ofwchild; }
    public function setHOfwRel($home_ofwrel) { $this->h_ofwrel = $home_ofwrel; }
    public function setHOfwEmail($home_ofwemail) { $this->h_ofwemail = $home_ofwemail; }
    public function setHPMarStat($home_pmarstat) { $this->h_pmarstat = $home_pmarstat; }
    public function setHPEcoStat($home_pecostat) { $this->h_pecostat = $home_pecostat; }
    public function setHPBirthOrder($home_pbirthorder) { $this->h_pbirthorder = $home_pbirthorder; }
    public function setHKmsDep($home_kmsdep) { $this->h_kmsdep = $home_kmsdep; }
    public function setHKmsDepRel($home_kmsdeprel) { $this->h_kmsdeprel = $home_kmsdeprel; }
    public function setHKms($home_kms) { $this->h_kms = $home_kms; }
    public function setHKmsRel($home_kmsdeprel) { $this->h_kmsdeprel = $home_kmsdeprel; }
    public function setHKmsJk($home_kmsjk) { $this->h_kmsjk = $home_kmsjk; }
    public function setHKmsJkRel($home_kmsjkrel) { $this->h_kmsjkrel = $home_kmsjkrel; }
    public function setHKmsDrinkRel_F($home_kmsdrinkrel_f) { $this->h_kmsdrinkrel_f = $home_kmsdrinkrel_f; }
    public function setHKmsDrinkRel_M($home_kmsdrinkrel_m) { $this->h_kmsdrinkrel_m = $home_kmsdrinkrel_m; }
    public function setHKmsDrinkRel_BS($home_kmsdrinkrel_bs) { $this->h_kmsdrinkrel_bs = $home_kmsdrinkrel_bs; }
    public function setHKmsDrinkRel_UA($home_kmsdrinkrel_ua) { $this->h_kmsdrinkrel_ua = $home_kmsdrinkrel_ua; }
    public function setHKmsDrinkRel_ME($home_kmsdrinkrel_me) { $this->h_kmsdrinkrel_me = $home_kmsdrinkrel_me; }
    public function setHKmsDrinkRel_G($home_kmsdrinkrel_g) { $this->h_kmsdrinkrel_g = $home_kmsdrinkrel_g; }
    public function setHKmsDrinkRel_NA($home_kmsdrinkrel_na) { $this->h_kmsdrinkrel_na = $home_kmsdrinkrel_na; }
    //EDUC
    public function setEEName($educ_ename) { $this->e_ename = $educ_ename; }
    public function setEEYear($educ_eyear) { $this->e_eyear = $educ_eyear; }
    public function setEEHonor($educ_ehonor) { $this->e_ehonor = $educ_ehonor; }
    public function setEJName($educ_jname) { $this->e_jname = $educ_jname; }
    public function setEJYear($educ_jyear) { $this->e_jyear = $educ_jyear; }
    public function setEJHonor($educ_jhonor) { $this->e_jhonor = $educ_jhonor; }
    public function setESName($educ_sname) { $this->e_sname = $educ_sname; }
    public function setESYear($educ_syear) { $this->e_syear = $educ_syear; }
    public function setESHonor($educ_shonor) { $this->e_shonor = $educ_shonor; }
    public function setECName($educ_cname) { $this->e_cname = $educ_cname; }
    public function setECYear($educ_cyear) { $this->e_cyear = $educ_cyear; }
    public function setECHonor($educ_chonor) { $this->e_chonor = $educ_chonor; }
    //PDI
    public function setUserID($UserID) { $this->userid = $UserID; } //For account logging
    public function setSID($stud_id) { $this->s_id = $stud_id; }
    public function setSFName($stud_first) { $this->s_first = $stud_first; }
    public function setSLName($stud_last) { $this->s_last = $stud_last; }
    public function setSMI($stud_mi) { $this->s_mi = $stud_mi; }
    public function setSCourse($stud_course) { $this->s_course = $stud_course; }
    public function setSYear($stud_year) { $this->s_year = $stud_year; }
    public function setSStat($stud_stat) { $this->s_stat = $stud_stat; }
    public function setSEmail($stud_email) { $this->s_email = $stud_email; }
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
    //>>Getters
    //BEHAVE
    // public function setBehQ1($beha_q1) { $this->beh_q1 = $beha_q1; }
    public function getBehQ1() { return $this->beh_q1; }
    public function getBehQ2() { return $this->beh_q2; }
    public function getBehQ3() { return $this->beh_q3; }
    public function getBehQ4() { return $this->beh_q4; }
    public function getBehQ5() { return $this->beh_q5; }
    public function getBehQ6() { return $this->beh_q6; }
    public function getBehQ7() { return $this->beh_q7; }
    public function getBehQ8() { return $this->beh_q8; }
    public function getBehQ9() { return $this->beh_q9; }
    public function getBehQ10() { return $this->beh_q10; }
    public function getBehQDesc() { return $this->beh_qdesc; }
    //MENTAL
    public function getMTDie() { return $this->mt_die; }
    public function getMTQ1() { return $this->mt_q1; }
    public function getMTQ2() { return $this->mt_q2; }
    public function getMTQ3() { return $this->mt_q3; }
    public function getMTQ4() { return $this->mt_q4; }
    public function getMTQ5() { return $this->mt_q5; }
    public function getMTDieIn() { return $this->mt_diein; }
    public function getMTHurtDesc() { return $this->mt_hurtdesc; }
    public function getMTHurtRes() { return $this->mt_hurtres; }
    public function getMTHurtFirst() { return $this->mt_hurtfirst; }
    public function getMTHurtLast() { return $this->mt_hurtlast; }
    public function getMTHurtQuan() { return $this->mt_hurtquan; }
    public function getMTHurtTalk() { return $this->mt_hurttalk; }
    //MEDICAL
    public function getMConf() { return $this->m_conf; }
    public function getMConfDesc() { return $this->m_confdesc; }
    public function getMMedIll() { return $this->m_medill; }
    public function getMMedCon1() { return $this->m_medcon1; }
    public function getMMedCon2() { return $this->m_medcon2; }
    public function getMMedCon3() { return $this->m_medcon3; }
    public function getMMedCon4() { return $this->m_medcon4; }
    public function getMMedCon5() { return $this->m_medcon5; }
    public function getMMedCon6() { return $this->m_medcon6; }
    public function getMMedCon7() { return $this->m_medcon7; }
    public function getMMedCon8() { return $this->m_medcon8; }
    public function getMMedCon9() { return $this->m_medcon9; }
    public function getMMedCon10() { return $this->m_medcon10; }
    public function getMMedCon11() { return $this->m_medcon11; }
    public function getMMedCon12() { return $this->m_medcon12; }
    public function getMMedCon13() { return $this->m_medcon13; }
    public function getMMedCon14() { return $this->m_medcon14; }
    public function getMMedCon15() { return $this->m_medcon15; }
    public function getMMedCon16() { return $this->m_medcon16; }
    public function getMMedCon17() { return $this->m_medcon17; }
    public function getMMedCon18() { return $this->m_medcon18; }
    public function getMMedCon19() { return $this->m_medcon19; }
    public function getMMedCon20() { return $this->m_medcon20; }
    public function getMMedConO() { return $this->m_medconO; }
    public function getMMedWhen() { return $this->m_medwhen; }
    public function getMPresMed() { return $this->m_presmed; }
    public function getMPresMedDesc() { return $this->m_presmeddesc; }
    public function getMPastMed() { return $this->m_pastmed; }
    public function getMPastMedDesc() { return $this->m_pastmeddesc; }
    public function getMDis() { return $this->m_dis; }
    public function getMDisDesc() { return $this->m_disdesc; }
    public function getMDisAss() { return $this->m_disass; }
    public function getMDisMonth() { return $this->m_dismonth; }
    public function getMDisYear() { return $this->m_disyear; }
    //HOME
    public function getHFName() { return $this->h_fname; } //Father
    public function getHFAge() { return $this->h_fage; }
    public function getHFStat() { return $this->h_fstat; }
    public function getHFEduc() { return $this->h_feduc; }
    public function getHFJob() { return $this->h_fjob; }
    public function getHFAddr() { return $this->h_faddr; }
    public function getHFNo() { return $this->h_fno; }
    public function getHFDesc() { return $this->h_fdesc; }
    public function getHMName() { return $this->h_mname; } //Mother
    public function getHMAge() { return $this->h_mage; }
    public function getHMStat() { return $this->h_mstat; }
    public function getHMEduc() { return $this->h_meduc; }
    public function getHMJob() { return $this->h_mjob; }
    public function getHMAddr() { return $this->h_maddr; }
    public function getHMNo() { return $this->h_mno; }
    public function getHMDesc() { return $this->h_mdesc; }
    public function getHOfwChild() { return $this->h_ofwchild; }
    public function getHOfwRel() { return $this->h_ofwrel; }
    public function getHOfwEmail() { return $this->h_ofwemail; }
    public function getHPMarStat() { return $this->h_pmarstat; }
    public function getHPEcoStat() { return $this->h_pecostat; }
    public function getHPBirthOrder() { return $this->h_pbirthorder; }
    public function getHKmsDep() { return $this->h_kmsdep; }
    public function getHKmsDepRel() { return $this->h_kmsdeprel; }
    public function getHKms() { return $this->h_kms; }
    public function getHKmsRel() { return $this->h_kmsrel; }
    public function getHKmsJk() { return $this->h_kmsjk; }
    public function getHKmsJkRel() { return $this->h_kmsjkrel; }
    public function getHKmsDrinkRel_F() { return $this->h_kmsdrinkrel_f; }
    public function getHKmsDrinkRel_M() { return $this->h_kmsdrinkrel_m; }
    public function getHKmsDrinkRel_BS() { return $this->h_kmsdrinkrel_bs; }
    public function getHKmsDrinkRel_UA() { return $this->h_kmsdrinkrel_ua; }
    public function getHKmsDrinkRel_ME() { return $this->h_kmsdrinkrel_me; }
    public function getHKmsDrinkRel_G() { return $this->h_kmsdrinkrel_g; }
    public function getHKmsDrinkRel_NA() { return $this->h_kmsdrinkrel_na; }
    //EDUC
    public function getEEName() { return $this->e_ename; }
    public function getEEYear() { return $this->e_eyear; }
    public function getEEHonor() { return $this->e_ehonor; }
    public function getEJName() { return $this->e_jname; }
    public function getEJYear() { return $this->e_jyear; }
    public function getEJHonor() { return $this->e_jhonor; }
    public function getESName() { return $this->e_sname; }
    public function getESYear() { return $this->e_syear; }
    public function getESHonor() { return $this->e_shonor; }
    public function getECName() { return $this->e_cname; }
    public function getECYear() { return $this->e_cyear; }
    public function getECHonor() { return $this->e_chonor; }
    //PDI
    public function getUserID() { return $this->userid; } //For account logging
    public function getSID() { return $this->s_id; }
    public function getSFName() { return $this->s_first; }
    public function getSLName() { return $this->s_last; }
    public function getSMI() { return $this->s_mi; }
    public function getSCourse() { return $this->s_course; }
    public function getSYear() { return $this->s_year; }
    public function getSStat() { return $this->s_stat; }
    public function getSEmail() { return $this->s_email; }
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

    //CRUD
    public function insert_students() //INSERT
    { //Update to audit staff		
        $data = array(                              //Table DRAFT
            'stud_id' => $this->getSID(),              //int(11) NN
            's_first' => $this->getSFName(),        //varchar(50) NN, NULL
            's_last' => $this->getSLName(),         //varchar(50) NN, NULL
            's_mi' => $this->getSMI(),              //varchar(25) NN, NULL
            's_course' => $this->getSCourse(),
            's_year' => $this->getSYear(),
            's_stat' => $this->getSStat(),          //varchar(25) NN, NULL
            's_email' => $this->getSEmail(),
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

    public function insert_educ() //INSERT
    { //Update to audit staff		
        $data = array(      
            'stud_id' => $this->getSID(),
            'e_ename' => $this->getEEName(),
            'e_eyear' => $this->getEEYear(),
            'e_ehonor' => $this->getEEHonor(),
            'e_jname' => $this->getEJName(),
            'e_jyear' => $this->getEJYear(),
            'e_jhonor' => $this->getEJHonor(),
            'e_sname' => $this->getESName(),
            'e_syear' => $this->getESYear(),
            'e_shonor' => $this->getESHonor(),
            'e_cname' => $this->getECName(),
            'e_cyear' => $this->getECYear(),
            'e_chonor' => $this->getECHonor(),

            'e_datecreated' => date('Y-m-d H:i:s', time())
        );
        $query = $this->db->insert('tbleducation', $data);
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

    public function insert_med() //INSERT
    { //Update to audit staff		
        $data = array(      
            'stud_id' => $this->getSID(),
            'm_conf' => $this->getMConf(),//bool
            'm_confdesc' => $this->getMConfDesc(),
            'm_medill' => $this->getMMedIll(),//bool
            'm_medcon1' => $this->getMMedCon1(),//bool
            'm_medcon2' => $this->getMMedCon2(),//bool
            'm_medcon3' => $this->getMMedCon3(),//bool
            'm_medcon4' => $this->getMMedCon4(),//bool
            'm_medcon5' => $this->getMMedCon5(),//bool
            'm_medcon6' => $this->getMMedCon6(),//bool
            'm_medcon7' => $this->getMMedCon7(),//bool
            'm_medcon8' => $this->getMMedCon8(),//bool
            'm_medcon9' => $this->getMMedCon9(),//bool
            'm_medcon10' => $this->getMMedCon10(),//bool
            'm_medcon11' => $this->getMMedCon11(),//bool
            'm_medcon12' => $this->getMMedCon12(),//bool
            'm_medcon13' => $this->getMMedCon13(),//bool
            'm_medcon14' => $this->getMMedCon14(),//bool
            'm_medcon15' => $this->getMMedCon15(),//bool
            'm_medcon16' => $this->getMMedCon16(),//bool
            'm_medcon17' => $this->getMMedCon17(),//bool
            'm_medcon18' => $this->getMMedCon18(),//bool
            'm_medcon19' => $this->getMMedCon19(),//bool
            'm_medcon20' => $this->getMMedCon20(),//bool
            'm_medconO' => $this->getMMedConO(),//varchar
            'm_medwhen' => $this->getMMedWhen(),//varchar
            'm_presmed' => $this->getMPresMed(),//bool
            'm_presmeddesc' => $this->getMPresMedDesc(),//varchar
            'm_pastmed' => $this->getMPastMed(),//bool
            'm_pastmeddesc' => $this->getMPastMedDesc(),//varchar
            'm_dis' => $this->getMDis(),//bool
            'm_disdesc' => $this->getMDisDesc(),//varchar
            'm_disass' => $this->getMDisAss(),//bool
            'm_dismonth' => $this->getMDisMonth(),//varchar
            'm_disyear' => $this->getMDisYear(),//int

            'm_datecreated' => date('Y-m-d H:i:s', time())  
        );
        $query = $this->db->insert('tblmedical', $data);
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

    public function insert_men() //INSERT
    { //Update to audit staff		
        $data = array(      
            'stud_id' => $this->getSID(),

            'mt_die' => $this->getMTDie(),
            'mt_q1' => $this->getMTQ1(),
            'mt_q2' => $this->getMTQ2(),
            'mt_q3' => $this->getMTQ3(),
            'mt_q4' => $this->getMTQ4(),
            'mt_q5' => $this->getMTQ5(),
            'mt_diein' => $this->getMTDieIn(),
            'mt_hurtdesc' => $this->getMTHurtDesc(),
            'mt_hurtres' => $this->getMTHurtRes(),
            'mt_hurtfirst' => $this->getMTHurtFirst(),
            'mt_hurtlast' => $this->getMTHurtLast(),
            'mt_hurtquan' => $this->getMTHurtQuan(),
            'mt_hurttalk' => $this->getMTHurtTalk(),

            'mt_datecreated' => date('Y-m-d H:i:s', time())  
        );
        $query = $this->db->insert('tblmental', $data);
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



    public function insert_home() //INSERT
    { //Update to audit staff		
        $data = array(      
            'stud_id' => $this->getSID(),                   //NN
            'h_fname' => $this->getHFName(),                //NN
            'h_fage' => $this->getHFAge(),                  //NN
            'h_fstat' => $this->getHFStat(),                //NN
            'h_feduc' => $this->getHFEduc(),
            'h_fjob' => $this->getHFJob(),
            'h_faddr' => $this->getHFAddr(), 
            'h_fno' => $this->getHFNo(),                    //NN
            'h_fdesc' => $this->getHFDesc(),                //NN
            'h_mname' => $this->getHMName(),                //NN
            'h_mage' => $this->getHMAge(),                  //NN
            'h_mstat' => $this->getHMStat(),                //NN
            'h_meduc' => $this->getHMEduc(),
            'h_mjob' => $this->getHMJob(),
            'h_maddr' => $this->getHMAddr(),
            'h_mno' => $this->getHMNo(),                    //NN
            'h_mdesc' => $this->getHMDesc(),                //NN
            'h_ofwchild' => $this->getHOfwChild(),          //NN
            'h_ofwrel' => $this->getHOfwRel(),
            'h_ofwemail' => $this->getHOfwEmail(),
            'h_pmarstat' => $this->getHPMarStat(),          //NN
            'h_pecostat' => $this->getHPEcoStat(),          //NN
            'h_pbirthorder' => $this->getHPBirthOrder(),    //NN
            'h_kmsdep' => $this->getHKmsDep(),              //NN
            'h_kmsdeprel' => $this->getHKmsDepRel(),    
            'h_kms' => $this->getHKms(),                    //NN
            'h_kmsrel' => $this->getHKmsRel(),
            'h_kmsjk' => $this->getHKmsJk(),                //NN
            'h_kmsjkrel' => $this->getHKmsJkRel(),
            'h_kmsdrinkrel_f' => $this->getHKmsDrinkRel_F(), //DEF FALSE
            'h_kmsdrinkrel_m' => $this->getHKmsDrinkRel_M(), //DEF FALSE
            'h_kmsdrinkrel_bs' => $this->getHKmsDrinkRel_BS(), //DEF FALSE
            'h_kmsdrinkrel_ua' => $this->getHKmsDrinkRel_UA(), //DEF FALSE
            'h_kmsdrinkrel_me' => $this->getHKmsDrinkRel_ME(), //DEF FALSE
            'h_kmsdrinkrel_g' => $this->getHKmsDrinkRel_G(), //DEF FALSE
            'h_kmsdrinkrel_na' => $this->getHKmsDrinkRel_NA(), //DEF FALSE

            'h_datecreated' => date('Y-m-d H:i:s', time())  
        );
        $query = $this->db->insert('tblhome', $data);
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

    public function getCourses()
    {
        $this->db->select('*');
        $this->db->from('courses');
        $this->db->order_by('course', 'asc');
        $query = $this->db->get();
        $query->num_rows();
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
        $this->db->from('tblstudents');
        $this->db->where('stud_id', $id);
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

    public function getSchools(){
        $this->db->select('*');
        $this->db->from('school');
        $query = $this->db->get();
        $query->num_rows();
        return $query->result();
    }

    public function chkStudent($id)
    {
        $this->db->select('*');
        $this->db->from('tblstudents');
        $this->db->where('stud_id', $id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function getStat($stat, $id){
        if ($stat == 1){//educ
            $this->db->select('*');
            $this->db->from('tbleducation');
            $this->db->where('stud_id', $id);				
            $result=$this->db->get();			
            if($result->num_rows() > 0){
                return 'elements/contents/buttons/educ_button_disabled'; //if exist
            }else{
                return 'elements/contents/buttons/educ_button_enabled'; //if null
            }
        }
        if($stat == 2){
            $this->db->select('*');
            $this->db->from('tblhome');
            $this->db->where('stud_id', $id);				
            $result=$this->db->get();			
            if($result->num_rows() > 0){
                return 'elements/contents/buttons/home_button_disabled'; //if exist
            }else{
                return 'elements/contents/buttons/home_button_enabled'; //if null
            }
        }
        if($stat == 3){
            $this->db->select('*');
            $this->db->from('tblmedical');
            $this->db->where('stud_id', $id);				
            $result=$this->db->get();			
            if($result->num_rows() > 0){
                return 'elements/contents/buttons/medical_button_disabled'; //if exist
            }else{
                return 'elements/contents/buttons/medical_button_enabled'; //if null
            }
        }
        if($stat == 4){
            $this->db->select('*');
            $this->db->from('tblmental');
            $this->db->where('stud_id', $id);				
            $result=$this->db->get();			
            if($result->num_rows() > 0){
                return 'elements/contents/buttons/mental_button_disabled'; //if exist
            }else{
                return 'elements/contents/buttons/mental_button_enabled'; //if null
            }
        }
    }
}
