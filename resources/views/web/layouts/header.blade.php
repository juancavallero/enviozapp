<!-- Header
    ============================================= -->
<header id="header" class="medicom-header medical-nav">

    <!-- Top Row
    ============================================= -->
    <div class="solid-row"></div>

    <div class="container">


        <!-- Primary Navigation
        ============================================= -->
        <nav class="navbar navbar-default" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display
            ============================================= -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{route('homeweb')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt=""title="">
                </a>

            </div>


            <div class="collapse navbar-collapse navbar-right" id="primary-nav">

                <ul class="nav navbar-nav">

                    <li class="{{ (Request::is('web/home') ? 'dropdown active' : '') }}">
                        <a href="{{route('homeweb')}}"><i class="fa fa-plus"></i>@lang('home.inicio')</a>
                    </li>

                </ul>

            </div>


        </nav>

    </div>
    <div class="solid-row"></div>
</header>