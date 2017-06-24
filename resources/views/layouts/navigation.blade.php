<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
        <!-- Body content -->
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}">{{ Html::image('img/logo.png') }}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::guest())
              <div class="button navbar-right">
                  <button class="navbar-btn nav-button wow bounceInRight login"><a class="navi" data-wow-delay="0.8s" href="{{ url('login') }}">Login</a></button>
                  <button class="navbar-btn nav-button wow fadeInRight"><a class="navi" data-wow-delay="0.6s" href="{{ url('register') }}">Registriraj se</a></button>
              </div>
              @else
                <div class="button navbar-right">
                  <button class="navbar-btn nav-button wow bounceInRight login" ><a class="navi" href="{{ url('logout') }}" data-wow-delay="0.8s">Logout, {{ Auth::user()->name }}</a></button>
                </div>
              @endif
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="{{ url('/about') }}">O nama</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="{{ url('/contact') }}">Kontakt</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>