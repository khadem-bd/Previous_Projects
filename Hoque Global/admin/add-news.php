<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "bundle.php"; ?>
</head>
<body>
    <?php 
        include "header.php"; 
        include "controllers/coreFunctions/connect.php";
        include "controllers/coreFunctions/coreFunction.php";
    ?>

    <section class="clearfix">
        <div class="container">
            <form id="addNewsContent">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2>Add News Content </h2>
                        <div id="newsSuccess" class="success"></div>
                        <div id="newsError" class="error"></div>
                        <div class="form-group">
                            <label>Heading</label>
                            <input type="text" class="form-control" name="heading">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input id="highlight" class="form-check-input" type="checkbox"> 
                            <label class="form-check-label" for="highlight">
                                Highlight
                            </label>
                            <input id="highlightValue" type="text" class="form-control hidden" name="highlight" value="false">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input id="trending"  class="form-check-input" type="checkbox"> 
                            <label class="form-check-label" for="trending">
                                Trending
                            </label>
                            <input id="trendingValue" type="text" class="form-control hidden" name="trending" value="false">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" class="form-control" name="author">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Publishing Date</label>
                            <input id="publishingDate" type="text" class="form-control" name="date">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category">
                                <?php
                                    $catSql = "SELECT * FROM category";
                                    $res  = $conn->query($catSql);
                                    while ($catrow = $res->fetch_assoc()) {
                                        echo "<option>" . $catrow['child_category'] . "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>News Content</label>
                            <textarea id="newsContent" class="form-control" name="news"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Thumbnail Image Upload</label><br>
                            <input type="file" name="file">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Publisher Logo Upload</label><br>
                            <input type="file" name="publisherLogo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group text-right">
                            <input type="submit" class="btn btn-primary" value="Upload and Save">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>