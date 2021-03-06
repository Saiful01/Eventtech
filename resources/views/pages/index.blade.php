@extends('layouts.common')



@section('content')
    <!--slider-->
    <section id="home" class="p-0 onepage-slide  single-slide">
        <h2 class="d-none">hidden</h2>
        <div id="rev_slider_19_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="wexim_slider_01"
             data-source="gallery" style="background:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div id="rev_slider_19_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-1" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="images/slide-img1.jpg" data-rotate="0" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/web pic.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgparallax="10" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- Overlay -->
                        <div class="bg-overlay opacity-3 z-index-1"></div>
{{--
                        <!-- layer nr. 1 -->
                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme text-gray"
                             data-x="['left','left','left','left']" data-hoffset="['45','45','20','15']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35','-35','-20']"
                             data-fontsize="['44','44','35','30']"
                             data-lineheight="['44','44','35','30']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             style="z-index: 8; white-space: nowrap; font-family:'Poppins', sans-serif; !important; font-weight: 500;">
                            We are <br> Event Tech
                        </div>
                        <!-- layer nr. 2 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme font-weight-100"
                             data-x="['left','left','left','left']" data-hoffset="['45','45','20','15']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['55','55','55','55']"
                             data-fontsize="['20','20','18','14']"
                             data-lineheight="['25','25','25','25']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']"
                             style="z-index:99; white-space: nowrap;">


                        </div>--}}
                        <!-- layer nr. 3 -->
                        <div class="tp-caption z-index-5"
                             data-x="['left','left','left','left']" data-hoffset="['45','45','20','15']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['135','135','135','135']"
                             data-fontsize="['18','18','18','18']"
                             data-lineheight="['18','18','18','18']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                             data-textAlign="['center','center','center','center']"
                             style="z-index: 7; white-space: nowrap; font-family:'Poppins', sans-serif; !important; font-weight: 100;">
                            <a href="#contact" class="btn btn-gradient btn-rounded btn-large mr-2">Get a Quote</a>

                        </div>

                    </li>


                </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>


    </section>
    <!--slider end-->

    <!--About Start-->
    <section id="about">
        <div class="container">
            <!--About-->
            <div class="row align-items-center wow fadeIn">
                <div class="col-md-6">
                    <div class="title">
                        <h6 class="third-color mb-3">Basic info about componay</h6>
                        <h2>Event Tech is a Bangladesh based IT company, in Jashore, Bangladesh</h2>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <p>Event Tech is a Bangladesh based IT system integration, professional service and software
                        development
                        venture. As a privately owned organization, Event Tech provides software design and development
                        as
                        well as professional services in Application Development (android & IOs), Website Hosting,
                        Digital
                        marketing & IT Event Management. </p>
                </div>
            </div>

            <!--Features-->
            <div class="row">
                <div class="col-md-4 wow fadeInLeft">
                    <div class="feature-box">
                    <span class="item-number gradient-text1">
                        01.
                    </span>
                        <h6 class="mb-4">Website Design</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit
                            amet,
                            consectetur adipiscing.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="feature-box">
                    <span class="item-number gradient-text1">
                        02.
                    </span>
                        <h6 class="mb-4">Application Development (android & IOs)</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit
                            amet,
                            consectetur adipiscing.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <div class="feature-box">
                    <span class="item-number gradient-text1">
                        03.
                    </span>
                        <h6 class="mb-4">Website Hosting</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit
                            amet,
                            consectetur adipiscing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInLeft">
                    <div class="feature-box">
                    <span class="item-number gradient-text1">
                        04.
                    </span>
                        <h6 class="mb-4">Hardware Solution</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit
                            amet,
                            consectetur adipiscing.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp">
                    <div class="feature-box">
                    <span class="item-number gradient-text1">
                        05.
                    </span>
                        <h6 class="mb-4">Digital Marketing</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit
                            amet,
                            consectetur adipiscing.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight">
                    <div class="feature-box">
                    <span class="item-number gradient-text1">
                        06.
                    </span>
                        <h6 class="mb-4">Event Management</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit
                            amet,
                            consectetur adipiscing.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--About End-->


    <!--Portfolio Start-->
    <section id="portfolio" class="cube-portfolio1">
        <div class="container">
            <!--About-->
            <div class="row align-items-center">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="title">
                        <h6 class="third-color mb-3">Latest Work of our company</h6>
                        <h2> Our Portfolio</h2>
                    </div>
                </div>

            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-12">

                    <!--Portfolio Filters-->
                    <div id="js-filters-mosaic-flat" class="cbp-l-filters-button">

                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
                        <span class="text-blue">/</span>
                        <div data-filter=".graphic" class="cbp-filter-item">Mobile Application</div>
                        <span class="text-blue"> / </span>
                        <div data-filter=".web-design" class="cbp-filter-item">Web Application</div>

                    </div>

                    <!--Portfolio Items-->
                    <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">

                        <div class="cbp-item  graphic">
                            <a href="images/protfolio/1.png" class="cbp-caption cbp-lightbox">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images/protfolio/1.png" alt="port-1">
                                </div>
                                <div class="cbp-caption-activeWrap"></div>
                                <div class="cbp-l-caption-alignCenter center-block">
                                    <div class="cbp-l-caption-body">
                                        <div class="plus"></div>
                                        <h5 class="text-white mb-1">Latest Work</h5>
                                        <p class="text-white">See Our Amazing Work</p>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="cbp-item graphic seo marketing">
                            <a href="images/protfolio/2.png" class="cbp-caption cbp-lightbox">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images/protfolio/2.png" alt="port-2">
                                </div>
                                <div class="cbp-caption-activeWrap"></div>
                                <div class="cbp-l-caption-alignCenter center-block">
                                    <div class="cbp-l-caption-body">
                                        <div class="plus"></div>
                                        <h5 class="text-white mb-1">Latest Work</h5>
                                        <p class="text-white">See Our Amazing Work</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item graphic seo marketing">
                            <a href="images/protfolio/3.png" class="cbp-caption cbp-lightbox">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images/protfolio/3.png" alt="port-4">
                                </div>
                                <div class="cbp-caption-activeWrap"></div>
                                <div class="cbp-l-caption-alignCenter center-block">
                                    <div class="cbp-l-caption-body">
                                        <div class="plus"></div>
                                        <h5 class="text-white mb-1">Latest Work</h5>
                                        <p class="text-white">See Our Amazing Work</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item graphic seo marketing">
                            <a href="images/protfolio/4.png" class="cbp-caption cbp-lightbox">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images/protfolio/4.png" alt="port-3">
                                </div>
                                <div class="cbp-caption-activeWrap"></div>
                                <div class="cbp-l-caption-alignCenter center-block">
                                    <div class="cbp-l-caption-body">
                                        <div class="plus"></div>
                                        <h5 class="text-white mb-1">Latest Work</h5>
                                        <p class="text-white">See Our Amazing Work</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design web-design">
                            <a href="images/protfolio/5.png" class="cbp-caption cbp-lightbox">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images/protfolio/5.png" alt="port-5">
                                </div>
                                <div class="cbp-caption-activeWrap"></div>
                                <div class="cbp-l-caption-alignCenter center-block">
                                    <div class="cbp-l-caption-body">
                                        <div class="plus"></div>
                                        <h5 class="text-white mb-1">Latest Work</h5>
                                        <p class="text-white">See Our Amazing Work</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item seo marketing web-design ">
                            <a href="images/protfolio/6.png" class="cbp-caption cbp-lightbox">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images/protfolio/6.png" alt="port-6">
                                </div>
                                <div class="cbp-caption-activeWrap"></div>
                                <div class="cbp-l-caption-alignCenter center-block">
                                    <div class="cbp-l-caption-body">
                                        <div class="plus"></div>
                                        <h5 class="text-white mb-1">Latest Work</h5>
                                        <p class="text-white">See Our Amazing Work</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design seo">
                            <a href="images/protfolio/7.png" class="cbp-caption cbp-lightbox">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images/protfolio/7.png" alt="port-7">
                                </div>
                                <div class="cbp-caption-activeWrap"></div>
                                <div class="cbp-l-caption-alignCenter center-block">
                                    <div class="cbp-l-caption-body">
                                        <div class="plus"></div>
                                        <h5 class="text-white mb-1">Latest Work</h5>
                                        <p class="text-white">See Our Amazing Work</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div id="js-loadMore-mosaic-flat" class="cbp-l-loadMore-bgbutton d-none">
                            <a href="" class="cbp-l-loadMore-link no-transition btn-rounded" rel="nofollow">
                                <span class="cbp-l-loadMore-defaultText no-transition ">Load More</span>
                                <span class="cbp-l-loadMore-loadingText ">Loading...</span>
                                <span class="cbp-l-loadMore-noMoreLoading">Finish</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
    </section>
    <!--Portfolio end-->


