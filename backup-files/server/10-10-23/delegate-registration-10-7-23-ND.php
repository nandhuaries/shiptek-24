<?php include('header.php'); ?>

<!--Page Title-->
<section class="page-title shado" style="background-image:url(pics/banner/newBanner-delegate.jpg);background-position: center;">
  <div class="auto-container">
    <h1>Delegate Registration</h1>
    <ul class="bread-crumb clearfix">
      <li><a href="index">Home</a></li>
      <li>Delegate Registration</li>
    </ul>
  </div>
</section>
<!--End Page Title-->

<!-- Buy Ticket  -->
<section class="buy-ticket">
  <div class="anim-icons full-width">
    <span class="icon icon-circle-blue wow fadeIn"></span>
    <span class="icon icon-circle-1 wow zoomIn"></span>
  </div>
  <div class="auto-container">
    <div class="row">
      <!-- Form Column -->
      <div class="form-column col-lg-12 col-md-12 col-sm-12">
        <div class="inner-column shadow-lg border" style="background-color: #ECF9FF;">
          <div class="container pb-5 pt-5">
            <!-- <h1 class="text-center pb-3" style="color: #1e1f36; font-weight: 700; font-size: 48px">
              Delegate Registration
            </h1> -->
            <?php

            if (isset($_GET['status']) && $_GET['status'] == 0) {
              echo " <font color=red><center><b class=successtext>Please click on the reCAPTCHA box</b></center></font>.";
            }
            if (isset($_GET['status']) && $_GET['status'] == 1) {
              echo " <font color=green><center><b class=successtext>Your delegate registration has been submitted successfully</b></center></font>.";
            } ?>
            <form action="delegate-reg-action.php" id="registration" method="POST">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="firstname" id="firstname" placeholder="First Name" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="lastname" id="lastname" placeholder="Last Name" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="company" id="company" placeholder="Company" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="country" id="country" placeholder="Country" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="companynumber" id="companynumber" placeholder="Company Telephone" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="sector" id="sector" placeholder="Sector" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="nationality" id="nationality" placeholder="Nationality" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="designation" id="designation" placeholder="Designation" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="official_email" id="official_email" placeholder="Official Mail" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="email" id="email" placeholder="Personal E-mail" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number" required />
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                  <input class="border w-100 inp form-control" type="text" name="department" id="department" placeholder="Department" required />
                </div>
              </div>

              <!-- <div class="btn-box">
                        <button class="theme-btn btn-style-one ">Get Tickets</button>
                      </div> -->
              <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt"></div>
                </div>
                <!-- btn -->
                <div class="btn-box ml-3">
                  <button type="submit" class="btn btn-dark" name="submit" id="submit">Submit</button>
                  <button type="button" class="btn btn-dark" name="waitmsg" id="waitmsg" style="display: none" disabled="disabled">Please Wait...</button>
                </div>
                <!-- end btn -->
              </div>
              <!-- <div class="row justify-content-center">
                <div class="btn-box">
                  <button type="submit" class="btn btn-dark" name="submit" id="submit">Submit</button>
                  <button type="button" class="btn btn-dark" name="waitmsg" id="waitmsg" style="display: none" disabled="disabled">Please Wait...</button>
                </div>
              </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Buy Ticket  -->

<?php include('footer.php'); ?>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript">
  var validate = $("#registration").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      company: "required",
      country: "required",
      companynumber: "required",
      sector: "required",
      nationality: "required",
      designation: "required",
      official_email: "required",
      email: "required",
      mobilenumber: "required",
      department: "required",


    },
    messages: {
      firstname: "Please enter your firstname.",
      lastname: "Please enter your lastname.",
      company: "Please enter your company name.",
      country: "Please enter your country of residence.",
      companynumber: "Please enter your company number.",
      sector: "Please enter your sector.",
      nationality: "Please enter your nationality.",
      designation: "Please enter your designation.",
      official_email: "Please enter your official email.",
      email: "Please enter your email.",
      mobilenumber: "Please enter your mobile number.",
      department: "Please enter your department.",

    },
    errorPlacement: function(error, element) {
      if (element.attr("type") == "checkbox") {
        error.insertAfter("#caterr");
      } else {
        error.insertAfter(element);
      }

    },


    submitHandler: function() {
      if (grecaptcha.getResponse() == "") {
        alert("Are you a robot? Don't be shy, complete the reCaptcha! ?");
        return false;
      }
      // call your function
      $('#submit').hide();
      $('#waitmsg').show();
      return true;
    }


  });
</script>