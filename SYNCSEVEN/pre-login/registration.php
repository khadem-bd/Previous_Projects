<!doctype html>
<html>
<?php
    include "../shared_layout/bundling.php";
?>

<body>
    <?php include "../shared_layout/prelogin-header.php"; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="tile with-padding">
                    <div class="login">
                        <a class="pl-close" href=""><span class="ss-rounded-cross"></span></a>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                <h1>Sign Up with <span>RideCentric</span></h1>
                                <p>Sign up with your social media account or email address</p>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-sm-12 col-md-12 col-lg-5">
                                <div class="align-middle">
                                    <a class="social-btn facebook" href="">
                                        <span class="icon"><img src="../images/facebook.svg"></span>
                                        <span class="text">Sign up with Facebook</span>
                                    </a>
                                    <a class="social-btn gmail" href="">
                                        <span class="icon"><img src="../images/gmail.svg"></span>
                                        <span class="text">Sign up with Gmail</span>
                                    </a>
                                    <a class="social-btn linkedin" href="">
                                        <span class="icon"><img src="../images/linkedin.svg"></span>
                                        <span class="text">Sign up with Linkedin</span>
                                    </a>
                                    <a class="social-btn twitter" href="">
                                        <span class="icon"><img src="../images/twitter.svg"></span>
                                        <span class="text">Sign up with Twitter</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-7">
                                <div class="form-content">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>First Name *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Last Name *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label>Enter your email *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Enter your phone number *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Enter a password *</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary" href="">Signup Now</a>
                                    <p class="text-center">Already have an account? <a href="">login</a></p>
                                    <p class="text-small">By creating an account, you agree to the <a href="">ridecentric.com</a> Agreement and <a href="">Privacy Policy</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>