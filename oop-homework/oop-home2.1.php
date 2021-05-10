<?php
abstract class Emailer {
  // Declare properties
  protected $sender;
  protected $recipients;
  protected $subject;
  protected $body;

  // Use Constructor to initialize sender and recipients
  function __construct($sender)
  {
    $this->sender = $sender;
    $this->recipients = array(); 
  }

  public function addRecipients($recipient)
  {
    array_push($this->recipients, $recipient);
  }

  public function setSubject($subject)
  {
    $this->subject = $subject;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }
}

// Implement method sendEmail for SendGrid and MailChimp

class SendGrid extends Emailer {
  public function sendEmail()
  {
    foreach ($this->recipients as $recipient) {
      $result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
      echo "SendGrid successfully sent to {$recipient}\n";
      echo "Sender: $this->sender\n";
      echo "Subject: $this->subject\n";
      echo "Content: $this->body\n";
    }
  }
}

$sgEmailer = new SendGrid("takatori3@icloud.com");
$sgEmailer->addRecipients("takatori3@icloud.com");
$sgEmailer->setSubject("Just a Test");
$sgEmailer->setBody("Hi Name, How are you?");
$sgEmailer->sendEmail();


?>
