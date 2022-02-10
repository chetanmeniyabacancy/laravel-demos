<!-- Contact Page Section -->
<section class="services-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Contact Form -->
                    <div class="contact-form">

                        <!-- Title Box -->
                        <div class="title-box">
                            <h2>{{trans('contact.leave-a-reply')}}</h2>
                            <div class="title">{{trans('contact.contact-info-message')}}</div>
                        </div>

                        <!--Contact Form-->
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="username" placeholder="{{trans('contact.name')}}*" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="email" name="email" placeholder="{{trans('contact.email')}}*" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="phone" placeholder="{{trans('contact.phone')}}*" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="darma" name="message" placeholder="{{trans('contact.type-your-message')}} *"></textarea>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form">{{trans('contact.send-now')}} <span class="icon flaticon-next-3"></span></button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--End Contact Form -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Page Section -->