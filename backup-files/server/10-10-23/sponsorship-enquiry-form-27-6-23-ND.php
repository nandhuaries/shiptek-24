<?php include('header.php'); ?>

<!--Page Title-->
<section class="page-title" style="background-image: url(images/background/5.jpg)">
    <div class="auto-container">
        <h1>SPONSORSHIP ENQUIRY</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.php">Home</a></li>
            <li>SPONSORSHIP ENQUIRY</li>
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
            <!-- Content Column
                <div class="content-column col-lg-8 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <h2>Day Pass <span>$35.99</span></h2>
                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.duis aute irure dolor in repre hen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupidatat eaque ipsa quae illo proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis</p>
                        <p>derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur cepteur sint occaecat cupidatat eaque ipsa quae illo proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore laudant rem aperiam eaque ipsa quae ab illo inventore veritatis quasi architecto.</p>
                        <h3>Benefits of Day Pass package</h3>
                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
                        <ul class="list-style-one">
                            <li>Multiple Announcements during the event.</li>
                            <li>Logo & company details on the WordCamp.</li>
                            <li>Dedicated blog post thanking each Gold.</li>
                            <li>Acknowledgment and opening and closing.</li>
                        </ul>
                        <h3>Day Pass Features</h3>
                        <p>Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.duis aute irure dolor in repre hen.</p>
                    </div>
                </div> -->

            <!-- Form Column -->
            <div class="form-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="container pb-5">
                        <h1 class="text-center pb-3" style="color: #1e1f36; font-weight: 700; font-size: 40px">
                            SPONSORSHIP ENQUIRY
                        </h1>
                        <p class="text-center">
                            Contact us below with general inquiries, or to learn more
                            about Sponsorship Opportunities.
                        </p>
                        <form action="sponsorship-action" id="registration" method="post">
						<?php
if(isset($_GET['status'])&&$_GET['status']==0){
                                    
echo " <h4><b style=color:red;>Please click on the reCAPTCHA box</b></h4>";    
                            
}
if(isset($_GET['status'])&&$_GET['status']==1){
                                    
 echo "<h4><b style=color:green;>Your Sponsorship enquiry has been submitted successfully</b></h4>";   
                                     
                               
                                }
?>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                                    <input class="border w-100 inp form-control" type="text" name="fname" placeholder="First Name" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                                    <input class="border w-100 inp form-control" type="text" name="lname" placeholder="Last Name" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                                    <input class="border w-100 inp form-control" type="text" name="phone_number" placeholder="Phone Number" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                                    <input class="border w-100 inp form-control" type="text" name="email" placeholder="E-mail" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                                    <input class="border w-100 inp form-control" type="text" name="job" placeholder="Job Title" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                                    <input class="border w-100 inp form-control" type="text" name="company" placeholder="Company Name" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                                    <input class="border w-100 inp form-control" type="text" name="location" placeholder="Where Are You Located ?" required />
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                                    <select name="categories"  class="form-control">
                                        <option value="" disabled selected>
                                            Select Sponsor Ship Category
                                        </option>
                                        <option value="Title Sponsor">Title Sponsor</option>
                                        <option value="Platinum Sponso">
                                            Platinum Sponsor
                                        </option>
                                        <option value="Gold Sponsors">Gold Sponsors</option>
                                        <option value="Cocktail Sponso">
                                            Cocktail Sponsor
                                        </option>
                                        <option value="Silver Sponsors">
                                            Silver Sponsors
                                        </option>
                                        <option value="Notepad & Pen Sponsor">
                                            Notepad & Pen Sponsor
                                        </option>
                                        <option value="Badge & Lanyard">
                                            Badge & Lanyard
                                        </option>
                                        <option value="Registration Area Sponsor">
                                            Registration Area Sponsor
                                        </option>
                                        <option value="Bronze Sponsors">
                                            Bronze Sponsors
                                        </option>
                                        <option value="Award Sponsor">Award Sponsor</option>
                                        <option value="Lunch & Coffee Sponsor">
                                            Lunch & Coffee Sponsor
                                        </option>
                                        <option value="Table Top Sponsors">
                                            Table Top Sponsors
                                        </option>
                                        <option value="Conference Session Sponsor">
                                            Conference Session Sponsor
                                        </option>
                                        <option value="Welcome Drinks Sponsor">
                                            Welcome Drinks Sponsor
                                        </option>
                                        <option value="Associate Sponsors">
                                            Associate Sponsors
                                        </option>
                                    </select>
									<div id="caterr"></div>
                                </div>
								
                                <div class="form-group col-lg-4 col-md-6 col-sm-12 p-3">
                                    <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt" ></div>
                                </div>

                                <!-- <div class="btn-box">
                        <button class="theme-btn btn-style-one ">Get Tickets</button>
                      </div> -->
                            </div>
                            <div class="row justify-content-center">
                                <div class="btn-box">
                                    <button type="submit" name="submit" id="submit" class="btn btn-dark">
                                        Register
                                    </button>
									<button type="button" class="btn btn-dark" style="display: none"  id="waitmsg" value="Please Wait..." disabled="disabled">
                                        Please Wait...
                                    </button>
                                </div>
                            </div>
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
var validate =  $("#registration").validate({
    rules: {
                fname:"required",
                lname:"required",
                phone_number:"required",
                email:"required",
                job:"required",
                company:"required",
                location:"required",
                categories:"required",

  },
            messages: {
                fname:"Please enter your name.",
                lname:"Please enter your last name.",
                 mobile:"Please enter your mobile number.",
                phone_number:"Please enter your phone number.",
                 email:"Please enter a valid email address.",
                job:"Please enter your designation.",
                company:"Please enter your organization name.",
                location:"Please enter your location.",
                categories:"Please select one category.",
                 },
                 errorPlacement: function(error, element) {
                        if (element.attr("type") == "checkbox") {
                        error.insertAfter("#caterr");
                    }
                        else {
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