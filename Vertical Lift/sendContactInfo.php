<?php
    include "contactus_email.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $details = $_POST['details'];

    if(empty($name) || empty($email) || empty($phone) || empty($details)){
        echo "Please fill up all the fields";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format";
    }else{
        $to = "info@verticaltransport.com";
        $subject = "Email from vertical transport system website";

        $message = emailHtml($name, $email, $phone, $details);

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        if(mail($to,$subject,$message,$headers)){
            echo "Information Send Successfully";
        }else{
            echo "Mail send failed, please try again.";
        }
    }
?>
