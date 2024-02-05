<?php
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if(empty($name) || empty($phone) || empty($email) || empty($company) || empty($message)){
        echo "Please fill up all the fields";
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Please enter a valid email address";
    }else{
        $to = "info@hoqueglobal.com";
        $subject = "Email from Hoque Global Website send by " . $name;
        $headers = "From: " . $email;
        $fullmsg = "Name: " . $name . "\r\n" . "Company: " . $company . "\r\n" . "Message: " . "\r\n" . $message;
        if(mail($to,$subject,$fullmsg,$headers)){
            echo "Your message have been send successfully";
        }else{
            echo "Message could not be send, please try again";
        }
    }
?>