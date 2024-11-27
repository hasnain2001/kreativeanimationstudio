@extends('welcome')

@section('title')
video editing Services - From Vision to Visuals
@endsection

@section('main-content')
<style>
/*--------------------------------------------------------------
# hero-animation Section
--------------------------------------------------------------*/
.hero-animation {
  width: 100%;
  min-height: 70vh;
  position: relative;
  padding: 120px 0 120px 0;
  display: flex;
  align-items: center;
}

.hero-animation .hero-animation-bg {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
}

.hero-animation:before {
  content: "";
  background: rgba(17, 17, 17, 0.541);
  position: absolute;
  inset: 0;
  z-index: 2;
}

.hero-animation .container {
  position: relative;
  z-index: 3;
}

.hero-animation h1 {
  margin: 0 0 20px 0;
  font-size: 25px;
  font-weight: 700;
  line-height: 56px;
  color: color-mix(in srgb, var(--heading-color), transparent 30%);
}

.hero-animation h1 span {
 
  color: var(--heading-color);
  border-bottom: 4px solid var(--accent-color);
}

.hero-animation p {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  margin: 5px 0 30px 0;
  font-size: 22px;
  font-weight: 400;
}

.hero-animation .btn-get-started {
  color: var(--contrast-color);
  background: var(--accent-color);
  font-family: var(--heading-font);
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px 12px 28px;
  border-radius: 50px;
  transition: 0.5s;
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

.hero-animation .btn-get-started:hover {
  color: var(--contrast-color);
  background: color-mix(in srgb, var(--accent-color), transparent 15%);
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

.hero-animation .btn-watch-video {
  font-size: 16px;
  transition: 0.5s;
  margin-left: 25px;
  color: var(--default-color);
  font-weight: 600;
}

.hero-animation .btn-watch-video i {
  color: var(--accent-color);
  font-size: 32px;
  transition: 0.3s;
  line-height: 0;
  margin-right: 8px;
}

.hero-animation .btn-watch-video:hover {
  color: var(--accent-color);
}

.hero-animation .btn-watch-video:hover i {
  color: color-mix(in srgb, var(--accent-color), transparent 15%);
}

.hero-animation .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

@media (max-width: 640px) {
  .hero-animation h1 {
    font-size: 28px;
    line-height: 36px;
  }

  .hero-animation p {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }

  .hero-animation .btn-get-started,
  .hero-animation .btn-watch-video {
    font-size: 13px;
  }
}

.hero-animation .hero-animation-waves {
  display: block;
  width: 100%;
  height: 60px;
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 3;
}

.hero-animation .wave1 use {
  animation: move-forever1 10s linear infinite;
  animation-delay: -2s;
  fill: var(--default-color);
  opacity: 0.6;
}

.hero-animation .wave2 use {
  animation: move-forever2 8s linear infinite;
  animation-delay: -2s;
  fill: var(--default-color);
  opacity: 0.4;
}

.hero-animation .wave3 use {
  animation: move-forever3 6s linear infinite;
  animation-delay: -2s;
  fill: var(--default-color);
}

@keyframes move-forever1 {
  0% {
    transform: translate(85px, 0%);
  }

  100% {
    transform: translate(-90px, 0%);
  }
}

@keyframes move-forever2 {
  0% {
    transform: translate(-90px, 0%);
  }

  100% {
    transform: translate(85px, 0%);
  }
}

@keyframes move-forever3 {
  0% {
    transform: translate(-90px, 0%);
  }

  100% {
    transform: translate(85px, 0%);
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(-10px);
  }
}


  .content h4{
    font-weight: 600;
    color: black;
  }
  .content h5{
    font-weight: 400;
    color: rgba(20, 12, 12, 0.918);
  }
  .cl-img{
    height: 150px;
    width: 200px;
  }
  .btn-custom{
    background-color: red;
    color: white;
  }
  .btn-custom:hover{
    background-color: rgba(168, 8, 8, 0.904);
    color: black;
  }
  h1{
 font-size: 25px;
 font-weight: 400;  
  }
 
  .header-2d {
    background: linear-gradient(90deg, #7e7970, #6e6262); /* Gradient background */
    color: white;
    text-align: center;
    padding: 20px 30px; /* Adjusted padding for better spacing */
    font-size: 1rem; /* Slightly larger font size */
    font-weight: bold;
    border-radius: 10px; /* Rounded corners for a softer look */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    border: none; /* Remove unnecessary border */
    text-transform: uppercase; /* Make text more prominent */
    letter-spacing: 2px; /* Add spacing between letters */
}


        .section-content {
            margin-top: 30px;
        }

        .request-quote-btn {
            margin-top: 20px;
            display: block;
        }

        .illustration {
            max-width: 100%;
            height: 300px;
        }
    .section-1{
    background-color: #ffffff; /* Fallback color */
    color:black;
    background-size: cover; /* Make the image cover the entire section */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Prevent tiling */
    padding: 50px 20px; /* Add padding for spacing */
    text-align: left; /* Center-align text (optional) */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow for depth */
    border-radius: 8px; /* Slightly round the corners (optional) */
    /* background-image: url('{{ asset('images/cloud.png') }}'); */
    }



</style>
  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <video class="hero-bg" autoplay loop muted playsinline>
        <source src="{{asset('video/v-1.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    <div class="container">
      <div class="row gy-4 justify-content-between">
        <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
   
        </div>
    <div class="">
        <h1>Character Animation Company  Creating Characters People Love!</h1>
        <p>Enhance your custom animations with the magic of video edit services. At AFX Animators, we don’t just create stunning animations, we turn them into captivating masterpieces.</p>

        <a href="{{route('contact')}}" class="btn-get-started btn">Get Started</a>
        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
        </div>
    </div>

      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3"></use>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0"></use>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9"></use>
      </g>
    </svg>

  </section>


<!-- client Section -->
<section class="section-1">
<div class="container">
    <div class="row">
        <div class=" col-md-6 ">
            <h2>Polish Your Characters in Record Time With AFX Animated Character Creator</h2>
<p style="font-size: 12px;">If you are a YouTuber, digital marketer, or small business that creates and publishes online videos, adding a video editor to your team is the most crucial addition you can make. You may have thought about employing a full-time editor (costly), attempted to oversee a freelancer (unreliable), or even edit your videos (exhausting). 
   </p>
   <br>
    <p style="font-size: 12px;">Ultimately, none of these choices ever results in success. You make videos to increase your income, gain more freedom, and enjoy the process of making amazing content, not to exhaust yourself by working on your computer all day and eventually feeling overwhelmed. Increase your video production and quality by using our editing service for video, which will provide more value to your business than any other tool you have experienced. It might sound bold, but it’s true.</p>
                <a href="{{route('contact')}}" class="btn-custom btn">Get in touch</a>
        </div>
        <div class="col-md-6">
     <img src="{{asset('images/character-animation/gif-1.gif')}}" alt="" srcset="" class="" height="300px" width="100%" >
        </div>
    </div>
  
</div>
</section>

  <!-- /client Section -->
<!-- Gallery Section -->
<section id="gallery" class="gallery section">

    <!-- Section Title -->
    <div class="container " data-aos="fade-up">
        <div class=" text-center">
            <h2 class=" card-title">Our Portfolio - Showcasing Our Knack in Character Animation!</h2>
            <p>Discover our wide range of projects to witness how AFX Animators give life to various characters. Our dedication to quality and creativity is showcased through our captivating 2D and 3D animations, engaging animated explainer videos, and dynamic mascots.</p>
        </div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('video/v-1.mp4') }}" class="glightbox video-container" data-gallery="images-gallery">
                        <video id="video-player" class="img-fluid" poster="{{ asset('images/poster.png') }}">
                            <source src="{{ asset('video/v-1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                     
                    </a>
                    
                    
                </div>
            </div>
            <!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-2.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-3.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-4.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-5.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-6.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-7.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('assets/img/gallery/gallery-8.jpg') }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('assets/img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->

        </div>

    </div>

</section>
<section style="background-color: #dedede; padding: 20px;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
        <div>
            <span style="font-size: 1.5em; font-weight: bold;">See Your Characters Come to Life</span>
            <p>Start Your Animation Journey with AFX Animators</p>
        </div>
        <a href="{{route('contact')}}" class="btn btn-custom" style="margin-left: 20px;">Chat With Us</a>
    </div>
</section>

<section style="background-color:#87d1ff; color:rgb(2, 2, 2);">
    <div class="container">
        <div class="row">
         
            <div class="col-md-6">
                <h1>How Does Custom Character Animation Agency Help Businesses?</h1>
<p  style="font-size: 12px;">A specialized 3D and 2D character animation company assists businesses by producing distinctive, captivating animations that grab attention and communicate messages efficiently. These animated videos can make complicated concepts more understandable and memorable for viewers. Adding a dynamic and entertaining element to promotional materials can improve brand recognition and customer engagement, thus enhancing marketing efforts. </p>

<p style="font-size: 12px;">Furthermore, character animation creators can customize animations to match a business’s brand image, guaranteeing uniformity on all channels. This not only sets the business apart from competitors but also fosters a deeper relationship with the target audience, ultimately leading to increased conversion rates and customer loyalty.</p>
                    <a href="{{route('contact')}}" class="btn btn-custom">Get Started</a>
            </div>
            <div class=" col-md-6 ">
                <img src="{{asset('images/character-animation/img-1.png')}}" alt="" srcset="" height="300" width="100%"  >
             
            </div>
            
        </div>
      
    </div>
    </section>
    <section>
    <div class="container ">
    <div class="row">
        <div class=" col-md-6 ">
            <img src="{{asset('images/character-animation/gif-2.gif')}}" alt="" class="" height="400" width="100%">
        
            </div>
    <div class="col-md-6">
    <h3>Why Choose AFX Animators for Your Character Animation Needs?</h3>
    <span>Our team of enthusiastic motion graphics designers specializes in creating unique animation services that captivate the viewer with your story’s visual elements.</span>
    <ul>
    <li><strong>Boost Your Brand in the Third Dimension:</strong> Our 3D animation services USA provide your message with more depth and realism, converting skeptics into avid followers.</li>
    <li><strong>Perfection in Every Pixel:</strong>  Our amazing group of talented 3D animators carefully crafts every single pixel in addition to producing stunning graphics. </li>
    <li><strong>Creative Thinking that Inspires:</strong>Our 3D character animation services produce trends rather than just following them. Our team’s animation experts use modern technology to create visually stunning content that leaves viewers speechless.</li>

    </ul>
    <a href="{{route('contact')}}" class="btn btn-custom">Get Started</a>
    </div>
  
    </div>

    </div>
    </section>
        <section style="background-color:#6fc7eb; color:black;" >
            <div class="container">
                <!-- Header Section -->
                <div class="header-2d">
                    Beyond Beyond Traditional Animation With Our Character Animation Services
                </div>
        
                <!-- Main Content Section -->
                <div class="row section-content">
                    <!-- Text Content -->
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <h4>2D Character Animation</h4>
                                <p>
                                    At AFX, we create motion graphics that effectively communicate your idea while also having a striking visual appeal. Discover the impact of our motion graphics services as they flawlessly communicate your message and enhance your content.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
            <h4>3D Character Animation </h4>
                                <p>
                                    With our professional 2D animation design services, we design animated figures that dynamically and captivatingly portray actions and emotions. Our animators take on the role of operators, giving the characters they design life and a genuine, sympathetic sense.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h4>Mascot Design and Animation</h4>
                                <p>
                                    We at AFX recognize the power of images in communicating a story. Our hand-drawn graphics and animations are utilized in our video editingAnimation Services to help explain difficult ideas and increase the reliability of your material.
                                </p>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h4>Animated Commercials</h4>
                                <p>
                                    Your multimedia projects will have an artistic touch with our typographic animation services. We animate words, phrases, and letters using various modern methods, giving your material a dynamic and rhythmic appearance.
                                </p>
                            </div>
                        </div>
                        <a href="{{route('contact')}}" class="btn btn-dark request-quote-btn">Request A Quote</a>
                    </div>
        
                    <!-- Illustration -->
                    <div class="col-md-4 text-center">
                        <img src="{{asset('images/character-animation/gif-3.gif')}}" alt="Illustration" class="illustration">
                    </div>
                </div>
            </div>
        
        </section>

@endsection