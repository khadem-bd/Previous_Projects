<!DOCTYPE html>
<html lang="en">
<?php include "bundle.php"; ?>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 logo-wrapper">
                    <a class="logo" href="index.php"><img src="images/ridecentric.svg"></a>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <nav>
                        <ul>
                            <li><a href=""><span class="rc-user"></span> Log In</a></li>
                            <li><a class="btn-link" href="">Book Now</a></li>
                            <li class="ham-nav"><a class="icon-link" href=""><span class="rc-hamburger-menu"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="banner clearfix">
        <div class="top-gradient"></div>
        <ul class="slider">
            <li><img src="images/banner-slider/slide-1.jpg"></li>
            <li><img src="images/banner-slider/slide-2.jpg"></li>
        </ul>
        <div class="bottom-gradient">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2>TRUSTED BY THE BEST</h2>
                        <img src="images/banner-slider/customer-logos.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-form">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1>Let’s Book You a Ride</h1>
                    <ul class="option-tab">
                        <li><a id="oneWayRide" class="active" href="javascript:void(0)">One Way</a></li>
                        <li><a id="hourlyRide" href="javascript:void(0)">Hourly</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div id="bookingWhen" class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>When</label>
                        <span class="rc-calander"></span>
                        <input type="text" class="form-control animated-input">
                    </div>
                </div>
                <div id="bookingTime" class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>Time</label>
                        <span class="rc-clock"></span>
                        <input type="text" class="form-control animated-input">
                    </div>
                </div>
                <div id="bookingHours" class="col-sm-12 col-md-4 col-lg-4 hidden">
                    <div class="form-group">
                        <label>Hours</label>
                        <span class="rc-clock"></span>
                        <input type="text" class="form-control animated-input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label>Pick Up Location</label>
                        <span class="rc-location"></span>
                        <input type="text" class="form-control animated-input">
                    </div>
                </div>
            </div>
            <div class="row top-space">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="text-right">
                        <a class="btn btn-primary" href="">Next Step</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="eftp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <a href="">
                        <span class="icon rc-experience"></span>
                        <p>Experience</p>
                    </a>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <a href="">
                        <span class="icon rc-fleet"></span>
                        <p>Fleet</p>
                    </a>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <a href="">
                        <span class="icon rc-tech"></span>
                        <p>Tech</p>
                    </a>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <a href="">
                        <span class="icon rc-peace-of-mind"></span>
                        <p>Peace Of Mind</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="why-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="section-title">why us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="right-space">
                            <div class="thumbnail">
                            <img src="images/why-us/booking.png">
                            <a class="video-btn" href=""><span class="rc-play"></span></a>
                        </div>
                        <h3>Online booking make easy</h3>
                        <p>Vivamus laoreet condimentum nulla eget bibendum. Integer condimentum sed lacus eget varius. Morbi sit amet nunc tempor, facilisis augue molestie, pharetra orci. Fusce volutpat mi sed nisl commodo, sed varius nulla mattis. Etiam a tellus ut velit malesuada mollis. Nullam nec maximus nibh. </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="left-space">
                        <div class="thumbnail">
                            <img src="images/why-us/safety.png">
                            <a class="video-btn" href=""><span class="rc-play"></span></a>
                        </div>
                        <h3>Focused on safety</h3>
                        <p>Vivamus laoreet condimentum nulla eget bibendum. Integer condimentum sed lacus eget varius. Morbi sit amet nunc tempor, facilisis augue molestie, pharetra orci. Fusce volutpat mi sed nisl commodo, sed varius nulla mattis. Etiam a tellus ut velit malesuada mollis. Nullam nec maximus nibh. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fleet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="section-title">our fleets</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="car-fleet">
                        <li>
                            <img src="images/rc-fleet/coach.png">
                            <div class="caption">Coach</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/cts.png">
                            <div class="caption">CTS</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/escalade.png">
                            <div class="caption">Escalade</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/largebus.png">
                            <div class="caption">Large Bus</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/limo.png">
                            <div class="caption">Limousine</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/midsize.png">
                            <div class="caption">Mid Size</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/minibus.png">
                            <div class="caption">Mini Bus</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/sedan.png">
                            <div class="caption">Sedan</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/smallbus.png">
                            <div class="caption">Small Bus</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/sprinter.png">
                            <div class="caption">Sprinter</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/suv.png">
                            <div class="caption">SUV</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/van.png">
                            <div class="caption">Van</div>
                        </li>
                        <li>
                            <img src="images/rc-fleet/xts.png">
                            <div class="caption">XTS</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="section-title">what clients say</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="testimonial-slider">
                        <li>
                            <img src="images/testimonials/client.png">
                            <p>“RideCentric is an important and valued partner of  FC Dallas, <br>
                                Ridecentric always meets all of our transportation needs”</p>
                        </li>
                        <li>
                            <img src="images/testimonials/client.png">
                            <p>“RideCentric is an important and valued partner of  FC Dallas, <br>
                                Ridecentric always meets all of our transportation needs”</p>
                        </li>
                        <li>
                            <img src="images/testimonials/client.png">
                            <p>“RideCentric is an important and valued partner of  FC Dallas, <br>
                                Ridecentric always meets all of our transportation needs”</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <div class="icon">
                        <span class="rc-great-value"></span>
                    </div>
                    <h2>Great Value</h2>
                    <p>Lorem ipsum dolor ismit</p>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <div class="icon">
                        <span class="rc-worldwide-tour"></span>
                    </div>
                    <h2>Worldwide Tour</h2>
                    <p>Lorem ipsum dolor ismit</p>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <div class="icon">
                        <span class="rc-safe-payment"></span>
                    </div>
                    <h2>Safe Payment</h2>
                    <p>Lorem ipsum dolor ismit</p>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                    <div class="icon">
                        <span class="rc-help-center"></span>
                    </div>
                    <h2>Help Center</h2>
                    <p>Lorem ipsum dolor ismit</p>
                </div>
            </div>
        </div>
    </section>
    <section class="book-now">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="banner">
                        <h2>Let’s Get Connected Together</h2>
                        <p>Book a ride today and be a part of the ridecentric family</p>
                        <a href="">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bottom-img text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <img src="images/bottom-img/btm-img.svg">
                </div>
            </div>
        </div>
    </section>
    <section class="bottom-links">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h3>Stay Connected</h3>
                    <p class="mb-3">4517 Washington Ave. Manchester, Kentucky 39495</p>
                    <p>Got Question? Call us 24/7</p>
                    <p>+1-214-574-5900</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h3>Links</h3>
                    <ul>
                        <li>
                            <a href="">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="">Terms of Use</a>
                        </li>
                        <li>
                            <a href="">Covid Protocols</a>
                        </li>
                        <li>
                            <a href="">Transportation Terms</a>
                        </li>
                        <li>
                            <a href="">Cookies Policies</a>
                        </li>
                        <li>
                            <a href="">Affiliate Log In</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 subscribe">
                    <h3>Subscribe To Us</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Input your email address">
                    </div>
                    <div class="text-right">
                        <a class="btn btn-primary" href="">subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p>Copyright © 2022 ridecentric.com All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>