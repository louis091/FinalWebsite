<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

function processText($text) {
  $text = strip_tags($text);
  $text = trim($text);
  $text = htmlspecialchars($text);
  return $text;
}

if(isset($_POST['submit'])) {
  $fullName = processText($_POST['fullName']);
  $number = processText($_POST['phoneNumber']);

  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'louis.phammm@gmail.com';
  $mail->Password = 'dqecotuehzgupemm';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('louis.phammm@gmail.com');
  
  $mail->addAddress($_POST['email']);

  $mail->isHTML(true);

  $mail->Subject = processText("[" . $fullName . "]" . "Customer service");
  $mail->Body = processText($_POST['messages']);
  $mail->send();


  echo 
  "
  <script>
  alert('Sent successfully');
  document.location.href = 'contact.php';
  </script>
  ";
  
}




?>