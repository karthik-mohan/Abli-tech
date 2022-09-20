<?php

  $name = $_POST['c_name'];
  $visitor_email = $_POST['c_email'];
  $phone_num = $_POST['c_phone_num']
  $message = $_POST['c_message'];
  $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message.\n".
                            "Phone-number: $phone_num"
   mail("karthik@canstartco.com", "New Inquiry",$email_body,$visitor_email)

//if($_POST["message"]) {





//$_POST["insert your message here"]. $visitor_email);


//}


?>