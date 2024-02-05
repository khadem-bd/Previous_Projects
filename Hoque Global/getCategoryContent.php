<?php
include "admin/controllers/coreFunctions/connect.php";
include "admin/controllers/coreFunctions/coreFunction.php";
$category = sterilizeValue($_POST['category']);
$sql = "";
if($category != "all"){
    $sql = "SELECT * FROM news WHERE category='$category'";
}else{
    $sql = "SELECT * FROM news";
}

$result  = $conn->query($sql);
$html = "";
while ($row = $result->fetch_assoc()) {
    $html = $html . '<div class="col-sm-12 col-md-4 col-lg-3">
    <a href="news.php?key=' . encrypt($row['id']) . '" class="news-unit">
        <div class="thumbnail" style="background-image: url(news-content/' . $row['foldername'] . '/' . $row['image'] . '"></div>
        <div class="news-content">
            <p class="category">' . $row['category'] . '</p>
            <h4>' . str_replace("\'", "'", $row['heading']) . '</h4>
            <p class="publishing-date">' . $row['date'] . '</p>
        </div>
    </a>
</div>';
}

echo $html;
?>