<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("Location:index.php");
}
?>
<header class="clearfix">
        <div class="fluid-container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <h1 class="header-title">Hoque Global Admin Panel</h1>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8">
                    <ul>
                        <li><a href="dashboard.php">Home</a></li>
                        <li><a href="add-news.php">Add New Content</a></li>
                        <li><a href="signout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>