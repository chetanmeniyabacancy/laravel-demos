@extends('layouts.default')
@section('content')

<!-- Services Section -->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Services Block Two -->
        <div class="services-block-two">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h2>Cloud Development Services</h2>                            
                            <div class="text">At HumanOne, we leverage our experience working with all major cloud providers -including Amazon Web Services, Microsoft Azure, and Google Cloud Platform- to help organizations accelerate their transformation and get the most from high-performing cloud environments, whether public, private, or hybrid. We provide custom cloud software development services that enable enterprises and streamline the shift to SaaS, PaaS, and IaaS business models.
                            </div>
                        </div>
                        <br>
                        <a href="#" class="theme-btn btn-style-three">Let’s Talk</a>
                    </div>

                    <!-- Image Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
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
<!-- End Services Section -->

<!-- Services Section -->
<section class="services-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Services Block -->
            <div class="services-block col-lg-8 col-md-12 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="text">HumanOne covers the entire spectrum of cloud development capabilities, helping our clients create a holistic strategy, migrate their applications and workloads to virtualized environments or refactor them for more efficient utilization of cloud-native services. Before starting any development or migration, we perform a thorough analysis of your current IT infrastructure, as well as build a clear roadmap to extract the desired level of cost efficiency and ensure that all your business-critical requirements are met.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-locked"></span>
                    </div>
                    <h3><a href="feature.html">Application re-architectering</a></h3>
                    <div class="text">Get better scalability and performance by migrating your applications from a monolithic architecture to a microservices architecture or by exposing their functionality via APIs.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-locked"></span>
                    </div>
                    <h3><a href="feature.html">Cloud discovery and optimization</a></h3>
                    <div class="text">Engage our experts to assess your existing cloud infrastructure, identify over-provisioning or under-utilized resources, and get specific recommendations on how to reduce your overall cloud spend.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-locked"></span>
                    </div>
                    <h3><a href="feature.html">Cloud migration</a></h3>
                    <div class="text">Streamline your transition to the cloud by determining the best migration strategy for your business goals - whether it's IaaS, dockerization of services or a native cloud approach.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-locked"></span>
                    </div>
                    <h3><a href="feature.html">Cloud-native development</a></h3>
                    <div class="text">Unleash the full scalability and flexibility of the cloud by building and running your applications without a server using fully managed services like AWS Lambda or Azure Functions and databases including Amazon DynamoDB and Azure Cosmos DB.</div>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- End Services Section -->

<!-- Services Section -->
<section class="services-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h3>Ready to boost the agility of your IT infrastructure via the Cloud ?</h3>
            <br>
            <a href="#" class="theme-btn btn-style-two">Get in touch</a>
        </div>
    </div>
</section>
<!-- End Services Section -->

<!-- Services Section -->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Services Block Two -->
        <div class="services-block-two">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h2>Partnering for your success</h2>                            
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image paroller" data-paroller-factor="0.1" data-paroller-factor-lg="0.1" data-paroller-factor-md="0.1" data-paroller-factor-sm="0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->

@include('pages.contact_form')

@stop