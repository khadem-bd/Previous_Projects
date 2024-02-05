<!doctype html>
<html>
<?php
    include "../shared_layout/bundling.php";
?>

<body>
    <?php include "../shared_layout/postlogin-header.php"; ?>
    <section class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="tile">
                        <h2 class="section-heading mt-10">
                            <span class="content">
                                Redeem reward points
                                <span class="text">Earn 401 points more to reach Platinumf your profile.</span>
                            </span>
                        </h2>
                        <div class="p-20">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="analytics-summary skyblue">
                                        <span class="ss-hotcup icon"></span>
                                        <span class="text">
                                            <h2>20</h2>
                                            <p>Available Points</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="analytics-summary red">
                                        <span class="ss-star icon"></span>
                                        <span class="text">
                                            <h2>$99.99</h2>
                                            <p>Cash Value</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="analytics-summary yellow">
                                        <span class="ss-dollar icon"></span>
                                        <span class="text">
                                            <h2>$99.99</h2>
                                            <p>Balance</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-20">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="tile">
                        <h2 class="section-heading mt-10">
                            <span class="content">
                                Select Your Reward Option
                            </span>
                        </h2>
                        <div class="p-20">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <img class="thumb-big" src="../images/zelle-big.svg">
                                    <ul class="thumb-list">
                                        <li><a class="active" href="javascript:void(0)"><img src="../images/zelle-small.svg"></a></li>
                                        <li><a href="javascript:void(0)"><img src="../images/amazon-small.svg"></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <p class="bold mb-10">I wish to redeem</p>
                                    <a class="cash-value" href="">$5.00</a>
                                    <a class="cash-value" href="">$10.00</a>
                                    <a class="cash-value" href="">$15.00</a>
                                    <a class="cash-value" href="">$20.00</a>
                                    <div class="cash-input">
                                        <span class="ss-dollar icon"></span>
                                        <input type="text" placeholder="Enter Amount">
                                    </div>

                                    <p class="bold mt-20 mb-10">Delivery Address</p>
                                    <div class="form-group delivery-address">
                                        <select class="form-control">
                                            <option>4517 Washington Ave. Manchester, Kentucky 39495</option>
                                        </select>
                                        <a class="icon" href=""><span class="ss-square-plus"></span></a>
                                    </div>
                                    <p class="bold mt-20 mb-10">Email Address</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="youraddress@email.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-sm-12 col-md-10 col-lg-10">
                                    <textarea class="form-control" placeholder="note"></textarea>
                                    <p class="submit-text">By Clicking Submit your reward will be processed</p>
                                    <a class="btn btn-success" href="">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>