
<!--Header-Upper-->
<div class="header-upper">
    <div class="auto-container">
        <div class="clearfix">

            <div class="pull-left logo-outer">
                <div class="logo"><a href="home"><img src="{{URL::asset('images/logo.png')}}" alt="" title=""></a></div>
            </div>

            <div class="pull-right upper-right clearfix">
                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">{{trans('menu.services')}}</a>
                                    <ul>
                                        <li><a href="teams">{{trans('menu.teams')}}</a></li>
                                        <li><a href="operations">{{trans('menu.operations')}}</a></li>
                                        <li><a href="engineering">{{trans('menu.engineering')}}</a></li>
                                        <li><a href="digital-consulting">{{trans('menu.consulting')}}</a></li>
                                        <li><a href="advanced-technology">{{trans('menu.technology')}}</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">{{trans('menu.expertise')}}</a>
                                    <ul>
                                        <li><a href="internet-of-things">{{trans('menu.internet-of-things')}}</a></li>
                                        <li><a href="ui-ux-design">{{trans('menu.ui-ux-design')}}</a></li>
                                        <li><a href="platform-development">{{trans('menu.platform-development')}}</a></li>
                                        <li><a href="machine-learning-and-IA">{{trans('menu.machine-learning-ia')}}</a></li>
                                        <li><a href="location-based-services">{{trans('menu.location-based-services')}}</a></li>
                                        <li><a href="cloud-development-services">{{trans('menu.cloud-development-services')}}</a></li>
                                        <li><a href="cloud-consulting-services">{{trans('menu.cloud-consulting-services')}}</a></li>
                                        <li><a href="devops">{{trans('menu.devops')}}</a></li>
                                        <li><a href="cybersecurity">{{trans('menu.cybersecurity')}}</a></li>
                                        <li><a href="big-data-analytics">{{trans('menu.big-data-analytics')}}</a></li>
                                        <li><a href="blockchain">{{trans('menu.blockchain')}}</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">{{trans('menu.company')}}</a>
                                    <ul>
                                        <li><a href="who-we-are">{{trans('menu.who-we-are')}}</a></li>
                                        <li><a href="technology-office">{{trans('menu.technology-office')}}</a></li>
                                        <li><a href="partnership">{{trans('menu.partnership')}}</a></li>
                                    </ul>
                                <li><a class="get-in-touch-open" href="#">{{trans('menu.get-in-touch')}}</a></li>
                            </ul>
                        </div>

                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="{{trans('other.search-here')}}" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Language-->
                        <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="text-uppercase">{{ $current_language }}</span> <span class="icon fa fa-caret-down"></span></a>
                            <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                @foreach($languages as $language => $name)
                                <li>
                                    <a href="{{ route('lang.switch', $language) }}">
                                        {{ trans('language.'.$language.'_name') }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--<div class="nav-btn"><span class="icon flaticon-menu"></span></div>-->
                        <div class="contact-quick nav-btn" style="display: block;"><img src="images/icons/contact.svg" alt="" style="width: 33px;margin-top: -16px;"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--End Header Upper-->