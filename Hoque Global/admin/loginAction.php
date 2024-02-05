<?php

include "controllers/coreFunctions/connect.php";
include "controllers/coreFunctions/coreFunction.php";

$username = sterilizeValue($_POST['username']);
$username = dataEncrypt($username);
$password = sterilizeValue($_POST['password']);
$password = encryptPassword($password);

if(login("user", array("username", "password"), array($username, $password))){
     $userid = getValue("user", "id", "username", $username);
     session_start();
     $_SESSION["userid"] = $userid;
    echo "Access Granted";
}else{
    echo "Access Denied";
}
?>