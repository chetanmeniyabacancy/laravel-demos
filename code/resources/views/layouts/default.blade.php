<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>
            <!-- Main Header-->
            <header class="main-header header-style-one">
                @include('includes.header')
            </header>
            <!--End Main Header -->
            @include('includes.consulting')
            @yield('content')
            @include('includes.footer')
        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

        <script src="{{URL::asset('js/jquery.js')}}"></script>
        <script src="{{URL::asset('js/popper.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/app.js')}}"></script>
        <script src="{{URL::asset('js/jquery.fancybox.js')}}"></script>
        <script src="{{URL::asset('js/jquery-ui.js')}}"></script>
        <script src="{{URL::asset('js/owl.js')}}"></script>
        <script src="{{URL::asset('js/appear.js')}}"></script>
        <script src="{{URL::asset('js/wow.js')}}"></script>
        <script src="{{URL::asset('js/element-in-view.js')}}"></script>
        <script src="{{URL::asset('js/paroller.js')}}"></script>
        <script src="{{URL::asset('js/particles.js')}}"></script>
        <script src="{{URL::asset('js/validate.js')}}"></script>
        <script src="{{URL::asset('js/script.js')}}"></script>
    </body>
</html>