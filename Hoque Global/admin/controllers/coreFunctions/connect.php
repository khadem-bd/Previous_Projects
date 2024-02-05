<?php
//error_reporting(0);

//local server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoqueglobal";

//live server
// $servername = "localhost";
// $username = "ridecent_hqusr";
// $password = "hq@#headqu@rtr*2021";
// $dbname = "ridecent_hoqueglobal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