{{--    <!--Content Start-->
    <section class="content">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 wow fadeInLeft">
                    <div class="title">
                        <h6 class="third-color mb-3">You can trust us</h6>
                        <h2 class="mb-4">We Can<br>Make Your Design</h2>
                        <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit Vestibulum auctor nunc
                            vitae diam eleifend, in maximus metus sollicitu eleifend in maximus metus sollicitudin.</p>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInRight">
                    <div class="content-image">
                        <img src="http://themesindustry.com/html/wexim-2019/images/phone.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Content End-->--}}

    <!--Testimonial Start-->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row">
                <!--testimonial-->
                <div class="col-md-6 bg-light">
                    <div id="testimonial_slider" class="owl-carousel">
                        <!--testimonial item-->
                        <div class="testimonial-item item">
                            <i class="fa fa-quote-right testimonial-icon gradient-text1"></i>
                            <p class="mb-4"> চমৎকার পরিবেশনা এবং সার্ভিস । সততার সাথে এগিয়ে যান - এই প্রত্যাশা </p>

                            <!--Image-->
                            <div class="testimonial-image">
                                <img src="images/c1.jpg" alt="image">
                            </div>
                            <h5 class="font-weight-500 text-success">Mahiuddin Mamun</h5>
                            <span class="destination"></span>
                        </div>
                        <!--testimonial item-->
                        <div class="testimonial-item item">
                            <i class="fa fa-quote-right testimonial-icon gradient-text1"></i>
                            <p class="mb-4"> গুড় ও সার্ভিস দুটোই অনেক ভালো.... </p>

                            <!--Image-->
                            <div class="testimonial-image">
                                <img src="images/c2.jpg" alt="image">
                            </div>
                            <h5 class="font-weight-500 text-success">Shatarupa Sinha</h5>
                            <span class="destination"></span>
                        </div>
                        <!--testimonial item-->
                        <div class="testimonial-item item">
                            <i class="fa fa-quote-right testimonial-icon gradient-text1"></i>
                            <p class="mb-4"> কেনারহাট শুধু খাঁটি জিনিষ ভোক্তার চাহিদা অনুযায়ী পরিসেবা দেয় না, গাঁছিদের
                                সন্তানের পড়ালেখার জন্য আর্থিক ও উপকরন দিয়ে সহায়তা করে।

                            </p>

                            <!--Image-->
                            <div class="testimonial-image">
                                <img src="images/c3.jpg" alt="image">
                            </div>
                            <h5 class="font-weight-500 text-success">Muazzem H manju</h5>
                            <span class="destination"></span>
                        </div>
                    </div>
                </div>
                <!--counters-->
                <div class="col-md-6 p-0">
                    <!--counter background-->
                    <div class="counters d-flex align-items-center text-left bg-img1">
                        <!--overlay-->
                        <div class="bg-overlay gradient-bg1 opacity-8"></div>
                        <div class="counter-row">
                            <!--counters item-->
                            <div class="counter-item">
                                <div class="count alt-font">6</div>
                                <h6 class="text-white">Products</h6>
                            </div>
                            <!--counters item-->
                            <div class="counter-item">
                                <div class="count alt-font">7</div>
                                <h6 class="text-white">Employees</h6>
                            </div>
                            <!--counters item-->
                            <div class="counter-item">
                                <div class="count alt-font">100</div>
                                <h6 class="text-white">Happy Clients</h6>
                            </div>
                            <!--counters item-->
                            <div class="counter-item">
                                <div class="count alt-font">16</div>
                                <h6 class="text-white">Finished Projects</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial End-->

    <!--App Section-->
    <section>
        <div class="container">
            <!--Heading-->
            <div class="row">
                <div class="col-md-12 text-center wow fadeIn">
                    <div class="title d-inline-block">
                        <h6 class="mb-3"></h6>
                        <h2 class="gradient-text1 mb-3">Digital Finger Print</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <img style="height:600px; width:100%" src="images/img.jpeg" alt="image">
                </div>
                <div class="col-md-6 mx-auto">
                    <img style="height:600px; width:100%" src="images/img1.jpg" alt="image">
                </div>
            </div>

            <!--App deatil-->


        </div>
    </section>
    <!--App Section End-->

    <!--Blog Start-->
    <section id="blog" class="bg-light">
        <div class="container">
            <h1 class="text-center text-danger mb-5">Gallery</h1>

            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2 wow fadeInRight">
                    <!--Blog Content-->
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img style="height:600px; width:100%" src="images/gallery/1.jpg" alt="image">
                    </div>
                </div>
                <div class="col-md-6">
                    <!--Blog Image-->
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img style="height:600px; width:100%" src="images/gallery/6.jpg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2 wow fadeInRight">
                    <!--Blog Content-->
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img style="height:600px; width:100%" src="images/gallery/2.jpg" alt="image">
                    </div>
                </div>
                <div class="col-md-6">
                    <!--Blog Image-->
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img style="height:600px; width:100%" src="images/gallery/3.jpg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2 wow fadeInRight">
                    <!--Blog Content-->
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img style="height:600px; width:100%" src="images/gallery/4.jpg" alt="image">
                    </div>
                </div>
                <div class="col-md-6">
                    <!--Blog Image-->
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img style="height:600px; width:100%" src="images/gallery/5.jpg" alt="image">
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--Blog End-->

    <!--Address Start-->
    <section id="contact" class="p-0">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 p-0">
                    <div class="address-box title mb-0 bg-img4">
                        <!--overlay-->
                        <div class="bg-overlay gradient-bg1 opacity-8"></div>
                        <div class="address-text text-center text-white position-relative wow fadeInUp">
                            <!--title-->
                            <h2 class="mb-4">Eventtech, Bangladesh</h2>
                            <h6>Innovative IT Solution...</h6>
                            <!--Address-->
                            <p class="mb-3 text-white"> Sheikh Hasina Software Technology Park, MTB, L-5, Jashore </p>
                            <!--Phone-->
                            <p class="mb-3 text-white"><br>
                                Mobile : 01880060906 </p>
                            <!--Email-->
                            <p class="mb-3 text-white">mail : eventtechint@gmail.com<br>
                                Inquiries : www.eventtechbd.com</p>
                            <!--Timing-->
                            <p class="mb-3 text-white">Sun-Thur: 9am to 6pm</p>
                            <!--Social Icon-->
                            <div class="address-social">
                                <ul class="list-unstyled">
                                    <li><a class="facebook-text-hvr" href="https://www.facebook.com/eventtechbd/" target="_BLANK"><i
                                                    class="fa fa-facebook"
                                                    aria-hidden="true" ></i></a>
                                    </li>
                                    <li><a class="twitter-text-hvr" href="javascript:void(0);"><i class="fa fa-twitter"
                                                                                                  aria-hidden="true"></i></a>
                                    </li>
                                    <li><a class="google-text-hvr" href="javascript:void(0);"><i
                                                    class="fa fa-google-plus"
                                                    aria-hidden="true"></i></a>
                                    </li>
                                    <li><a class="linkedin-text-hvr" href="javascript:void(0);"><i
                                                    class="fa fa-linkedin"
                                                    aria-hidden="true"></i></a>
                                    </li>
                                    <li><a class="instagram-text-hvr" href="javascript:void(0);"><i
                                                    class="fa fa-instagram"
                                                    aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div id="map" class="half-map bg-img-map">
                        <div class="map-bg">

                            <div class="mapouter">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe width="100%" height="600" id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=sekh%20hasina%20tecnology%20park%2C%20jassore&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe>
                                        <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
                                    <style>.mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 600px;
                                            width: 100%;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 600px;
                                            width: 100%;
                                        }</style>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Address End-->

        <!--Contact Start-->
        <section>
            <div class="container">
                <!--Heading-->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title d-inline-block">
                            <h6 class="mb-3 third-color">Lorem ipsum dolor sit amet</h6>
                            <h2>Let's Get In Touch</h2>
                        </div>
                    </div>
                </div>

                <!--contact us-->
                <form class="contact-form">
                    <div class="row">

                        <div class="col-sm-12" id="result"></div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="First Name:" required=""
                                       id="first_name" name="first_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Last Name:" required=""
                                       id="last_name"
                                       name="last_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email:" required="" id="email"
                                       name="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" id="message"
                                          name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-large btn-gradient btn-rounded mt-4" id="submit_btn"><i
                                        class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i>
                                <span>Contact Now</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--Contact End-->
    </section>

@endsection