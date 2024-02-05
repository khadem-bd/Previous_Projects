<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "bundling.php"; ?>
</head>
<body>
    <?php include "header.php"; 
        include "admin/controllers/coreFunctions/connect.php";
        include "admin/controllers/coreFunctions/coreFunction.php";
        function mb_str_replace($needle, $replacement, $haystack) {
            return implode($replacement, mb_split($needle, $haystack));
         }
    ?>
    <section class="innerpage-banner clearfix" style="background-image:url(assets/innerpage-banner/news-and-events.jpg);">
        <div class="transparent-layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 innerpage-bannner-content">
                        <h1>News and Events</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="innerpage-content clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <?php
                        $id = sterilizeValue($_GET['key']);
                        $id = decrypt($id);
                        $sql = "SELECT * FROM news WHERE id='$id'";
                        $result  = $conn->query($sql);
                        $row = $result->fetch_assoc();
                    ?>
                    <div class="text-center">
                        <img class="publisher-logo" src="news-content/<?php echo $row['foldername'] . "/" . $row['publisher_logo']; ?>">
                    </div>
                    <h1><?php echo $row['heading']; ?></h1>
                    <img class="responsive-img mb-5 mt-5" src='news-content/<?php echo $row['foldername'] . "/" . $row['image']; ?>'>
                    <p class="date"><?php echo $row['category']; ?> | Author: <?php echo $row['author']; ?> | Published on: <?php echo $row['date']; ?></p>
                    <div class="dynamic-content">
                        <?php 
                            echo $row['content']; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include "bottom.php"; ?>
</body>
</html>