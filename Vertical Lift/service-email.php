<?php
    function emailHhtml($name, $phone, $address, $email, $service, $message){
        return '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Vertical Transport System</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        </head>
        <body style="background-color:#EEEEEE;">
            <table align="center" style="width:700px; background-color:#fff; font-family: Montserrat, sans-serif;">
                <tr>
                    <td style="padding:15px 0px; text-align:center;"><img src="http://verticaltransport.com/images/email/contact-form/logo.png"></td>
                </tr>
                <tr>
                    <td style="padding:0px 40px;"><img width="100%" style="width:100%;" src="http://verticaltransport.com/images/email/contact-form/banner.jpg"></td>
                </tr>
                <tr>
                    <td style="text-align:center; padding-top:27px; padding-bottom:19px;">
                        <img src="http://verticaltransport.com/images/email/contact-form/user.png">
                    </td>
                </tr>
                <tr>
                    <td style="color:#000; text-align:center; font-size: 22px; letter-spacing: 0.025em; line-height: 127.08%; font-weight: 700;">' . $name . '</td>
                </tr>
                <tr>
                    <td style="color:#676565; text-align:center; font-size: 16px; letter-spacing: 0.025em; line-height: 127.08%; font-weight: 400;">' . $email . '</td>
                </tr>
                <tr>
                    <td style="color:#676565; text-align:center; font-size: 16px; letter-spacing: 0.025em; line-height: 127.08%; font-weight: 400;">' . $phone . '</td>
                </tr>
                <tr>
                    <td style="color:#676565; text-align:center; font-size: 16px; letter-spacing: 0.025em; line-height: 127.08%; font-weight: 400;">' . $address . '</td>
                </tr>
                <tr>
                    <td style="color:#000; text-align:justify; font-size: 18px; letter-spacing: 0.025em; line-height:170%; font-weight: 700; padding:30px 40px 0px 40px;">
                        Looking for ' . $service . ' Service
                    </td>
                </tr>
                <tr>
                    <td style="color:#676565; text-align:justify; font-size: 16px; letter-spacing: 0.025em; line-height:170%; font-weight: 400; padding:0px 40px 70px 40px;">' . $message . '</td>
                </tr>
                <tr>
                    <td style="background-color:#88D23A; text-align:center; padding:20px 0px; color:#fff; line-height: 17px; font-size: 14px; font-weight: 400;">Copyright © 2023 verticaltransport.com All Rights Reserved</td>
                </tr>
            </table>
        </body>
        </html>';
    }
?>