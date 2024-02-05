<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "bundle.php"; ?>
</head>
<body>
    <?php include "header.php"; 
        include "controllers/coreFunctions/connect.php";
        include "controllers/coreFunctions/coreFunction.php";
    ?>
    
    <section class="clearfix">
        <div class="fluid-container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Thumbnail Image</th>
                            <th>Publisher Logo</th>
                            <th>Heading</th>
                            <th>Author</th>
                            <th>Is Highlight</th>
                            <th>Is Trending</th>
                            <th>Publishing Date</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM news ORDER BY id DESC";
                            $result  = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><img width="50" src="../news-content/<?php echo $row['foldername'] . "/" . $row['image']; ?>"></td>
                            <td><img width="50" src="../news-content/<?php echo $row['foldername'] . "/" . $row['publisher_logo']; ?>"></td>
                            <td><?php echo $row['heading']; ?></td>
                            <td><?php echo $row['author']; ?></td>
                            <td><?php echo $row['highlight']; ?></td>
                            <td><?php echo $row['trending']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><a class="btn btn-success btn-sm" href="edit-news.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                            <td><a class="btn btn-danger btn-sm" href="delete-news.php?id=<?php echo $row['id']; ?>&&image=<?php echo $row['image']; ?>&&logo=<?php echo $row['publisher_logo']; ?>&&folder=<?php echo $row['foldername']; ?>">Delete</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>