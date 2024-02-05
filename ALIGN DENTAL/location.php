<!DOCTYPE html>
<html lang="en">
<?php include "links.php"; ?>

  <body>
    <div class="body-wrapper">
      <!-- ==============header================ -->
      <?php include "header.php"; ?>
      <!-- ==============header end =============== -->
      <!-- =========service banner============= -->
      <section>
        <div class="service-hero">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-5">
                <div class="service-banner-img">
                  <img src="assets/img/location/1.png" alt="" />
                </div>
              </div>
              <div class="col-md-6 col-7">
                <div class="service-banner-text">
                  <h2>
                    Choose an <br />
                    <span>Office!</span>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="location-sec cpy-6">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="location-list">
                  <ul class="location-ul">
                    <li>
                      <button
                        class="location-tab active"
                        onclick="filter('dallas')"
                      >
                        Dallas
                      </button>
                    </li>
                    <li>
                      <button class="location-tab" onclick="filter('garland')">
                        Garland
                      </button>
                    </li>
                    <li>
                      <button class="location-tab" onclick="filter('mesquite')">
                        Mesquite
                      </button>
                    </li>
                    <li>
                      <button
                        class="location-tab"
                        onclick="filter('east_dallas')"
                      >
                        East Dallas
                      </button>
                    </li>
                  </ul>
                </div>

                <div class="location-area dallas" style="display: block">
                  <div class="location-details">
                    <p class="location-neme">
                      <strong>Dallas - </strong>Always Accepting New Patients
                    </p>
                    <p>4801 S. Buckner Blvd Suite 800 Dallas, TX 75227</p>
                  </div>

                  <div class="open-table">
                    <table class="table table-borderless">
                      <tr>
                        <td>MON</td>
                        <td>9:00 am - 6:00 pm</td>
                      </tr>
                      <tr>
                        <td>TUE</td>
                        <td>Closed</td>
                      </tr>
                      <tr>
                        <td>WED</td>
                        <td>9:00 am - 6:00 pm</td>
                      </tr>
                      <tr>
                        <td>THU</td>
                        <td>9:00 am - 5:00 pm</td>
                      </tr>
                      <tr>
                        <td>FRI</td>
                        <td>9:00 am - 3:00 pm</td>
                      </tr>
                      <tr>
                        <td>SAT</td>
                        <td>8:00 am - 2:00 pm</td>
                      </tr>
                      <tr>
                        <td>SUN</td>
                        <td>Closed</td>
                      </tr>
                    </table>
                  </div>

                  <div class="call-email">
                    <p>
                      <strong>Call or Text:</strong>
                      <a href="call:214-275-4808 ">214-275-4808</a>
                    </p>
                    <p>
                      <strong>Email:</strong>
                      <a href="mailto: info@aligndentalcare.com ">
                        info@aligndentalcare.com</a
                      >
                    </p>
                  </div>
                </div>

                <div class="location-area garland">
                  <div class="location-details">
                    <p class="location-neme">
                      <strong>Garland - </strong>Always Accepting New Patients
                    </p>
                    <p>1708 Northwest Highway Suite 150 Garland, TX, 75041</p>
                  </div>

                  <div class="open-table">
                    <h2>Coming Soon!</h2>
                  </div>

                  <div class="call-email">
                    <p>
                      <strong>Call or Text:</strong>
                      <a href="call:: (972) 503-7444 ">: (972) 503-7444</a>
                    </p>
                    <p>
                      <strong>Email:</strong>
                      <a href="mailto: info@aligndentalcare.com ">
                        info@aligndentalcare.com</a
                      >
                    </p>
                  </div>
                </div>
                <div class="location-area mesquite">
                  <div class="location-details">
                    <p class="location-neme">
                      <strong>Mesquite - </strong>Always Accepting New Patients
                    </p>
                    <p>3220 Gus Thomasson Road Suite 347 Mesquite, TX 75750</p>
                  </div>

                  <div class="open-table">
                    <h2>Coming Soon!</h2>
                  </div>

                  <div class="call-email">
                    <p>
                      <strong>Call or Text:</strong>
                      <a href="call:(972) 503-7444">(972) 503-7444</a>
                    </p>
                    <p>
                      <strong>Email:</strong>
                      <a href="mailto:info@aligndentalcare.com ">
                        info@aligndentalcare.com</a
                      >
                    </p>
                  </div>
                </div>
                <div class="location-area east_dallas">
                  <div class="location-details">
                    <p class="location-neme">
                      <strong>East Dallas - </strong>Always Accepting New
                      Patients
                    </p>
                    <p>5429 East Grand Ave Dallas, TX 75223</p>
                  </div>

                  <div class="open-table">
                    <h2>
                      Grand Opening <br />
                      June 2nd 2023
                    </h2>
                  </div>

                  <div class="call-email">
                    <p>
                      <strong>Call or Text:</strong>
                      <a href="call:945-235-2730 ">(469) 482-0950</a>
                    </p>
                    <p>
                      <strong>Email:</strong>
                      <a href="mailto: info@aligndentalcare.com ">
                        info@aligndentalcare.com</a
                      >
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="location-map-im">
                  <img src="assets/img/location/2.png" alt="" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="post-review cpt-6">
                  <h2>Want to Book Appointment?</h2>
                  <a
                    href="https://bookit.dentrixascend.com/soe/new/dental?pid=ASC15000000000418&amp;mode=externalLink"
                    target="_blank"
                    class="custom-btn-alt"
                  >
                    Book Now
                  </a>
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
    <script src="assets/js/jquery.min.js "></script>
    <!-- ===============bootstrap=========== -->
    <script src="assets/js/bootstrap.bundle.js "></script>

    <!-- Swiper JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- =============custom js========= -->
    <script src="assets/js/app.js "></script>
  </body>
</html>
