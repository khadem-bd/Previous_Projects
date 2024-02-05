<?php
$pageName = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <a href="index.php" class="branding"><img src="images/a1-fire-and-safety.svg" alt="A1 Fire & Safety"></a>
                <a id="toggleMenu" class="ham-menu" href="javascript:void(0)"> <span></span> </a>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9 nav-wrapper">
                <ul class="navigation">
                    <li><a <?php if($pageName == "index.php"){ echo 'class="active"'; } ?> href="index.php">home</a></li>
                    <li><a <?php if($pageName == "aboutus.php"){ echo 'class="active"'; } ?> href="aboutus.php">about us</a></li>
                    <li><a <?php if($pageName == "services.php"){ echo 'class="active"'; } ?> href="services.php">services <span class="icon-down-arrow"></span></a>
                        <ul>
                            <li><a href="maintenance-and-repairs.php">Maintenance & Repairs</a></li>
                            <li><a href="new-installation.php">New Installation</a></li>
                        </ul>
                    </li>
                    <li><a <?php if($pageName == "our-product.php"){ echo 'class="active"'; } ?> href="our-product.php">products <span class="icon-down-arrow"></span></a>
                        <ul>
                            <li><a href="">Fire Alarm Control Panel</a></li>
                            <li><a href="">Smoke Detectors and Heat Detectors</a></li>
                            <li><a href="">Manual Call Point</a></li>
                            <li><a href="">Emergency and Exit Lights</a></li>
                            <li><a href="">Voice Evacuation Panel Speakers</a></li>
                            <li><a href="">Fire Extinguishers</a></li>
                            <li><a href="">Fire Sprinklers, Fire Pumps</a></li>
                            <li><a href="">Fire Hose Reels, Fire Hydrants</a></li>
                            <li><a href="">Landing Valves, Breeching Inlets</a></li>
                            <li><a href="">VESDA System</a></li>
                            <li><a href="">FM200, Foam, CO2, Deluge Pre-Action System</a></li>
                        </ul>
                    </li>
                    <li><a <?php if($pageName == "why-choose-us.php"){ echo 'class="active"'; } ?> href="why-choose-us.php">why choose us</a></li>
                    <li><a <?php if($pageName == "contactus.php"){ echo 'class="active"'; } ?> href="contactus.php">contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>