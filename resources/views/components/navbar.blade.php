<header id="header" class="header">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <a href="/" class="logo d-flex align-items-center text-decoration-none">
        <img src="{{ asset('images/logo.gif') }}" alt="Logo" class="img-fluid me-2" style="height: 50px;">
        {{-- <video src="{{asset('images/logo.mp4')}}" loop muted autoplay height="100" width="200"></video>
        <h1 class="sitename mb-0 fs-4">Animation</h1> --}}
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
     
</ul>
</div>
<div class="col-md-2">
  <ul class=" list-unstyled">   
    <li><a class="dropdown-item" href="{{route('60-seconds')}}"> 60 seconds video</a></li>     
    <li><a class="dropdown-item" href="{{route('90-seconds')}}"> 90 seconds video</a></li>   
    <li><a class="dropdown-item" href="{{route('info-graphics')}}">info graphics</a></li>  
    <li><a class="dropdown-item" href="{{route('rotoscoping')}}">rotoscoping</a></li>  
    <li><a class="dropdown-item" href="{{route('concept-art')}}">concept art</a></li> 
      </ul>

                    <h6 class="dropdown-header">Industry Animation </h6>
  <ul class="list-unstyled text-capitalize">
    <li><a class="dropdown-item" href="{{route('medical_health')}}">Medical Animation</a></li>
    <li><a class="dropdown-item" href="{{route('scientific_animation')}}">Scientific Animation</a></li>
    <li><a class="dropdown-item" href="{{route('educational-animation')}}">Educational Animation</a></li>
    <li><a class="dropdown-item" href="{{route('animated_music_video')}}">Animated Music Video</a></li>
    <li><a class="dropdown-item" href="{{route('3d-architectural-animation')}}">3D Architectural Animation</a></li>
    <li><a class="dropdown-item" href="{{route('commercial-animation')}}">Commercial Animation</a></li>

  </ul>

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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->is('about') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Projects
            </a>
<ul class="dropdown-menu text-capitalize" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item {{ request()->is('insight') ? 'active' : '' }}" href="{{route('game-art')}}"> game art</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item {{ request()->is('our-process') ? 'active' : '' }}" href="{{route('project.3d-animation')}}">3d animation</a></li>
<li><hr class="dropdown-divider"></li>

</ul>
          </li>
          <li class="nav-item">
            <a href="{{route('portfolio')}}" class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Projects</a>
          </li> --}}
          <li class="nav-item">
            <a href="{{route('pricing')}}" class="nav-link {{ request()->is('pricing') ? 'active' : '' }}">Pricing</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('blog') }}" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">blog</a>
          </li>
           <li class="nav-item">
            <a href="{{ route('contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
          </li>
        
        
          <li class="nav-item">
            <a href="#" class="nav-link">Call us -- (123456789) <i class="bi bi-telephone-inbound"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
</header>
<button
      type="button"
      class="btn btn-danger btn-floating btn-lg"
      id="btn-back-to-top"
      >
      <i class="bi bi-arrow-up-circle-fill"></i>
</button>
