<?php include("header.php");?>
<!--Page Title-->
<section
        class="page-title"
        style="background-image: url(images/background/5.jpg)"
      >
        <div class="auto-container">
          <h1>Nomination Registration</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="index">Home</a></li>
            <li>Nomination Registration</li>
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
              <div class="inner-column">
                <div class="container pb-5">
                  <h1
                    class="text-center pb-3"
                    style="color: #1e1f36; font-weight: 700; font-size: 40px"
                  >
                    Nomination Registration
                  </h1>
                  <div class="container">
				  <?php
if(isset($_GET['status'])&&$_GET['status']==0){
                                    
echo " <h4><b style=color:red;>Please click on the reCAPTCHA box</b></h4>";    
                            
}
if(isset($_GET['status'])&&$_GET['status']==1){
                                    
 echo "<h4><b style=color:green;>Your Nomination has been submitted successfully</b></h4>";   
                                     
                               
                                }
?>
                    <form action="nomination-action.php" method="post" id="nomination-form" enctype="multipart/form-data">
                      <div class="row flex-column flex-lg-row flex-md-row">
                        <!-- end 1st table -->
                        <div class="col-12 col-lg-6 col-md-6 mb-4 mb-lg-0">
                          <!-- <form action=""> -->
                          <h5 class="mb-3 text-center">Details Of Nominee</h5>
                          <div class="mb-3">
                            <label for="individual"
                              >Individual/Organization Nominated</label
                            >
                            <input
                              type="text"
                              id="individual"
							  name="nominatedby"
                              placeholder="Individual/Organization Nominated"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="contact">Contact Person Name</label>
                            <input
                              type="text"
                              id="contact"
							  name="nominee_name"
                              placeholder="Contact Person Name"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="designation">Designation</label>
                            <input
                              type="text"
                              id="designation"
							  name="nominee_designation"
                              placeholder="Designation"
                              class="border w-100 inp form-control"
                            />
                          </div>
                <div class="mb-3">
      <label for="contact-person-no">Contact Person No</label>
