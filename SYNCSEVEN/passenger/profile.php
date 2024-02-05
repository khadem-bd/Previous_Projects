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
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="tile pax-profile-info position-relative">
                        <ul class="utility-action-dropdown">
                            <li><a href=""><span class="ss-action-vertical"></span></a>
                                <ul>
                                    <li><a onclick="triggerModal('editProfile')" href="javascript:void(0)">Edit Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="text-center">
                            <img class="user-image" src="../images/user-icon.svg">
                            <p class="themecolor mt-10">Welcome</p>
                            <h2>Cameron Williamson</h2>
                            <a class="btn btn-rounded btn-ghost mt-20" href="">Active</a>
                        </div>
                        <div class="mt-50">
                            <p class="mb-10"><span class="bold">PAX</span> : 180290</p>
                            <p class="mb-10"><span class="bold">Phone</span> : 0958345834</p>
                            <p class="mb-10"><span class="bold">Mobile</span> : +1 469-939-5330</p>
                            <p class="mb-10"><span class="bold">Email</span> : cameronwilliamson@ridecentric.com</p>
                            <p class="mb-10"><span class="bold">Personal Acc</span> : Cameron Williamson</p>
                            <p class="mb-10"><span class="bold">Business Acc</span> : Emirates Chauffeur Drive</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="pax-profile-info p-0">
                        <div class="tile pax-section">
                            <span class="section-icon"><span class="ss-document"></span></span>
                            <h2 class="section-heading mt-10">
                                <span class="content">
                                    Reservation Instructions
                                    <span class="text"><a class="edit" href=""><span
                                                class="ss-edit icon"></span></a></span>
                                </span>
                            </h2>
                            <p class="mb-10"><span class="bold">Reservations/Dispatch:</span> Lorem Ipsum dolor ismit
                            </p>
                            <p class="mb-10"><span class="bold">Chauffeur Notes:</span> 469-939-5330 * Gate code is 6300
                            </p>
                            <p class="mb-10"><span class="bold">Pax:</span> John Doe</p>
                        </div>

                        <div class="tile pax-section mt-20">
                            <span class="section-icon"><span class="ss-location"></span></span>
                            <h2 class="section-heading mt-10 mb-0">
                                <span class="content">
                                    Address
                                    <a class="btn header-btn" href=""><span class="ss-rounded-plus icon"></span> Add New
                                        Address</a>
                                </span>
                            </h2>
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <th>Landmark</th>
                                        <th>Billing Address</th>
                                        <th>Country</th>
                                        <th>Phone Number</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>10225 Daria Dr</td>
                                        <td>2715 Ash Dr. San Jose <br> South Dakota 83475</td>
                                        <td>US</td>
                                        <td>+8801716597806</td>
                                        <td>Home</td>
                                        <td><span class="ss-edit"></span></td>
                                    </tr>
                                    <tr>
                                        <td>10225 Daria Dr</td>
                                        <td>2715 Ash Dr. San Jose <br> South Dakota 83475</td>
                                        <td>US</td>
                                        <td>+8801716597806</td>
                                        <td>Home</td>
                                        <td><span class="ss-edit"></span></td>
                                    </tr>
                                    <tr>
                                        <td>10225 Daria Dr</td>
                                        <td>2715 Ash Dr. San Jose <br> South Dakota 83475</td>
                                        <td>US</td>
                                        <td>+8801716597806</td>
                                        <td>Home</td>
                                        <td><span class="ss-edit"></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="tile pax-section mt-20">
                            <span class="section-icon"><span class="ss-location"></span></span>
                            <h2 class="section-heading mt-10">
                                <span class="content">
                                    Address History
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="editProfile" class="rightbar">
        <div class="modal">
            <h2>Profile Information <a onclick="closeModal()" class="close closeModal" href="javascript:void(0)"><span class="ss-close"></span></a></h2>
            <div class="content">
                <div class="row mb-10">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Title</label>
                            <select class="form-control">
                                <option>Amake sir dakba</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mb-10">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Call/Mobile Number</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mb-10">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Personal A/C</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Business A/C</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control">
                                <option>Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-10">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <a class="mt-30 d-inline-block" href="">Change Password</a>
                    </div>
                </div>
                <div class="row mb-10">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <a class="btn btn-rounded btn-primary" href="">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>