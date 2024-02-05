<!doctype html>
<html>
<?php include "bundling.php"; ?>

<body>
    <?php include "header.php"; ?>
    <section class="innerpage-banner clearfix" style="background-image:url(images/innerpage-banners/contactus.jpg);">
        <div class="semitransparent-bg">
            <h1>Contact Us</h1>
        </div>
    </section>
    <section class="contactus inner-section clearfix slideInUp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3>Our Address</h3>
                        <p class="text-center">1717 Main St. Suite 5630 Dallas Tx, 75201 <br>
                            214-461-1681, info@pelican-connstructions.com
                        </p>
                    <div class="contactus-form">
                        <h2>get in touch</h2>
                        <form id="sendEmail">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" name="company">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                            <div class="text-right">
                                <input type="submit" class="btn btn-primary" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php"; ?>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                
            </div>
        </div>
    </div> -->
    
</body>

</html>