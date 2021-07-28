@extends('layouts.page')
@section('title','How it works')
@section('page','career')
@section('content')

<div class="inner-hero-area bg-gradient">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="inner-hero-text">
            <h1 class="title">How it works</h1>
            <p>and what Logokopen is all about </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="landing-7 position-relative">
  <div class="content-section">
    <div class="container">
      <div class="row ">
        <div class="col-lg-6 mb--30 mb--md-0 order-lg-2">
          <div class="content-image aos-init aos-animate" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200" data-aos-once="true">
            <img src="{{ asset('/assets/image/png/l7-mobile.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-9 order-lg-1">
          <div class="content-text">
            <h2 class="title">Fits everything on <br class="d-none d-sm-block d-md-none d-xl-block"> all your devices.</h2>
              <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
              <div class="content-widget">
                <div class="single-widget">
                  <h3 class="w-title">Find your trip partner</h3>
                  <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                </div>
                <div class="single-widget">
                  <h3 class="w-title">Plan trip with easy steps</h3>
                  <p>With lots of unique blocks, you can easily build a page without coding. Build your next landing page quickly.</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="content-section-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb--30 mb--md-0">
          <div class="content-image-2 content-image-group">
            <div class="single-image">
              <img src="{{ asset('/assets/image/png/l7-content2-image-1.png') }}" alt="" data-aos="zoom-in" data-aos-duration="500" data-aos-once="true">
              <img src="{{ asset('/assets/image/png/l7-content2-image-2.png') }}" alt="" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="600" data-aos-once="true">
            </div>
            <div class="single-image">
              <img src="{{ asset('/assets/image/png/l7-content2-image-3.png') }}" alt="" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="1000" data-aos-once="true">
              <img src="{{ asset('/assets/image/png/l7-content2-image-4.png') }}" alt="" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="1500" data-aos-once="true">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-9 ">
          <div class="content-text">
            <h2 class="title">See the world & <br class="d-none d-sm-block d-md-none d-xl-block">spend less always.</h2>
              <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

@stop