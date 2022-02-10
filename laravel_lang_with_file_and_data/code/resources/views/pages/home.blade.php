@extends('layouts.default')
@section('content')
<!--Main Banner-->
<section class="main-banner">
    <div class="bg-round-layer"></div>

    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Column-->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow slideInLeft">
                    <!--<h2>Your Digital<br> Marketing Solution</h2>-->
                    <div class="text">{{trans('home.main-content')}}</div>
                    <!--<a href="#" class="theme-btn btn-style-two">Explore Now <span class="icon flaticon-next-3"></span></a>-->
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image paroller" data-paroller-factor="-0.15" data-paroller-factor-lg="-0.15" data-paroller-factor-md="-0.15" data-paroller-factor-sm="-0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">
                        <img src="images/resource/mokeup-1.png" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Main Banner-->


<!-- Content Section -->
<section class="app-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 col-md-12">
                <div class="inner-column">
                    <h2>{{trans('home.who-we-are-title')}}</h2>
                    <div class="text">{{trans('home.who-we-are-content')}}</div>
                    <a href="who-we-are" class="theme-btn btn-style-three">{{trans('home.get-to-know-us')}}<span class="icon flaticon-next-3"></span></a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 col-md-12">
                <div class="inner-column">
                    <h2>{{trans('home.our-promise')}}</h2>
                    <div class="text">{{trans('home.our-promise-content')}}</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Content Section -->

<!-- Services Section -->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>{{trans('home.our-service')}}</h2>
        </div>

        <!-- Services Block Two -->
        <div class="services-block-two">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <div class="service-number">01</div>
                                <span class="icon flaticon-light-bulb"></span>
                            </div>
                            <h3>Ideas</h3>
                            <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain. operational change management inside of workflows to establish a framework. </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="0.1" data-paroller-factor-lg="0.1" data-paroller-factor-md="0.1" data-paroller-factor-sm="0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-1.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Services Block Three -->
        <div class="services-block-three">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="-0.1" data-paroller-factor-lg="-0.1" data-paroller-factor-md="-0.1" data-paroller-factor-sm="-0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-2.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <div class="service-number">02</div>
                                <span class="icon flaticon-big-anchor"></span>
                            </div>
                            <h3>Anlysis</h3>
                            <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely .</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Services Block Two -->
        <div class="services-block-two">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <div class="service-number">03</div>
                                <span class="icon flaticon-multiple-users-silhouette"></span>
                            </div>
                            <h3>Integration</h3>
                            <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximizePodcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the integration.</div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="0.1" data-paroller-factor-lg="0.1" data-paroller-factor-md="0.1" data-paroller-factor-sm="0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-3.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Services Block Three -->
        <div class="services-block-three">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="-0.1" data-paroller-factor-lg="-0.1" data-paroller-factor-md="-0.1" data-paroller-factor-sm="-0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-4.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <div class="service-number">04</div>
                                <span class="icon flaticon-chat-1"></span>
                            </div>
                            <h3>Communication</h3>
                            <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain.operational change management inside of workflows to establish a framework. </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Services Section Two -->


<!-- Our Expertises Section -->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>{{trans('home.our-expertises')}}</h2>
        </div>

        <!-- Services Block Two -->
        <div class="services-block-two">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <div class="service-number">01</div>
                                <span class="icon flaticon-light-bulb"></span>
                            </div>
                            <h3>Ideas</h3>
                            <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain. operational change management inside of workflows to establish a framework. </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="0.1" data-paroller-factor-lg="0.1" data-paroller-factor-md="0.1" data-paroller-factor-sm="0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-1.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Services Block Three -->
        <div class="services-block-three">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="-0.1" data-paroller-factor-lg="-0.1" data-paroller-factor-md="-0.1" data-paroller-factor-sm="-0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-2.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <div class="service-number">02</div>
                                <span class="icon flaticon-big-anchor"></span>
                            </div>
                            <h3>Anlysis</h3>
                            <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely .</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Services Block Two -->
        <div class="services-block-two">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <div class="service-number">03</div>
                                <span class="icon flaticon-multiple-users-silhouette"></span>
                            </div>
                            <h3>Integration</h3>
                            <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximizePodcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the integration.</div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="0.1" data-paroller-factor-lg="0.1" data-paroller-factor-md="0.1" data-paroller-factor-sm="0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-3.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Services Block Three -->
        <div class="services-block-three">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="-0.1" data-paroller-factor-lg="-0.1" data-paroller-factor-md="-0.1" data-paroller-factor-sm="-0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-4.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <div class="service-number">04</div>
                                <span class="icon flaticon-chat-1"></span>
                            </div>
                            <h3>Communication</h3>
                            <div class="text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain.operational change management inside of workflows to establish a framework. </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Our Expertises Section Two -->


