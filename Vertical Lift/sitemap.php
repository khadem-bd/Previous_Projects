<!-- Start of sitemap section -->
<div id="sitemap" class="vts-modal-bg">
    <div id="sitemapModal" class="vts-modal">
        <a href="javascript:void(0)" class="close-modal"><span class="icon-cross"></span></a>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 banner sitemap">
                <div class="semitransparent-layer">
                    <img class="logo" src="images/book-a-service/logo.svg">
                    <p>We believe in a higher level of service with attention to detail at a lower cost to customers. Our passion can be your peace of mind.</p>
                    <div class="social-icons">
                        <a href=""><span class="icon-facebook icons"></span></a>
                        <a href=""><span class="icon-mail-send icons"></span></a>
                        <a href=""><span class="icon-linkedin icons"></span></a>
                        <a href=""><span class="icon-twitter icons"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="service-form">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="lift-1 bookaservice-lift">
                                <h2>SITE<span class="bold">MAP</span></h2>
                                <p>24/7 We will answer your question and problems</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <ul class="sitemap-links">
                                <?php
                                    $pageName = basename($_SERVER['PHP_SELF']);
                                ?>
                                <li <?php if($pageName == "index.php"){ echo "class='active'";} ?>><a href="index.php">home</a></li>
                                <li <?php if($pageName == "aboutus.php"){ echo "class='active'";} ?>><a href="aboutus.php">about us</a></li>
                                <li <?php if($pageName == "why-choose-us.php"){ echo "class='active'";} ?>><a href="why-choose-us.php">why choose us</a></li>
                                <li <?php if($pageName == "services.php"){ echo "class='active'";} ?>><a href="services.php">services</a>
                                    <ul>
                                        <li <?php if($pageName == "maintenance.php"){ echo "class='active'";} ?>><a href="maintenance.php">maintenance</a></li>
                                        <li <?php if($pageName == "repair-and-modenization.php"){ echo "class='active'";} ?>><a href="repair-and-modenization.php">repair and modernization</a></li>
                                        <li <?php if($pageName == "new-lift-installation.php"){ echo "class='active'";} ?>><a href="new-lift-installation.php">new lift installation</a></li>
                                    </ul>
                                </li>
                                <li <?php if($pageName == "contactus.php"){ echo "class='active'";} ?>><a href="contactus.php">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of sitemap section -->