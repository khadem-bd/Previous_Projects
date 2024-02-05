<!DOCTYPE html>
<html lang="en">
<?php include "bundle.php"; ?>
<body>
    <!-- Start of header section -->
    <?php 
        include "header.php"; 
        include "adjust-header.php";
    ?>
    <!-- End of header section -->

    <!-- Start of inner page banner -->
    <div class="innerpage-banner">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 banner-img contactus-banner"></div>
            <div class="col-sm-12 col-md-6 col-lg-6 green-bg">
                <div class="content">
                    <h2>Contact us</h2>
                    <p>Elevating your expectations with us.</p>
                    <h3>Where safety and style meet.</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End of inner page banner -->

    <!-- Start of contact us section -->
    <section class="contactus">
        <div class="container">
            <div class="row">
                <!-- Start of address section -->
                <div class="col-sm-12 col-md-12 col-lg-6 contact-info-wrapper vts_fadein vts_left animate_onLoad">
                    <div class="contactus-map">
                        <div class="contact-address">
                            <img src="images/contact-us/logo-symbol.svg">
                            <p>1900 S Cesar Chavez Blvd <br> Suite #100 Dallas, TX <br> 75215</p>
                        </div>
                    </div>
                    <div>
                        <div class="contact-details">
                            <h5>Support</h5>
                            <p>Our friendly team is here to help.</p>
                            <a href="mailto:info@verticaltransport.com">info@verticaltransport.com</a>
                        </div>
                        <div class="contact-details">
                            <h5>Phone</h5>
                            <p>24/7 Our services</p>
                            <a href="">+(214) 956-8400</a>
                        </div>
                    </div>
                </div>
                <!-- End of address section -->

                <!-- Start of contact us form -->
                <div class="col-sm-12 col-md-12 col-lg-4 vts_fadein vts_right animate_onLoad">
                    <div class="contact-form">
                        <h3>Get in <span>touch</span></h3>
                        <p>24/7 We will answer your question and problems</p>
                        <form id="sentContactInfo">
                            <div id="sendContactInfoSuccess" class="success"></div>
                            <div id="sendContactInfoError" class="error"></div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Full name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <textarea name="details" id="" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="submit">
                        </form>
                    </div>
                </div>
                <!-- End of contact us form -->
                
                <div class="col-sm-12 col-md-2 col-lg-2 form-image vts_fadein vts_right animate_onLoad">

                </div>
            </div>
        </div>
    </section>
    <!-- End of contact us section -->

    <!-- Start of footer section -->
    <?php include "footer.php"; ?>
    <!-- End of footer section -->

</body>
</html>