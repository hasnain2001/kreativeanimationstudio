<?php
header("X-Robots-Tag:index, follow");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> @yield('title') Animators | Creative Video Animation Services USA</title>
  <meta name="description" content="Explore a wide range of premium leather jackets for men and women. Shop stylish, durable outerwear and elevate your fashion with top-quality designs.">

  <meta name="keywords" content="leather jackets, premium jackets, men's jackets, women's jackets, stylish outerwear, durable jackets, fashion, leatherwear">
  
  <meta name="author" content="Premium Leather Style">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="@yield('canonical', url()->current())">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{asset('bootstrap-5.0.2/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  {{-- <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet"> --}}
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/page.css')}}">



</head>

<body class="">

    @include('components.navbar')


    @yield('main-content')
  
  

  


  @include('components.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
{{-- 
  <!-- Preloader -->
  <div id="preloader"></div>
  <!-- Vendor JS Files --> --}}

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('bootstrap-5.0.2/js/bootstrap.min.js')}}"></script>

</body>

</html>