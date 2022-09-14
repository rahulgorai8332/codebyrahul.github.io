<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$message=$_POST['comment'];

$email_from='CodeBy@RAHUL';
$email_subject="New Comment Submission";
$email_body ="User name:$name.\n".
            "User Email:$visitor_email.\n".
            "User Message:$message.\n";

  $to="rahulgorai8332@gmail.com ";
  $headers="From:$email_from \r\n";
  $headers .="Reply-to:$visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header('location:index.html');     
?>
