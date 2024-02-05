<!DOCTYPE html>
<html lang="en">
<head>
<?php include "bundling.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(".slideInLeft").addClass("animated");
    setTimeout(function(){
        $(".cta-btn").addClass("animated");
    }, 1000);

    $(window).scroll(function(){
        var scrolval = $(window).scrollTop();
        if(scrolval >= 1080 / 8){
            $("#investmentAnimate").addClass("animated");
        }
    })
})
</script>
</head>
<body>
    <?php include "header.php" ?>
    <section class="banner clearfix">
        <video autoplay loop muted playsinline id="myVideo">
            <source src="assets/video.mp4" type="video/mp4">
        </video>
        <div class="transparent-layer">
            <div class="banner-content container">
                
                    <h1 class="slideInLeft">Welcome</h1>
                    <p class="slideInLeft">
                    Hoque Global is a diversiﬁed investment ﬁrm with transformative enterprises in multiple sectors with a common thread of making positive impacts in the community.
                    </p>
                    <a class="cta-btn slideInUp" href="aboutus.php">Learn More</a>
                
                <div class="b-aboutus">
                    <div class="grow-tabs">
                        <div class="g-tab">
                            <span class="icon hg-focus-and-strength"></span>
                            <span>
                                Our Focus <br>
                                and Strengths
                            </span>
                            <div class="gtab-btn">
                                <a href="focus-and-strength.php">Learn More</a>
                            </div>
                        </div>
                        <div class="g-tab">
                            <span class="icon hg-investment-strategy"></span>
                            <span>
                                Investment <br>
                                Strategy
                            </span>
                            <div class="gtab-btn">
                                <a href="investment-strategy.php">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="white-tile">
                        At <span class="bold">Hoque Global</span>, we invest in people and projects to make a positive social and economic impact within the communities we serve.
                        </div>
                        <div class="blue-tile">
                            <h5><i>“Obstacles create opportunities”</i></h5>
                            <p class="text-right">- Mike Hoque</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="investments clearfix">
        <div id="investmentAnimate" class="container slideInUp">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="section-title">Portfolio</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="real-estate.php" class="thumbnail-wrapper" style="background-image:url(assets/investments/real_estate_small.jpg)">
                    <span class="transparent-layer"></span>    
                    <span>Real Estate <i class="hg-right-arrow"></i></span>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="hospitality.php" class="thumbnail-wrapper" style="background-image:url(assets/investments/hospitality_small.jpg)">
                    <span class="transparent-layer"></span>    
                    <span>Hospitality <i class="hg-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="/tech.php" class="thumbnail-wrapper" style="background-image:url(assets/investments/technology_small.jpg)">
                    <span class="transparent-layer"></span>    
                    <span>Technology <i class="hg-right-arrow"></i></span>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="corporate-logistics.php" class="thumbnail-wrapper" style="background-image:url(assets/investments/corporate_logistics_small.jpg)">
                    <span class="transparent-layer"></span>    
                    <span>Corporate Logistics <i class="hg-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="second-chance-capital.php" class="thumbnail-wrapper" style="background-image:url(assets/investments/second_chance_capital.jpg)">
                    <span class="transparent-layer"></span>    
                    <span>2nd Chance Capital <i class="hg-right-arrow"></i></span>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="destination-management.php" class="thumbnail-wrapper" style="background-image:url(assets/investments/destination_management_small.jpg)">
                    <span class="transparent-layer"></span>    
                    <span>Destination Management <i class="hg-right-arrow"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="section-title white">Testimonials</h1>
                    <ul class="testimonail-slider">
                        <li>
                            <p>“Mike Hoque and his team have put together an incredible vision that is sure to draw the attention of corporations, new residents and tourists, further elevating Dallas on the international stage.”</p>
                            <p class="text-right">- <span class="bold">Dallas Mayor Mike Rawlings, October 2017 </span></p>
                        </li>
                        <li>
                            <p>"Directing the growth of DRG Concepts and Hoque Global as Chairman, Mike has made an invaluable contribution to the revitalization of Downtown Dallas. His company's critically acclaimed restaurant brands Dallas Fish Market, Dallas Chop House, Wild Salsa and Chop House Burger - plus the forthcoming new Oven and Cellar - are all catalysts for energy and vibrancy in Dallas' central core.  These brands from Mike's company have generated real business results for the city, as amenities for Downtown to attract the continually growing numbers of residents to and provide the corporate community and employers with a better daily quality of life all the time.  DRG Concepts and Hoque Enterprises work with Mike's direction have also impacted Dallas in a positive way by helping to increase property values in Downtown.</p>
                            <p>Mike’s focus, diligence, and commitment to building and creating good business that provides opportunity for others and positive community impact are marvelous assets for Texas and beyond."</p>
                            <p class="text-right">- <span class="bold">Matthews Southwest CEO Jack Matthews</span></p>
                        </li>
                        <li>
                            <p>“Mike Hoque and his team have put together an incredible vision that is sure to draw the attention of corporations, new residents and tourists, further elevating Dallas on the international stage.”</p>
                            <p class="text-right">- <span class="bold">Dallas Mayor Mike Rawlings, October 2017 </span></p>
                        </li>
                        <li>
                            <p>
                            “The pioneering work that Mike Hoque and Hoque Global (parent company of DRG Concepts) started with their arrival in Downtown Dallas continues with success, and we are grateful for his taking on the challenge of being a business catalyst with his revitalization of Main Street and in our city’s core. This work is making Dallas all the more appealing as we continue to bring corporate relocations to Downtown, and as residential development and growth build consistently.  Mike and his entire team have the focused vision, dedication and continued determination to make Downtown Dallas and the Metroplex a better and better place every day.”
                            </p>
                            <p class="text-right">
                            - <span class="bold">Mayor Tom Leppert, City of Dallas (2007-2011)</span>
                            </p>
                        </li>
                        <li>
                            <p>“Mike has led the way in creating successful public / private partnerships with the City of Dallas, Downtown Dallas Inc., property owners and development groups taking Downtown to a higher level.  He also understands the importance of giving back to the community through his civic and charitable contributions which have set the tone for others to follow in making a difference to our community.”</p>
                            <p class="text-right">- <span class="bold">John Crawford, President and CEO, Downtown Dallas Inc. (2007-2017)</span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include "bottom.php"; ?>
</body>
</html>
