<!doctype html>
<html>
<?php include "bundling.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function() {
        var aboutus = $(".aboutus").position();
        if ($(document).scrollTop() > aboutus.top / 2) {
            $(".aboutus").children(".onScrollSlideUp").addClass("animated");
        }

        var services = $(".services").position();
        if ($(document).scrollTop() > services.top / 2) {
            $(".services").children(".onScrollSlideUp").addClass("animated");
        }
    });
})
</script>
<body>
    <?php include "header.php"; ?>
    <section class="banner clearfix">
        <ul class="slider">
            <li style="background-image:url(images/banner/1.jpg)">
                <div class="content">
                    <h1>Executing commercial, retail, <br> residential and hospitality projects</h1>
                    <a href="current-projects.php">View Projects</a>
                </div>
            </li>
            <li style="background-image:url(images/banner/2.jpg)">
                <div class="content">
                    <h1>Executing commercial, retail, <br> residential and hospitality projects</h1>
                    <a href="current-projects.php">View Projects</a>
                </div>
            </li>
            <li style="background-image:url(images/banner/3.jpg)">
                <div class="content">
                    <h1>Executing commercial, retail, <br> residential and hospitality projects</h1>
                    <a href="current-projects.php">View Projects</a>
                </div>
            </li>
            <li style="background-image:url(images/banner/4.jpg)">
                <div class="content">
                    <h1>Executing commercial, retail, <br> residential and hospitality projects</h1>
                    <a href="current-projects.php">View Projects</a>
                </div>
            </li>
            <li style="background-image:url(images/banner/5.jpg)">
                <div class="content">
                    <h1>Executing commercial, retail, <br> residential and hospitality projects</h1>
                    <a href="current-projects.php">View Projects</a>
                </div>
            </li>
            <li style="background-image:url(images/banner/6.jpg)">
                <div class="content">
                    <h1>Executing commercial, retail, <br> residential and hospitality projects</h1>
                    <a href="current-projects.php">View Projects</a>
                </div>
            </li>
        </ul>
        <img class="minority-bar" src="images/minority-bar.png">
    </section>
    <section class="aboutus text-center clearfix">
        <div class="container-fluid onScrollSlideUp">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="section-title">About Us</h2>
                    <p class="bold">Pelican CM Concepts has earned a reputation for integrity, quality, service and attention to detail.</p>
                    <p>Our growth from local builder into Dallas Fort Worth’s one of the most reputed construction companies is a reflection of the strong relationships we have forged over the years and our personalized approach to client service.</p>
                    <div class="text-center">
                        <a class="btn btn-primary" href="aboutus.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services clearfix inner-section">
        <div class="container-fluid onScrollSlideUp">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="section-title">Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="service-slider">
                        <li>
                            <img src="images/services/planning.jpg">
                            <div class="content">
                                <h4>Design Management</h4>
                                <p>At Loumain we work in a team with top architects, building and fitout designers to deliver award-winning designs for our clients ...</p>
                                <div class="text-right">
                                    <a class="btn btn-primary" href="design-management.php">Read More</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="images/services/construction-management.jpg">
                            <div class="content">
                                <h4>Construction Management</h4>
                                <p>At the core of our philosophy are two fundamental goals. These two points drive our project delivery systems as well as our construction ... </p>

                                <div class="text-right">
                                    <a class="btn btn-primary" href="construction-management.php">Read More</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="images/services/project-management.jpg">
                            <div class="content">
                                <h4>Project Management</h4>
                                <p>Our project management team has Industry experience and expertise that is hard to match. We have developed an in-house team ...</p>
                                <div class="text-right">
                                    <a class="btn btn-primary" href="project-management.php">Read More</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="gray-bg clearfix">
        <?php include "footer.php"; ?>
    </section>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                
            </div>
        </div>
    </div> -->
    
</body>

</html>