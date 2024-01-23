<?php include('header.php'); ?>
<style>
    .titleGov {

        display: inline-block;
        font-size: 20px;
        line-height: 1.2em;
        background: linear-gradient(to right, #FF6B6B, #A74AA8);
        ;
        color: #ffffff;
        padding: 10px 30px;
        font-weight: 700;
        margin-bottom: 20px;
        border-radius: 10px;
    }

    .govImg {
        /* display: flex; */
        flex-direction: column;
        justify-content: center;
        align-items: center;
        /* border: 1px solid #dddddd; */
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.10);
        /* background-color: #ffffff; */
    }

    .govImg:hover {
        box-shadow: none;
    }

    .govDiv {
        margin-bottom: 50px;
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        /* Set the color of your text */
    }

    .banner-section {
        width: 100%;
        height: auto;
    }

    .banner-section video {
        /*      width: 100%;*/
        height: auto;
    }

    .banner-section:before {
        content: "";
        background: rgb(13 20 41 / 38%);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    @media only screen and (max-width: 768px) {
        .banner-section {
            height: 125vh;
            margin-bottom: 20px;
        }

        .banner-section video {
            width: 100%;
            height: auto;
        }

        .movTop {
            margin-top: 275px;
        }

        .coming-soon-section {
            margin-top: 100px;
        }
    }
</style>
<!-- Banner Section -->
<section class="banner-section">
    <video style="min-width: 100%;" autoplay muted playsinline loop preload="metadata">
        <source src="video/video.mp4" type="video/mp4" />
    </video>
    <div class="banner-carousel owl-carousel owl-theme content">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="auto-containerr movTop">
                <div class="content-box">
                    <span class="title"><?php echo $evt_date ?> | 09:00 AM - 05:00 PM
                    </span>
                    <!-- <span class="title">09:00 AM - 05:00 PM</span> -->
                    <h2>
                        SHIPTEK <br />INTERNATIONAL CONFERENCE &<br />
                        AWARDS 2024
                    </h2>
                    <ul class="info-list">
                        <!-- <li><span class="icon fa fa-chair"></span> 5000 Seats</li>
                  <li><span class="icon fa fa-user-alt"></span> 12 SPEAKERS</li> -->
                        <li style="font-weight:600;font-size: 25px;"><span class="icon fa fa-map-marker-alt"></span><?php echo $evt_loc ?></li>
                    </ul>
                    <!-- marque -->
                    <!-- <marquee style="font-weight:600;font-size: 25px;">
                        <a style="color: red;" href="nomination-registration" target="_blank">
                            <b>NOMINATIONS CLOSING ON 30TH DEC, CLICK HERE TO NOMINATE NOW..!!</b>
                        </a>
                    </marquee> -->
                    <!-- marque -->
                    <div class="govImg row">
                        <h3 class="titleGov">Government Partner</h3>
                        <div class="col-12 col-lg-9">
                            <img class="img-fluid" src="pics/government-partner/uae-old.png" alt="">
                        </div>
                    </div>

                    <div class="btn-box">
                        <a href="sponsorship-enquiry-form" target="_blank" class="theme-btn btn-style-two m-2 m-md-3 m-lg-4"><span class="btn-title">
                                Sponsorship Enquiry</span></a>
                        <a href="delegate-registration" target="_blank" class="theme-btn btn-style-two m-2 m-md-3 m-lg-4"><span class="btn-title">
                                Delegate Registration</span></a>
                        <!-- {blink} class for blink -->
                        <a href="nomination-registration" target="_blank" class="theme-btn btn-style-two m-2 m-md-3 m-lg-4"><span class="btn-title">Nomination Registration</span></a>
                        <a href="exampleModal" class="theme-btn btn-style-two m-2 m-md-3 m-lg-4" data-toggle="modal" data-target="#exampleModal"><span class="btn-title">Media Registration</span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->



<!-- Coming Soon -->
<section class="coming-soon-section">
    <div class="auto-container">
        <div class="outer-box">
            <div class="time-counter">
                <!-- <div class="time-countdown clearfix" data-countdown="01/24/2024"></div> -->
                <div class="time-countdown clearfix" data-countdown="1/24/2024 09:00"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Coming Soon -->

<!-- About Section -->
<section class="about-section" id="about">
    <div class="anim-icons full-width">
        <span class="icon icon-circle-blue wow fadeIn"></span>
        <span class="icon icon-dots wow fadeInleft"></span>
        <span class="icon icon-circle-1 wow zoomIn"></span>
    </div>
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">ABOUT EVENT</span>
                        <h2>Welcome to SHIPTEK 2024</h2>
                        <div class="text text-justify">
                            Since its inception in 2008, this most popular name SHIPTEK
                            in the maritime industry has traveled worldwide - Dubai,
                            Singapore, Hongkong, Greece, Hamburg, India etc., making it
                            one of the finest maritime events globally. ShipTek
                            International Maritime Conference & Excellence Awards 2024
                            UAE will be a physical event aimed at key decision makers
                            and high-level policymakers. The forerunners of ShipTek were
                            all billed as ideal events which orchestrated turnarounds in
                            the maritime industry. ShipTek has been blessed with a
                            continuum of leader’s foresight and is an event setting a
                            revolution in the Maritime world. ShipTek Conference focuses
                            on key market trends, giving attendees a unique insight into
                            the current opportunities. The intention is that attendees
                            will leave the event with a much clearer idea about future
                            trade patterns and market influences so they are better
                            placed to build the foundations for longer-term business
                            growth.<br />
                            This mega event will comprise the following integral
                            segments:
                        </div>
                    </div>
                    <ul class="list-style-one">
                        <li>Two-days International Conference</li>
                        <li>ShipTek International Awards 2024</li>
                    </ul>
                    <div class="btn-box">
                        <a href="delegate-registration" target="_blank" class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image wow fadeIn">
                        <img src="pics/index-images/new-Project.jpg" alt="" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Features Section Two -->
<section class="features-section-two">
    <div class="auto-container">
        <div class="anim-icons">
            <span class="icon twist-line-1 wow zoomIn"></span>
            <span class="icon twist-line-2 wow zoomIn" data-wow-delay="1s"></span>
            <span class="icon twist-line-3 wow zoomIn" data-wow-delay="2s"></span>
        </div>

        <div class="row">
            <!-- Title Block -->
            <div class="title-block col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="sec-title">
                        <span class="title">SHIPTEK</span>
                        <h2>INTERNATIONAL CONFERENCE – TOPICS 2024</h2>
                    </div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4><a href="Javascript: void(0)">AI & DIGITAL TRANSFORMATION</a></h4>
                    <!-- <div class="text">AI & DIGITAL TRANSFORMATION</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4>
                        <a href="Javascript: void(0)">DECARBONIZATION & ENERGY TRANSITION</a>
                    </h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4><a href="Javascript: void(0)">CREW HEALTH & SAFETY</a></h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4><a href="Javascript: void(0)">MARINE LOGISTICS & OPREATIONS</a></h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4>
                        <a href="Javascript: void(0)">HUMAN ELEMENT - OUTLINE PRESENT CHALLENGES & VISION FOR THE
                            FUTURE</a>
                    </h4>
                    <!-- <div class="text">HUMAN ELEMENT - OUTLINE PRESENT CHALLENGES & VISION FOR THE
                    FUTURE.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4>
                        <a href="Javascript: void(0)">ALTERNATIVE SHIP FUELS – CURRENT STATUS & OUTLOOK</a>
                    </h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4>
                        <a href="Javascript: void(0)">CLASSIFICATION SOCIETY – RULES, REGULATIONS &
                            RECOMMENDATIONS</a>
                    </h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4>
                        <a href="Javascript: void(0)">MARITIME REGULATIONS & GOALS - TODAY / 2030 / 2050</a>
                    </h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4>
                        <a href="Javascript: void(0)">ROADMAP TO SUSTAINABLE SHIPPING</a>
                    </h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4>
                        <a href="Javascript: void(0)">SEA TRANSPORTATION AND HEAVY LIFT</a>
                    </h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4><a href="Javascript: void(0)">POWERING SHIPS OF THE FUTURE</a></h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box topics-int">
                    <div class="icon-box">
                        <span class="icon flaticon-employee-1"></span>
                    </div>
                    <h4><a href="Javascript: void(0)">BLOCK CHAIN IN SHIPPING</a></h4>
                    <!-- <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Features Section -->


<!-- new speakers -->


<!-- Speakers Section -->
<!--<section id="speakers" class="speakers-section-two">
  <div class="anim-icons">
    <span class="icon icon-circle-4 wow zoomIn"></span>
    <span class="icon icon-circle-3 wow zoomIn"></span>
  </div>

  <div class="auto-container">
    <div class="sec-title text-center">
      <span class="title">SHIPTEK 2024</span>
      <h2>Speaker</h2>
    </div>

    <div class="row justify-content-center">

      <!-- Speaker Block -->
<!--<div class="speaker-block-two col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
        <div class="inner-box">
          <div class="info-box">
            <h4 class="name"><a href="Javascript: void(0)">NABIL BEN SOUSSIA </a></h4>
            <span class="designation">
              Group CCO<br>
              IEC Telecom Group
            </span>
          </div>
          <div class="image-box">
            <figure class="image"><a href="Javascript: void(0)"><img src="pics/2024-speakers/nabil.webp" alt=""></a></figure>
          </div>
          <div class="social-box">
            <button data-toggle="modal" data-target="#speak1" class="btn btn-primary">View More</button>
          </div>
        </div>
      </div>
      <!-- end speaker -->
<!--</div>
  </div>
</section>-->
<!-- End Speakers Section -->


<!-- end new speakers -->




<!-- Speakers Section -->
<section id="speakers" class="speakers-section speak" style="background-image: url(pics/gif/speakerSec.gif)">
    <div class="auto-container">
        <div class="sec-title light text-center">
            <span class="title">ShipTek 2024</span>
            <h2>Speakers</h2>
        </div>

        <div class="row">
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/hessa-almalek.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">H.E Eng Hessa Ahmed Hamdan Almalek</a>
                            </h4>
                            <span style="line-height: 20px;" class="designation">Advisor to the Minister for Maritime Transport Affairs,
                                The UAE Ministry of Energy & Infrastructure
                            </span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Hessa" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/nabil.webp" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Nabil Ben Soussia</a>
                            </h4>
                            <span class="designation"> Group CCO<br>
                                IEC Telecom Group.</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#speak1" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/hamad-al.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Hamad Al Maghrabi</a>
                            </h4>
                            <span class="designation">Chief Executive Officer , Ofco Offshore International</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#HAMAD-AL-MAGHRABI" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->


            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/capt-mohammad-al-ali.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Capt. Mohamad Al Ali</a>
                            </h4>
                            <span class="designation">Senior VP, Offshore Logistics, Adnoc L&S</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#MOHAMADALALI" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/vivek-seth1.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Vivek Seth</a>
                            </h4>
                            <span class="designation">Senior Vice President, Marine Services ADNOC Logistics &
                                Services
                            </span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Vivek" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->

            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/yasser.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Capt. Yasser Hashem</a>
                            </h4>
                            <span class="designation">Director Fleet Personnel Department, Bahri Ship Management</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#YASSER-HASHEM" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/effat-MOSTAFA.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Dr. Effat Mostafa </a>
                            </h4>
                            <span class="designation">Founder & General Manager, Seascope Mena</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#EFFAT-MOSTAFA" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->

            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/Christopher-Kirton.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Christopher Kirton</a>
                            </h4>
                            <span class="designation">Managing Director, ITM (V.GROUP)</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Christopher-Kirton" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/Natalie.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Natalie Jensen</a>
                            </h4>
                            <span class="designation">Partner, Ince & Co</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Natalie" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Speaker Block -->

            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/jamil-al-ali.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Jamil Al Ali</a>
                            </h4>
                            <span class="designation">Head of Commercial & BD Middle East Marine & Offshore,
                                Bureau Veritas.
                            </span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Jamil" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->
            <!-- gireesh -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/gireesh-menon.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Gireesh Menon </a>
                            </h4>
                            <span class="designation">Managing Director Aries Marine & Engg.</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Gireesh" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/jaideep-vohra.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Jaideep Vohra</a>
                            </h4>
                            <span class="designation">Fleet Performance and Drydocking Director</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Jaideep" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/veronika.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Veronika Aspelund</a>
                            </h4>
                            <span class="designation">Vice President – Mooring solutions, Wilhelmsen Ships Service</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Veronika" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/Xanthos.webp" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Xanthos Kyriacou</a>
                            </h4>
                            <span class="designation">Regional Managing Director , Columbia Shipmanagement</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Xanthos" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Speaker Block -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/hanan-ekhzaimy.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Hanan Ekhzaimy</a>
                            </h4>
                            <span class="designation" style="text-transform: capitalize;">Head Of Competitiveness & Marine Quality Moei UAE</span>
                            <!-- <div class="social-box">
                                <button data-toggle="modal" data-target="#Ramee-Rashid" class="btn btn-primary">View More</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->


            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/Sarah.webp" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Sarah Al Qahtani </a>
                            </h4>
                            <span class="designation">Chartering Manager (Commercial & Operations), Bahri Dry Bulk</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Sarah" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Speaker Block -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/willem-moelker.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Willem Moelker</a>
                            </h4>
                            <span class="designation">Sales & Marketing Director Albwardy Damen</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/abhay-nimbalkar.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Capt. Abhay Nimbalkar</a>
                            </h4>
                            <span class="designation">CEO Greenfield Marine Technologies</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Abhay" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Speaker Block -->


            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/varghese.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Capt.Thomas Varghese</a>
                            </h4>
                            <span class="designation">Managing Director Synergy Mideast Ship Management</span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/nikolaos.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Nikolaos Michas</a>
                            </h4>
                            <span class="designation">Global Tanker Segment Director, Lloyds Register</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Nikolaos" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/sanjiv.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Sanjiv Wazir</a>
                            </h4>
                            <span class="designation">Technical Manager , Lenol DMCC</span>
                            <!-- <div class="social-box">
                                <button data-toggle="modal" data-target="#Nikolaos" class="btn btn-primary">View More</button>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>


            <!-- Speaker Block -->
            <!-- <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/dheeraj-sharma.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Capt. Dheeraj Sharma</a>
                            </h4>
                            <span class="designation">Director Business Development ABS Dubai (ME &
                                Africa)
                            </span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Dheeraj-Sharma" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end speaker -->

            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/ramee-rashid.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Ramee Rashid</a>
                            </h4>
                            <span class="designation">Owner & Director Seamaster Maritime</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Ramee-Rashid" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/jayakumar.png" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Dr. Jayakumar</a>
                            </h4>
                            <span class="designation">Chief Executive Officer and Director Vizhinjam International Seaport Limited</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Jayakumar" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/xaj-Kitherian.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">X A J Kitherian</a>
                            </h4>
                            <span class="designation">Founder & CEO , Entoss Technologies</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#xaj-Kitherian" class="btn btn-primary">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/Tim-3.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Tim Coffin</a>
                            </h4>
                            <span class="designation">CEO - Maritime Logistics Division, Tristar Group</span>
                            <!-- <div class="social-box">
                                <button data-toggle="modal" data-target="#xaj-Kitherian" class="btn btn-primary">View More</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end speaker -->

            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/rajeev-p-rao.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Rajeev P. Rao</a>
                            </h4>
                            <span class="designation">Regional Manager - ME, Africa & EU IR CLASS</span>
                            <!-- <div class="social-box">
                                <button data-toggle="modal" data-target="#Nikolaos" class="btn btn-primary">View More</button>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Speaker Block -->
            <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/2024-speakers/nooshin-rahmani.png" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Nooshin Rahmani</a>
                            </h4>
                            <span class="designation">Partner, Ruby Maritime</span>
                            <div class="social-box">
                                <button data-toggle="modal" data-target="#Nooshin" class="btn btn-primary">View More</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- extra speakers adding -->

            <!-- Speaker Block -->
            <!-- <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/aftab-hasan.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Aftab Hasan</a>
                            </h4>
                            <span class="designation">Chairman, Risk Exchange (DIFC) Limited CEO, Arya
                                Insurance Brokerage Co. (Bayzat)</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end speaker -->
            <!-- Speaker Block -->
            <!-- <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/tony-dagher.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Tony Dagher</a>
                            </h4>
                            <span class="designation">Managing Director TMC Shipping DMCC</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end speaker -->
            <!-- Speaker Block -->
            <!-- <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/russel.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Russell Ford</a>
                            </h4>
                            <span class="designation">Chief Surveyor ABS</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end speaker -->
            <!-- Speaker Block -->
            <!-- <div class="speaker-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="Javascript: void(0)"><img src="pics/speakers/harsh.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="info-box">
                        <div class="inner">
                            <h4 class="name">
                                <a href="Javascript: void(0)">Harsh Nagamoti</a>
                            </h4>
                            <span class="designation">Lead Engineer- EIT Aries Marine & Engg Services LLC</span>
                           
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end speaker -->

            <!-- end extra speakers adding -->
        </div>
    </div>
</section>
<!-- End Speakers Section -->

<!-- Features Section Two -->
<section class="features-section-two">
    <div class="auto-container">
        <div class="anim-icons">
            <span class="icon twist-line-1 wow zoomIn"></span>
            <span class="icon twist-line-2 wow zoomIn" data-wow-delay="1s"></span>
            <span class="icon twist-line-3 wow zoomIn" data-wow-delay="2s"></span>
        </div>

        <div class="row">
            <!-- Title Block -->
            <div class="title-block col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="sec-title">
                        <span class="title">SHIPTEK</span>
                        <h2>INTERNATIONAL AWARDS 2024</h2>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12 text text-justify">
                        ShipTek International Awards 2024 is back to celebrate the
                        remarkable & noteworthy contributions of the
                        Individuals/Organizations In the maritime/
                        Offshore/Oil&Gas/Port & Logistics sectors. A proud symbol of
                        celebration & recognition, the award ceremony gained its
                        popularity and credibility through its forerunners. The award
                        ceremony shall be organized in concurrence with ShipTek
                        International Conference. So don’t wait and miss out to place
                        your nomination for the respective category and be a
                        participant in the final race among other top organizations &
                        individuals
                    </div>
                </div>
            </div>
            <!-- end content -->

            <div class="title-block col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="sec-title">
                        <span class="title">Become a part of this Grand Evening of Achievements where
                            Excellence Matters..!!</span>
                        <!-- <h2>INTERNATIONAL AWARDS 2024</h2> -->
                    </div>
                </div>
                <div style="background-color: #fafafa">
                    <div class="container pt-5 pb-5 mt-3 d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-6 col-12 col-md-6">
                                <ul class="list-style-two text-capitalize">
                                    <li>Tanker Operator of the Year</li>
                                    <li>Ship Operator of the Year</li>
                                    <li>CSR Award of the Year</li>
                                    <li>Best Ship Agency of the Year</li>
                                    <li>Best HSE Initiatives.</li>
                                    <li>Sustainable Organization of the Year</li>
                                    <li>Excellence in Ports Infrastructure</li>
                                    <li>Excellence in Marine Services</li>
                                    <li>Best Employer of the Year</li>
                                    <li>Ship Repair Yard of the Year</li>
                                    <li>Best Training Institute</li>
                                    <li>Green Shipping Award</li>
                                    <li>Port of the Year</li>
                                    <li>Best Project - Innovation</li>
                                    <li>Best Classification Society of the Year</li>
                                    <li>Ship Manager of the Year</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul class="list-style-two text-capitalize">
                                    <li>New Building Yard of the Year</li>
                                    <li>Rising Star – Organization</li>
                                    <li>Rising Star - Individual</li>
                                    <li>Law firm of the Year</li>
                                    <li>Young Women Achiever of the Year</li>
                                    <li>ShipTek – Women Personality of the Year</li>
                                    <li>Best Service Provider - Marine</li>
                                    <li>Best Service Provider - Offshore</li>
                                    <li>Best Service Provider - Oil & Gas</li>
                                    <li>Best Maritime Association</li>
                                    <li>CEO of the Year</li>
                                    <li>ShipTek - Maritime Personality of the Year</li>
                                    <li>
                                        ShipTek Life Time Achievement Award - Entrepreneur
                                    </li>
                                    <li>
                                        ShipTek Life Time Achievement Award - Services
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Features Section -->

<!-- Fun Fact Section -->
<!-- <section class="fun-fact-section">
        <div class="auto-container">
          <div class="fact-counter">
            <div class="row clearfix">
              Column
              <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="count-box">
                  <span class="icon icon_headphones"></span>
                  <span class="count-text" data-speed="3000" data-stop="180">0</span>
                  <h4 class="counter-title">Participants</h4>
                </div>
              </div>

              Column
              <div
                class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp"data-wow-delay="400ms">
                <div class="count-box">
                  <span class="icon icon_ribbon_alt"></span>
                  <span class="count-text" data-speed="3000" data-stop="62">0</span>
                  <h4 class="counter-title">Awards Win</h4>
                </div>
              </div>

              Column
              <div
                class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp"
                data-wow-delay="800ms">
                <div class="count-box">
                  <span class="icon icon_like"></span>
                  <span class="count-text" data-speed="3000" data-stop="54">0</span>
                  <h4 class="counter-title">Certified Teachers</h4>
                </div>
              </div>

              Column
              <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp"data-wow-delay="1200ms">
                <div class="count-box">
                  <span class="icon icon_book_alt"></span>
                  <span class="count-text" data-speed="3000" data-stop="38">0</span>
                  <h4 class="counter-title">Courses</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
<!--End Fun Fact Section -->

<!-- sponsors -->

<section class="clients-section" id="sponsors">
    <div class="anim-icons">
        <span class="icon icon-dots-3 wow zoomIn"></span>
        <span class="icon icon-circle-blue wow zoomIn"></span>
    </div>
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">ShipTek</span>
            <h2>Sponsors</h2>
        </div>
        <!-- rearrange -->
        <div class="container">
            <!-- gold sponsor -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="sponsors-outer">
                        <h3 style="background-color: #1d95d2;" class="w-100 text-center">Gold Sponsor</h3>
                        <div>
                            <!-- Client Block -->
                            <div class="client-block ">
                                <figure class="image-box">
                                    <a href="https://lenolmarine.com/" target="_blank"><img src="pics/gold-sponsors/lenol.png" alt="Lenol logo" /></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end gold sponsor -->

            <!-- Silver sponsor -->
            <!-- <div class="row justify-content-center">
        <div class="col-12 col-lg-4 col-md-4">
          <div class="sponsors-outer">
            <h3 style="background-color: #1d95d2;" class="w-100 text-center">Silver Sponsor</h3>
            <div>
              <div class="client-block ">
                <figure class="image-box">
                  <a href="https://www.wingd.com/en/" style="" target="_blank"><img src="pics/silver-sponsors/wingd.jpg" alt="WinGD logo" /></a>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div> -->
            <!-- end gold sponsor -->

            <!-- dinner and cocktail -->
            <div class="row justify-content-center">
                <!-- dinner and cocktail -->
                <div class="col-12">
                    <div class="sponsors-outer">
                        <h3 style="background: #1d95d2" class="w-100 text-center">Dinner & Cocktail Sponsors</h3>
                        <div class="row justify-content-center">
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <!-- Client Block -->
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="http://www.faisal-higgi.com" target="_blank"><img src="pics/cocktail/faisal.png" alt="Faisal M Higgi & Associates" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <!-- Client Block -->
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="http://www.v.group" target="_blank"><img src="pics/cocktail/v-logo-new.png" alt="V.Group" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                        </div>
                    </div>
                </div>
                <!-- end dinner and cocktail -->
            </div>

            <!-- dinner and cocktail -->
            <div class="row justify-content-center">
                <!-- dinner and cocktail -->
                <div class="col-12">
                    <div class="sponsors-outer">
                        <h3 style="background: #1d95d2" class="w-100 text-center">Badge & Lanyard Sponsor</h3>
                        <div class="row justify-content-center">
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <!-- Client Block -->
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="http://www.stanfordmarinegroup.com/home/" target="_blank"><img src="pics/dinner/smg.jpg" alt="" style="max-width: 75%;" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->

                        </div>
                    </div>
                </div>
                <!-- end dinner and cocktail -->
            </div>

            <!-- second -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="sponsors-outer">
                        <h3 style="background-color: #1d95d2; margin-bottom: 40px;" class="w-100 text-center">Lunch & Coffee Sponsor</h3>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="javascript:void(0);"><img src="pics/lunch-and-coffe/ruby-new.jpg" alt="Lunch & Coffee Sponsor" style="max-width: 75%;" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!--               <div class="col-12 col-lg-4 col-md-6">
                <div class="client-block">
                  <figure class="image-box">
                    <a href="javascript:void(0);"><img src="pics/lunch-and-coffe/alvana.webp" alt="Lunch & Coffee Sponsor" /></a>
                  </figure>
                </div>
              </div> -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- end second -->

            <div class="row justify-content-center">
                <!-- Conference Session Sponsor -->
                <div class="col-12">
                    <div class="sponsors-outer">
                        <h3 style="background: #1d95d2" class="w-100 text-center">Conference Session Sponsors</h3>
                        <div class="row justify-content-center">


                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="https://www.bahri.sa/" target="_blank"><img src="pics/conference-spons/bahri.png" alt="bahri" /></a>
                                    </figure>
                                </div>
                            </div>

                            <!-- Client Block -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="https://ww2.eagle.org/en.html" target="_blank"><img src="pics/conference-spons/abs.webp" alt="abs" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end client -->
                            <!-- Client Block -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="https://marine-offshore.bureauveritas.com/" target="_blank"><img src="pics/conference-spons/bureau-veritas.png" alt="Faisal M Higgi & Associates" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end client -->
                            <!-- Client Block -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="https://www.wilhelmsen.com/" target="_blank"><img src="pics/conference-spons/wilhelmsen.png" alt="Faisal M Higgi & Associates" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end client -->
                            <!-- Client Block -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="https://www.pomfret.cloud/" target="_blank"><img src="pics/conference-spons/pomfretCloud.png" alt="Faisal M Higgi & Associates" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end client -->
                            <!-- Client Block -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block ">
                                    <figure class="image-box">
                                        <a href="https://www.irclass.org/" target="_blank"><img src="pics/conference-spons/IRS-CLASS.png" alt="IRS-CLASS" /></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end client -->
                        </div>
                    </div>
                </div>
                <!-- end Conference Session Sponsor -->
            </div>

            <!-- third -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="sponsors-outer">
                        <h3 style="background: #1d95d2;
                            margin-bottom: 40px;" class="w-100 text-center">Associate Sponsors
                        </h3>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="https://www.albwardydamen.com/" target="_blank">
                                            <img src="pics/assosiate/albwardy.png" alt="albwardy" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="https://seamastermaritime.com/" target="_blank">
                                            <img src="pics/assosiate/seamaster.png" alt="seamaster" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="http://www.oceanicsre.com" target="_blank">
                                            <img src="pics/assosiate/oceananic.webp" alt="Oceananic" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="https://www.besiktasmarine.com/" target="_blank">
                                            <img src="pics/assosiate/besiktas.png" alt="Besiktas Marine" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="https://www.oscarmarineservices.com/" target="_blank">
                                            <img src="pics/assosiate/oscar.png" alt="oscar" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="https://fosrams.com/" target="_blank">
                                            <img src="pics/assosiate/fosram.png" alt="fosram" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="Javascript: void(0)">
                                            <img src="pics/assosiate/tasneef.webp" alt="tasneef" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="Javascript: void(0)">
                                            <img src="pics/assosiate/uni-marine.webp" alt="uni-marine" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="Javascript: void(0)">
                                            <img src="pics/assosiate/stoileff.jpg" alt="stoilef" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                            <!-- sponsor -->
                            <div class="col-12 col-lg-4 col-md-6">
                                <div class="client-block">
                                    <figure class="image-box">
                                        <a href="https://solasmarine.com/" target="_blank">
                                            <img src="pics/assosiate/solas-marine.png" alt="solas-marine" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end sponsor -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end third -->
        </div>
        <!-- end rearrange -->
    </div>
</section>

<!-- end sponsors -->

<!--Clients Section-->
<section class="clients-section">
    <div class="anim-icons">
        <span class="icon icon-dots-3 wow zoomIn"></span>
        <span class="icon icon-circle-blue wow zoomIn"></span>
    </div>
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">ShipTek</span>
            <h2>Media Partners</h2>
        </div>
        <!-- rearrange -->
        <!-- Strategic Media Partner and Regional Media Partner -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="sponsors-outer">
                        <h3 style="background-color: #1d95d2; text-transform: capitalize;" class="w-100 text-center">Association Partner</h3>
                        <div>
                            <div class="client-block ">
                                <figure class="image-box">
                                    <a href="Javascript: void(0)"><img src="pics/MEDIA-PARTNERS/sea-scope.jpg" alt="" /></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-12 col-lg-4 col-md-4">
                    <div class="sponsors-outer">
                        <h3 style="background-color: #1d95d2;" class="w-100 text-center">Regional Media Partner</h3>
                        <div>

                            <div class="client-block ">
                                <figure class="image-box">
                                    <a href="https://assafinaonline.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/robban-assafina.jpg" alt="" /></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>

        <!-- end Strategic Media Partner and Regional Media Partner -->


        <!-- <div class="sponsors-outer d-flex flex-column text-center">
      <h3>Strategic Media Partner</h3>
      <div class="row justify-content-center">
        
        <div class="client-block col-lg-3 col-md-6 col-sm-12">
          <figure class="image-box">
            <a href="#"><img src="pics/MEDIA-PARTNERS/marasinews.jpg" alt="" /></a>
          </figure>
        </div>
        
        <div class="client-block col-lg-3 col-md-6 col-sm-12">
          <figure class="image-box">
            <a href="#"><img src="pics/MEDIA-PARTNERS/robban-assafina.jpg" alt="" /></a>
          </figure>
        </div>
      </div>
    </div> -->
        <!-- sp -->
        <div class="sponsors-outer">
            <!-- <h3>Silver Sponsors</h3> -->
            <div class="row justify-content-center">
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://assafinaonline.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/robban-assafina.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.marasinews.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/marasinews.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="Javascript: void(0)"><img src="pics/MEDIA-PARTNERS/trade-mark.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.energycioinsights.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/cio-engry.png" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="http://www.coalspot.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/coal-spot.png" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://exporooms.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/expo-rooms.png" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="http://www.petrofinder.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/petro-finder.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://sailortoday.in/" target="_blank"><img src="pics/MEDIA-PARTNERS/sailor-today.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.worldoils.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/worldils.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.financialnigeria.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/financial.png" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.greenjournal.co.uk/" target="_blank"><img src="pics/MEDIA-PARTNERS/green-journal.png" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.greenmatch.co.uk/boilers/combi-boilers/electric-combi-boilers" target="_blank"><img src="pics/MEDIA-PARTNERS/green-match.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="Javascript: void(0)"><img src="pics/MEDIA-PARTNERS/oasis.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="http://refinerlink.com/cgi-sys/suspendedpage.cgi" target="_blank"><img src="pics/MEDIA-PARTNERS/refinerlink.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.hellenicshippingnews.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/hellenic.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.ufofreight.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/ufo.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.projectcargonetwork.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/projectCargo.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.cargoconnections.net/" target="_blank"><img src="pics/MEDIA-PARTNERS/cargoConnections.png" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.freightbook.net/" target="_blank"><img src="pics/MEDIA-PARTNERS/freightbook.png" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.energydais.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/energy.png" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.marineinsight.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/marine.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.bunkerspot.com/" target="_blank"><img src="pics/MEDIA-PARTNERS/bunker.png" alt="" /></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Clients Section-->

<!--Clients Section-->
<section class="clients-section">
    <div class="anim-icons">
        <span class="icon icon-dots-3 wow zoomIn"></span>
        <span class="icon icon-circle-blue wow zoomIn"></span>
    </div>
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">ShipTek</span>
            <h2>Supporting Association</h2>
        </div>

        <div class="sponsors-outer">
            <!-- <h3>Platinum Sponsors</h3> -->
            <div class="row">
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="Javascript: void(0)"><img src="pics/supportingAssociations/clean-shipping-logo.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="http://www.arabwima.org/en/home" target="_blank"><img src="pics/supportingAssociations/awima.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://youngship.com/departments/uae/" target="_blank"><img src="pics/supportingAssociations/young-ship.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://www.dcmmiemirates.ae/" target="_blank"><img src="pics/supportingAssociations/dcmmi.jpg" alt="" /></a>
                    </figure>
                </div>
            </div>
        </div>
        <div class="sponsors-outer">
            <!-- <h3>Gold Sponsors</h3> -->
            <div class="row">
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://www.fonasba.com/" target="_blank"><img src="pics/fonsaba1.png" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://www.dubaisaa.ae/" target="_blank"><img src="pics/supportingAssociations/dsaa1.png" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="Javascript: void(0)"><img src="pics/supportingAssociations/ics1.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://www.globalialogisticsnetwork.com/" target="_blank"><img src="pics/supportingAssociations/gobalia.jpg" alt="" /></a>
                    </figure>
                </div>
            </div>
        </div>

        <div class="sponsors-outer">
            <!-- <h3>Silver Sponsors</h3> -->
            <div class="row">
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://www.thecooperativelogisticsnetwork.com/" target="_blank"><img src="pics/supportingAssociations/cooperative.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://www.conquerornetwork.com/" target="_blank"><img src="pics/supportingAssociations/conqueror.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://www.internationalfreightnetwork.com/" target="_blank"><img src="pics/supportingAssociations/internationalFreight.jpg" alt="" /></a>
                    </figure>
                </div>

                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box h-100">
                        <a href="https://www.specialistfreightnetworks.com/default.aspx" target="_blank"><img src="pics/supportingAssociations/specialist.jpg" alt="" /></a>
                    </figure>
                </div>
                <!-- Client Block -->
                <div class="client-block col-lg-3 col-md-6 col-sm-12">
                    <figure class="image-box">
                        <a href="https://www.worldfreightnetwork.com/" target="_blank"><img src="pics/supportingAssociations/worldFrieghtNet.jpg" alt="" /></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Clients Section-->



<!-- schedule Section -->
<section class="schedule-section" id="agenda">
    <div class="anim-icons">
        <span class="icon icon-circle-4 wow zoomIn"></span>
        <span class="icon icon-circle-3 wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">About Conference</span>
            <h2>Schedule Plan</h2>
        </div>

        <div class="schedule-tabs tabs-box">
            <div class="btns-box">
                <!--Tabs Box-->
                <ul class="tab-buttons clearfix">
                    <li style="width: 200px" class="tab-btn active-btn" data-tab="#tab-1">
                        <span class="day">Day 01</span>
                        <span class="date">24</span>
                        <span class="month">January</span> 2024
                    </li>

                    <li style="width: 200px" class="tab-btn" data-tab="#tab-2">
                        <span class="day">Day 02</span>
                        <span class="date">25</span>
                        <span class="month">January</span> 2024
                    </li>
                </ul>
            </div>

            <div class="tabs-content">
                <!--Tab-->
                <div class="tab active-tab" id="tab-1">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        9.00 AM <br />
                                        05.00 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                          <figure class="thumb">
                            <img src="images/resource/thumb-1.jpg" alt="" />
                          </figure>
                          <h5 class="name">Ashli Scroggy</h5>
                          <span class="designation">Founder & CEO</span>
                        </div> -->
                                    <h4>
                                        <a href="javascript:void(0)">CONFERENCE</a>
                                    </h4>
                                    <!-- <div class="text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit, sed do eiusmtempor incididunt labore et
                        </div> -->
                                    <div class="btn-box">
                                        <a href="javascript:void(0)" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <!-- <div class="schedule-block even">
              <div class="inner-box">
                <div class="inner">
                  <div class="date">
                    10.00 AM <br />
                    11.00 AM
                  </div>
                  <div class="speaker-info">
                    <figure class="thumb">
                      <img src="images/resource/thumb-2.jpg" alt="" />
                    </figure>
                    <h5 class="name">DUMMY CONTENT</h5>
                    <span class="designation">Founder & CEO</span>
                  </div>
                  <h4>
                    <a href="#">DUMMY CONTENT</a>
                  </h4>
                  <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmtempor incididunt labore et
                  </div>
                  <div class="btn-box">
                    <a href="#" class="theme-btn">Read More</a>
                  </div>
                </div>
              </div>
            </div> -->

                        <!-- schedule Block -->
                        <!-- <div class="schedule-block">
                    <div class="inner-box">
                      <div class="inner">
                        <div class="date">
                          11.00 AM <br />
                          12.00 AM
                        </div>
                        <div class="speaker-info">
                          <figure class="thumb">
                            <img src="images/resource/thumb-1.jpg" alt="" />
                          </figure>
                          <h5 class="name">Ashli Scroggy</h5>
                          <span class="designation">Founder & CEO</span>
                        </div>
                        <h4>
                          <a href="event-detail.html"
                            >Modern Marketing Summit Sydney 2018</a
                          >
                        </h4>
                        <div class="text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit, sed do eiusmtempor incididunt labore et
                        </div>
                        <div class="btn-box">
                          <a href="event-detail.html" class="theme-btn"
                            >Read More</a
                          >
                        </div>
                      </div>
                    </div>
                  </div> -->

                        <!-- schedule Block -->
                        <!-- <div class="schedule-block even">
                    <div class="inner-box">
                      <div class="inner">
                        <div class="date">
                          12.00 AM <br />
                          01.00 PM
                        </div>
                        <div class="speaker-info">
                          <figure class="thumb">
                            <img src="images/resource/thumb-2.jpg" alt="" />
                          </figure>
                          <h5 class="name">Ashli Scroggy</h5>
                          <span class="designation">Founder & CEO</span>
                        </div>
                        <h4>
                          <a href="event-detail.html"
                            >Modern Marketing Summit Sydney 2018</a
                          >
                        </h4>
                        <div class="text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit, sed do eiusmtempor incididunt labore et
                        </div>
                        <div class="btn-box">
                          <a href="event-detail.html" class="theme-btn"
                            >Read More</a
                          >
                        </div>
                      </div>
                    </div>
                  </div> -->
                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab-2">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        9.00 AM <br />
                                        05.00 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                          <figure class="thumb">
                            <img src="images/resource/thumb-1.jpg" alt="" />
                          </figure>
                          <h5 class="name">Ashli Scroggy</h5>
                          <span class="designation">Founder & CEO</span>
                        </div> -->
                                    <h4>
                                        <a href="javascript:void(0)">CONFERENCE & AWARDS</a>
                                    </h4>
                                    <!-- <div class="text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit, sed do eiusmtempor incididunt labore et
                        </div> -->
                                    <div class="btn-box">
                                        <a href="javascript:void(0)" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <!-- <div class="schedule-block even">
              <div class="inner-box">
                <div class="inner">
                  <div class="date">
                    10.00 AM <br />
                    11.00 AM
                  </div>
                  <div class="speaker-info">
                    <figure class="thumb">
                      <img src="images/resource/thumb-2.jpg" alt="" />
                    </figure>
                    <h5 class="name">DUMMY CONTENT</h5>
                    <span class="designation">Founder & CEO</span>
                  </div>
                  <h4>
                    <a href="event-detail.html">DUMMY CONTENT</a>
                  </h4>
                  <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmtempor incididunt labore et
                  </div>
                  <div class="btn-box">
                    <a href="#" class="theme-btn">Read More</a>
                  </div>
                </div>
              </div>
            </div> -->

                        <!-- schedule Block -->
                        <!-- <div class="schedule-block">
                    <div class="inner-box">
                      <div class="inner">
                        <div class="date">
                          11.00 AM <br />
                          12.00 AM
                        </div>
                        <div class="speaker-info">
                          <figure class="thumb">
                            <img src="images/resource/thumb-1.jpg" alt="" />
                          </figure>
                          <h5 class="name">Ashli Scroggy</h5>
                          <span class="designation">Founder & CEO</span>
                        </div>
                        <h4>
                          <a href="event-detail.html"
                            >Modern Marketing Summit Sydney 2018</a
                          >
                        </h4>
                        <div class="text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit, sed do eiusmtempor incididunt labore et
                        </div>
                        <div class="btn-box">
                          <a href="event-detail.html" class="theme-btn"
                            >Read More</a
                          >
                        </div>
                      </div>
                    </div>
                  </div> -->

                        <!-- schedule Block -->
                        <!-- <div class="schedule-block even">
                    <div class="inner-box">
                      <div class="inner">
                        <div class="date">
                          12.00 AM <br />
                          01.00 PM
                        </div>
                        <div class="speaker-info">
                          <figure class="thumb">
                            <img src="images/resource/thumb-2.jpg" alt="" />
                          </figure>
                          <h5 class="name">Ashli Scroggy</h5>
                          <span class="designation">Founder & CEO</span>
                        </div>
                        <h4>
                          <a href="event-detail.html"
                            >Modern Marketing Summit Sydney 2018</a
                          >
                        </h4>
                        <div class="text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit, sed do eiusmtempor incididunt labore et
                        </div>
                        <div class="btn-box">
                          <a href="event-detail.html" class="theme-btn"
                            >Read More</a
                          >
                        </div>
                      </div>
                    </div>
                  </div> -->
                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab-3">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        9.00 AM <br />
                                        10.00 AM
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4>
                                        <a href="event-detail.html">Modern Marketing Summit Sydney 2018</a>
                                    </h4>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10.00 AM <br />
                                        11.00 AM
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4>
                                        <a href="event-detail.html">Modern Marketing Summit Sydney 2018</a>
                                    </h4>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        11.00 AM <br />
                                        12.00 AM
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4>
                                        <a href="event-detail.html">Modern Marketing Summit Sydney 2018</a>
                                    </h4>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        12.00 AM <br />
                                        01.00 PM
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4>
                                        <a href="event-detail.html">Modern Marketing Summit Sydney 2018</a>
                                    </h4>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab-4">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        9.00 AM <br />
                                        10.00 AM
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4>
                                        <a href="event-detail.html">Modern Marketing Summit Sydney 2018</a>
                                    </h4>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10.00 AM <br />
                                        11.00 AM
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4>
                                        <a href="event-detail.html">Modern Marketing Summit Sydney 2018</a>
                                    </h4>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        11.00 AM <br />
                                        12.00 AM
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4>
                                        <a href="event-detail.html">Modern Marketing Summit Sydney 2018</a>
                                    </h4>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        12.00 AM <br />
                                        01.00 PM
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4>
                                        <a href="event-detail.html">Modern Marketing Summit Sydney 2018</a>
                                    </h4>
                                    <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
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
<!--End schedule Section -->

<!-- Pricing Section -->
<!-- <section class="pricing-section">
      <div class="anim-icons">
        <span class="icon icon-circle-green wow fadeIn"></span>
        <span class="icon icon-circle-blue wow fadeIn"></span>
        <span class="icon icon-circle-pink wow fadeIn"></span>
      </div>

      <div class="auto-container">
        <div class="sec-title text-center">
          <span class="title">Get Ticket</span>
          <h2>Choose a Ticket</h2>
        </div>

        <div class="outer-box">
          <div class="row">
            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
              <div class="inner-box">
                <div class="icon-box">
                  <div class="icon-outer">
                    <span class="icon flaticon-paper-plane"></span>
                  </div>
                </div>
                <div class="price-box">
                  <div class="title">Day Pass</div>
                  <h4 class="price">$35.99</h4>
                </div>
                <ul class="features">
                  <li class="true">Conference Tickets</li>
                  <li class="true">Free Lunch And Coffee</li>
                  <li class="true">Certificate</li>
                  <li class="false">Easy Access</li>
                  <li class="false">Free Contacts</li>
                </ul>
                <div class="btn-box">
                  <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                </div>
              </div>
            </div>

            
            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
              <div class="inner-box">
                <div class="icon-box">
                  <div class="icon-outer">
                    <span class="icon flaticon-diamond-1"></span>
                  </div>
                </div>
                <div class="price-box">
                  <div class="title">Full Pass</div>
                  <h4 class="price">$99.99</h4>
                </div>
                <ul class="features">
                  <li class="true">Conference Tickets</li>
                  <li class="true">Free Lunch And Coffee</li>
                  <li class="true">Certificate</li>
                  <li class="true">Easy Access</li>
                  <li class="false">Free Contacts</li>
                </ul>
                <div class="btn-box">
                  <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                </div>
              </div>
            </div>

            Pricing Block
            <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
              <div class="inner-box">
                <div class="icon-box">
                  <div class="icon-outer">
                    <span class="icon flaticon-rocket-ship"></span>
                  </div>
                </div>
                <div class="price-box">
                  <div class="title">Group Pass</div>
                  <h4 class="price">$199.99</h4>
                </div>
                <ul class="features">
                  <li class="true">Conference Tickets</li>
                  <li class="true">Free Lunch And Coffee</li>
                  <li class="true">Certificate</li>
                  <li class="true">Easy Access</li>
                  <li class="true">Free Contacts</li>
                </ul>
                <div class="btn-box">
                  <a href="buy-ticket.html" class="theme-btn">BUY Ticket</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<!--End Pricing Section -->

<!-- Video Section -->
<section class="video-section">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="pics/sponsors/1.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="pics/sponsors/2.jpg" alt="Second slide" />
            </div>
            <!-- <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
          </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- <div class="auto-container">
        <div class="content-box">
          <div class="text">WE’RE A LEADING INDUSTRY COMPANY</div>
          <h2>
            We Are Always at The <br />Forefront of The Business Conference !
          </h2>
          <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery"
            data-caption=""><i class="icon flaticon-play-button-3" aria-hidden="true"></i><span
              class="ripple"></span></a>
        </div>
      </div> -->
</section>
<!--End Video Section -->

<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="sec-title text-center">
        <span class="title">JOIN THE EVENT</span>
        <h2>Why Attend ShipTek?</h2>
        <!-- <h1>shdajhd</h1> -->
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4 col-12 col-md-6 d-flex justify-content-center mb-3 mb-lg-0 mb-md-3">
                <div class="card shadow" style="width: 18rem">
                    <img src="pics/whyToAttendIMg/image_processing20201016-15173-gcwnwd.gif" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title" style="color: #1d95d2; font-weight:500">Networking Opportunities</h5>
                        <p class="card-text text-justify">
                            Meet and connect with experts from the industry, gain
                            knowledge on the opportunities and challenges of the
                            industry and interact with the global players to understand
                            the ins and outs of the industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 col-md-6 d-flex justify-content-center mb-3 mb-lg-0 mb-md-3">
                <div class="card shadow" style="width: 18rem">
                    <img src="pics/whyToAttendIMg/caseStudy.gif" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title" style="color: #1d95d2; font-weight:500">Case Study Presentations</h5>
                        <p class="card-text text-justify">
                            Increase your awareness about modern Asset management /
                            advanced inspection technologies used in Oil & gas
                            production, petrochemical, power generation, and
                            manufacturing industries through real-time case studies of
                            experts.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 col-md-12 d-flex justify-content-center mb-3 mb-lg-0 mb-md-3">
                <div class="card shadow" style="width: 18rem">
                    <img src="pics/whyToAttendIMg/lead_generation.gif" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title" style="color: #1d95d2; font-weight:500">Lead Generation</h5>
                        <p class="card-text text-justify">
                            Connect with industry colleagues, meet prospective clients
                            and create new sales opportunities by strengthening your
                            brand awareness at the event.
                        </p>
                    </div>
                </div>
            </div>
            <!-- template contents -->
            <!-- <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
              <div class="inner-column">
                <div class="sec-title">
                  <span class="title">JOIN THE EVENT</span>
                  <h2>Why Attend ShipTek?</h2>
                  <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmtempor incididunt labore et dolore magna aliqu
                    enim ad minim veniam quis nostrud exercitation ullamco
                    laboris nisi ut aliquip
                  </div>
                </div>
                <ul class="list-style-one">
                  <li>High Quality Education</li>
                  <li>You can learn anything</li>
                  <li>We list your options by state</li>
                  <li>Expert-created content and resources</li>
                </ul>
                <div class="btn-box">
                  <a href="buy-ticket.html" class="theme-btn btn-style-two"
                    ><span class="btn-title">Get Tickets</span></a
                  >
                </div>
              </div> -->
            <!-- </div> -->
            <!-- <div class="image-column col-lg-6 col-md-12 col-sm-12">
              <div class="image-box">
                <figure class="image">
                  <img src="images/background/3.jpg" alt="" />
                </figure>
              </div>
            </div> -->
            <!-- end template contents -->
        </div>
    </div>
</section>
<!-- End Why Choose Us -->








<!-- Register Section -->
<section class="register-section" id="contact">
    <div class="auto-container">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-3 wow zoomIn"></span>
        </div>
        <div class="outer-box">
            <div class="row no-gutters">
                <div class="title-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="sec-title light">
                            <div class="icon-box">
                                <span class="icon flaticon-rocket-ship"></span>
                            </div>
                            <h2>HAVE QUESTIONS ?</h2>
                            <div class="text">
                                FILL THE FORM AND ONE OF OUR TEAM MEMBER WILL REACH OUT TO
                                YOU
                            </div>
                        </div>
                    </div>
                </div>
                <!--Register Form-->
                <div class="register-form col-lg-8 col-md-6 col-sm-12">
                    <div class="form-inner">
                        <form method="post" action="contact-action.php" id="contact_form">
                            <?php
                            if (isset($_GET['status']) && $_GET['status'] == 3) {

                                echo '<script language="javascript">';
                                echo 'alert("Please click on the reCAPTCHA box")';
                                echo '</script>';
                            }
                            if (isset($_GET['status']) && $_GET['status'] == 2) {

                                echo '<script language="javascript">';
                                echo 'alert("Your Enquiry has been submitted successfuly")';
                                echo '</script>';
                            } ?>
                            <div class="form-group">
                                <span class="icon fa fa-user"></span>
                                <input type="text" name="username" placeholder="Full name" required="" />
                            </div>

                            <div class="form-group">
                                <span class="icon fa fa-envelope"></span>
                                <input type="email" name="email" value="" placeholder="Email address" required />
                            </div>

                            <div class="form-group">
                                <span class="icon fa fa-phone"></span>
                                <input type="text" name="phone" placeholder="Phone" required="" />
                            </div>

                            <div class="form-group">
                                <span class="icon fa fa-edit"></span>
                                <textarea name="message" placeholder="Additional message"></textarea>
                            </div>

                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt"></div>
                            </div>

                            <div class="form-group text-right">
                                <input type="submit" name="sub" id="sub" class="theme-btn btn-style-four" value="Submit">


                                <input type="submit" id="waitmsg" style="display: none" value="Please Wait..." class="theme-btn btn-style-four" disabled="disabled">


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Register Section -->

<!-- News Section -->
<section class="news-section">
    <div class="anim-icons">
        <span class="icon icon-circle-blue wow fadeIn"></span>
        <span class="icon twist-line-1 wow zoomIn"></span>
        <span class="icon twist-line-2 wow zoomIn"></span>
        <span class="icon twist-line-3 wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">ShipTek</span>
            <h2>Blogs</h2>
        </div>

        <div class="row">
            <!-- News Block Three -->
            <!-- <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
            <div class="inner-box card">
              <div class="image-box">
                <figure class="image">
                  <a href="blog-single.html"><img src="pics/blog/shiptek22-news1.png" alt="" /></a>
                </figure>
              </div>
              <div class="lower-content card-body">
                <ul class="post-info">
                  <li><span class="far fa-"></span> 09th March, 2022</li>
                  <li><span class="far fa-comments"></span> Comment 03</li>
                </ul>
                <h4>
                  <a href="blog-single.html" class="text-justify">Industry veterans and organisations honoured at the
                    prestigious SHIPTEK INTERNATIONAL AWARDS 2022</a>
                </h4>
                <div class="btn-box">
                  <a href="https://www.marasinews.com/top-news/industry-veterans-and-organisations-honoured-prestigious-shiptek-international-awards-2022"
                    class="read-more">Read More</a>
                </div>
              </div>
            </div>
          </div> -->

            <!-- News Block Three -->
            <!-- <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
            <div class="inner-box card h-100">
              <div class="image-box">
                <figure class="image">
                  <a href="blog-single.html"><img src="pics/blog/shiptek22-news2.png" alt="" /></a>
                </figure>
              </div>
              <div class="lower-content card-body">
                <ul class="post-info">
                  <li><span class="far fa-"></span> 09th March, 2022</li>
                  <li><span class="far fa-comments"></span> Comment 03</li>
                </ul>
                <h4>
                  <a href="blog-single.html" class="text-justify">Industry Veterans & Organizations honoured with the
                    prestigious ShipTek International Awards 2022</a>
                </h4>
                <div class="btn-box">
                  <a href="https://www.hellenicshippingnews.com/industry-veterans-organizations-honoured-with-the-prestigious-shiptek-international-awards-2022/"
                    class="read-more">Read More</a>
                </div>
              </div>
            </div>
          </div> -->

            <!-- News Block Three -->
            <!-- <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="800ms">
            <div class="inner-box card h-100">
              <div class="image-box">
                <figure class="image">
                  <a href="blog-single.html"><img src="pics/blog/shiptek22-news3.png" alt="" /></a>
                </figure>
              </div>
              <div class="lower-content">
                <ul class="post-info">
                  <li><span class="far fa-"></span> 08th March, 2022</li>
                  <li><span class="far fa-comments"></span> Comment 03</li>
                </ul>
                <h4>
                  <a href="blog-single.html" class="text-justify">Ministry of Energy and Infrastructure wins award at
                    ShipTek 2022</a>
                </h4>
                <div class="btn-box">
                  <a href="https://www.wam.ae/en/details/1395303027757" class="read-more">Read More</a>
                </div>
              </div>
            </div>
          </div> -->
            <!-- bootstrap -->
            <div class="container">
                <div class="row justify-content-center">
                    <!-- card -->
                    <div class="col-lg-4 col-12 col-md-6 mb-4 d-flex justify-content-center wow fadeInRight">
                        <div class="card" style="width: 18rem">
                            <img class="card-img-top" src="pics/blog/1-new.PNG" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title" style="color: red;">17th March, 2023</h5>
                                <p class="card-text" style="color: black; font-weight: 500; font-family: 'Ubuntu', sans-serif;">
                                    Cutting-Edge Maritime Technology Takes Center Stage at ShipTek International Conference 2023 – Dubai Edition
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="https://assafinaonline.com/news_details/en/15648/Cutting-Edge-Maritime-Technology-Takes-Center-Stage-at-ShipTek-International-Conference-2023-Dubai-Edition" target="_blank" class="card-link btn-sm btn-primary">Read More</a>
                                <!-- <a href="#" class="card-link">Another link</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- card -->
                    <div class="col-lg-4 col-12 col-md-6 mb-4 d-flex justify-content-center wow fadeInRight" data-wow-delay="400ms">
                        <div class="card" style="width: 18rem">
                            <img class="card-img-top" src="pics/blog/2-new.PNG" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title" style="color: red;">22nd March, 2023</h5>
                                <p class="card-text" style="color: black; font-weight: 500; font-family: 'Ubuntu', sans-serif;">
                                    UAE Ministry of Energy and Infrastructure wins “Excellence In Governance - Maritime” award at ShipTek Awards 2023
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="https://www.zawya.com/en/press-release/government-news/uae-ministry-of-energy-and-infrastructure-wins-excellence-in-governance-maritime-award-at-shiptek-awards-2023-irh34tpi" target="_blank" class="card-link btn-sm btn-primary">Read More</a>
                                <!-- <a href="#" class="card-link">Another link</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- card -->
                    <div class="col-lg-4 col-12 col-md-6 mb-4 d-flex justify-content-center wow fadeInRight" data-wow-delay="400ms">
                        <div class="card" style="width: 18rem">
                            <img class="card-img-top" src="pics/blog/3.1-new.PNG" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title" style="color: red;">24th March, 2023</h5>
                                <p class="card-text " style="color: black; font-weight: 500; font-family: 'Ubuntu', sans-serif;">
                                    WINGD BAGS “DIGITAL SOLUTIONS PROVIDER OF THE YEAR” TITLE AT SHIPTEK INTERNATIONAL AWARDS 2023
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="https://uaenews247.com/2023/03/24/wingd-bags-digital-solutions-provider-of-the-year-title-at-shiptek-international-awards-2023/" target="_blank" class="card-link btn-sm btn-primary">Read
                                    More</a mb-4 d-flex justify-content-center>
                                <!-- <a href="#" class="card-link">Another link</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="btn-box d-flex justify-content-center">
                    <a href="blog-full" class="theme-btn btn-style-one" target="_blank"><span class="btn-title">View More</span></a>
                </div>
            </div>
            <!-- end bootstrap -->
        </div>
    </div>
</section>
<!--End News Section -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #fffefa;">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #1e1f36; font-weight:700">Media Registration</h3>
                <button style="margin-top: 0px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="col">
                        <!-- <h4 class="text-center">Media Registration ShipTek Dubai 2024</h4> -->
                        <div>
                            <form action="media-reg-action.php" method="post" id="media-reg">
                                <?php
                                if (isset($_GET['status']) && $_GET['status'] == 0) {

                                    echo '<script language="javascript">';
                                    echo 'alert("Please click on the reCAPTCHA box")';
                                    echo '</script>';
                                }
                                if (isset($_GET['status']) && $_GET['status'] == 1) {

                                    echo '<script language="javascript">';
                                    echo 'alert("Your Media Registration has been submitted successfuly")';
                                    echo '</script>';
                                } ?>
                                <div class="col-12">
                                    <label for="name-of-media">Name Of Media</label><br>
                                    <input type="text" id="name" name="name" class="inp form-control" placeholder="Name Of Media" required>
                                </div>
                                <div class="col-12">
                                    <label for="location">Location</label><br>
                                    <input type="text" id="location" name="location" class="inp form-control" placeholder="Location" required>
                                </div>
                                <div class="col-12">
                                    <label for="website">Website</label><br>
                                    <input type="text" id="website" name="website" class="inp form-control" placeholder="Website" required>
                                </div>
                                <div class="col-12">
                                    <label for="contact-information">Contact Information</label><br>
                                    <input type="text" id="information" name="information" class="inp form-control" placeholder="Contact Information" required>
                                </div>
                                <div class="col-md-12 col-sm-12 mt-3">
                                    <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt"></div>
                                </div>
                                <div class="row justify-content-center mt-3">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-dark" style="display: none" id="waitmsg" value="Please Wait..." disabled="disabled">
                                        Please Wait...
                                    </button>
                                </div>
                                <div class="modal-footer mt-4">
                                    <!--<button type="submit" id="submit" class="btn btn-primary">Register</button>
					  <button type="button" class="btn btn-dark" style="display: none"  id="waitmsg" value="Please Wait..." disabled="disabled">
                                        Please Wait...
                                    </button>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end modal -->
<?php include('footer.php'); ?>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript">
    var validate = $("#media-reg").validate({
        rules: {
            name: "required",
            location: "required",
            website: "required",
            information: "required",


        },
        messages: {
            name: "Please enter name of media.",
            location: "Please enter location.",
            website: "Please enter your website.",
            information: "Please enter your information.",

        },
        errorPlacement: function(error, element) {
            if (element.attr("type") == "checkbox") {
                error.insertAfter("#caterr");
            } else {
                error.insertAfter(element);
            }

        },


        submitHandler: function() {
            if (grecaptcha.getResponse(1) == "") {
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

<!-- Modal -->
<div class="modal fade" id="MOHAMADALALI" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">CAPT. MOHAMAD AL ALI</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    SENIOR VP, OFFSHORE LOGISTICS, ADNOC L&S

                </h6>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body text-justify">
                <p>
                    Captain Mohamed Al Ali is the Senior Vice President Offshore Logistics at ADNOC Logistics and
                    Services (L&S). In his current role at ADNOC L&S, he oversees the commercial logistics and operational
                    activities of the ports, offshore supply and support fleet to provide end to end Offshore Logistics
                    Solution to the customers including Warehousing, Material Handling, Port and Offshore Supply Operations.
                </p>
                <p>
                    He has over 25 years of successful experience in oil and gas and shipping. He started his career as a deck
                    cadet with National Gas Shipping Company Ltd (NGSCO), a wholly-owned subsidiary of ADNOC in 1996, and rose to
                    become the first UAE National Master on an LNG carrier in 2008.
                </p>
                <p>
                    Captain Al Ali was the Senior Vice President Ship Management at ADNOC Logistics and Services (L&S) since 2013.
                    In his previous role at ADNOC L&S, he was overseeing the operations of ADNOC L&S’ shipping fleet, including LNG
                    and LPG carriers and oil tankers as well as chemical, Sulphur and dry bulk carriers and containers. He spearheaded
                    a number of joint energy efficiency and optimization projects.
                </p>
                <p> Captain Al Ali holds an Executive Master Degree in Business Administration from
                    Zayed University and a Bachelor’s Degree in Maritime Business and Management from
                    John Moores University in Liverpool, UK.
                </p>

                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- Modal -->
<div class="modal fade" id="speak1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">NABIL BEN SOUSSIA</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Group CCO
                    IEC Telecom Group

                </h6>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body text-justify">
                <p>
                    A high-performance leader with extensive experience in the MENA region, Nabil Ben
                    Soussia joined IEC Telecom Group as Director of Technologies and Operations in 2008.
                    In the capacity of Business Unit Director, Mr. Ben Soussia played a key role in the
                    opening of the Abu Dhabi office in 2011. In 2014, Mr. Ben Soussia initiated the opening
                    of a new office in Kazakhstan, and in the same year, he became Managing Director of
                    the Middle East division.
                </p>
                <p>
                    Mr. Ben Soussia moved into the role of Group Vice President in 2018, responsible for
                    the strategic vision and management of the maritime segment.
                </p>
                <p>
                    With the increased scope of his profile and responsibilities within the Group, Mr. Ben
                    Soussia has advanced to the role of CEO Asia, Middle East & CIS in 2020. Recently
                    Nabil took over a global role, stepping into the position of Group CCO.
                </p>
                <p>
                    In his tenure so far, Mr. Ben Soussia has been instrumental in earning international
                    recognition for IEC Telecom, including YahClick Innovation Excellence Award (2018),
                    Thuraya Best Performance Data (2021), Thuraya Best Performance in Land Data VAS –
                    Middle East & Africa (2022), and many more
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Christopher-Kirton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Christopher Kirton</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Managing Director, ITM (V.GROUP)
                </h6>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body text-justify">
                <p>
                    Chris has a strong ship management background with international experience gained during the past 28 years of executive positions in Ship Management.
                </p>
                <p>
                    Following a career at sea, culminating in 5 years sailing as Chief Engineer, Chris worked in London, Melbourne, Singapore and Dubai holding various senior positions before joining V.Group in April 2020.
                </p>
                <p>
                    Chris has hands on experience of managing all vessel types with an emphasis on tanker management and has held senior positions with Ship Owners, 3rd party Ship Managers and an Oil Major.
                </p>
                <p>
                    Chris is a Chartered Engineer and an active member of the IMarEST, as well as being the Chairman of the Lloyds Register SEA Technical Committee and a member of the ABS, DNVGL and ClassNK ME & SEA technical committees.
                </p>
                <p>
                    Chris has a strong interest in seafarers education and welfare as well as a professional curiosity for all things maritime.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="HAMAD-AL-MAGHRABI" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">HAMAD AL MAGHRABI</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    CHIEF EXECUTIVE OFFICER , OFCO OFFSHORE INTERNATIONAL
                </h6>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body text-justify">
                <p>
                    <b>Career Highlights:</b>
                </p>
                <ul>
                    <li>Formerly the General Manager at Abu Dhabi Ports.</li>
                    <li>Previously served as Managing Director at Dry Docks World.</li>
                    <li>Initiated career as a Marine Engineer at ADNOC LNG.</li>
                </ul>
                <p>
                    <b>Current Role:</b> As the CEO of OFCO Offshore International, Hamad propels success through strategic leadership.
                </p>
                <p><b>Achievements:</b> Acknowledged for outstanding contributions, earning accolades in the maritime sector.</p>
                <p><b>Legacy:</b> Hamad's influence transcends roles, leaving an enduring mark on the industry's trajectory.</p>
                <p><b>Conclusion:</b>Hamad Al Moghrabi’s journey mirrors commitment, leadership, and a profound impact on the logistics landscape.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="EFFAT-MOSTAFA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">EFFAT MOSTAFA</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    FOUNDER & GENERAL MANAGER, SEASCOPE MENA
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Effat Mostafa is currently the Founder and General Manager of SeaScope MENA, the first integraed hub for maritime PR and Business Excellence in MENA. Mostafa worked as Executive Director at Tactics Creative Communication and the Managing Editor for Marasi News, the award winner Maritime Media Platform for “Best Maritime Media” from ShipTek Awards.
                </p>
                <p>
                    Effat has more than 14 years of experience in different media fields such as PR, Publishing, Event Management, Reporting and TV Script Writing. Effat’s published articles have been anthologized in different books and journal essays such as “Issues in Comparative Politics” that was published in USA by Todd Landman. Effat is also a contributing writer in several UAE newspapers such as Gulf Today.
                </p>
                <p>
                    Effat has a special passion for the maritime sector and is proud to be the youngest Arab Journalist who successfully published more than 500 articles 36 business studies and covering different fields within the maritime sector. Mostafa has been the first professional to introduce "Maritime PR & Business Exellence" field in the MENA with successful collaboration between private and government sector through many initiatives such as "Maritime Leaders Roundtable" which created the first of its kind direct dialogue between private and government parties.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="YASSER-HASHEM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">CAPT. YASSER HASHEM</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    DIRECTOR FLEET PERSONNEL DEPARTMENT, BAHRI SHIP MANAGEMENT
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Capt. Yasser Hashem is the Director of Fleet Personnel at Bahri Ship Management. Capt. Yasser is a highly proficient master mariner and an ex-marine/harbour pilot with over two decades of sailing experience. He heads the Fleet Personnel Department and oversees the Manning, Scheduling, Training, and Performance of over 4,000 seafarers.
                </p>
                <p>
                    Capt. Yasser holds a Master license and a PhD in Maritime Law and Governance. His role plays a big part in keeping the fleet operation smooth and transforming the company’s vision into reality. He has been among the Saudi Arabia delegates in international events including the International Maritime Organization.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Hessa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">H.E Eng Hessa Ahmed Hamdan Almalek</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Advisor to the Minister for Maritime Transport Affairs, The UAE Ministry of Energy & Infrastructure
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Well-educated and equally experienced, Eng. Hessa Ahmed Hamdan Al Malek has been a trailblazer in maritime both regionally and globally. Accomplishing a number of noteworthy achievements on both personal and professional levels, she has paved a path for ambitious women all over the world to follow. Currently, Eng. Hessa serves as the Advisor to the Minister for Maritime Transport Affairs, The UAE Ministry of Energy and Infrastructure
                </p>
                <p>
                    With over 20 years of experience in distinctive fields such as urban planning and development, maritime transport, land design and management, and public works, Eng. Hessa is well-versed as it pertains to the ins and outs of the industry. Her expertise includes: maritime strategy, policy, and governance in the maritime sector, maritime legislation, maritime education and training, port development infrastructure, as well as certifications in a number of maritime training courses related to strategy, policymaking, management, human resources and more.
                </p>
                <p>
                    Eng. Hessa worked in the Ministry of Public Works for 14 years as she was promoted from Project Manager in 2000 to Undersecretary Assistant for Public Works in 2012. During her work at the Ministry, she gained extensive experience, leadership and management skills, especially in the management of the public works management such as effective design, implementation and management of engineering projects and maintenance (buildings - roads) and specialized knowledge associated with urban planning and GIS.
                </p>
                <p>
                    In her postion at the FTA, Eng. Hessa contributed to the prosperity of UAE maritime by successfully fulfilling her responsibilities of supervising all works of the local maritime sector at a federal level. This included updating the UAE’s new maritime law, enhancing maritime education, protecting the country’s maritime infrastructure, overseeing ship registration development, and representing the nation in industry related events. Furthermore, Eng. Hessa also plays a key role in the strategic framework of the UAE’s policy and strategies for maritime administration by acting as the head of the Maritime Technical Executive Council.
                </p>
                <p>
                    Today, Eng. Hessa is also the President of the Arab Women in Maritime Association (AWIMA), where she continually strives to empower and encourage aspiring females to remain relentless in their pursuit of a maritime career. Through these efforts and an unwavering work ethic, Eng. Hessa has become an inspiration for countless women who are seeking to enter and make a name for themselves in the maritime industry.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Vivek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Vivek Seth</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Senior Vice President, Marine Services ADNOC Logistics & Services
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    A Senior Executive with nearly 32 years maritime experience in operational, commercial and C-suite roles. Mr. Seth has been within offshore for over 22 years and of which 17+ years has been in Middle East. He is Sr. Vice President Marine Services , ADNOC Logistics and Services from 2019. From 2014-2018, he was CEO of Halul Offshore (Milaha Group, Qatar) where he successfully transformed the business. Prior to that for 5 years, Mr. Seth was Managing Director at Smit Lamnalco, Middle East and India – with P&L responsibility for 11 countries, 800 + employees and he successfully doubled the business in 5 years. Mr. Seth has held various other senior management positions internationally in Svitzer (part of A.P Moller Maersk) and Tidewater Inc., and for 2 years worked as technical superintendent in Hong Kong. He has sailed as Chief Engineer and possesses an MBA from Manchester Business School, UK. Mr. Seth has twice been recognized among the 50 most influential leaders in the Global Marine Offshore Industry.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Abhay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Capt. Abhay Nimbalkar</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    CEO Greenfield Marine Technologies
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    A Master Mariner with 25 Years of Experience in both Deep Sea and the Offshore Industry . Worked Previously with ADNOC Group for 8 Years in Abu Dhabi and currently serving as CEO of Greenfield Marine Technologies , a Company that creates smart Digital Solutions using cutting edge technologies .
                </p>
                <p>
                    A firm believer that Technology is at the cusp of revolutionizing the Maritime Industry
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Jamil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Jamil Al Ali</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Head of Commercial & BD Middle East Marine & Offshore,
                    Bureau Veritas.
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Mr Jamil Al Ali graduated in 1990 as a Marine Engineer from South Tyneside College, UK after completing his engineering cadetship sponsored by Kuwait Oil Tanker Company (KOTC). He sailed onboard all classes of vessels within the KOTC fleet, serving onboard products tankers, VLCC and Gas carriers during his tenure at sea, sailing up to the rank of Chief Engineer before joining KOTC Head office as technical Superintendent in 2002.
                </p>
                <p>
                    He has held various managerial positions in KOTC Head Office spanning from fleet engineering group manager to managing the Fleet new building group and has developed a vast experience in the tanker and gas carriers segments throughout his vast career.
                </p>
                <p>
                    He was often recognized for his key role in ensuring the KOTC fleet was maintained to the highest industry standards and has often received prestigious industry awards such as Tanker Operator of the year etc.
                </p>
                <p>
                    He has headed the Kuwait delegation at the IMO MEPC meeting in London and represented Kuwait at COP 23 – Shipping Initiative in Bonn, Germany.
                </p>
                <p>
                    After a very successful 30 years career at KOTC, Jamil Al Ali is appointed as Head of Regional Commercial & Business Development for the Middle East Region within the Marine and Offshore Division of Bureau Veritas.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Gireesh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Gireesh M Menon</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Managing Director Aries Marine & Engg.
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Gireesh M Menon is the Managing Director of Aries Group of companies. Headquartered in Sharjah, the company established in 1998, now operates in 17 countries around the world. With interests in diversified fields like oil & gas, Shipping, event management, 3D animation, studios, theatres and film production, the group now has 57 companies in its portfolio. Mr. Menon is a Naval Architect by profession and has a degree in Naval Architecture from Cochin university, Masters in marine technology from Newcastle university, and also is an MBA Degree holder.
                </p>
                <p>
                    He is presently pursuing his doctorate in Naval Architecture and heads the design and Engineering division in Aries Group. He has been at the forefront of many innovative designs, consultancy works and organizing events undertaken throughout his 21-year tenure with Aries Group. Leading a team of over 400 engineering personnel, he has been instrumental in establishing Aries marine as one of the leading Engineering and design consultancy firm in the world, with expertise in a wide range of activities including Offshore Engineering, Naval Architecture, Surveys, Auditing, 3D scanning, Drone inspections, Subsea Engineering and much more. Under his leadership, the company has been involved in new build designs, retrofits and conversions of a wide variety of ship types including tankers, Cable ships, LNG ships, Rigs, offshore platforms and many more.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Dheeraj-Sharma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Capt. Dheeraj Sharma</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Director Business Development ABS Dubai (ME & Africa)
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Capt. Dheeraj Sharma is the Director of Business Development for ABS, for the Middle East and Africa and is based in Dubai.
                </p>
                <p>
                    Dheeraj joined ABS in early 2022. Prior to this, Dheeraj spent almost a decade at the United Arab Chemical Carriers (UACC) as their General Manger/Owners Representative at their head office in Dubai overseeing the daily running of the 26 tankers and office teams in Singapore, Mumbai & Hongkong. Before coming ashore, he sailed for 17 years with NOL Singapore, Kuwait Oil Tankers (KOTC) and World-Wide Shipping as Master on Shell & BP-chartered vessels.
                </p>
                <p>
                    Dheeraj is qualified Master Mariner from the UK Maritime & Coastguard Agency, holds an MBA in Oil and Gas Management and is a Member of the Institute of Chartered Shipbrokers, London. Having worked for shipowners, managers and oil majors in marine operations, safety, commercial and new building departments, Dheeraj brings a wealth of commercial shipping experience and an owner's perspective with him.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Ramee-Rashid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Ramee Rashid</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Owner & Director Seamaster Maritime
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Ramee is a very dedicated and had working maritime professional who started his journey in the maritime industry in 2009 serving a large FSO conversion project in the Dubai dry-docks. He joined Seamaster Maritime L.L.C. in 2010, learning the ins and outs of the maritime industry, rapidly gained knowledge and helped expand the group by opening the office in Sohar – Oman, making it the first office outside of the UAE. With the experiences gained, he took over the reins of the family group in 2018, and has since then continuously improved and elevated the company’s profile and international recognition. Investments in the company is still at the forefront, with the current aim to digitalize the company with new systems and work methods, bringing it into a new age.
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Jaideep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Jaideep Vohra</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Fleet Performance and Drydocking Director
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Jaideep Vohra began his sailing career as a Junior Engineer
                    on board tankers and OBO vessels, having completed his Marine
                    Engineering at DMET/MERI. He stepped ashore after gaining
                    valuable technical expertise over his 15-year sailing career, the
                    last five of which were as a Chief Engineer with Maersk Tankers.
                    In 2008, he joined Mideast as a Technical Superintendent,
                    responsible for VLCC operations. His exceptional performance
                    led to his appointment as Assistant Fleet Manager in 2014,
                    overseeing VLCCs, RORO vessels, and Bulk Carriers. Jaideep then
                    became Fleet Manager in 2019, managing a mixed fleet of Product
                    Tankers, RORO vessels, and Bulk Carriers. In 2021, he moved over
                    to the Fleet Performance Department, overseeing the vessels'
                    digitalization journey with a focus on monitoring and optimizing
                    the fleet's performance. He currently holds the position of the
                    Director, Fleet Performance and Drydocking.
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Veronika" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Veronika Aspelund</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Vice President – Mooring solutions, Wilhelmsen Ships Service
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    With 19 years of experience in shipping, Veronika began her journey at Norwegian ropes manufacturer Timm in 2004
                    , where she gained industrial-related skills ranging from sales, marketing, operations, and business development.
                </p>
                <p>
                    When Wilhelmsen acquired Timm in 2015, she was put in charge of managing the mooring ropes product portfolio.
                    As Vice President - Mooring solutions for Wilhelmsen Ships Service, Veronika is instrumental in the ongoing
                    development of safer and sustainable rope solutions. An epitome of which is the Snap Back Arrestor – the first
                    verified and tested solution in the market that reduces the danger of snapback – developed with expert stakeholders
                    such as in-house R&D, vessel owners, terminals, and international organizations.
                </p>
                <p>
                    Veronika has rich experience and skills in the industry and is a board member in Eurocord, European Association
                    of Rope, Twine and Netting manufacturers, their suppliers and affiliate industries.
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Natalie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Natalie Jensen</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Partner, Ince & Co
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Natalie is a Partner at Ince & Co Middle East’s Dubai office. Her practice focuses on contentious and
                    non-contentious matters in the shipping, international trade and energy sectors.
                </p>
                <p>
                    Natalie advises a broad range of clients including shipowners, charterers, cargo interests, P&I clubs
                    and insurers in connection with disputes arising out of charterparties, bills of lading, contracts of
                    affreightment, and other contracts of carriage, as well as disputes arising out of collisions and allisions.
                    In addition, Natalie advises clients on transactional commercial matters relating to international transport
                    and trade.
                </p>
                <p>
                    Natalie is experienced in working with lawyers in other jurisdictions and in coordinating multi-jurisdictional
                    proceedings on a client’s behalf. She has a wide experience of commercial litigation in both the English
                    High Court, UAE Courts and DIFC and London maritime arbitration centers.
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Xanthos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Xanthos Kyriacou</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Regional Managing Director, Columbia Shipmanagement
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Xanthos joined Columbia Shipmanagement Cyprus in 2000 and held various positions prior to his
                    appointment as Columbia Group Regional Managing Director.
                </p>
                <p>
                    Born in Limassol, Cyprus, he holds a BBA degree in Accounting from the City University of
                    New York and also holds an MSc degree in International Shipping from Plymouth University, UK.
                </p>
                <p>
                    He is a Fellow of the Institute of Chartered Shipbrokers.
                </p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Sarah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Sarah Al Qahtani</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Chartering Manager (Commercial & Operations), Bahri Dry Bulk
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Sarah Al Qahtani is an alumna of the American University of Sharjah, where she majored in
                    International Relations. Her career in the maritime industry took flight when she joined the
                    Graduate Development Talents Program at Bahri, Dubai. Therein, she assumed the role of
                    Operations Analyst at Bahri Dry Bulk. Thereafter, Sarah advanced to the Operations
                    Management of Bulkcarriers, managing the day-to-day operations including voyage planning
                    and optimization. Sarah’s outstanding performance led her to assume the role of Chartering
                    Manager in 2023. In this capacity, she shoulders the responsibility of the commercial
                    employment of Bulkcarriers and involves in several strategic projects. Sarah engages fully in
                    Bahri Dry Bulk's digitalization plan, as part of Bahri's Data Orchestration Project. Her focus
                    lies in planning innovative and automated dashboards on Business Performance, Voyage
                    Optimization, and market intelligence. Finally, Sarah's knowledge extends to Shipping
                    Economics & Investment, Supply Chain logistics, finance, and risk management.
                </p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Nikolaos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Nikolaos Michas</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Global Tanker Segment Director, Lloyds Register
                </h6>
            </div>
            <div class="modal-body text-justify">
                <p>
                    Nikolaos Michas currently has the role of Global Tanker Segment Director for Lloyds
                    Register based in Dubai since June of 2022.Before joining LR, he was working for another
                    classification society for a period of 16 years. The last five years he
                    was based in Greece with the role of Southeastern Europe and Middle East Regional Tanker
                    Segment Director, he was also responsible for the management of Key Accounts and business
                    development in the region.
                    He has also worked for the same Classification society in China for a period of 11 years
                    at different Technical and management roles. As a surveyor and site manager for a variety
                    of newbuilding projects. Later as District Manager in north of China responsible for all
                    operations at the district. In his last three years, he was based in Nanjing as QHSE & production
                    Manager for central China having overview of newbuilding projects at over 20 shipyards.

                </p>
                <p>
                    At the beginning of his career, he worked as sea-going engineer and later as superintendent Engineer in shipping companies in Greece.
                    He holds a master’s degree of engineering for marine engineering and naval architecture from University
                    of Newcastle upon Tyne and a master’s degree in Business Administration from the University of Hertfordshire.
                </p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Jayakumar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Dr. Jayakumar</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Chief Executive Officer and Director
                    Vizhinjam International Seaport Limited
                    (A Government of Kerala Undertaking)
                    Thiruvananthapuram, India
                </h6>
                <!-- <p>
                    Email: <a href="mailto:ceo@vizhinjamport.in">ceo@vizhinjamport.in</a><br>
                    <a href="mailto: dr.jekkoo@gmail.com"> dr.jekkoo@gmail.com</a>
                </p>
                <p>
                    Mobile: <a href="tel:+91 9943 444 999">+91 9943 444 999</a>
                </p> -->
            </div>
            <div class="modal-body text-justify">
                <p>
                    Dr. Jayakumar is the Chief Executive Officer of Vizhinjam International Seaport Limited (VISL)
                    developing India’s deep-water container transshipment port at Vizhinjam in Thiruvananthapuram,
                    India. Jayakumar has been instrumental in the conceptualization, planning, design and construction
                    of the port, which is slated for commissioning in 2024.

                </p>
                <p>
                    A Graduate in Civil Engineering, Jayakumar acquired a Master’s Degree and PhD both in Ocean Engineering
                    from IIT, Madras. Jayakumar is the Principal Investigator for the upcoming floating wave power plant off
                    Vizhinjam coast being implemented by IIT Madras, ANERT and Oscilla Power Incorporated, USA. He was involved
                    in the design, construction, and installation of India’s pilot wave power plant off Vizhinjam, which was
                    successfully implemented by IIT Madras in 1990.
                </p>
                <p>
                    Starting his career in Kerala Harbour Engineering Department, Jayakumar was appointed Special Private
                    Secretary to Minister for Ports, GoK in 2001 considering his qualifications and experience in the ports
                    and maritime sector. He had a brief stint as Managing Director of the Kerala State Maritime Development
                    Corporation, involved in dredging activities.
                </p>
                <p>
                    Dr Jayakumar was the Adviser (Technical) and Port Development Manager in Westports Malaysia where he headed
                    several projects including the container transhipment terminal and formulated proposals to develop ports in
                    Myanmar, Cambodia, and India.
                </p>
                <p>
                    Jayakumar was selected by the US Department of Commerce in 2015 for the Special American Business Internship
                    Training in Port Development for Asian Port Experts. Recipient of several awards, Jayakumar has to his credit,
                    numerous technical papers in national and international journals and conferences. Dr. Jayakumar has been conferred
                    ‘Outstanding Engineering Personality’ by the Institution of Engineers (India).
                </p>
                <p>
                    Currently, his interests are also into renewable energy from sources like floating solar, ocean waves, offshore wind
                    (fixed and floating power plants) and production of green hydrogen at Vizhinjam.
                </p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="xaj-Kitherian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">X A J Kitherian </h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Founder & CEO , Entoss Technologies
                </h6>

            </div>
            <div class="modal-body text-justify">
                <p>
                    An entrepreneur par excellence with 2 two decades of experience in IT and business
                    process automation. Erstwhile, worked with Hewlett-Packard across myriad divisions in
                    the UK, India, the US, and Indonesia. A pedantic Systems Engineer and Solution Architect that can fine-tune the most complex.
                    Automation business processes to simplify everyday operations.
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="Nooshin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h5 style="color: black;font-family: 'Ubuntu', sans-serif;" class="modal-title" id="exampleModalLabel">Nooshin Rahmani</h5>
                <h6 style="color: black;font-family: 'Ubuntu', sans-serif;">
                    Partner, Ruby Maritime
                </h6>

            </div>
            <div class="modal-body text-justify">
                <p>
                    Nooshin Rahmani is the Managing Director of Ruby International Maritime and Legal Consultancy. She is a highly
                    accomplished lawyer with over a decade of experience and an exemplary track record of delivering excellence, working
                    with clients within the maritime, shipping, and energy industries. Nooshin has extensive experience in handling complex
                    disputes and advises a broad variety of national and international clients, including government and private sectors.
                    She provides broad global counsel to energy leaders and successfully led negotiations and drafting of suppliers and
                    strategic partnership agreements, including agreements between international private individuals and government entities.
                    She possesses wide knowledge in diverse legal domains, including legal and business consultancy for maritime and energy
                    projects, commercial agreements, banking issues, corporate investment, and financial consulting. Her main expertise is in
                    ship financing and investment in energy projects.<br>
                    Nooshin often participates in webinars, conferences, and publications, showcasing her expertise in legal, dispute resolution,
                    business advisory, and key issues on enforcement of contracts.
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->