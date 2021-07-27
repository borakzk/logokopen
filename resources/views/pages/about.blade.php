@extends('layouts.page')
@section('title','About us')
@section('page','about')
@section('content')
<div class="inner-hero-area bg-gradient">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="inner-hero-text">
            <h1 class="title">About us</h1>
            <p>Create custom landing pages with Omega that converts more visitors than any website. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content-area">
    <div class="container">
      <div class="section-title pb-lg--40 ">
        <h2 class="title">Our mission is to make your life easier.</h2>
        <div class="right-side">
          <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding. Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
        </div>
      </div>
      <div class="row mt--40 space-db--30">
        <div class="col-lg-4 col-md-5 mb--30">
          <div class="content-img">
            <img src="{{ asset('/assets/image/png/easy-image-2-1.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-8 col-md-7 mb--30">
          <div class="content-img">
            <img src="{{ asset('/assets/image/png/easy-image-2-2.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Area -->
  <div class="team-area pb-md--45">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="section-title">
            <h2 class="title">Meet the team</h2>
            <p>Create custom landing pages with Omega that converts more visitors than any website. </p>
          </div>
        </div>
      </div>
      <div class="row mt-lg--30">
        <div class="col-lg-4 mb--75">
          <div class="team-widget">
            <div class="widget-image">
              <img src="{{ asset('/assets/image/png/about-team-1.png') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Louise Elliott</h3>
              <span class="subtitle">Founder and CEO</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb--75">
          <div class="team-widget">
            <div class="widget-image">
              <img src="{{ asset('/assets/image/png/about-team-3.png') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Trevor Fleming</h3>
              <span class="subtitle">CTO</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb--75">
          <div class="team-widget">
            <div class="widget-image">
              <img src="{{ asset('/assets/image/png/about-team-4.png') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Raymond Baker</h3>
              <span class="subtitle">Software Engineer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb--75">
          <div class="team-widget">
            <div class="widget-image">
              <img src="{{ asset('/assets/image/png/about-team-5.png') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">George Torres</h3>
              <span class="subtitle">UX Designer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb--75">
          <div class="team-widget">
            <div class="widget-image">
              <img src="{{ asset('/assets/image/png/about-team-6.png') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Daisy Ferguson</h3>
              <span class="subtitle">Content Writer</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb--75">
          <div class="team-widget">
            <div class="widget-image">
              <img src="{{ asset('/assets/image/png/about-team-2.png') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Todd Summers</h3>
              <span class="subtitle">Digital Marketer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CTA section -->
  <div class="cta-section section-padding">
    <div class="shape-1" data-aos="fade-right" data-aos-duration="400" data-aos-once="true">
      <img src="{{ asset('/assets/image/png/l1-cta-oval.png') }}" alt="">
    </div>
    <div class="shape-2">
      <img src="{{ asset('/assets/image/svg/l1-curve-cta.svg') }}" alt="">
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-xl-6">
          <div class="section-title text-center" data-aos="zoom-out" data-aos-duration="500" data-aos-once="true">
            <h2 class="title">Want to join?</h2>
            <p>Are you interested to join our team? Check out our job openings and apply on your suitable role.</p>
            <div class="cta-btn">
              <a class="btn hvr-bounce-to-left" href="#">Check Job Openings</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer section -->
@stop