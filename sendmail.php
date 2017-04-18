<?php
 
  $visitor_name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $visitor_phone = $_POST['phone'];
  $visitor_message = $_POST['message'];

  $email_subject = "New Website Inquiry: $visitor_name";
  $email_body = "You have received a new message from $visitor_name, $visitor_phone, $visitor_email. \n".
                "Here is the message:\n \n $visitor_message \n \n".

  $to = "alex@advancedfloor.net";
  $headers = "From: $visitor_email \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);

  echo "Mail Sent. Please click <a href='http://www.advancedfloor.net'>here</a> to navigate back to the home page of Advanced Floor Design.";
  
 ?>