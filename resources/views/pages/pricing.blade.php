@extends('layouts.page')
@section('title','Pricing')
@section('page','pricing')
@section('content')


<div class="inner-hero-area bg-gradient">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="inner-hero-text">
            <h1 class="title">Pricing</h1>
            <p>Create custom landing pages with Omega that converts more visitors than any website. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pricing-area mb--115 pt--115">
    <div class="container">
      <div class="row text-md-center text-lg-left mb--40">
        <div class="col-lg-7 col-xl-6">
          <div class="section-title">
            <h2>Get the right plan for future product.</h2>
          </div>
        </div>
        <div class="col-lg-5 col-xl-6 d-flex justify-content-center justify-content-lg-end align-items-end">
          <div class="pricing-btns mb--25 mt--20 mt-lg--0" id="pricing-deck-trigger">
            <a href="javascript:" data-active="yearly-active">Yearly</a>
            <a href="javascript:" class="active" data-active="monthly-active">Monthly</a>
          </div>
        </div>
      </div>
      <div class="row justify-content-center monthly-active" id="pricing-card-deck">
        <div class="col-lg-4 col-md-6 col-sm-8 mt--30">
          <div class="pricing-card active">
            <span class="small-title">Starter</span>
            <h1 class="price">Free</h1>
            <ul class="pricing-list">
              <li>1 Website</li>
              <li>5 GB Hosting</li>
              <li>Limited Support</li>
            </ul>
            <div class="pricing-btn">
              <a href="#" class="btn ">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8 mt--30">
          <div class="pricing-card active">
            <span class="small-title">Premium</span>
            <h1 class="price yearly">$79<span class="time">/year</span></h1>
            <h1 class="price monthly">$29<span class="time">/month</span></h1>
            <ul class="pricing-list">
              <li>10 Website</li>
              <li>15 GB Hosting</li>
              <li>Premium Support</li>
            </ul>
            <div class="pricing-btn">
              <a href="#" class="btn ">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8 mt--30">
          <div class="pricing-card active">
            <span class="small-title">Enterprise</span>
            <h1 class="price yearly">$99<span class="time">/year</span></h1>
            <h1 class="price monthly">$49<span class="time">/month</span></h1>
            <ul class="pricing-list">
              <li>Unlimited Website</li>
              <li>50 GB Hosting</li>
              <li>Premium Support</li>
            </ul>
            <div class="pricing-btn">
              <a href="#" class="btn ">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature Area -->
  <div class="feature-area pb--125">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2>Check all of our features </h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--100 mt--60">
          <div class="feature-widget">
            <div class="widget-icon bg-blue">
              <img src="{{ asset('/assets/image/svg/responsive-icon.svg') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Fully Responsive</h3>
              <p>With lots of unique blocks, you can easily build a page without coding.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--100 mt--60">
          <div class="feature-widget">
            <div class="widget-icon bg-red">
              <img src="{{ asset('/assets/image/svg/layout-icon.svg') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Multiple Layouts</h3>
              <p>With lots of unique blocks, you can easily build a page without coding.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--100 mt--60">
          <div class="feature-widget">
            <div class="widget-icon bg-blue">
              <img src="{{ asset('/assets/image/svg/fast-icon.svg') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Faster Loading</h3>
              <p>With lots of unique blocks, you can easily build a page without coding.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--100 mt--60">
          <div class="feature-widget">
            <div class="widget-icon bg-red">
              <img src="{{ asset('/assets/image/svg/messege-icon.svg') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Super Support</h3>
              <p>With lots of unique blocks, you can easily build a page without coding.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--100 mt--60">
          <div class="feature-widget">
            <div class="widget-icon bg-yellow">
              <img src="{{ asset('/assets/image/svg/documents-icon.svg') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Rich Documentation</h3>
              <p>With lots of unique blocks, you can easily build a page without coding.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--100 mt--60">
          <div class="feature-widget">
            <div class="widget-icon bg-blue">
              <img src="{{ asset('/assets/image/svg/loop-icon.svg') }}" alt="">
            </div>
            <div class="widget-text">
              <h3 class="title">Lifetime Updatese</h3>
              <p>With lots of unique blocks, you can easily build a page without coding.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQ section -->
  <div class="faq-section section-padding bg-whisper">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9">
          <div class="section-title text-center">
            <h2 class="title">Frequently<br class="d-none d-sm-block"> Asked  Question</h2>
              <p>Create custom landing pages with Omega that converts.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mt--50">
          <div class="single-faq">
            <h3 class="title">What’s gonna be your question?</h3>
            <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without any design or custom coding. with Omega that converts more visitors than any website.</p>
          </div>
        </div>
        <div class="col-lg-6 mt--50">
          <div class="single-faq">
            <h3 class="title">What’s gonna be your question?</h3>
            <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without any design or custom coding.</p>
          </div>
        </div>
        <div class="col-lg-6 mt--50">
          <div class="single-faq">
            <h3 class="title">What’s gonna be your question?</h3>
            <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without any design or custom coding.</p>
          </div>
        </div>
        <div class="col-lg-6 mt--50">
          <div class="single-faq">
            <h3 class="title">What’s gonna be your question?</h3>
            <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without any design or custom coding.</p>
          </div>
        </div>
        <div class="col-lg-6 mt--50">
          <div class="single-faq">
            <h3 class="title">What’s gonna be your question?</h3>
            <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without any design or custom coding.</p>
          </div>
        </div>
        <div class="col-lg-6 mt--50">
          <div class="single-faq">
            <h3 class="title">What’s gonna be your question?</h3>
            <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without any design or custom coding.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="faq-link">
            <p>Didn’t find your answer? <a href="#">Contact us here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer section -->


@stop