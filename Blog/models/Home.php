<?php
class HomeModel extends Model {

 function HomeModel(){
  parent::Model();
 }
 
 
 function verifyEmailAddress($verificationcode){  
  $sql = "update trn_user set active_status='A' WHERE email_verification_code=?";
  $this->db->query($sql, array($verificationcode));
  return $this->db->affected_rows(); 
 }
 
}
?>