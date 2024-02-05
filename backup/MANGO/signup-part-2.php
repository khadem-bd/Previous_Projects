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
                                    <h2><a class="icon" href="signup.php"><span class="m-back"></span></a> Sign Up</h2>
                                    <p>Company Information</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Account Display Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>https/</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Country</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Street Address 1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Street Address 2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>State</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Zip">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>State</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Currency</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Timezone</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <p>Indirect Tax Information</p>
                                    <div class="form-radio">
                                        <input type="radio">
                                        <label>I am registered for HST in Canada</label>
                                    </div>
                                    <div class="form-radio">
                                        <input type="radio">
                                        <label>I am registered for Indirect Tax in a different country/Region</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <p>Country/Region of Indirect Tax</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <select name="" id="" class="form-control">
                                            <option value="">United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <p>Indirect Tax</p>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Indirect Tax Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-radio">
                                        <input type="radio">
                                        <label>I am not registered for HST in Canada</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <p>Indirect Taxes (E.G., VAT, HST and GST) are transactional-based levied by most world tax authorities. Service providers are typically registered with the tax authorities in their jurisdictions and retain a unique indirect tax code.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="signup-part-3.php" class="cta-btn">
                                        Next
                                        <?php include "go-text.php"; ?>
                                    </a>
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