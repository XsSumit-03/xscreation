<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$massage = $_POST['message'];


$email_from = 'xssumit@hotmail.com';

$email_subject = "XsCreation Contact Submission";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "User Message: $massage.\n";

      $to ="xssumit03@gmail.com";
      $headers = "From: $email_from \r\n";
      $headers .= "Reply-To: $visitor_email \r\n";
      
      mail($to, $email_subject, $email_body, $headers);

      header("Location: index.html");
?>