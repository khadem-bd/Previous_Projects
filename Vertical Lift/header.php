<?php
    $extraClsss = "";
    $pageName = basename($_SERVER['PHP_SELF']);
    if($pageName != 'index.php') {
        $extraClsss = "white-bg";
    }else{
        $extraClsss = "";
    }
?>
<section class="top-bar <?php echo $extraClsss; ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <p><span class="icon-phone icon"></span> +(214) 956-8400</p>
            </div>
        </div>
    </div>
</section>
<header class="clearfix <?php echo $extraClsss; ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <a href="index.php" class="branding"><img src="images/header/logo.svg" alt="Vertical Transport System"></a>
                <a href="index.php" class="branding colored"><img src="images/header/logo-colored.svg" alt="Vertical Transport System"></a>
                <a class="hamburger-menu" href="javascript:void(0)"><span class="icon-hamburger-menu"></span></a>
                <a class="phone" href="tel:+(214) 956-8400"><span class="icon-phone"></span></a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="m-wrapper">
                    <a class="close-menu" href="javascript:void(0)"><span class="icon-cross"></span></a>
                    <ul class="menu">
                        <li><a <?php if($pageName == "index.php"){ echo 'class="active"'; } ?> href="index.php">home</a></li>
                        <li><a <?php if($pageName == "aboutus.php"){ echo 'class="active"'; } ?> href="aboutus.php">about us</a></li>
                        <li><a <?php if($pageName == "why-choose-us.php"){ echo 'class="active"'; } ?> href="why-choose-us.php">why choose us</a></li>
                        <li><a <?php if($pageName == "services.php"){ echo 'class="active"'; } ?> href="services.php">services</a>
                            <ul>
                                <li><a <?php if($pageName == "maintenance.php"){ echo 'class="active"'; } ?> href="maintenance.php">maintenance</a></li>
                                <li><a <?php if($pageName == "repair-and-modenization.php"){ echo 'class="active"'; } ?> href="repair-and-modenization.php">repair and modenization</a></li>
                                <li><a <?php if($pageName == "new-lift-installation.php"){ echo 'class="active"'; } ?> href="new-lift-installation.php">new lift installation</a></li>
                            </ul>
                        </li>
                        <li><a <?php if($pageName == "contactus.php"){ echo 'class="active"'; } ?> href="contactus.php">contact us</a></li>
                        <li class="button"><a id="triggerBookaServiceModal" href="javascript:void(0)">Book a service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>