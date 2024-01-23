<?php include('header.php'); ?>

<!--Page Title-->
<section class="page-title shado" style="background-image:url(pics/banner/newBanner-delegate.jpg);background-position: center;">
    <div class="auto-container">
        <h1>Event Schedule</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="./">Home</a></li>
            <li>Event Schedule</li>
        </ul>
        <p style="color: white;"><?php echo $evt_date ?> <br> 09:00 AM - 05:00 PM</p>
        <p style="color: white;"><span style="color: #faaC1D; margin-right: 5px;" class="icon fa fa-map-marker-alt"></span><?php echo $evt_loc ?></p>
        <!-- <ul>
      <li style="font-weight:600;font-size: 25px;">
        <span class="icon fa fa-map-marker-alt"></span>THE ADDRESS MARINA HOTEL,DUBAI
      </li>
    </ul> -->
    </div>
</section>
<!--End Page Title-->


<!-- schedule Section -->
<section class="schedule-section" id="agenda">
    <div class="anim-icons">
        <span class="icon icon-circle-4 wow zoomIn"></span>
        <span class="icon icon-circle-3 wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">About Conference</span>
            <h2>Event Schedule</h2>
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
                                        09:00 AM <br />
                                        09:30 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)">Registration with Networking Tea & Refreshments</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div> -->
                                    <!-- <div class="btn-box">
                                        <a href="javascript:void(0)" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        09:30 AM <br />
                                        09:40 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">DUMMY CONTENT</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Inauguration Ceremony</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div> -->
                                    <!-- <div class="btn-box">
                                        <a href="#" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        09:40 AM <br />
                                        09:50 AM
                                    </div>
                                    <!--   -->
                                    <div style="color: black;" class="text">
                                        <h4> <b>Keynote Address</b></h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="pics/speakers/hessa-almalek.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">H.E Eng Hessa Ahmed Hamdan Almalek</h5>
                                        <span class="designation">
                                            Executive Advisor to Minister for Maritime Transport Affairs,
                                            UAE Ministry of Energy and Infrastructure
                                        </span>
                                    </div>
                                    <!-- <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Keynote Address</a>
                                    </h4> -->
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div> -->
                                    <!-- <div class="btn-box">
                                        <a href="javascript:void(0)" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>


                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        09:50 AM <br />
                                        10:00 AM
                                    </div>
                                    <!--   -->
                                    <div style="color: black;" class="text">
                                        <h4> <b> Presidential Address </b></h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/sir.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Sir Sohan Roy
                                        </h5>
                                        <span class="designation">
                                            President, International Maritime Club<br> Founder Chairman & CEO, Aries Group
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <h5 style="text-align: center;color: red;font-family: Ubuntu;font-weight: 600;" class="mb-3">
                            Conference 1st Session
                        </h5>

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10:00 AM<br />
                                        11:00 AM
                                    </div>
                                    <!--   -->
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"><b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            CHARTING A GREENER COURSE: UAE'S MARITIME EXCELLENCE IN SUSTAINABLE SHIPPING SOLUTIONS
                                        </h4>

                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/effat-MOSTAFA.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Moderator: Dr. Effat Moustafa
                                        </h5>
                                        <span class="designation">General Manager & Founder, Seascope MENA</span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/hanan-ekhzaimy.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Hanan Ekhzaimy
                                        </h5>
                                        <span class="designation">
                                            Head of the Marine Competitiveness & Quality, Marine Transport Affairs Dept.
                                            , UAE Ministry of Energy and Infrastructure
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/hamad-al.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Hamad Al Maghrabi
                                        </h5>
                                        <span class="designation">
                                            CEO - OFCO - Abu Dhabi Ports
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/capt-mohammad-al-ali.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Capt. Mohamed Al Ali
                                        </h5>
                                        <span class="designation">
                                            SVP offshore, ADNOC L&S
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/Capt-Saif-Al-Mheiri.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Capt. Saif Al Mheiri
                                        </h5>
                                        <span class="designation">
                                            Managing Director, Abu Dhabi Maritime
                                        </span>
                                    </div>



                                </div>
                            </div>
                        </div>


                        <!-- schedule Block try -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        11:00 AM
                                        <br />
                                        11:30 AM
                                    </div>
                                    <!--   -->
                                    <!-- <div style="color: black;" class="text">
                                        <h6> <b> Topic :</b></h6>
                                        CHARTING A GREE style="color: darkblue;"NER COURSE: UAE'S MARITIME EXCELLENCE IN SUSTAINABLE SHIPPING SOLUTIONS
                                    </div> -->
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" />
                                        </figure>
                                        <h4>
                                            LEADERSHIP INSIGHTS :<br> Session with Mr. Emanuele Grimaldi
                                        </h4>
                                        <span class="designation">
                                            President & MD, Grimaldi Group ; Chairman of the Board of the
                                            International Chamber of Shipping
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- schedule Block try -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        11:30 AM
                                        <br />
                                        11:50 AM
                                    </div>
                                    <!--   -->
                                    <!-- <div style="color: black;" class="text">
                                        <h6> <b> Topic :</b></h6>
                                        CHARTING A GREE style="color: darkblue;"NER COURSE: UAE'S MARITIME EXCELLENCE IN SUSTAINABLE SHIPPING SOLUTIONS
                                    </div> -->
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <!-- <figure class="thumb">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" />
                                        </figure> -->
                                        <h4>
                                            <a href="javascript:void(0)" style="cursor: initial;">
                                                Tea & Snacks Networking Break
                                            </a>
                                        </h4>
                                        <!-- <span class="designation">
                                            President & MD, Grimaldi Group ; Chairman of the Board of the
                                            International Chamber of Shipping
                                        </span> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <h5 style="text-align: center;color: red;font-family: Ubuntu;font-weight: 600;" class="mb-3">Conference 2nd Session</h5>

                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        11:50 AM <br />
                                        12:50 PM
                                    </div>
                                    <!--   -->
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            TECHNOLOGY TRANSFORMING THE MARITIME INDUSTRY – THE NOW & THE FUTURE
                                        </h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/Sarah.webp" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            MODERATOR: Sarah Al Qahthani
                                        </h5>
                                        <span class="designation">Chartering Manager (Commercial & Operations), BAHRI</span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/Christopher-Kirton.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Christopher Kirton
                                        </h5>
                                        <span class="designation">
                                            Managing Director, ITM (V.GROUP)
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/gireesh-menon.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Gireesh Menon
                                        </h5>
                                        <span class="designation">
                                            Managing Director, Aries Energy
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/nooshin-rahmani.png" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Nooshin Rahmani
                                        </h5>
                                        <span class="designation">
                                            Partner, Ruby Maritime
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/nabil.webp" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Nabil Ben Soussia
                                        </h5>
                                        <span class="designation">
                                            Group CCO, IEC Telecom Group
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/Xanthos.webp" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Xanthos Kyriacou
                                        </h5>
                                        <span class="designation">
                                            Managing Director, Columbia ShipManagement
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        12:50 PM <br />
                                        01:10 PM
                                    </div>
                                    <!--   -->
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"><b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Digital Transformation in Maritime Sector- is it a smooth sailing?
                                        </h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/vivek-seth1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Vivek Seth
                                        </h5>
                                        <span class="designation">
                                            SVP Marine Services, ADNOC L&S
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        01:10 PM <br />
                                        01:15 PM
                                    </div>
                                    <!--   -->

                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>

                                    <!-- <div style="color: black;" class="text">
                                        <h6> <b> Topic :</b></h6>
                                        Digital Transfo style="color: darkblue;"rmation in Maritime Sector- is it a smooth sailing?
                                    </div> -->
                                    <!--   -->
                                    <!-- <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/vivek-seth1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Vivek Seth
                                        </h5>
                                        <span class="designation">
                                            SVP Marine Services, ADNOC L&S
                                        </span>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        01:15 PM<br />
                                        01:35 PM
                                    </div>
                                    <!--   -->
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Navigating the Complexities of the Shipping Regulatory Landscape
                                        </h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Stela Spiraj
                                        </h5>
                                        <span class="designation">
                                            Senior Regulatory Affairs Engineer, American Bureau of Shipping (ABS)
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        01:35 PM <br />
                                        01:40 PM
                                    </div>
                                    <!--   -->

                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>

                                    <!-- <div style="color: black;" class="text">
                                        <h6> <b> Topic :</b></h6>
                                        Digital Transfo style="color: darkblue;"rmation in Maritime Sector- is it a smooth sailing?
                                    </div> -->
                                    <!--   -->
                                    <!-- <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/vivek-seth1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Vivek Seth
                                        </h5>
                                        <span class="designation">
                                            SVP Marine Services, ADNOC L&S
                                        </span>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        01:40 PM <br />
                                        02:40 PM
                                    </div>
                                    <!--   -->

                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Lunch Networking Break</a>
                                    </h4>

                                    <!-- <div style="color: black;" class="text">
                                        <h6> <b> Topic :</b></h6>
                                        Digital Transfo style="color: darkblue;"rmation in Maritime Sector- is it a smooth sailing?
                                    </div> -->
                                    <!--   -->
                                    <!-- <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/vivek-seth1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Vivek Seth
                                        </h5>
                                        <span class="designation">
                                            SVP Marine Services, ADNOC L&S
                                        </span>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <h5 style="text-align: center;color: red;font-family: Ubuntu;font-weight: 600;" class="mb-3">Conference 3rd Session</h5>

                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        02:40 PM <br />
                                        03:00 PM
                                    </div>
                                    <!--   -->

                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            International Code of Safety for Ships Carrying Industrial Personal
                                        </h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Waleed Al Tamimi
                                        </h5>
                                        <span class="designation">
                                            General Manager, TASNEEF
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        03:00 PM <br />
                                        03:05 PM
                                    </div>
                                    <!--   -->

                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>

                                    <!-- <div style="color: black;" class="text">
                                        <h6> <b> Topic :</b></h6>
                                        Digital Transfo style="color: darkblue;"rmation in Maritime Sector- is it a smooth sailing?
                                    </div> -->
                                    <!--   -->
                                    <!-- <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/vivek-seth1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Vivek Seth
                                        </h5>
                                        <span class="designation">
                                            SVP Marine Services, ADNOC L&S
                                        </span>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        03:05 PM <br />
                                        03:25 PM
                                    </div>
                                    <!--   -->

                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Vizhinjam Port & Its Benefits Catering to Middle East
                                        </h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/jayakumar.png" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Dr. Jayakumar
                                        </h5>
                                        <span class="designation">
                                            CEO, Vizhinjam International Seaport Ltd.
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        03:25 PM <br />
                                        03:30 PM
                                    </div>
                                    <!--   -->

                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>

                                    <!-- <div style="color: black;" class="text">
                                        <h6> <b> Topic :</b></h6>
                                        Digital Transfo style="color: darkblue;"rmation in Maritime Sector- is it a smooth sailing?
                                    </div> -->
                                    <!--   -->
                                    <!-- <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/vivek-seth1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Vivek Seth
                                        </h5>
                                        <span class="designation">
                                            SVP Marine Services, ADNOC L&S
                                        </span>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        03:30 PM<br />
                                        03:50 PM
                                    </div>
                                    <!--   -->
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Classification society – Rules , Regulations and Recommendations
                                        </h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/rajeev-p-rao.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Rajeev Rao
                                        </h5>
                                        <span class="designation">
                                            Regional Manager, ME , Africa &EU, IR CLASS
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        03:50 PM<br />
                                        03:55 PM
                                    </div>
                                    <!--   -->

                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>

                                    <!-- <div style="color: black;" class="text">
                                        <h6> <b> Topic :</b></h6>
                                        Digital Transfo style="color: darkblue;"rmation in Maritime Sector- is it a smooth sailing?
                                    </div> -->
                                    <!--   -->
                                    <!-- <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/vivek-seth1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Vivek Seth
                                        </h5>
                                        <span class="designation">
                                            SVP Marine Services, ADNOC L&S
                                        </span>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        04:00 PM<br />
                                        05:00 PM
                                    </div>
                                    <!--   -->

                                    <div style="color: black;" class="text">
                                        <h4 style="border-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            OUTCOME OF COP28: IMPLICATIONS & CHALLENGES FOR THE MARITIME INDUSTRY
                                        </h4>
                                    </div>
                                    <!--   -->
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/abhay-nimbalkar.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            MODERATOR: Capt. Abhay Nimbalkar
                                        </h5>
                                        <span class="designation">
                                            CEO, GreenField Marine
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/jamil-al-ali.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Jamil Al Ali
                                        </h5>
                                        <span class="designation">
                                            ME Regional Commercial & BD Director , Bureau Veritas Marine & Offshore
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/Dheeraj-Sharma.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Dheeraj Sharma
                                        </h5>
                                        <span class="designation">
                                            Regional Director, ME & Africa , ABS
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/speakers/varghese.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Thomas Varghese
                                        </h5>
                                        <span class="designation">
                                            Managing Director, Synergy Mideast Ship Management
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/Natalie.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Natalie Jensen
                                        </h5>
                                        <span class="designation">
                                            Partner, Ince & Co.
                                        </span>
                                    </div>
                                    <div class="speaker-info mb-2">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/Tim-3.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Tim Coffin
                                        </h5>
                                        <span class="designation">
                                            Chief Executive Officer, Tristar Eships
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        05:00 PM<br />
                                        05:15 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">
                                            Speaker Certificates Distribution with Group Photographs
                                        </a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        05:15 PM<br />
                                        05:30 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">
                                            Sponsor's Memento Distribution and 1st Day Conference Closing
                                        </a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

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
                                        09:00 AM <br />
                                        09:30 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-1.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Registration with Networking Tea & Refreshments</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div> -->
                                    <!-- <div class="btn-box">
                                        <a href="javascript:void(0)" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        09:30 AM <br />
                                        09:40 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">DUMMY CONTENT</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Welcome Address & Day 2 Introduction</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <h5 style="text-align: center;color: red;font-family: Ubuntu;font-weight: 600;" class="mb-3">Conference 1st Session</h5>

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        09:40 AM <br />
                                        10:00 AM
                                    </div>
                                    <div style="color: black;" class="text">
                                        <h4 style="border-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Alternative Fuels and ESDs for Tankers
                                        </h4>
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/nikolaos.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Nikolaos Michas

                                        </h5>
                                        <span class="designation">
                                            Global Tanker Segment Director, Lloyds Register
                                        </span>
                                    </div>


                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10:00 AM <br />
                                        10:05 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10:05 AM<br />
                                        10:25 AM
                                    </div>
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Evolving Regulations & Safety of Mooring operations for Vessel Manager and Port authorities
                                        </h4>
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/veronika.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Veronika Aspelund

                                        </h5>
                                        <span class="designation">
                                            Vice President – Mooring solutions, Wilhelmsen Ships Service
                                        </span>
                                    </div>


                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10:25 AM <br />
                                        10:30 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10:30 AM <br />
                                        10:50 AM
                                    </div>
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Becoming the Most Sustainable & Connected Ship Builder in the World
                                        </h4>
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="pics/speakers/willem-moelker.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Willem Moelker

                                        </h5>
                                        <span class="designation">
                                            Sales & Marketing Director , Albwardy Damen
                                        </span>
                                    </div>


                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10:50 AM <br />
                                        10:55 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        10:55 AM<br />
                                        11:30 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Tea Networking Break</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <h5 style="text-align: center;color: red;font-family: Ubuntu;font-weight: 600;" class="mb-3">
                            Conference 2nd Session
                        </h5>

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        11:30 AM<br />
                                        11:50 AM
                                    </div>
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            SME Mobility & Sustainability
                                        </h4>
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="pics/speakers/ramee-rashid.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Ramee Rashid
                                        </h5>
                                        <span class="designation">
                                            Owner & Director, Seamaster Maritime LLC
                                        </span>
                                    </div>


                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        11:50 AM<br />
                                        11:55 AM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        11:55 AM <br />
                                        12:15 PM
                                    </div>
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Digital Platform for End to End Logistics
                                        </h4>
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/xaj-Kitherian.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            X A J Kitherian
                                        </h5>
                                        <span class="designation">
                                            Founder & CEO , Entoss Technologies
                                        </span>
                                    </div>


                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->


                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        12:15 PM<br />
                                        12:20 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        12:20 PM<br />
                                        12:40 PM
                                    </div>
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Lubrication of Marine Engines on the Way to Net Zero
                                        </h4>
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/tobias-giese.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                           Tobias Giese
                                        </h5>
                                        <span class="designation">
                                            Technical Manager, LENOL DMCC
                                        </span>
                                    </div>


                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        12:40 PM<br />
                                        12:45 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        12:45 PM<br />
                                        01:05 PM
                                    </div>
                                    <div style="color: black;" class="text">
                                        <h4 style="margin-bottom: 0px;"> <b> Topic :</b></h4>
                                        <h4 style="color: darkblue;">
                                            Digitalization & Autonomous Shipping
                                        </h4>
                                    </div>
                                    <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Abdulaziz Higgi
                                        </h5>
                                        <span class="designation">
                                            Director, Faizal Higgi & Associates
                                        </span>
                                    </div>


                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        01:05 PM <br />
                                        01:10 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Q & A Session</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        01:10 PM <br />
                                        02:00 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">Lunch Networking</a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <h5 style="text-align: center;color: red;font-family: Ubuntu;font-weight: 600;" class="mb-3">
                            Conference 3rd Session
                        </h5>

                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        02:00 PM<br />
                                        03:00 PM
                                    </div>
                                    <div style="color: black;" class="text">
                                        <h4 style="border-bottom: 0px;"> <b> Panel Discussion:</b></h4>
                                        <h4 style="color: darkblue;">
                                            Future Opportunities & Challenges in Ship financing & Use of Technology in this Space
                                        </h4>
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="pics/2024-speakers/sanjiv.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">
                                            Abdulaziz Higgi
                                        </h5>
                                        <span class="designation">
                                            Director, Faizal Higgi & Associates
                                        </span>
                                    </div> -->


                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        03:00 PM <br />
                                        03:30 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">
                                            Speaker Certificates Distribution with Group Photographs
                                        </a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        03:30 PM<br />
                                        04:00 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">
                                            ShipTek Conference Closing
                                        </a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        05:00 PM <br />
                                        06:00 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">
                                            Award Winners Arrival with Cocktail Networking
                                        </a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        06:00 PM <br />
                                        08:00 PM
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">
                                            ShipTek International Awards 2024 Ceremony
                                        </a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- schedule Block -->
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">
                                        08:00 PM Onwards <br />
                                    </div>
                                    <!-- <div class="speaker-info">
                                        <figure class="thumb">
                                            <img src="images/resource/thumb-2.jpg" alt="" />
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div> -->
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">
                                            Awards Closing Ceremony with Group Photographs
                                        </a>
                                    </h4>
                                    <h4>
                                        <a href="javascript:void(0)" style="cursor: initial;">
                                            Cocktail Networking Celebrations with Dinner
                                        </a>
                                    </h4>
                                    <!-- <div class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmtempor incididunt labore et
                                    </div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end -->


                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
<!--End schedule Section -->


<?php include('footer.php'); ?>