<input type="text" id="nominee_contact" name="nominee_contact"
placeholder="Contact Person No" 
class="border w-100 inp form-control"
/>
                          </div>
                          <div class="mb-3">
                            <label for="email">Email ID</label>
                            <input
                              type="text"
                              id="email"
							  name="nominee_email"
                              placeholder="Email ID"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="website">Website</label>
                            <input
                              type="text"
                              id="website"
							  name="nominee_website"
                              placeholder="Website"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <p class="font-weight-bold">
                            ShipTek International Awards 2023
                            (Marine/Offshore/Oil & Gas) Categories:
                          </p>
                          <!-- check box
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="tanker" id="tanker">
                                    <label class="form-check-label" for="tanker">
                                        Tanker Operator of the Year
                                    </label>
                                </div>
                                check box
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="tanker" id="ship-operator">
                                    <label class="form-check-label" for="ship-operator">
                                        Ship Operator of the Year
                                    </label>
                                </div>
                                check box
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="tanker" id="best-csr">
                                    <label class="form-check-label" for="best-csr">
                                        Best CSR Award of the Year
                                    </label>
                                </div>
                                check box
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="tanker" id="ship-agency">
                                    <label class="form-check-label" for="ship-agency">
                                        Ship Agency of the Year
                                    </label>
                                </div> -->
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category1"
                              value="Tanker Operator of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Tanker Operator of the Year
                            </label>
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category2"
                              value="Ship Operator of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Ship Operator of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category3"
                              value="CSR Award of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >CSR Award of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category4"
                              value="Best Ship Agency of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Ship Agency of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category5"
                              value="Best HSE Initiatives"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best HSE Initiatives</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category6"
                              value="Sustainable Organization of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Sustainable Organization of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category7"
                              value="Best Employer of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Employer of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category8"
                              value="Ship Repair Yard of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Ship Repair Yard of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category9"
                              value="Best Training Institute"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Training Institute</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category10"
                              value="Green Shipping Award"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Green Shipping Award</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category11"
                              value="Port of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Port of the Year</label
                            >
                          </div>

                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category12"
                              value="Best Project - Innovation"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Project - Innovation</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category13"
                              value="Best Classification Society of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Classification Society of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category14"
                              value="Ship Manager of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Ship Manager of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category15"
                              value="New Building Yard of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >New Building Yard of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category16"
                              value="Rising Star – Organization"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Rising Star – Organization</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category17"
                              value="Rising Star - Individual"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Rising Star - Individual</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category18"
                              value="Law firm of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Law firm of the Year</label
                            >
                          </div>

                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category25"
                              value="Young Women Achiever of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Young Women Achiever of the Year</label
                            >
                          </div>

                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category19"
                              value="ShipTek – Women Personality of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >ShipTek – Women Personality of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category20"
                              value="Best Service Provider - Marine"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Service Provider - Marine</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category21"
                              value="Best Service Provider - Offshore"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Service Provider - Offshore</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category22"
                              value="Best Service Provider - Oil & Gas"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Service Provider - Oil & Gas</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category23"
                              value="Best Maritime Association"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Maritime Association</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category24"
                              value="CEO of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >CEO of the Year</label
                            >
                          </div>
						  
						  <div class="col-md-12 checked-content" id="caterr">     </div>
                          <p class="font-weight-bold pt-3 pb-3">Life Time Achievement Award (Jury’s Choice)</p>
                          <ul class="list-style-two">
                            <li>ShipTek - Maritime Personality of the Year</li>
                            <li>ShipTek Life Time Achievement Award - Entrepreneur</li>
                            <li>ShipTek Life Time Achievement Award – Maritime Services</li>
                          </ul>
						  
                        </div>
                        <!-- end 1st table -->
                        <!-- second table -->
                        <div class="col-12 col-lg-6 col-md-6 mb-4 mb-lg-0">
                          <form action="">
                            <h5 class="mb-3 text-center">
                              Details of Nominating Person
                            </h5>
                            <div class="mb-3">
                              <label for="name">Name</label>
                              <input
                                type="text"
                                id="name"
								name="nominatedby_name"
                                placeholder="Name"
                                class="border w-100 inp form-control"
                              />
                            </div>
                            <div class="mb-3">
                              <label for="organization">Organization</label>
                              <input
                                type="text"
                                id="organization"
								name="nominatedby_org"
                                placeholder="Organization"
                                class="border w-100 inp form-control"
                              />
                            </div>
                            <div class="mb-3">
                              <label for="affiliation">Affiliation with the Nominee</label>
                              <input type="text" id="affiliation" name="affiliation" placeholder="Affiliation with the Nominee"class="border w-100 inp form-control"/>
                            </div>
                            <div class="mb-3">
                              <label for="contact">Contact No</label>
          <input type="text" id="nominatedby_contact" name="nominatedby_contact" placeholder="Contact No"
                                class="border w-100 inp form-control"/>
                            </div>
                            <div class="mb-3">
                              <label for="email-id">Email ID</label>
                              <input type="text" id="email-id" name="nominatedby_email" placeholder="Email ID" class="border w-100 inp form-control"/>
                            </div>
                            <div class="mb-3">
                              <label for="attachment">Attachment</label>
                              <input type="file" id="attachment" name="docs" class="border w-100 inp form-control"/>
                            </div>
                            <p>** Please provide details in support of this nomination. (You may even attach supporting documents wherever relevant)</p>
                            <div class="mb-3 d-flex flex-column">
                                <label for="details">Details</label>
                                <textarea class="border" name="details" id="details" cols="30" rows="5"></textarea>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt"></div>
                            </div>
                            <div class="mt-3 mb-3">
                            <button class="btn btn-danger" id="submit">Register</button>
							<button  style="display:none;" id="waitmsg" class="btn btn-danger" disabled="disabled" >Please Wait...</button>
                            </div>
                        </div>
                        </div>
                        <!-- end second table -->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Buy Ticket  -->
      <?php include("footer.php");?>
	  <script src="assets/js/jquery.validate.js"></script>

 <script type="text/javascript">
var validate =  $("#nomination-form").validate({
    rules: {
		
nominee_name:"required",
nominee_designation:"required",
nominee_contact1:"required",
nominee_email:"required",
//nominee_website:"required",
'category[]':"required",
nominatedby_name:"required",
nominatedby_org:"required",
affiliation:"required",
email:"required",
nominatedby_contact:"required",
nominatedby_email:"required",
nominatedby:"required",
                
				

  },
            messages: {
                nominatedby:"Please enter individual/organization name to nominate",
                nominee_contact1:"please enter valid contact number",
                nominee_email:"Please enter a valid email id",
                'category[]':"You must select atleast one category",
                 nominatedby_name:"Please enter name(Nominated By)",
                nominatedby_org:"Please enter organization name(Nominated By)",
                affiliation:"Please enter affiliation with the Nominee",
                email:"Please enter email id.",
      nominatedby_contact:"Please enter a valid contact number(Nominated By)",
                nominatedby_email:"Please enter valid email(Nominated By)",
                nominee_name:"Please enter contact person name",
                nominee_designation:"Please enter contact person designation",
				//nominee_website:"Please enter website",
                
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