<?php
  $name = $_POST['firstname'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $subject = $_POST['title'];
  
  $email_body = "Name: $name \n Company: $company \n E-mail: $email \n Title: $subject \n Message: $message";
  
  $to = 'alwalt93@gmail.com';
  
  $mailheader = "From: $email \r\n";
  
  mail($to, $subject, $email_body);
  echo "Your e-mail was successfully sent.\n\n";
  echo '<a href="index.html">Return</a>';
?>