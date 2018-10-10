<?php
class EmailModel extends Model {

 function EmailModel(){
  parent::Model();
  $this->load->library('email');
 }


 function sendVerificatinEmail($email,$verificationText){
  
  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'smtp.yourdomain.com.',
     'smtp_port' => 465,
     'smtp_user' => 'admin@yourdomain.com', // change it to yours
     'smtp_pass' => '########', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );
  
  
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");
  $this->email->from('admin@yourdomain.com', "Admin Team");
  $this->email->to($email);  
  $this->email->subject("Email Verification");
  $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://www.yourdomain.com/verify/".$verificationText."\n"."\n\nThanks\nAdmin Team");
  $this->email->send();
  
 }
}
?>