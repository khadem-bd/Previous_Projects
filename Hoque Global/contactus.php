<!DOCTYPE html>
<html lang="en">
<head>
<?php include "bundling.php"; ?>
</head>
<body>
    <?php include "header.php" ?>

    <section class="contactus clearfix">
        <div class="container singleContent slideInUp">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                        <h1 class="section-title white">Contact Us</h1>
                        <p class="text-center text-white">1717 Main St. Suite 5630 Dallas Tx, 75201 <br>
                            214-461-1681, info@hoqueglobal.com
                        </p>
                    <div class="contactus-form">
                        <h3>get in touch</h3>
                        <p class="text-white">Please feel free to reach out to us by sending us a message below.  Thank you for contacting our Hoque Global team.</p>
                        
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
    <?php include "bottom.php"; ?>
</body>
</html>
