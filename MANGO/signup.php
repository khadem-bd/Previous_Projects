<!doctype html>
<html>
<?php include "bundling.php" ?>

<body>
    <?php include "header.php"; ?>
    <section class="prelogin-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-login">
                        <div class="form">
                            <div class="row">
                                <div class="col-12">
                                    <h2>Sign Up</h2>
                                    <p>Your Information</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-error">
                                        <input type="text" class="form-control" placeholder="Retype Email">
                                        <p class="error-text">Please provide a valid email address.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-error">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <p class="error-text">This username is already taken</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-error">
                                        <input type="password" class="form-control password" placeholder="Password">
                                        <a class="toggleShowHide" href="javascript:void(0)"><span class="m-hide"></span></a>
                                        <p class="error-text">Password must be at least eight (8) characters and contain at least 1 number and 1 symbol.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-error">
                                        <input type="password" class="form-control password" placeholder="Retype Password">
                                        <a class="toggleShowHide" href="javascript:void(0)"><span class="m-hide"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="signup-part-2.php" class="cta-btn">
                                        Next
                                        <?php include "go-text.php"; ?>
                                    </a>
                                    <p class="text-center">You have an account? <a class="bold" href="index.php">Log In</a></p>
                                    <ul class="social-login-opt">
                                        <li><a href=""><img src="images/login-options/apple.svg" alt="Apple"></a></li>
                                        <li><a href=""><img src="images/login-options/facebook.svg" alt="Facebook"></a></li>
                                        <li><a href=""><img src="images/login-options/linkedin.svg" alt="Linkedin"></a></li>
                                        <li><a href=""><img src="images/login-options/twitter.svg" alt="Twitter"></a></li>
                                        <li><a href=""><img src="images/login-options/google.svg" alt="Gmail"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php"; ?>
</body>

</html>