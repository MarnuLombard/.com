<?php
/**
* For validating and sending the emails
*/
class sendMail
{
  public $name;
  public $address;
  public $message;
  public $spam;

  protected $to = 'marnu@marnulombard.com';

  function __construct($post)
  {
    $this->name    = $post['name'];
    $this->address = $post['address'];
    $this->message = $post['message'];
    $this->spam    = $post['text'];
  }

  private function checkSpam($spam)
  {
      $isSpam = false;
      if(strlen($spam) > 0) {
      $isSpam = true;
      }
      $this->spam = $isSpam;
  }// checkspam

  public function validateInputs($name, $address, $message)
  {

  }

  public function composeMail($name, $address, $message, $to)
  {
    $subject  = 'Contact via MarnuLombard.com';

    $headers  = "From: noreply@marnulombard.com\r\n";
    $headers  = "Reply-To: $name <$address>\r\n";
    $headers .= "Return-Path: $name <$address>\r\n";
    $headers .= "Organization: Marnu Lombard\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8 \r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    mail($to, $subject, $message, $headers);
  }


}


?>
