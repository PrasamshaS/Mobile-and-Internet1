<?php

/*if(isset($_POST['submit'])) {
    $name = $_POST['name'];
     $subject = $_POST['subject'];
     $mailFrom = $_POST['mail'];
     $message = $_POST['message'];
    
    $mailTo="babu2062@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt="You have received an e-mail from".$name.".\n\n".$message;
    
    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.php?mailsend");
    
    
}*/

$name= $_POST['name'];
$visitor_mail = $_POST['mail'];
$message = $_POST['message'];
$mail_from = 'pari_devil6915@yahoo.com';
$mail_subject = "New Form Submission";
$mail_body = "User Name: $name.\n".
               "User Message: $message.\n";
$to="babu2062@hotmail.com";
$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_mail \r\n";

mail($to,$mail_subject,$mail_body,$headers);
header("Location: contact.html");


?>


