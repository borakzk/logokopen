<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>

<body>
    <div id="loading">
      <div class="load-circle"><span class="one"></span></div>
    </div>
    <div class="site-wrapper overflow-hidden">
      <div class="landing-1">
        <!-- Header Area -->
        <header class="site-header bg--conflower-blue sticky-header">
            @include('includes.header')
        </header>
        
        @yield('content')
     
        <!-- Footer section -->
        @include('includes.footer')
      </div>
    </div>
    @include('includes.script')
  </body>
  







