@extends('layouts.default')
@section('title','Home')
@section('content')
          <!-- Hero Area -->
          <div class="hero-area section-padding position-relative">
            <div class="hero-shape position-absolute">
              <img src="{{ asset('/assets/image/svg/hero-shape-svg.svg') }}" alt="">
            </div>
            <div class="container">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-8 col-sm-9 order-lg-2">
                  <div class="hero-img-group">
                    <div class="img-main" data-aos="fade-down" data-aos-duration="500" data-aos-once="true">
                      <img src="{{ asset('/assets/image/png/landing1-hero-phone.png') }}" alt="">
                    </div>
                    <div class="abs-img img-1" data-aos="fade-right" data-aos-duration="400" data-aos-once="true" data-aos-delay="300">
                      <div class="image-card card-blue">
                        <div class="card-icon">
                          <i class="icon icon-check-2"></i>
                        </div>
                        <p>You have successfully logged in</p>
                      </div>
                    </div>
                    <div class="abs-img img-2" data-aos="fade-left" data-aos-duration="400" data-aos-once="true" data-aos-delay="500">
                      <div class="image-card card-yellow">
                        <div class="card-icon">
                          <i class="icon icon-check-2"></i>
                        </div>
                        <p>Appointment with the doctor was successful. Move to next!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                  <div class="hero-content py--50">
                    <h1 class="title">Redesigned,
                      how you build landing page!</h1>
                    <p>Create custom landing pages with Omega that convert more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                    <div class="hero-btn">
                      <a href="#" class="btn--primary hvr-bounce-to-left">Get Started</a>
                      <a href="https://vimeo.com/191947042" class="excerpt video-link" data-fancybox><i class="icon icon-triangle-right-17-2"></i> Watch the intro video</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Clients Brands Area -->
          <div class="brands-area">
            <div class="brand-title-wrapper">
              <div class="container">
                <h3 class="brand-title">Popular teams who use Omega for appoinments </h3>
              </div>
            </div>
            <div class="container">
              <div class="brand-logos">
                <div class="single-brand">
                  <img src="{{ asset('/assets/image/png/l1-brand1.png') }}" alt="">
                </div>
                <div class="single-brand">
                  <img src="{{ asset('/assets/image/png/l1-brand2.png') }}" alt="">
                </div>
                <div class="single-brand">
                  <img src="{{ asset('/assets/image/png/l1-brand3.png') }}" alt="">
                </div>
                <div class="single-brand">
                  <img src="{{ asset('/assets/image/png/l1-brand4.png') }}" alt="">
                </div>
                <div class="single-brand">
                  <img src="{{ asset('/assets/image/png/l1-brand5.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
          <!-- Feature section -->
          <div class="feature-section section-padding">
            <div class="shape-1" data-aos="fade-left" data-aos-duration="400" data-aos-once="true">
              <img src="{{ asset('/assets/image/png/l1-feature-oval.png') }}" alt="">
            </div>
            <div class="shape-2">
              <img src="{{ asset('/assets/image/svg/l1-curve-feature.svg') }}" alt="">
            </div>
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 pl-lg--40 order-lg-2">
                  <div class="feature-content section-title">
                    <h2 class="title">Build a perfect landing page.</h2>
                    <p class="">Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                    <div class="content-btn">
                      <a href="#" class="btn--secondary hvr-bounce-to-left">Check all features</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="feature-card-wrapper">
                    <div class="row">
                      <div class="col-md-6 mt--30">
                        <div class="feature-card">
                          <div class="card-icon red">
                            <img src="{{ asset('/assets/image/png/icon-layout-red.png') }}" alt="">
                          </div>
                          <div class="card-text">
                            <h3 class="title">Multiple Layouts</h3>
                            <p>With lots of unique blocks, you can easily build a page without coding.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt--30">
                        <div class="feature-card">
                          <div class="card-icon yellow">
                            <img src="{{ asset('/assets/image/png/icon-sidebar-yellow.png') }}" alt="">
                          </div>
                          <div class="card-text">
                            <h3 class="title">Fully Responsive</h3>
                            <p>With lots of unique blocks, you can easily build a page without coding.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt--30">
                        <div class="feature-card">
                          <div class="card-icon blue">
                            <img src="{{ asset('/assets/image/png/icon-brookmark-blue.png') }}" alt="">
                          </div>
                          <div class="card-text">
                            <h3 class="title">Well Documented</h3>
                            <p>With lots of unique blocks, you can easily build a page without coding.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt--30">
                        <div class="feature-card">
                          <div class="card-icon ash">
                            <img src="{{ asset('/assets/image/png/icon-chat-black.png') }}" alt="">
                          </div>
                          <div class="card-text">
                            <h3 class="title">Great Support</h3>
                            <p>With lots of unique blocks, you can easily build a page without coding.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content section 1 -->
          <div class="content-section1 section-padding">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2  col-md-9 col-sm-10">
                  <div class="content-img-group content-img-group-1 position-relative ">
                    <div class="img-1" data-aos="fade-down" data-aos-duration="400" data-aos-once="true">
                      <!-- <img src="./image/png/content-img1.png" alt="" class="d-none d-md-block"> -->
                      <img src="{{ asset('/assets/image/png/content-img1--mobile.png') }}" alt="">
                    </div>
                    <div class="abs-img img-2" data-aos="fade-right" data-aos-duration="400" data-aos-once="true" data-aos-delay="300">
                      <div class="image-card-2 card-yellow">
                        <div class="card-icon">
                          <i class="fas fa-bell"></i>
                        </div>
                        <div class="card-text">
                          <span class="date">Next meeting on 30 mins</span>
                          <p>Project Discussion with John</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                  <div class="content-text section-title pr--25">
                    <h2 class="title">Save time on development.</h2>
                    <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                    <div class="content-btn">
                      <a href="#" class="btn--primary hvr-bounce-to-left">Get Started</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content section 2 -->
          <div class="content-section2 section-padding">
            <div class="shape-1">
              <img src="{{ asset('/assets/image/svg/l1-curve-content2.svg') }}" alt="">
            </div>
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-9 col-sm-10 mb--30 mb-lg--0">
                  <div class="content-img-group content-img-group-2 position-relative">
                    <div class="img-1" data-aos="fade-down" data-aos-duration="400" data-aos-once="true">
                      <img src="{{ asset('/assets/image/png/content-img2--mobile.png') }}" alt="">
                    </div>
                    <div class="abs-img img-2" data-aos="fade-right" data-aos-duration="400" data-aos-once="true" data-aos-delay="300">
                      <div class="image-card-2 card-red">
                        <div class="card-icon">
                          <i class="fas fa-bell"></i>
                        </div>
                        <div class="card-text">
                          <span class="date">Deadline: Oct 29, 2020</span>
                          <p>You’ve got a new project from David!</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                  <div class="content-text pl-lg--50">
                    <div class="section-title">
                      <h2 class="title">It’s everything you’ll <br class="d-none d-sm-block"> ever need.</h2>
                        <p class="pr-lg--45">Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                    </div>
                    <div class="widgets-wrapper mt--35">
                      <div class="content-widget mb--15">
                        <div class="widget-icon red">
                          <img src="{{ asset('/assets/image/png/icon-cards-red.png') }}" alt="">
                        </div>
                        <div class="widget-text">
                          <h3 class="title">50+ Unique Design Blocks</h3>
                          <span class="sub-title">with Carefully Coded</span>
                        </div>
                      </div>
                      <div class="content-widget mb--15">
                        <div class="widget-icon blue">
                          <img src="{{ asset('/assets/image/png/icon-mobile-blue.png') }}" alt="">
                        </div>
                        <div class="widget-text">
                          <h3 class="title">Mobile First Design</h3>
                          <span class="sub-title">on Every Devices</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- testimonial section -->
          <div class="testimonial-section section-padding">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                  <div class="section-title text-center">
                    <h2 class="title">Customers are <br class="d-none d-md-block"/> loving Omega</h2>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb--30">
                  <div class="testimonial-card">
                    <div class="card-top-area">
                      <div class="customer-img">
                        <img src="{{ asset('/assets/image/png/l1-customer1.png') }}" alt="">
                      </div>
                      <div class="customer-identity">
                        <h3 class="name">Jonathan Taylor</h3>
                        <p class="company">CEO at Creativex</p>
                      </div>
                      <a href="#" class="review-media">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </div>
                    <p class="review-text">OMG! I cannot believe that I have got a brand new landing page after getting <a href="#" class="secondary-text">@Omega</a>…</p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb--30">
                  <div class="testimonial-card">
                    <div class="card-top-area">
                      <div class="customer-img">
                        <img src="{{ asset('/assets/image/png/l1-customer2.png') }}" alt="">
                      </div>
                      <div class="customer-identity">
                        <h3 class="name">Gavin Park</h3>
                        <p class="company">CEO at Orbital</p>
                      </div>
                      <a href="#" class="review-media">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </div>
                    <p class="review-text"><a href="#" class="secondary-text">@Omega</a> is great for creating landing pages within minutes! It actually takes less time…</p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb--30">
                  <div class="testimonial-card">
                    <div class="card-top-area">
                      <div class="customer-img">
                        <img src="{{ asset('/assets/image/png/l1-customer3.png') }}" alt="">
                      </div>
                      <div class="customer-identity">
                        <h3 class="name">Betty Norton</h3>
                        <p class="company">Freelance Designer</p>
                      </div>
                      <a href="#" class="review-media">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </div>
                    <p class="review-text">Whenever I need to create a new landing page for clients, <a href="#" class="secondary-text">@Omega</a> is my solution…</p>
                  </div>
                </div>
                <div class="col-12 text-center mt--20" data-aos="fade-up" data-aos-duration="800" data-aos-once="true" data-aos-delay="500">
                  <a href="#" class="testimonial-link"><i class="fas fa-comment-alt"></i><span>See all testimonials</span></a>
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
                  <div class="section-title text-center">
                    <h2 class="title">Get started</h2>
                    <p>Create custom landing pages with Omega that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                  </div>
                  <form class="cta-form">
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputName1" placeholder="Your name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="inputEmail1" placeholder="Email address">
                    </div>
                    <button type="submit" class="btn btn--primary hvr-bounce-to-left submit-btn">Get Started</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

@stop