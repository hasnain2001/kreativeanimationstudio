<header>
  <nav class="navbar">
    <div class="logo"><a href="/"><img src="{{asset('images/logo.gif')}}" alt="" ></a></div>
    <div class="wrapper">
 
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="/">Home</a></li>
         <li>
          <a href="#" class="desktop-item {{ request()->is('about') ? 'active' : '' }}">About </a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">About</label>
    <ul class="drop-menu">
    <li><a class=" {{ request()->is('insight') ? 'active' : '' }}" href="{{route('insight')}}">Afx Insight</a></li>
    <li><a class=" {{ request()->is('our-process') ? 'active' : '' }}" href="{{route('our-process')}}">our process</a></li>
     <li><a class=" {{ request()->is('client') ? 'active' : '' }}" href="{{route('client')}}">Client Onboarding Process</a></li>
    <li><a class=" {{ request()->is('management') ? 'active' : '' }}" href="{{route('management')}}">Our Quality Management</a></li>
     <li><a class=" {{ request()->is('success') ? 'active' : '' }}" href="{{route('success')}}">Success Measurement</a></li>
    <li><a class=" {{ request()->is('about') ? 'active' : '' }}" href="{{route('project')}}">Project Documentation</a></li>
    </ul>
        </li>
   
        <li>
          <a href="#" class="desktop-item">Services</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Services</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <header>Animated Videos</header>
    <ul class="mega-links">
     <li><a class="" href="{{route('animation-2d')}}">2D Animation</a></li>
    <li><a class="" href="{{route('animation-3d')}}">3D Animation</a></li>
    <li><a class="" href="{{route('explain-video')}}">Explainer Video</a></li>
    <li><a class="" href="{{route('motion-graphics')}}">Motion Graphics</a></li>
    <li><a class="" href="{{route('promotional_video')}}">Promotional Video</a></li>
    <li><a class="" href="{{route('stop_motion')}}">Stop Motion</a></li>
    <li><a class="" href="{{route('logo_animation')}}">Logo Animation</a></li>
    <li><a class="" href="{{route('whiteboard')}}">WhiteBoard</a></li>
    <li><a class="" href="{{route('storyboard')}}">storyboard</a></li>
    <li><a class="" href="{{route('frame_by_frame')}}">frame by frame</a></li>
    <li><a class="" href="{{route('video-editing')}}">Video Editing</a></li>
    </ul>
   </div>
              <div class="row">
             <ul class="mega-links">
                <li><a class="" href="{{route('character_animation')}}">character animation</a></li>
              <li><a class="" href="{{route('character_modeling')}}"> 3d character modeling</a></li>
              <li><a class="" href="{{route('3d-sculping')}}"> 3d sculping</a></li>
              <li><a class="" href="{{route('30-seconds')}}"> 30 seconds video</a></li> 
                  <li><a class="" href="{{route('60-seconds')}}"> 60 seconds video</a></li>     
                  <li><a class="" href="{{route('90-seconds')}}"> 90 seconds video</a></li>   
                  <li><a class="" href="{{route('info-graphics')}}">info graphics</a></li>  
                  <li><a class="" href="{{route('rotoscoping')}}">rotoscoping</a></li>  
                  <li><a class="" href="{{route('concept-art')}}">concept art</a></li> 
                </ul>
              </div>
              <div class="row">
                <header>Industry Animation</header>
<ul class="mega-links">
<li><a class="" href="{{route('medical_health')}}">Medical Animation</a></li>
<li><a class="" href="{{route('scientific_animation')}}">Scientific Animation</a></li>
<li><a class="" href="{{route('educational-animation')}}">Educational Animation</a></li>
<li><a class="" href="{{route('animated_music_video')}}">Animated Music Video</a></li>
<li><a class="" href="{{route('3d-architectural-animation')}}">3D Architectural Animation</a></li>
<li><a class="" href="{{route('commercial-animation')}}">Commercial Animation</a></li>
</ul>
              </div>
              <div class="row">
                <header>Games Animation</header>
     <ul class="mega-links">
      <li><a  href="{{route('game-animation')}}">Game Animation</a></li>
      <li><a href="{{route('game-character-animation')}}">Game character Animation</a></li>
      </ul>
 
              </div>
            
            </div>
          </div>
        </li>
        <li>
          <a href="#" class="desktop-item {{ request()->is('about') ? 'active' : '' }}">   Projects </a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">   Projects</label>
<ul class="drop-menu">
<li><a class=" {{ request()->is('insight') ? 'active' : '' }}" href="{{route('game-art')}}"> game art</a></li>

<li><a class="{{ request()->is('our-process') ? 'active' : '' }}" href="{{route('project.3d-animation')}}">3d animation</a></li>

</ul>
        </li>
        <li class="">
          <a href="{{route('portfolio')}}" class="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>
        </li>
           <li class="">
          <a href="{{route('pricing')}}" class=" {{ request()->is('pricing') ? 'active' : '' }}">Pricing</a>
        </li>
        <li class="">
          <a href="{{ route('blog') }}" class=" {{ request()->is('blog') ? 'active' : '' }}">blog</a>
        </li>
         <li class="">
          <a href="{{ route('contact') }}" class=" {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </li>
        <li><a href="#">Call us -- (123456789) <i class="bi bi-telephone-inbound"></i></a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
 
</header>

