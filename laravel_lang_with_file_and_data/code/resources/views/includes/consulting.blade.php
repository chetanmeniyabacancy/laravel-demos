
<!--Form Back Drop-->
<div class="form-back-drop"></div>

<!--Appointment Box-->
<section class="appointment-box">
    <div class="inner-box">
        <div class="cross-icon"><span class="flaticon-cancel-1"></span></div>
        <div class="title">
            <h2>{{trans('contact.get-appointment')}}</h2>
            <div class="separator"></div>
        </div>

        <!--Appointment Form-->
        <div class="appointment-form">
            <form method="post" action="contact.html">

                <div class="form-group">
                    <input type="text" name="name" value="" placeholder="{{trans('contact.name')}}" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="" placeholder="{{trans('contact.email')}}" required>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" value="" placeholder="{{trans('contact.phone')}}" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="{{trans('contact.message')}}"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="theme-btn btn-style-one">{{trans('contact.submit-now')}}</button>
                </div>

            </form>
        </div>

        <!--Contact Info Box-->
        <div class="contact-info-box">
            <ul class="info-list">
                <li>humanone@yousite.com</li>
                <li>+(000) 000 0000</li>
            </ul>
            <ul class="social-list clearfix">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Linkedin</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google +</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>

    </div>
</section>
<!--End Consulting Form-->