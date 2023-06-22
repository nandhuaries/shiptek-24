<?php include("header.php");?>
<!--Page Title-->
<section
        class="page-title"
        style="background-image: url(images/background/5.jpg)"
      >
        <div class="auto-container">
          <h1>Buy Ticket</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Buy Ticket</li>
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
                  <h1
                    class="text-center pb-3"
                    style="color: #1e1f36; font-weight: 700; font-size: 40px"
                  >
                    Nomination Registration
                  </h1>
                  <div class="container">
                    <form action="/assad" method="post">
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
                              placeholder="Individual/Organization Nominated"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="contact">Contact Person Name</label>
                            <input
                              type="text"
                              id="contact"
                              placeholder="Contact Person Name"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="designation">Designation</label>
                            <input
                              type="text"
                              id="designation"
                              placeholder="Designation"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="contact-person-no"
                              >Contact Person No</label
                            >
                            <input
                              type="text"
                              id="contact-person-no"
                              placeholder="Contact Person No"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="email">Email ID</label>
                            <input
                              type="text"
                              id="email"
                              placeholder="Email ID"
                              class="border w-100 inp form-control"
                            />
                          </div>
                          <div class="mb-3">
                            <label for="website">Website</label>
                            <input
                              type="text"
                              id="website"
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
                              value="Best CSR Award of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best CSR Award of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category4"
                              value="Ship Agency of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Ship Agency of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category5"
                              value="Best HSE Initiative of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best HSE Initiative of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category6"
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
                              id="category7"
                              value="Shipping Company of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Shipping Company of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category8"
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
                              id="category9"
                              value="Best Maritime Training Institute"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Maritime Training Institute</label
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
                              value="Best Port of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Port of the Year</label
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
                              value="Terminal Operator of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Terminal Operator of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category14"
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
                              id="category15"
                              value="Classification Society of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Classification Society of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category16"
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
                              id="category17"
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
                              id="category18"
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
                              id="category25"
                              value="Excellence in Corporate Branding"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Excellence in Corporate Branding</label
                            >
                          </div>

                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category19"
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
                              id="category20"
                              value="Women Achiever of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Women Achiever of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category21"
                              value="CEO of the Year"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >CEO of the Year</label
                            >
                          </div>
                          <div class="col-md-12 checked-content">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              name="category[]"
                              id="category22"
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
                              id="category23"
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
                              id="category24"
                              value="Best Maritime Media"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                              >Best Maritime Media</label
                            >
                          </div>
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
                                placeholder="Name"
                                class="border w-100 inp form-control"
                              />
                            </div>
                            <div class="mb-3">
                              <label for="organization">Organization</label>
                              <input
                                type="text"
                                id="organization"
                                placeholder="Organization"
                                class="border w-100 inp form-control"
                              />
                            </div>
                            <div class="mb-3">
                              <label for="affiliation"
                                >Affiliation with the Nominee</label
                              >
                              <input type="text"id="affiliation"placeholder="Affiliation with the Nominee"class="border w-100 inp form-control"/>
                            </div>
                            <div class="mb-3">
                              <label for="contact">Contact No</label>
                              <input type="text"id="contact"placeholder="Contact No"
                                class="border w-100 inp form-control"/>
                            </div>
                            <div class="mb-3">
                              <label for="email-id">Email ID</label>
                              <input type="text"id="email-id"placeholder="Email ID"class="border w-100 inp form-control"/>
                            </div>
                            <div class="mb-3">
                              <label for="attachment">Attachment</label>
                              <input type="file"id="attachment"class="border w-100 inp form-control"/>
                            </div>
                            <p>** Please provide details in support of this nomination. (You may even attach supporting documents wherever relevant)</p>
                            <div class="mb-3 d-flex flex-column">
                                <label for="details">Details</label>
                                <textarea class="border" name="" id="details" cols="30" rows="5"></textarea>
                              </div>
                              <div class="col-md-12 col-sm-12">
                                <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt"></div>
                            </div>
                            <div class="mt-3 mb-3">
                            <button class="btn btn-danger">Register</button>
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