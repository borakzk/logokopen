@extends('layouts.page')
@section('title','Contact us')
@section('page','contact')
@section('content')

      <div class="inner-hero-area bg-gradient">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="inner-hero-text">
                <h1 class="title">Get in touch</h1>
                <p>Create custom landing pages with Omega that converts more visitors than any website. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-section pt--40 pb--40 pt-md--120 pb-md--120">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="section-title">
                <h2>We are always open 24/7 for you.</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-xl-5 offset-xl-1 order-lg-2">
              <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                  <div class="contact-widget-block mb--55">
                    <h3 class="title">Call us</h3>
                    <p>+1-492-4918-395</p>
                    <p>+14-394-409-591</p>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                  <div class="contact-widget-block mb--55">
                    <h3 class="title">Email us</h3>
                    <p>info@mail.com</p>
                    <p>support@mail.com</p>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-12">
                  <div class="contact-widget-block mb--55">
                    <h3 class="title">Call us</h3>
                    <p>34 Madison Street,</p>
                    <p>NY, USA 10005</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-1">
              <div class="omega-contact-form" id="#form-messages">
                <form action="https://finestdevs.com/demos/omega/plugins/php/mailer.php">
                  <input type="text" class="form-control" placeholder="Your name" id="name">
                  <input type="text" class="form-control" placeholder="Email address" id="email">
                  <input type="text" class="form-control" placeholder="Subject" id="submit">
                  <textarea placeholder="Write your message" name="message" class="form-control" id="message"></textarea>
                  <button class="btn btn--primary hvr-bounce-to-left">Send Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



@stop