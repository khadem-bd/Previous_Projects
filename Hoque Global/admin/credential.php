<?php
include "controllers/coreFunctions/connect.php";
include "controllers/coreFunctions/coreFunction.php";

$username = "hoque global";
$username = dataEncrypt($username);
$password = "hoqueGlob@l#2021_Mk";
$password = encryptPassword($password);

if(insert("user", array("username", "password"), array($username, $password))){
    echo "success";
}

?>