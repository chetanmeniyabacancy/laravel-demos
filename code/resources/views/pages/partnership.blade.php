@extends('layouts.default')
@section('content')

<!-- Who We Are Section -->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Services Block Two -->
        <div class="services-block-two">
            <div class="inner-box">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h2>Partner with Us</h2>                            
                            <div class="text">HumanOne is a supplier of software engineering and digital consulting services, delivering solutions to Fortune 500 companies and helping leading technology innovators build products in a variety of domains. HumanOne is looking for partners to create a solid global network for our organization. We are eager to collaborate with a partner whose existing network can bring new revenue for HumanOne business and maximize accounts’ growth. Explore our partnership opportunities, and let’s grow faster together.
                            </div>
                        </div>
                        <br>
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
<!-- End Who We Are -->


@include('pages.contact_form')

@stop