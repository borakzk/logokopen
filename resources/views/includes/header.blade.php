<div class="container-fluid pr-lg--30 pl-lg--30">
    <nav class="navbar site-navbar offcanvas-active navbar-expand-lg navbar-light">
      <!-- Brand Logo-->
      <div class="brand-logo"><a href="{{ url('/') }}"><img src="{{ asset('/assets/image/png/l1-logo.png') }}" alt=""></a></div>
      <div class="collapse navbar-collapse" id="mobile-menu">
        <div class="navbar-nav ml-lg-auto mr--10">
          <ul class="navbar-nav main-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}" role="button" aria-expanded="false">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('how-it-works') }}" role="button" aria-expanded="false">How it works</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pricing') }}" role="button" aria-expanded="false">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact') }}" role="button" aria-expanded="false">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header-btns ml-auto ml-lg-0"><a class="btn btn--primary btn-header hvr-bounce-to-left" href="#">Get Started</a></div>
      <button class="navbar-toggler btn-close-off-canvas" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon icon-simple-remove icon-close"></i>
        <i class="icon icon-menu-34 icon-burger"></i>
      </button>
    </nav>
  </div>