<?php
    include "coreFunctions/connect.php";
    include "coreFunctions/coreFunction.php";

    $heading = $_POST['heading'];
    $author = $_POST['author'];
    $highlight = $_POST['highlight'];
    $trending = $_POST['trending'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $folder = $_POST['folder'];
    $id = $_POST['id'];


    if ($_FILES['file']['size'] == 0 && $_FILES['publisherLogo']['size'] == 0){
        if(empty($heading) || empty($date) || empty($content)){
            echo "Required fields cannot be empty";
        }else{
            $colNames = array("heading", "author", "content", "date", "category", "trending", "highlight");
            $colValues = array($heading, $author, $content, $date, $category, $trending, $highlight, $id);
            if(update("news", $colNames, $colValues, "id")){
                echo "Content updated successfully";
            }
        }
    }else if ($_FILES['file']['size'] != 0 && $_FILES['publisherLogo']['size'] == 0){
        $oldimg = sterilizeValue($_POST['oldimg']);
        $file = $_FILES['file'];
        $imgFileName = $file["name"];
        $imgNewFileName = preg_replace('/\s+/', '', $imgFileName);

        if(empty($heading) || empty($date) || empty($content)){
            echo "Required fields cannot be empty";
        }else{
            $colNames = array("heading", "author", "image", "content", "date", "category", "trending", "highlight");
            $colValues = array($heading, $author, $imgNewFileName, $content, $date, $category, $trending, $highlight, $id);
            if(update("news", $colNames, $colValues, "id")){
                $fileUploadPath = "../../news-content/" . $folder . "/";
                $oldfilepath = $fileUploadPath . $oldimg;
                unlink($oldfilepath);
                
                singleFileUpload($file, $fileUploadPath);
                echo "Content updated successfully";
            }
        }
    }else if ($_FILES['file']['size'] == 0 && $_FILES['publisherLogo']['size'] != 0){
        $oldpublisherlogo = sterilizeValue($_POST['oldpublisherLogo']);
        $publisherLogo = $_FILES['publisherLogo'];
        $publisherLogoName = $publisherLogo["name"];
        $publisherLogoNewName = preg_replace('/\s+/', '', $publisherLogoName);

        if(empty($heading) || empty($date) || empty($content)){
            echo "Required fields cannot be empty";
        }else{
            $colNames = array("heading", "author", "publisher_logo", "content", "date", "category", "trending", "highlight");
            $colValues = array($heading, $author, $publisherLogoNewName, $content, $date, $category, $trending, $highlight, $id);
            if(update("news", $colNames, $colValues, "id")){
                $fileUploadPath = "../../news-content/" . $folder . "/";
                if(!empty($oldpublisherlogo)){
                    $oldpublisherfilepath = $fileUploadPath . $oldpublisherlogo;
                    unlink($oldpublisherfilepath);
                }
                
                
                singleFileUpload($publisherLogo, $fileUploadPath);
                echo "Content updated successfully";
            }
        }
    }
    else{
        $oldimg = sterilizeValue($_POST['oldimg']);
        $file = $_FILES['file'];
        $imgFileName = $file["name"];
        $imgNewFileName = preg_replace('/\s+/', '', $imgFileName);

        $oldpublisherlogo = sterilizeValue($_POST['oldpublisherLogo']);
        $publisherLogo = $_FILES['publisherLogo'];
        $publisherLogoName = $publisherLogo["name"];
        $publisherLogoNewName = preg_replace('/\s+/', '', $publisherLogoName);

        if(empty($heading) || empty($date) || empty($content)){
            echo "Required fields cannot be empty";
        }else{
            $colNames = array("heading", "author", "image", "publisher_logo", "content", "date", "category", "trending", "highlight");
            $colValues = array($heading, $author, $imgNewFileName, $publisherLogoNewName, $content, $date, $category, $trending, $highlight, $id);
            if(update("news", $colNames, $colValues, "id")){
                $fileUploadPath = "../../news-content/" . $folder . "/";
                $oldfilepath = $fileUploadPath . $oldimg;
                unlink($oldfilepath);

                if(!empty($oldpublisherlogo)){
                    $oldpublisherfilepath = $fileUploadPath . $oldpublisherlogo;
                    unlink($oldpublisherfilepath);
                }
                
                singleFileUpload($file, $fileUploadPath);
                singleFileUpload($publisherLogo, $fileUploadPath);
                echo "Content updated successfully";
            }
            
        }
    }
?>