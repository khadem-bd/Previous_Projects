<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "bundling.php"; ?>
</head>
<body>
    <?php include "header.php"; 
        include "admin/controllers/coreFunctions/connect.php";
        include "admin/controllers/coreFunctions/coreFunction.php";

        function getchildCategories($parentCategory){
            include "admin/controllers/coreFunctions/connect.php";
            $html = "<ul>";
            $sql = "SELECT * FROM category WHERE parent_category='$parentCategory'";
            $result  = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                $html = $html . '<li class="child-categories"><a data-category="' . $row['child_category'] . '" href="javascript:void(0)">' .  $row['child_category'] . '</a></li>';
            }
            $html = $html . "</ul>";
            return $html;
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
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="news-highlight">
                            <ul id="highlightSlider">
                                <?php
                                    $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 5";
                                    $result  = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                <li>
                                    <a class="slides read-more" style="background-image: url(news-content/<?php echo $row['foldername'] . "/" . $row['image']; ?>);"  href="news.php?key=<?php echo encrypt($row['id']); ?>">
                                        <div class="semi-transparent-layer">
                                            <div class="content">
                                                <div class="pl-5 pr-5">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <p class="category"><?php echo $row['category']; ?></p>
                                                            <h3><?php echo $row['heading']; ?></h3>
                                                            <p class="publishing-date"><?php echo $row['date']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 trending-posts">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h2>Trending Posts</h2>
                            </div>
                        </div>
                        <div class="news">
                            <?php
                                $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
                                $result  = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                            ?>
                            <a class="trending-link" href="news.php?key=<?php echo encrypt($row['id']); ?>">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <div class="thumbnail" style="background-image: url(news-content/<?php echo $row['foldername'] . "/" . $row['image']; ?>);"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8">
                                        <p class="category"><?php echo $row['category']; ?></p>
                                        <h4 class="news-heading">
                                            <?php echo $row['heading']; ?>
                                        </h4>
                                        <p class="publishing-date"><?php echo $row['date']; ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <ul class="news-category">
                            <li><a data-category="all" class="active allCategory" href="javascript:void(0)">All</a></li>
                            <?php
                                $sql = "SELECT * FROM category GROUP BY parent_category ORDER BY id ASC";
                                $result  = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                            ?>
                            <li><a class="parentCategory"><?php echo $row['parent_category']; ?></a>
                                <?php echo getchildCategories($row['parent_category']) ?>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
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
                <div id="newsContentWrapper" class="row">
                    <?php
                        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 50";
                        $result  = $conn->query($sql);
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
                    ?>
                </div>
            </div>
        </section>
    <?php include "bottom.php"; ?>
</body>
</html>
