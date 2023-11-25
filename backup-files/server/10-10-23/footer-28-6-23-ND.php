<!-- Main Footer -->
<footer class="main-footer">
      <!--Widgets Section-->
      <div class="widgets-section">
        <div class="auto-container">
          <div class="row">
            <!--Big Column-->
            <!-- old from here -->
            <!-- end old from here -->
            <!-- new my code -->
            <div class="col-lg-4 col-12 col-md-4">
              <div class="mb-3">
                <img src="pics/logos/navLogo.png" alt="logo" class="img-fluid">
              </div>
              <div>
                <ul class="social-icon-one social-icon-colored">
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- usefull links -->
            <div class="col-lg-4 col-12 col-md-4 footer-column">
              <div class="footer-widget useful-links">
                <h2 class="widget-title">Useful Links</h2>
                <ul class="user-links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#speakers">Speakers</a></li>
                  <li><a href="#sponsors">Sponsors</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#agenda">Agenda</a></li>
                </ul>
              </div>
            </div>
            <!-- contact us -->
            <div class="col-lg-4 col-12 col-md-4 footer-column">
              <div class="footer-widget contact-widget">
                <h2 class="widget-title">Contact Us</h2>
                <!--Footer Column-->
                <div class="widget-content">
                  <ul class="contact-list">
                    <li>
                      <span class="icon flaticon-worldwide"></span>
                      <div class="text">
                        Biz Events Management P O Box : 24496<br>Tower 400, 20th Floor Sharjah, UAE
                      </div>
                    </li>

                    <li>
                      <span class="icon flaticon-phone"></span>
                      <div class="text">
                        <a href="tel:+971 6 5503300">+971 6 5503300</a>
                      </div>
                    </li>

                    <li>
                      <span class="icon flaticon-paper-plane"></span>
                      <div class="text">
                        <a href="mailto:eventmanager@ariesgroupglobal.com">eventmanager@ariesgroupglobal.com</a>
                      </div>
                    </li>

                    <!-- <li>
                      <span class="icon flaticon-worldwide"></span>
                      <div class="text">
                        Tower 400, 20th Floor Sharjah, UAE
                      </div>
                    </li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Footer Bottom-->
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="inner-container clearfix">
            <div class="copyright-text">
              <p>
                © Copyright 2024 All Rights Reserved Developed By
                <span style="color: red">&hearts;</span>

                <a href="https://www.ariesesolutions.com/">Aries e-Solutions</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  </div>
  <!--End pagewrapper-->

  <!-- Color Palate / Color Switcher -->
  <div class="color-palate">
    <div class="color-trigger">
      <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
      <h6>Choose Your Demo</h6>
    </div>
    <ul class="box-version option-box">
      <li>Full width</li>
      <li class="box">Boxed</li>
    </ul>
    <ul class="rtl-version option-box">
      <li>LTR Version</li>
      <li class="rtl">RTL Version</li>
    </ul>
    <div class="palate-foo">
      <span>You will find much more options for colors and styling in admin
        panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="#" class="purchase-btn">Purchase now</a>
  </div>
  <!-- End Color Switcher -->

 

  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-double-up"></span>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/appear.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/script.js"></script>
  <!-- Color Setting -->
  <script src="js/color-settings.js"></script>
      <!-- recaptcha -->
      <script src="https://www.google.com/recaptcha/api.js"></script>
      <!-- recaptcha -->
	  <script src="js/jquery.validate.js"></script>
	  
	<script type="text/javascript">
  
    var validate =  $("#contact_form").validate({
            rules: {
                username:"required",
                email:"required",
                phone:"required",
                message:"required",
               
            },
            messages: {
                username:"Please Enter Full Name",
                email:"Please Enter Valid Email Address",
                phone:"Please Enter Phone",
                message:"Please Enter Message",
                
            },
            submitHandler: function() {
				
				if (grecaptcha.getResponse() == "") {
            alert("Are you a robot? Don't be shy, complete the reCaptcha! ?");
            return false;
        }
                // call your function
                $('#sub').hide();
                $('#waitmsg').show();
                return true;
            }


        }
    );

</script>

<style type="text/css">
    .error{
        color:red;
    }
</style>  
	  
</body>

</html>