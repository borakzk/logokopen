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
      <div class="@yield('page')-page">
        <!-- Header Area -->
        <header class="site-header bg--conflower-blue">
            @include('includes.header')
        </header>
        
        @yield('content')
     
        <!-- Footer section -->
        @include('includes.footer')
      </div>
    </div>
    @include('includes.script')
  </body>
  







