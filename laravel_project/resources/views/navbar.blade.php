<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welfare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Gifthand</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{url('indexx')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{url('causes')}}" class="nav-link">Donations</a></li>
          {{-- <li class="nav-item"><a href="{{url('addprofile')}}" class="nav-link">Donate</a></li> --}}
          {{-- <li class="nav-item"><a href="{{url('donate')}}" class="nav-link">Our Donators</a></li> --}}
          <li class="nav-item"><a href="{{url('delivery')}}" class="nav-link">Delivery Volunteering</a></li>
          <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About us</a></li>
          <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('profile')}}">Account</a>
              <a class="dropdown-item" href="{{url('/')}}">Login/Signup</a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Logout</a> 
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    