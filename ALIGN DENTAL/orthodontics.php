<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

  <body>
    <div class="body-wrapper">
      <div class="refer-body">
        <div class="close-refer">
          <a href="referrals.php"><img src="assets/img/close.png" alt="" /></a>
        </div>
        <div class="align-nav">
          <div class="container">
            <div class="top-location-area">
              <div class="location-top">
                <h2>Align Dental Care</h2>
                <p>4801 S Buckner Blvd. Suite 800 Dallas, TX 75227</p>
                <p>p: 214-275-4808 lF: 972-808-7449</p>
              </div>
            </div>
          </div>
        </div>

        <section>
          <div class="lab-section cpy-60">
            <div class="container">
              <div class="row">
                <h3 class="section-title">Referral Form</h3>

                <div class="col-md-5">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Today’s Date:</label>
                    <input type="text" class="form-input" />
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Patient Name:</label>
                    <input type="text" class="form-input" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label"
                      >Patient’s Date of Birth:
                    </label>
                    <input type="text" class="form-input" />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label"
                      >Patient’s Phone Number:</label
                    >
                    <input type="text" class="form-input" />
                  </div>
                </div>

                <div class="col-lg-7 col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Patients Email:</label>
                    <input type="text" class="form-input" />
                  </div>
                </div>

                <div class="col-lg-5 col-md-6">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label"
                      >Are you a MINT Dentists:</label
                    >

                    <input
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label for="flexRadioDefault1"> Yes </label>

                    <input
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label for="flexRadioDefault1">No</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="input-wrapper input-gap f-row-brack">
                    <label for="" class="input-label"
                      >Medical Considerations/Premedicatio:</label
                    >
                    <textarea type="text" class="form-input"> </textarea>
                  </div>
                </div>
              </div>

              <h3 class="section-title">Pre-Ortho Clearance Items:</h3>

              <div class="row">
                <div class="col-md-12">
                  <p class="mt-3 text-smaller">
                    Does the patient have active decay?
                  </p>

                  <div class="input-wrapper input-gap">
                    <input
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label for="flexRadioDefault1"> Yes </label>

                    <input
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label for="flexRadioDefault1">No</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <p class="mt-3 text-smaller">
                    Is the patient for ortho treatment to begin?
                  </p>

                  <div class="input-wrapper input-gap">
                    <input
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label for="flexRadioDefault1"> Yes </label>

                    <input
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label for="flexRadioDefault1">No</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="input-wrapper input-gap">
                    <label for="" class="input-label">Notes:</label>
                    <textarea type="text" class="form-input"> </textarea>
                  </div>
                </div>

                <div class="col-md-3">
                  <p class="mt-3 text-smaller">Select Region:</p>

                  <div class="input-wrapper input-gap">
                    <select
                      class="form-select"
                      aria-label="Default select example"
                    >
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <p class="mt-3 text-smaller">
                    Upload most recent insurance breakdown (if applicable)
                  </p>

                  <div class="input-wrapper input-gap">
                    <input type="file" id="file" />
                    <label for="file">Browse Files</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="d-flex justify-content-end">
                    <button class="submit-btn">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- ============script========= -->
    <!-- =============jQuery========= -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- ===============bootstrap=========== -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- =========swiper slider ================= -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- =============custom js========= -->
    <script src="assets/js/app.js"></script>
  </body>
</html>
