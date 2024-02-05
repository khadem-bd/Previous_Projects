<?php
    include "coreFunctions/connect.php";
    include "coreFunctions/coreFunction.php";

    function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     
        return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
     }
     
    $heading = $_POST['heading'];
    $author = $_POST['author'];
    $highlight = $_POST['highlight'];
    $trending = $_POST['trending'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $content = $_POST['content'];

    $publisherLogofile = $_FILES['publisherLogo'];
    $publisherLogofileName = $publisherLogofile["name"];
    $publisherLogoNewfileName = preg_replace('/\s+/', '', $publisherLogofileName);

    $file = $_FILES['file'];
    $imgFileName = $file["name"];
    $imgNewFileName = preg_replace('/\s+/', '', $imgFileName);

    if(empty($heading) || empty($date) || empty($content) || $_FILES['file']['size'] == 0 || $_FILES['publisherLogo']['size'] == 0){
        echo "required fields cannot be empty";
    }else{
        $stmt = $conn->prepare("INSERT INTO news (heading, author, image, publisher_logo, content, date, category, trending, highlight) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $heading, $author, $imgNewFileName, $publisherLogoNewfileName, $content, $date, $category, $trending, $highlight);
        $stmt->execute();
        $id = $stmt -> insert_id;

        $newFoldername = preg_replace('/\s+/', '', $heading);
        $newFoldername = strtolower($newFoldername);
        $newFoldername =  clean($newFoldername);
        $newFoldername = $id . "_" . $newFoldername;
        $dirpath = "../../news-content/" . $newFoldername;
        
        if (!file_exists($dirpath)) {
            mkdir($dirpath, 0777);
        }

        update("news", array("foldername"), array($newFoldername, $id), "id");
        $fileUploadPath = "../../news-content/" . $newFoldername . "/";
        singleFileUpload($file, $fileUploadPath);
        singleFileUpload($publisherLogofile, $fileUploadPath);
        echo "Content added successfully";
        
    }
    
?>