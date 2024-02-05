<!doctype html>
<html>
<?php
    include "../shared_layout/bundling.php";
?>

<body>
    <?php include "../shared_layout/postlogin-header.php"; ?>
    <section class="reward-banner">
        <ul id="rewardBanner">
            <li><img src="../images/reward-banner/1.jpg"></li>
            <li><img src="../images/reward-banner/1.jpg"></li>
            <li><img src="../images/reward-banner/1.jpg"></li>
        </ul>
    </section>
    <section class="reward-content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <div class="tile client-logo">
                        <img src="../images/client-logo.jpg">
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="reward-slider gold">
                        <img class="badge" src="../images/reward-badge/gold-badge.svg">
                        <h2>
                            <span class="badge-name">GOLD ELITE <span class="ss-right-arrow icon"></span></span>
                            <span class="value">
                                <span class="label">Available Points/Cash value</span>
                                <span class="number">4599/$45.50</span>
                            </span>
                        </h2>
                        <div class="progress-bar">
                            <div class="progress" style="width:40%;"></div>
                            <div class="peak-point">
                                <span class="ss-triangle icon"></span>
                                <p>30 Ride</p>
                            </div>
                        </div>
                        <p>Book 10 more rides to reach Platinum</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="rewards booking-form">
                        <div class="location-info">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h2>When & Where</h2>
                                    <div class="form-check ss-form-radio inline">
                                        <input class="form-check-input ss-radio" name="exampleRadios" id="OptToday" value="option2" type="radio">
                                        <label class="form-check-label ss-radio-label" for="OptToday">One way</label>
                                    </div>
                                    <div class="form-check ss-form-radio inline">
                                        <input class="form-check-input ss-radio" name="exampleRadios" id="OptToday" value="option2" type="radio">
                                        <label class="form-check-label ss-radio-label" for="OptToday">By the Hour</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="input-pair">
                                        <div class="form-group seperator">
                                            <i class="ss-calander icon"></i>
                                            <input type="text" class="form-control" placeholder="When" />
                                        </div>
                                        <div class="form-group">
                                            <i class="ss-clock icon"></i>
                                            <input type="text" class="form-control" placeholder="Time" />
                                        </div>
                                    </div>
                                    <ul class="ride-stops">
                                        <li>
                                            <a class="move" href=""><i class="ss-move"></i></a>
                                            <div class="ride-location">
                                                <a class="user-location" href=""><i class="ss-user-location"></i></a>
                                                <input type="text" class="form-control" placeholder="Pickup Location" />
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="input-pair">
                                        <div class="form-group seperator">
                                            <i class="ss-passenger icon"></i>
                                            <input type="text" class="form-control" placeholder="Passenger" />
                                        </div>
                                        <div class="form-group">
                                            <i class="ss-luggage icon"></i>
                                            <input type="text" class="form-control" placeholder="Luggage" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <a class="btn btn-primary" href="">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include "../shared_layout/footer.php";
    ?>
</body>

</html>