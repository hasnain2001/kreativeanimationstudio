<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Transparent Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* General Header Styles */
    .header {
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      background-color: transparent;

    }

    .header.scrolled {
      background-color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Navbar Styles */
    .navbar {
      transition: background-color 0.3s ease;
      background-color: transparent;

    }

    .navbar.scrolled {
      background-color: white;
    }

    /* Nav-link Styles */
    .nav-link {
      color: white !important;
      transition: color 0.3s ease;
    }

    .header.scrolled .nav-link {
      color: black !important;
    }

    /* Active Link */
    .nav-link.active {
      font-weight: bold;
      color: #fe5b36 !important;
    }

    /* Mega Dropdown Menu */
    .mega-dropdown-menu {
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
    }

    .mega-dropdown-menu .dropdown-header {
      font-size: 1rem;
      font-weight: bold;
      color: #e74c3c;
      margin-bottom: 10px;
      padding-bottom: 5px;
      border-bottom: 1px solid #e74c3c;
    }

    .mega-dropdown-menu .dropdown-item {
      font-size: 0.9rem;
      color: #343a40;
    }

    .mega-dropdown-menu .dropdown-item:hover {
      background-color: #e74c3c;
      color: white;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .mega-dropdown-menu {
        padding: 10px;
      }

      .mega-dropdown-menu .dropdown-header {
        font-size: 1.2rem;
      }

      .navbar-collapse {
        background-color: white;
        padding: 15px;
        border-radius: 8px;
      }

      .nav-link {
        color: black !important;
      }

      .nav-item:not(:last-child) {
        margin-bottom: 10px;
      }
      .dropdown-large{
        width: 100%;
      }
    }
    .dropdown-large {
  width: auto; /* Allows the width to adjust dynamically */
  min-width: 800px; /* Ensures a minimum width for readability */
  padding: 1rem;
}

.dropdown-large .row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Dynamic columns */
  gap: 1rem; /* Space between columns */
}

.dropdown-large .dropdown-header {
  font-weight: bold;
  font-size: 1rem;
  margin-bottom: 0.5rem;
}
.dropdown-large .dropdown-item {
    font-size: 10px; /* Adjusts the font size of links */
    color: #000000;     /* Default link color */
    text-decoration: none; /* Removes underline from links */
}

.dropdown-large .dropdown-item:hover {
    color: #007bff;  /* Highlight color on hover */
  
}

/* Adjust positioning to avoid overflowing */
.dropdown-menu {
  left: auto !important;
  right: auto !important;
  padding: 0; /* Optional: reduces extra padding */
  transform: none; /* Resets Bootstrap's dropdown adjustment */
}




  </style>
</head>
<body>
  <header id="header" class="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a href="/" class="logo d-flex align-items-center text-decoration-none">
          <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="img-fluid me-2" style="height: 50px;">
          <h1 class="sitename mb-0 fs-4">Animation</h1>
        </a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto justify-content-center w-100">
            <li class="nav-item">
              <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu dropdown-large dropdown-menu-start" aria-labelledby="servicesDropdown">
                <li>
                  <div class="row p-3">
  <div class="col-md-4">
  <h6 class="dropdown-header">Animated Videos</h6>
  <ul class="list-unstyled text-capitalize">
  <li><a class="dropdown-item" href="{{route('animation-2d')}}">2D Animation</a></li>
  <li><a class="dropdown-item" href="{{route('animation-3d')}}">3D Animation</a></li>
  <li><a class="dropdown-item" href="{{route('explain-video')}}">Explainer Video</a></li>
  <li><a class="dropdown-item" href="{{route('motion-graphics')}}">Motion Graphics</a></li>
  <li><a class="dropdown-item" href="{{route('promotional_video')}}">Promotional Video</a></li>
  <li><a class="dropdown-item" href="{{route('stop_motion')}}">Stop Motion</a></li>
  <li><a class="dropdown-item" href="{{route('logo_animation')}}">Logo Animation</a></li>
  <li><a class="dropdown-item" href="{{route('whiteboard')}}">WhiteBoard</a></li>
  <li><a class="dropdown-item" href="{{route('storyboard')}}">storyboard</a></li>
  <li><a class="dropdown-item" href="{{route('frame_by_frame')}}">frame by frame</a></li>
  <li><a class="dropdown-item" href="{{route('video-editing')}}">Video Editing</a></li>
  <li><a class="dropdown-item" href="{{route('character_animation')}}">character animation</a></li>
  <li><a class="dropdown-item" href="{{route('character_modeling')}}"> 3d character modeling</a></li>
  <li><a class="dropdown-item" href="{{route('3d-sculping')}}"> 3d sculping</a></li>
  <li><a class="dropdown-item" href="{{route('30-seconds')}}"> 30 seconds video</a></li>      
  <li><a class="dropdown-item" href="{{route('60-seconds')}}"> 60 seconds video</a></li>     
  <li><a class="dropdown-item" href="{{route('90-seconds')}}"> 90 seconds video</a></li>   
  <li><a class="dropdown-item" href="{{route('info-graphics')}}">info graphics</a></li>  
  <li><a class="dropdown-item" href="{{route('rotoscoping')}}">rotoscoping</a></li>  
  <li><a class="dropdown-item" href="{{route('concept-art')}}">concept art</a></li>            
  </ul>
  </div>
               
                    <div class="col-md-4">
                      <h6 class="dropdown-header">Industry Animation </h6>
    <ul class="list-unstyled text-capitalize">
      <li><a class="dropdown-item" href="{{route('medical_health')}}">Medical Animation</a></li>
      <li><a class="dropdown-item" href="{{route('scientific_animation')}}">Scientific Animation</a></li>
      <li><a class="dropdown-item" href="{{route('educational-animation')}}">Educational Animation</a></li>
      <li><a class="dropdown-item" href="{{route('animated_music_video')}}">Animated Music Video</a></li>
      <li><a class="dropdown-item" href="{{route('3d-architectural-animation')}}">3D Architectural Animation</a></li>
      <li><a class="dropdown-item" href="{{route('commercial-animation')}}">Commercial Animation</a></li>

    </ul>
                    </div>
                    <div class="col-md-4">
                      <h6 class="dropdown-header">Games Animation</h6>
      <ul class="list-unstyled text-capitalize">
        <li><a class="dropdown-item" href="{{route('game-animation')}}">Game Animation</a></li>
        <li><a class="dropdown-item" href="{{route('game-character-animation')}}">Game character Animation</a></li>
      </ul>
                    </div>
                
                  </div>
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
    document.addEventListener('DOMContentLoaded', () => {
  const dropdowns = document.querySelectorAll('.dropdown-menu');

  dropdowns.forEach(dropdown => {
    dropdown.addEventListener('show.bs.dropdown', () => {
      const rect = dropdown.getBoundingClientRect();
      const viewportWidth = window.innerWidth;

      if (rect.right > viewportWidth) {
        dropdown.style.left = 'auto';
        dropdown.style.right = '0';
      }
    });
  });
});

  </script>
</body>
</html>
