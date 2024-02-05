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
                                    <h2>Login</h2>
                                    <p>Enter your log in details please</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control password" placeholder="Password">
                                        <a class="toggleShowHide" href="javascript:void(0)"><span class="m-hide"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Keep me logged in
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 fp-wrapper">
                                    <a href="" class="forgot-password">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="cta-btn">
                                        Log In
                                        <?php include "go-text.php"; ?>
                                    </a>
                                    <p class="text-center">Don’t have an account? <a class="bold" href="signup.php">Sign Up</a></p>
                                    <p class="social-login-opt-text"><span>or continue with</span></p>
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