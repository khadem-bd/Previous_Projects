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
                                <h1>Welcome back to <span>RideCentric</span></h1>
                                <p>Sign up with your social media account or email address</p>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-sm-12 col-md-12 col-lg-6">
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
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-content">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="text-end mt-10">
                                        <div class="form-check">
                                            <input type="checkbox">
                                            <label>Remember</label>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary" href="">Next</a>
                                    <p class="text-center">Don’t have an account? <a href="">Create account</a></p>
                                    <div class="text-center">
                                        <a class="guest-booking-link" href="">Book Ride As Guest</a>
                                    </div>
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