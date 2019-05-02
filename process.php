<?php

    $name = $_post['name'];
    $visitor_email = $_post['email'];
    $message = $_POST['message'];

    $email_form = $visitor_email;
    $email_subject = "new form submission";

    $email_body = "user namer: $name. \n".
                  "user email: $visitor_email. \n".
                    "user message: $message. \n";

                    $to = "jeremiekobo@gmail.com";
                    $headers = "from : $email_form\r \n";
                    $headers = "reply-to: $visitor_email \r \n";
                    mail($to,$email_subject,$email_body);

                    header("location: index.html");
?>