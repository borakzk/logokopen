@extends('layouts.page')
@section('title','Design Your Own Logo')
@section('page','contact')
@section('content')

<div style="    padding-top: 130px;
padding-bottom: 40px;" class="inner-hero-area bg-gradient">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="inner-hero-text">
            <h1 style="font-size: 50px;" class="title">Create Logo</h1>
            <p>Create custom landing pages with Omega that converts more visitors than any website. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
      
  <div class="contact-section pt--40 pb--40 pt-md--80 pb-md--80 pl--40">
    <div class="container">
     <div class="row justify-content-center">
        
        <div class="col-lg-7 col-xl-6">
          <div class="omega-contact-form" id="#form-messages">
            <form method="POST" action="{{url('create')}}">
              {{ csrf_field() }}
              <h6 style="    color: #9c9aaa;
              font-size: 18px;
              font-weight: 300;
              letter-spacing: -0.56px;
              margin-bottom: 16px;">Logo Sipariş Bilgileri</h6>
              <input type="text" class="form-control" placeholder="Logo & Company name" name="logo_name" id="logo_name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                @endif
              <input type="text" class="form-control" placeholder="Website" name="website" id="website">
                @if ($errors->has('website'))
                  <span class="text-danger">{{ $errors->first('website')}}</span>
                @endif
              <textarea placeholder="About your logo" name="message" class="form-control" name="informations" id="informations"></textarea>
              <h6 style="color: #9c9aaa;
              font-size: 18px;
              font-weight: 300;
              letter-spacing: -0.56px;
              margin-bottom: 16px;">İletişim Bilgileri</h6>
              <input type="text" class="form-control" placeholder="Your name" name="name" id="name">
              <input type="text" class="form-control" placeholder="Email address" name="email" id="email">
              <button name="formSubmit" class="btn btn--primary hvr-bounce-to-left">Continue</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@stop