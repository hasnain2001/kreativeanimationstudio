<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Transparent Header</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Transparent Header */
    .header {
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      background-color: transparent;
    }

    .header.scrolled {
      color: black;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .navbar {
      transition: background-color 0.3s ease;
      background-color: transparent;
    }

    .navbar.scrolled {
      background-color: white;
    }

    /* Nav-link default styles */
    .nav-link {
      color: white !important; /* Default white color at the top */
      transition: color 0.3s ease;
    }

    /* Nav-link styles when scrolled */
    .header.scrolled .nav-link {
      color: black !important; /* Black color when scrolled */
     
    }

    /* Active link styling */
    .nav-link.active {
      font-weight: bold;
      color: #fe5b36 !important; /* Active link color */
    }

    .header.scrolled .nav-link.active {
      color: #fe5b36 !important;
    }

    /* Mobile nav toggle */
    .mobile-nav-toggle {
      color: white;
    }

    .header.scrolled .mobile-nav-toggle {
      color: black;
    }
  </style>
</head>
<body>
  <header id="header" class="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a href="/" class="logo d-flex align-items-center text-decoration-none">
          <img src="{{asset('assets/img/logo.png')}}" alt="Logo" class="img-fluid me-2" style="height: 50px;">
          <h1 class="sitename mb-0 fs-4">Animation</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto text-capitalize">
            <li class="nav-item">
              <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                <li><a href="#" class="dropdown-item">Dropdown 1</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Deep Dropdown</a>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Deep Dropdown 1</a></li>
                    <li><a href="#" class="dropdown-item">Deep Dropdown 2</a></li>
                  </ul>
                </li>
              </ul> 
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ request()->is('about') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
              </a>
<ul class="dropdown-menu text-capitalize" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item {{ request()->is('insight') ? 'active' : '' }}" href="{{route('insight')}}">Afx Insight</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item {{ request()->is('our-process') ? 'active' : '' }}" href="{{route('our-process')}}">our process</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item {{ request()->is('client') ? 'active' : '' }}" href="{{route('client')}}">Client Onboarding Process</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item {{ request()->is('management') ? 'active' : '' }}" href="{{route('management')}}">Our Quality Management</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item {{ request()->is('success') ? 'active' : '' }}" href="{{route('success')}}">Success Measurement</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item {{ request()->is('about') ? 'active' : '' }}" href="{{route('project')}}">Project Documentation</a></li>
</ul>
            </li>
            <li class="nav-item">
              <a href="{{route('portfolio')}}" class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="{{route('pricing')}}" class="nav-link {{ request()->is('pricing') ? 'active' : '' }}">Pricing</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Call us -- (123456789)</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.addEventListener('scroll', function () {
      const header = document.querySelector('#header');
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
        navbar.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
        navbar.classList.remove('scrolled');
      }
    });
  </script>

</body>
</html>
