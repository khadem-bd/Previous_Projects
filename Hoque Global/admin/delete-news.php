<?php
    include "controllers/coreFunctions/connect.php";
    include "controllers/coreFunctions/coreFunction.php";

    $id = $_GET['id'];
    $image = $_GET['image'];
    $logo = $_GET['logo'];
    $folder = $_GET['folder'];
    $route = "../news-content/" . $folder . "/";
    if(delete("news", "id", $id, "data", "", "")){
        unlink($route . $image);
        unlink($route . $logo);
        rmdir("../news-content/" . $folder);
        header('Location: dashboard.php');
    }
?>