<?php
include "admin/controllers/coreFunctions/connect.php";
include "admin/controllers/coreFunctions/coreFunction.php";
function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
 
    return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
 }
function renameFolder($id, $heading){
    $oldfolder = preg_replace('/\s+/', '', $heading);
    $oldfolder = encrypt($oldfolder);
    $oldfolder = strtolower($oldfolder); 
    
    $newFoldername = preg_replace('/\s+/', '', $heading);
    $newFoldername = strtolower($newFoldername);
    $newFoldername =  clean($newFoldername);
    $newFoldername = $id . "_" . $newFoldername;

    $oldFolderRoute = "news-content/" . $oldfolder;
    $newFolderRoute = "news-content/" . $newFoldername;
    rename ($oldFolderRoute, $newFolderRoute);
    return $newFoldername;
}


    $sql = "SELECT * FROM news";
    $result  = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $folder  = renameFolder($row['id'], $row['heading']);
        update("news", array("foldername"), array($folder, $row['id']), "id");
    }
?>