<!DOCTYPE html>
<html lang="en">
<?php include "bundle.php"; ?>
<body>
    <!-- Start of header section -->
    <?php include "header.php"; ?>
    <!-- End of header section -->

    <!-- Start Page title section -->
    <section class="text-section driver-resources-section">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <div class="content">
                        <h2 class="section-title mb-0">Driver <span>Resources</span></h2>
                    </div>
                    <div class="download-icon">
                        <span class="icon-download icon"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page title section -->

    <!--Start All PDF Section-->
    <section class="pdf-section">
        <div class="container">
            <div class="row pdf-section-one">
                <div class="col-sm-6 col-12 px-4">
                    <div class="single-pdf">
                        <div class="pdf-img">
                            <img class="img-fluid img-popup" src="images/driver-resources/rc-tips-to-make-more-tips-1.png" alt="5 C’S for Chauffeurs"><span class="icon-minus icon "></span>
                        </div>
                        <div class="pdf-text d-flex align-items-center">
                            <h2>5 C’S for Chauffeurs</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-4">
                    <div class="single-pdf">
                        <div class="pdf-img">
                            <img class="img-fluid img-popup" src="images/driver-resources/rc-driver-standards-1.png" alt="5 ways to maximize your potential earning">
                            
                        </div>
                        <div class="pdf-text d-flex align-items-center">
                            <h2>5 ways to maximize your potential earning</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pdf-section-two">
                <div class="col-sm-6 col-12 px-4">
                    <div class="single-pdf">
                        <div class="pdf-img">
                            <img class="img-fluid img-popup" src="images/driver-resources/rc-driver-sync7-status-1.png" alt="5 C’S for Chauffeurs">
                        </div>
                        <div class="pdf-text d-flex align-items-center">
                            <h2>How to update your trip status</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-4">
                    <div class="single-pdf">
                        <div class="pdf-img">
                            <img class="img-fluid img-popup" src="images/driver-resources/rc-driver's-manual-1.png" alt="5 C’S for Chauffeurs">
                        </div>
                        <div class="pdf-text d-flex align-items-center">
                            <h2>Do’s and dont’s</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pdf-section-three">
                <div class="col-sm-6 col-12 px-4">
                    <div class="single-pdf">
                        <div class="pdf-img">
                            <img class="img-fluid img-popup" src="images/driver-resources/rc-back-brace-1.png" alt="5 C’S for Chauffeurs">
                            <img id="img-popup" class="img-fluid" src="images/driver-resources/rc-back-brace-1.png" alt="5 C’S for Chauffeurs">
                        </div>
                        <div class="pdf-text d-flex align-items-center">
                            <h2>How to store? </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End All PDF Section-->

    
    
    <!-- Start of our bottom link and footer section -->
    <?php include "footer.php"; ?>
    <!-- End of our bottom link and footer section -->

    <script>
        //Image lightbox code
        const lightbox = document.createElement("div");
        lightbox.id = "lightbox";
        document.body.appendChild(lightbox);

        const images = document.querySelectorAll(".img-popup");
        images.forEach((image) => {
        image.addEventListener("click", (e) => {
            lightbox.classList.add("active");
            const img = document.createElement("img");
            img.src = image.src;
            while (lightbox.firstChild) {
            lightbox.removeChild(lightbox.firstChild);
            }
            lightbox.appendChild(img);
        });
        });

        lightbox.addEventListener("click", (e) => {
        if (e.target !== e.currentTarget) return;
        lightbox.classList.remove("active");
        });
    </script>

</body>
</html>