<!-- Project setup Section -->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>{{trans('home.project-setup')}}</h2>
        </div>

        <!-- Services Block Two -->
        <div class="services-block-two">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="text">{{trans('home.project-setup-content')}}</div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="0.1" data-paroller-factor-lg="0.1" data-paroller-factor-md="0.1" data-paroller-factor-sm="0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="images/resource/services-1.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Expertises Section Two -->


<!-- Services Section -->
<section class="services-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>{{trans('home.cooperation-process')}}</h2>
        </div>

        <div class="row clearfix">

            <!-- Services Block -->
            <div class="services-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-locked"></span>
                    </div>
                    <h3><a href="#">Safty</a></h3>
                    <div class="text">Efficiently unleash cross-media information without.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-speed-meter"></span>
                    </div>
                    <h3><a href="#">Quick Access</a></h3>
                    <div class="text">Efficiently unleash cross-media information without.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-heart"></span>
                    </div>
                    <h3><a href="#">Easily manage</a></h3>
                    <div class="text">Efficiently unleash cross-media information without.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-like-1"></span>
                    </div>
                    <h3><a href="#">24h Support</a></h3>
                    <div class="text">Efficiently unleash cross-media information without.</div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Services Section -->

<!-- Sponsors Section -->
<section class="sponsors-section">
    <div class="auto-container">
        <!-- Title Box -->
        <div class="title-box">
            <h2>{{trans('home.whats-new')}}</h2>
        </div>

        <div class="carousel-outer">
            <!--Sponsors Slider-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Sponsors Section -->

<!-- Faq Section -->
<section class="faq-section">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>{{trans('home.frequently-asked-question')}}</h2>
        </div>

        <div class="faq-carousel owl-carousel owl-theme">

            <!-- Faq Block -->
            <div class="faq-block">
                <div class="inner-box">
                    <h3>How To Use HumanOne?</h3>
                    <div class="text">
                        <p>Completely synergize resource via premier niche markets. customer service with robust ideas.</p>
                        <p>Dynamically innovate leveling customer service for state of theart customer service.</p>
                    </div>
                </div>
            </div>

            <!-- Faq Block -->
            <div class="faq-block">
                <div class="inner-box">
                    <h3>How Many Facilities <br> in HumanOne?</h3>
                    <div class="text">
                        <p>Completely synergize resource via premier niche markets. customer</p>
                        <p>Dynamically innovate leveling customer service for state of theart customer service.</p>
                    </div>
                </div>
            </div>

            <!-- Faq Block -->
            <div class="faq-block">
                <div class="inner-box">
                    <h3>Client Review <br> of HumanOne?</h3>
                    <div class="text">
                        <p>Completely synergize resource via premier niche markets. customer</p>
                        <p>Dynamically innovate leveling customer service for state of theart customer service.</p>
                    </div>
                </div>
            </div>

            <!-- Faq Block -->
            <div class="faq-block">
                <div class="inner-box">
                    <h3>How To Use HumanOne?</h3>
                    <div class="text">
                        <p>Completely synergize resource via premier niche markets. customer service with robust ideas.</p>
                        <p>Dynamically innovate leveling customer service for state of theart customer service.</p>
                    </div>
                </div>
            </div>

            <!-- Faq Block -->
            <div class="faq-block">
                <div class="inner-box">
                    <h3>How Many Facilities <br> in HumanOne?</h3>
                    <div class="text">
                        <p>Completely synergize resource via premier niche markets. customer</p>
                        <p>Dynamically innovate leveling customer service for state of theart customer service.</p>
                    </div>
                </div>
            </div>

            <!-- Faq Block -->
            <div class="faq-block">
                <div class="inner-box">
                    <h3>Client Review <br> of HumanOne?</h3>
                    <div class="text">
                        <p>Completely synergize resource via premier niche markets. customer</p>
                        <p>Dynamically innovate leveling customer service for state of theart customer service.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Faq Section -->

@include('pages.contact_form')

@stop