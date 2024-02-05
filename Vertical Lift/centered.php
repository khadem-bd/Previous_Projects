<!DOCTYPE html>
<html lang="en">
<?php include "bundle.php"; ?>
<script>
    $(document).ready(function(){
        $(window).scroll(function() {
            if ($(document).scrollTop() > 0) {
                $("header").addClass("white-bg");
            } else {
                $("header").removeClass("white-bg");
            }
        });
    })
</script>
<body>
    <!-- Start of header section -->
    <?php 
        include "header.php"; 
        include "adjust-header.php";
    ?>
    <!-- End of header section -->

    <section class="banner">
        <video autoplay loop muted playsinline id="myVideo">
            <source src="video/background-video.mp4" type="video/mp4">
        </video>
        <div class="transparent-layer">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <ul id="bannerTextSlider">
                                <li>
                                    <h2 class="animate_onLoad vts_fadein vts_top">Elevate Your <span>Experience</span> <br> With Us</h2>
                                    <p class="animate_onLoad vts_fadein vts_bottom">Where safety and style meet </p>
                                    <a href="javascript:void(0)" class="btn btn-primary bookAService animate_onLoad vts_fadein vts_bottom">book a service <span class="icon-diagonal-arrow icon"></span></a>
                                </li>
                                <li>
                                    <h2 class="animate_onLoad vts_fadein vts_top">Elevating Your <span>Expectations </span> <br> With us</h2>
                                    <p class="animate_onLoad vts_fadein vts_bottom">Where safety and style meet </p>
                                    <a href="javascript:void(0)" class="btn btn-primary bookAService animate_onLoad vts_fadein vts_bottom">book a service <span class="icon-diagonal-arrow icon"></span></a>
                                </li>
                                <li>
                                    <h2 class="animate_onLoad vts_fadein vts_top">Our Passion Can Be Your  <span>Peace</span> <br> of Mind</h2>
                                    <p class="animate_onLoad vts_fadein vts_bottom">Your vertical transportation partner for life</p>
                                    <a href="javascript:void(0)" class="btn btn-primary bookAService animate_onLoad vts_fadein vts_bottom">book a service <span class="icon-diagonal-arrow icon"></span></a>
                                </li>
                                <li>
                                    <h2 class="animate_onLoad vts_fadein vts_top">Experience Vertical  <span>Mobility</span> <br> Like Never Before</h2>
                                    <p class="animate_onLoad vts_fadein vts_bottom">Your partner for safety and reliability </p>
                                    <a href="javascript:void(0)" class="btn btn-primary bookAService animate_onLoad vts_fadein vts_bottom">book a service <span class="icon-diagonal-arrow icon"></span></a>
                                </li>
                                <li>
                                    <h2 class="animate_onLoad vts_fadein vts_top">Transform Your  <span>Space</span> <br> With Our Lift Installations</h2>
                                    <p class="animate_onLoad vts_fadein vts_bottom">Where function meets elegance </p>
                                    <a href="javascript:void(0)" class="btn btn-primary bookAService animate_onLoad vts_fadein vts_bottom">book a service <span class="icon-diagonal-arrow icon"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trustedby inner-section">
        <div class="container">
            <div class="row vts_fadein vts_top">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="section-title">Trusted By</h2>
                </div>
            </div>
            <div class="row vts_fadein vts_bottom">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul id="clientLogos" class="client-logos">
                        <li> <img src="images/home/trusted-by/adolphus.png" alt="Adolphus Tower"> </li>
                        <li> <img src="images/home/trusted-by/best-western.png" alt="Best Western"> </li>
                        <li> <img src="images/home/trusted-by/Comfort-suites.png" alt="Comfort Suites"> </li>
                        <li> <img src="images/home/trusted-by/hilton.png" alt="Hilton Hotel and Resorts"> </li>
                        <li> <img src="images/home/trusted-by/marriott.png" alt="Marriott"> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    

    <section class="welcome-section inner-section common-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 align-item vts_fadein vts_left">
                    <div class="content left-content">
                        <div class="lift-1">
                            <h3>Welcome to Vertical Transport Systems</h3>
                            <p class="highlighted">We believe in a higher level of service with attention to detail at a lower cost to customers. <br>
                            Our passion can be your peace of mind.</p>
                        </div>
                        <p>Our mission is to provide safe, reliable, and efficient elevator/lift maintenance services to our clients, ensuring their vertical transportation systems are always operating at peak performance.</p>

                        <a href="javascript:void(0)" class="btn btn-primary bookAService">book a service <span class="icon-diagonal-arrow icon"></span></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 vts_fadein vts_right">
                    <img class="img-responsive" src="images/home/welcome-section/banner.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="service-section inner-section common-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="section-title">Our services</h2>
                </div>
            </div>
            <div class="row inner-section">
                <div class="col-sm-12 col-md-6 col-lg-6 vts_fadein vts_left">
                    <img class="img-responsive" src="images/home/service-section/banner.jpg">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 align-item vts_fadein vts_right">
                    <div class="content right-content">
                        <h3>Maintenance</h3>
                        <p>Maintenance service is considered the most important phase after the elevator installation, and it is considered the key factor in having a longer life for the Elevators and Escalators.</p>

                        <a href="maintenance.php" class="btn btn-bordered">explore <span class="icon-diagonal-arrow icon"></span></a>
                    </div>
                </div>
            </div>

            <div class="row inner-section">
                <div class="col-sm-12 col-md-6 col-lg-6 align-item vts_fadein vts_left">
                    <div class="content left-content">
                        <h3>Repair And Modernization</h3>
                        <p>VTS has test tools and specific equipment to repair all sorts of Elevators & Escalators. All repair services are performed to minimize the cost and reduce time for the customer.</p>

                        <a href="repair-and-modenization.php" class="btn btn-bordered">explore <span class="icon-diagonal-arrow icon"></span></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 vts_fadein vts_right">
                    <img class="img-responsive" src="images/home/service-section/repair-modernization.jpg">
                </div>
            </div>

            <div class="row inner-section">
                <div class="col-sm-12 col-md-6 col-lg-6 vts_fadein vts_left">
                    <img class="img-responsive" src="images/home/service-section/new-lift-installation.jpg">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 align-item vts_fadein vts_right">
                    <div class="content right-content">
                        <h3>New Lift Installation</h3>
                        <p>Our team of experts is here to provide you with comprehensive lift installation services for a variety of applications.</p>

                        <a href="new-lift-installation.php" class="btn btn-bordered">explore <span class="icon-diagonal-arrow icon"></span></a>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="client-testimonial inner-section">
        <div class="container">
            <div class="row vts_fadein vts_top">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="section-title">our happy clients</h2>
                </div>
            </div>
            <div class="row vts_fadein vts_bottom">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul id="testimonialSlider" class="testimonial-slider">
                        <li>
                            <p>
                                <span class="icon-quote-start"></span> As a property manager, I have worked with several elevator maintenance companies over the years, but VTS stands out for their superior service and expertise. They have helped us reduce our maintenance costs and extend the lifespan of our elevators, while ensuring the safety and comfort of our tenants. <span class="icon-quote-end"></span>
                            </p>
                            <span class="icon-user-rounded"></span>
                            <p class="name">Sarah Lee</p>
                            <p class="designation">Property Manager</p>
                        </li>

                        <li>
                            <p>
                                <span class="icon-quote-start"></span> We recently switched to VTS for our elevator maintenance needs, and we couldn't be happier. They have exceeded our expectations with their exceptional service and attention to detail. Their technicians are friendly, courteous, and always on time, making the maintenance process stress-free for us. <span class="icon-quote-end"></span>
                            </p>
                            <span class="icon-user-rounded"></span>
                            <p class="name">Peter Schweizer</p>
                            <p class="designation">Property Owner</p>
                        </li>

                        <li>
                            <p>
                                <span class="icon-quote-start"></span> We have been using VTS for our elevator maintenance needs for several years, and we are extremely happy with their services. Their technicians are knowledgeable, professional, and always respond promptly to our requests. We highly recommend VTS to anyone in need of elevator maintenance services. <span class="icon-quote-end"></span>
                            </p>
                            <span class="icon-user-rounded"></span>
                            <p class="name">Steven Striegel</p>
                            <p class="designation">Building Manager</p>
                        </li>

                        <li>
                            <p>
                                <span class="icon-quote-start"></span> VTS has been an invaluable partner for us in maintaining our elevators. Their team is knowledgeable, reliable, and always available when we need them. We appreciate their dedication to providing excellent service, and we highly recommend VTS to anyone in need of elevator maintenance. <span class="icon-quote-end"></span>
                            </p>
                            <span class="icon-user-rounded"></span>
                            <p class="name">Paige Johnson</p>
                            <p class="designation">Property Manager</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Start of footer section -->
    <?php include "footer.php"; ?>
    <!-- End of footer section -->


    

</body>
</html>