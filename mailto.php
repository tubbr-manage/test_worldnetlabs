<?php
        if(isset($_POST['submit'])){
            $to = "vaibhav.matta@worldnetlabs.com";
            $name = $_POST['yourname'];
            $email= $_POST['email'];
            $phone= $_POST['contactus'];
            $subject = $_POST['yourname'];
            $body= $_POST['hcwh'];
            $headers = 'From: '.$email . "\r\n";


            $body = "name : ".$name. "\r\n" .
                    "Phone : ".$phone. "\r\n" .
                    "Message : " . $body;
            if(mail($to, $subject, $body , $headers)){
                echo "Mail Sent!";
            }else{
                echo "Failed To Send Mail";
            }
        }

?>