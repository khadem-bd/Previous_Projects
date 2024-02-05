<!doctype html>
<html>
<?php
    include "../shared_layout/bundling.php";
?>

<body>
    <?php include "../shared_layout/postlogin-header.php"; ?>
    <section class="clearfix">
        <div class="container-fluid">
            <div class="row as-grid-wrapper">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="analytic-summary blue with-btn">
                        <span class="ss-card icon"></span>
                        <h2>40000/$410.50</h2>
                        <p>Available <br> Points/Cash value</p>
                        <a class="btn btn-primary" href="">Redeem</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="analytic-summary dark-green">
                    <span class="icon ss-hotcup"></span>
                        <h2>40000/$420.50</h2>
                        <p>Available <br> Points/Cash value</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="analytic-summary bottle-green">
                    <span class="icon ss-star"></span>
                        <h2>40000/$430.50</h2>
                        <p>Est. Future Points <br> Points/Cash value</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clearfix mt-15 rp-list">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="tile">
                        <div class="tab">
                            <ul class="tab-header">
                                <li><a onclick="changeText(this)" class="active" href="#rewardPoint">Reward Point</a></li>
                                <li><a onclick="changeText(this)" href="#redeemHistory">Redeem History</a></li>
                            </ul>
                            <ul class="tab-content">
                                <li id="rewardPoint" class="active">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <div class="form-group search">
                                                <span class="ss-search icon"></span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-9 text-right">
                                            <div class="right-content">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-7">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>Jun 2020 - July 2020</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-5 text-left">
                                                        <a class="btn btn-primary btn-fluid" href="">View Report</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="table-responsive">
                                                <table>
                                                    <tr class="text-center">
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Res#</th>
                                                        <th>Pax</th>
                                                        <th>Ride Type</th>
                                                        <th>Pickup</th>
                                                        <th>Destination</th>
                                                        <th>Ride Total</th>
                                                        <th>Reward Points</th>
                                                        <th>Bonus Points</th>
                                                        <th>Total Earned points</th>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>mm/dd/yyyy</td>
                                                        <td>hhmm</td>
                                                        <td>9384723</td>
                                                        <td>Demo Passenger</td>
                                                        <td>oneWay</td>
                                                        <td>Dallas</td>
                                                        <td>Dallas</td>
                                                        <td>$174.00</td>
                                                        <td>257</td>
                                                        <td>00</td>
                                                        <td>257</td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>mm/dd/yyyy</td>
                                                        <td>hhmm</td>
                                                        <td>9384723</td>
                                                        <td>Demo Passenger</td>
                                                        <td>oneWay</td>
                                                        <td>Dallas</td>
                                                        <td>Dallas</td>
                                                        <td>$174.00</td>
                                                        <td>257</td>
                                                        <td>00</td>
                                                        <td>257</td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>mm/dd/yyyy</td>
                                                        <td>hhmm</td>
                                                        <td>9384723</td>
                                                        <td>Demo Passenger</td>
                                                        <td>oneWay</td>
                                                        <td>Dallas</td>
                                                        <td>Dallas</td>
                                                        <td>$174.00</td>
                                                        <td>257</td>
                                                        <td>00</td>
                                                        <td>257</td>
                                                    </tr>
                                                    <tr class="text-center">
                                                        <td>mm/dd/yyyy</td>
                                                        <td>hhmm</td>
                                                        <td>9384723</td>
                                                        <td>Demo Passenger</td>
                                                        <td>oneWay</td>
                                                        <td>Dallas</td>
                                                        <td>Dallas</td>
                                                        <td>$174.00</td>
                                                        <td>257</td>
                                                        <td>00</td>
                                                        <td>257</td>
                                                    </tr>

                                                    <tr class="text-center">
                                                        <td colspan="7"></td>
                                                        <td  class="fw-700">$174</td>
                                                        <td  class="fw-700">257</td>
                                                        <td  class="fw-700">00</td>
                                                        <td  class="fw-700">257</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="redeemHistory">

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>