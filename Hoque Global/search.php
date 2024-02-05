<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "bundling.php"; ?>
</head>
<body>
    <?php include "header.php"; 
        include "admin/controllers/coreFunctions/connect.php";
        include "admin/controllers/coreFunctions/coreFunction.php";
    ?>
    <section class="innerpage-banner clearfix" style="background-image:url(assets/innerpage-banner/news-and-events.jpg);">
        <div class="transparent-layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 innerpage-bannner-content">
                        <h1>Search Result(s)</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="innerpage-content clearfix">
        <div class="container">
            <div class="mt-5 mb-3">
                <form method="POST" action="search.php">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group search">
                                <input class="form-control" type="text" placeholder="Search" name="searchkey">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <input type="submit" class="btn btn-primary" value="Search">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <?php
                    if(isset($_POST['searchkey'])){
                        $searchkey = sterilizeValue($_POST['searchkey']);
                        $heading = "%$searchkey%";
                        $content = "%$searchkey%";
                        $category = "%$searchkey%";
                        $sql = "SELECT * FROM news WHERE heading LIKE ? OR content LIKE ? OR category LIKE ?";
                        $stmt = $conn->prepare($sql); 
                        $stmt->bind_param("sss", $heading, $content, $category);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <a href="news.php?key=<?php echo encrypt($row['id']); ?>" class="news-unit">
                        <div class="thumbnail" style="background-image: url(news-content/<?php echo $row['foldername'] . "/" . $row['image']; ?>);"></div>
                        <div class="news-content">
                            <p class="category"><?php echo $row['category']; ?></p>
                            <h4><?php echo str_replace("\'", "'", $row['heading']); ?></h4>
                            <p class="publishing-date"><?php echo $row['date']; ?></p>
                        </div>
                    </a>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <?php include "bottom.php"; ?>
</body>
</html>
