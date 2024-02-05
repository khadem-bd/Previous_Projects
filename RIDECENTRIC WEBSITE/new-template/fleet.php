<!DOCTYPE html>
<html lang="en">
<?php include "bundle.php"; ?>
<body>
    <!-- Start of header section -->
    <?php include "header.php"; ?>
    <!-- End of header section -->

    <!-- Start of our canvas section -->
    <section class="clearfix fleet-title-section px-sm-0 px-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="section-title m-0">fleet <span>EXHIBIT</span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End of our canvas section -->


    <section class="car-selection px-sm-0 px-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="vehicle-category">
                        <li><a class="active" href="">Sedan</a></li>
                        <li><a href="">SUV</a></li>
                        <li><a href="">Minivan</a></li>
                        <li><a href="">Minibus</a></li>
                        <li><a href="">Motorcoach</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="car-slider">
                        <li>
                            <div class="car-info">
                                <h2  class="fleet-title">Cadillac CTS</h2>
                                <p class="pax-lug">
                                    <img src="images/fleet/icons/user.png">
                                    <span>3</span>

                                    <span class="ml-md-5 ml-sm-3 ml-2">
                                        <img src="images/fleet/icons/luggage.png">
                                        <span>4</span>
                                    </span>
                                </p>
                                <div class="car-img" style="background-image:url(images/fleet/sedan/top-banner/slide-1.png)"></div>
                                <div class="amenities">
                                    <img src="images/fleet/icons/water-bottle.png" alt="">
                                    <img src="images/fleet/icons/charging.png" alt="">
                                    <img src="images/fleet/icons/wifi.png" alt="">
                                    <img src="images/fleet/icons/newspaper.png" alt="">
                                    <img src="images/fleet/icons/first-aid-kit.png" alt="">
                                </div>
                                <div class="reserve-btn-wrapper">
                                    <a href="" class="btn btn-primary">Reserve</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="car-info">
                                <h2 class="fleet-title">Mercedes S500</h2>
                                <p class="pax-lug">
                                    <img src="images/fleet/icons/user.png">
                                    <span>3</span>

                                    <span class="ml-5">
                                        <img src="images/fleet/icons/luggage.png">
                                        <span>4</span>
                                    </span>
                                </p>
                                <div class="car-img" style="background-image:url(images/fleet/sedan/top-banner/slide-2.png)"></div>
                                <div class="amenities">
                                    <img src="images/fleet/icons/water-bottle.png" alt="">
                                    <img src="images/fleet/icons/charging.png" alt="">
                                    <img src="images/fleet/icons/wifi.png" alt="">
                                    <img src="images/fleet/icons/newspaper.png" alt="">
                                    <img src="images/fleet/icons/first-aid-kit.png" alt="">
                                </div>
                                <div class="reserve-btn-wrapper">
                                    <a href="" class="btn btn-primary">Reserve</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section clearfix gray-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12  px-sm-0 px-4">
                    <h2 class="section-title no-line">PHOTO <span>GALLERY</span></h2>
                </div>
                <ul id="photoGallery" class="car-photo-gallery overflow-hidden">
                    <li class="d-flex align-items-center justify-content-center"><img src="images/fleet/sedan/photo-gallery/cadiallac-cts/1.png" alt=""></li>
                    <li class="d-flex align-items-center justify-content-center"><img src="images/fleet/sedan/photo-gallery/cadiallac-cts/2.png" alt=""></li>
                    <li class="d-flex align-items-center justify-content-center"><img src="images/fleet/sedan/photo-gallery/cadiallac-cts/3.png" alt=""></li>
                   <li class="d-flex align-items-center justify-content-center"><img src="images/fleet/sedan/photo-gallery/cadiallac-cts/1.png" alt=""></li>
                </ul>
            </div>

             <div class="reserve-btn-wrapper btn-2 pb-0 mt-md-5 mt-3">
                    <a href="" class="btn btn-primary">Reserve</a>
                    <p>Vehicle color, capacity & amenities may vary from market to market. </p>
            </div>
        </div>

    </section>


    <!-- Start of our bottom link and footer section -->
    <?php include "footer.php"; ?>
    <!-- End of our bottom link and footer section -->
</body>
</html>