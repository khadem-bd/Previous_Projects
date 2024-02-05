<!DOCTYPE html>
<html lang="en">
<?php include "links.php"; ?>

  <body>
    <div class="body-wrapper">
      <!-- ==============header================ -->
      <?php include "header.php"; ?>
      <!-- ==============header end =============== -->
      <section>
        <div class="contact-form cpt-6">
          <div class="container">
            <div class="row cg-direction">
              <div class="col-md-5">
                <div class="contact-form-content">
                  <div class="contact-content-inner">
                    <h4>Contact</h4>
                    <h2>Get in touch!</h2>
                    <p>Phone : <a href="(972)-503-7444">(972)-503-7444</a></p>
                    <p>
                      Email:
                      <a href="mailto:info@aligndentalcare.com"
                        >info@aligndentalcare.com</a
                      >
                    </p>

                    <form action="" class="mt-4">
                      <div class="form-input">
                        <label for="name">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Please enter your name..."
                        />
                      </div>
                      <div class="form-input">
                        <label for="email">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          placeholder="Please enter your email..."
                        />
                      </div>

                      <div class="form-input">
                        <label for="message">Message</label>
                        <textarea
                          name="message"
                          id=""
                          cols="30"
                          rows="5"
                          class="form-control"
                          placeholder="Enter your message here..."
                        ></textarea>
                      </div>

                      <div class="contact-submit">
                        <a href="welcome.php" class="custom-btn-alt"> Send </a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="form-img">
                  <img src="assets/img/contact/1.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="location cpy-12">
          <div class="container">
            <div class="row">
              <div class="section-title">
                <h2>Locations</h2>
              </div>
            </div>

            <div class="location-card-area">
              <div class="locationSlider swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="location-card bg-light-green">
                      <div class="location-card-inner">
                        <h2>Dallas</h2>
                        <p>4801 S. Buckner Blvd Suite 800 Dallas, TX 75227</p>

                        <div class="location-phone">
                          <span class="icon-phone"></span>
                          <div class="phone-text">
                            <small>Call or Text us</small>
                            <p>(214) 275-4808</p>
                          </div>
                        </div>
                        <div class="d-flex justify-content-center">
                          <a href="location.php" class="custom-btn-alt"
                            >See Details</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="location-card bg-light-blue">
                      <div class="location-card-inner">
                        <h2>Garland</h2>
                        <p>
                          1708 Northwest Highway Suite 150 Garland, TX, 75041
                        </p>

                        <div class="location-phone">
                          <span class="icon-phone"></span>
                          <div class="phone-text">
                            <small>Call or Text us</small>
                            <p>(972) 503-7444</p>
                          </div>
                        </div>
                        <div class="d-flex justify-content-center">
                          <a href="location.php" class="custom-btn-alt"
                            >See Details</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="location-card bg-light-red">
                      <div class="location-card-inner">
                        <h2>Mesquite</h2>
                        <p>
                          3220 Gus Thomasson Road Suite 347 Mesquite, TX 75750
                        </p>

                        <div class="location-phone">
                          <span class="icon-phone"></span>
                          <div class="phone-text">
                            <small>Call or Text us</small>
                            <p>(972) 503-7444</p>
                          </div>
                        </div>
                        <div class="d-flex justify-content-center">
                          <a href="location.php" class="custom-btn-alt"
                            >See Details</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="location-card bg-light-gray">
                      <div class="location-card-inner">
                        <h2>East Dallas</h2>
                        <p>5429 East Grand Ave Dallas, TX 75223</p>

                        <div class="location-phone">
                          <span class="icon-phone"></span>
                          <div class="phone-text">
                            <small>Call or Text us</small>
                            <p>(469) 482-0950</p>
                          </div>
                        </div>
                        <div class="d-flex justify-content-center">
                          <a href="location.php" class="custom-btn-alt"
                            >See Details</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include "footer.php"; ?>
    </div>
    <!-- ============script========= -->
    <!-- =============jQuery========= -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- ===============bootstrap=========== -->
    <script src="assets/js/bootstrap.bundle.js"></script>

    <!-- Swiper JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- =============custom js========= -->
    <script src="assets/js/app.js"></script>
  </body>
</html>
