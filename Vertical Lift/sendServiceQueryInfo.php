<?php
    include "service-email.php";
    $name = $_POST['fname'] . " " . $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    if(empty($name) || empty($phone) || empty($address) || empty($email) || $service == "Select Service" || empty($message)){
        echo "Please fill up all the fields";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format";
    }else{
        $to = "info@verticaltransport.com";
        $subject = "Service query email from vertical transport system website";

        $message = emailHhtml($name, $phone, $address, $email, $service, $message);

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
