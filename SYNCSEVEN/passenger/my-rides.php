<!doctype html>
<html>
<?php
    include "../shared_layout/bundling.php";
?>

<body>
    <?php include "../shared_layout/postlogin-header.php"; ?>
    <div class="container">
        <div class="tile">
            <h2 class="section-heading mt-10">
                <span class="content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            Redeem reward point
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 text-end">
                            <div class="btn-tabs">
                                <div class="form-radio">
                                    <input type="radio" checked/>
                                    <label>Current Ride</label>
                                </div>
                                <div class="form-radio">
                                    <input type="radio"/>
                                    <label>Past Ride</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </h2>
            <div class="pl-20 pr-20 pt-10 pb-10 mt-10">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group search">
                            <span class="ss-search icon"></span>
                            <input class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="row justify-content-end">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Pick Up Date</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Jun 2020 - July 2020</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <a class="btn btn-primary btn-fluid" href="">Views</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div id="currentRides">
                        <table>
                            <tr>
                                <th>General Information</th>
                                <th>Ride Information</th>
                                <th>Chauffeur Info & Status</th>
                                <th>Ride Routing</th>
                                <th>Vehicle & Special Instructions </th>
                                <th>Fare Details</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <p><span class="bold">Account:</span> Test Account</p>
                                    <p><span class="bold">Passenger:</span> Donald Tramp</p>
                                    <p><span class="bold">Caller:</span>Donald Trump</p>
                                    <p><span class="bold">Additional Passenger(s):</span> Melina Trump</p>
                                </td>
                                <td>
                                    <p> <span class="bold">Pickup Date:</span> 03/23/2022 </p>
                                    <p> <span class="bold">Pickup Time:</span> 14:30 </p>
                                    <p> <span class="bold">Ride:</span> 234523432 </p>
                                    <p> <span class="bold">Run Type:</span>  </p>
                                    <p> <span class="bold">Event Group:</span>  </p>
                                </td>
                                <td>
                                    <p><span class="bold">Chauffeur Name:</span>Test Account</p>
                                    <p><span class="bold">Chauffeur Phone:</span>04-45678735345</p>
                                    <p><span class="bold">Dispatch Status:</span></p>
                                </td>
                                <td>
                                    <ul class="ride-routing">
                                        <li>
                                            <span class="bar"></span>
                                            <p>Dallas Font Worth Internation Airport</p>
                                            <p>2334 International Parkway Dallas-For Worth TX 7567</p>
                                            <a href="">Note</a>
                                        </li>
                                        <li>
                                            <span class="bar"></span>
                                            <p>Dallas Font Worth Internation Airport</p>
                                            <p>2334 International Parkway Dallas-For Worth TX 7567</p>
                                            <a href="">Note</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <p><span class="bold">Vehicle:</span>SUV</p>
                                    <p><span class="bold">Passenger:</span>5</p>
                                    <p><span class="bold">Luggage:</span>1</p>
                                    <p><span class="bold">Special Istructions:</span>Rebecca MUST Come in and pre-pay all runs prior to service 90.</p>
                                </td>
                                <td>
                                    <p class="bold">$257.00</p>
                                </td>
                                <td>
                                    <p class="bold themecolor">Confirmed</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><span class="bold">Account:</span> Test Account</p>
                                    <p><span class="bold">Passenger:</span> Donald Tramp</p>
                                    <p><span class="bold">Caller:</span>Donald Trump</p>
                                    <p><span class="bold">Additional Passenger(s):</span> Melina Trump</p>
                                </td>
                                <td>
                                    <p> <span class="bold">Pickup Date:</span> 03/23/2022 </p>
                                    <p> <span class="bold">Pickup Time:</span> 14:30 </p>
                                    <p> <span class="bold">Ride:</span> 234523432 </p>
                                    <p> <span class="bold">Run Type:</span>  </p>
                                    <p> <span class="bold">Event Group:</span>  </p>
                                </td>
                                <td>
                                    <p><span class="bold">Chauffeur Name:</span>Test Account</p>
                                    <p><span class="bold">Chauffeur Phone:</span>04-45678735345</p>
                                    <p><span class="bold">Dispatch Status:</span></p>
                                </td>
                                <td>
                                    <ul class="ride-routing">
                                        <li>
                                            <span class="bar"></span>
                                            <p>Dallas Font Worth Internation Airport</p>
                                            <p>2334 International Parkway Dallas-For Worth TX 7567</p>
                                            <a href="">Note</a>
                                        </li>
                                        <li>
                                            <span class="bar"></span>
                                            <p>Dallas Font Worth Internation Airport</p>
                                            <p>2334 International Parkway Dallas-For Worth TX 7567</p>
                                            <a href="">Note</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <p><span class="bold">Vehicle:</span>SUV</p>
                                    <p><span class="bold">Passenger:</span>5</p>
                                    <p><span class="bold">Luggage:</span>1</p>
                                    <p><span class="bold">Special Istructions:</span>Rebecca MUST Come in and pre-pay all runs prior to service 90.</p>
                                </td>
                                <td>
                                    <p class="bold">$257.00</p>
                                </td>
                                <td>
                                    <p class="bold themecolor">Confirmed</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="pastRides" style="display:none;">
                        <table>
                            <tr>
                                <th>Ride Date</th>
                                <th>Ride With</th>
                                <th>Chauffeur Info & Status</th>
                                <th>Ride Details</th>
                                <th>Fare Details</th>
                            </tr>
                            <tr>
                                <td>09 March 2022, 7:56 pm</td>
                                <td>Theresa Webb</td>
                                <td>Demo Passenger</td>
                                <td>Dallas</td>
                                <td>257</td>
                            </tr>
                            <tr>
                                <td>09 March 2022, 7:56 pm</td>
                                <td>Theresa Webb</td>
                                <td>Demo Passenger</td>
                                <td>Dallas</td>
                                <td>257</td>
                            </tr>
                            <tr>
                                <td>09 March 2022, 7:56 pm</td>
                                <td>Theresa Webb</td>
                                <td>Demo Passenger</td>
                                <td>Dallas</td>
                                <td>257</td>
                            </tr>
                            <tr>
                                <td>09 March 2022, 7:56 pm</td>
                                <td>Theresa Webb</td>
                                <td>Demo Passenger</td>
                                <td>Dallas</td>
                                <td>257</td>
                            </tr>
                            <tr>
                                <td>09 March 2022, 7:56 pm</td>
                                <td>Theresa Webb</td>
                                <td>Demo Passenger</td>
                                <td>Dallas</td>
                                <td>257</td>
                            </tr>
                            <tr>
                                <td>09 March 2022, 7:56 pm</td>
                                <td>Theresa Webb</td>
                                <td>Demo Passenger</td>
                                <td>Dallas</td>
                                <td>257</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>     
    </div>
        
</body>

</html>