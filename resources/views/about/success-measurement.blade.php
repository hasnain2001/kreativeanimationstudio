@extends('welcome')

@section('title')
@section('title', 'AFX Animators | Success Measurement')
@section('description','AFX Animators measure success with precision. Our robust measurement tools ensure your animation projects deliver maximum impact and quality.')
@section('keywords', 'Animators | Creative Video Animation Services USA')
@section('robots','index, follow')

@section('main-content')
<style>
.hero-contact {
    width: 100%;
    min-height: 150px;
    padding: 120px 0;
    display: flex;
    align-items: center;
    position: relative;
    background: url('{{ asset('images/2d-1.jpg') }}') center center / cover no-repeat;
    overflow: hidden;
}

.hero-waves {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
}

.hero-waves .wave1 use {
    fill: rgba(255, 255, 255, 0.7);
    animation: moveWaves 4s ease-in-out infinite;
}

.hero-waves .wave2 use {
    fill: rgba(255, 255, 255, 0.5);
    animation: moveWaves 6s ease-in-out -2s infinite;
}

.hero-waves .wave3 use {
    fill: rgba(255, 255, 255, 0.3);
    animation: moveWaves 8s ease-in-out -4s infinite;
}

@keyframes moveWaves {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(-50%);
    }
    100% {
        transform: translateX(0);
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
  @media (max-width: 768px) {
    .cl-img {
        height: 100px;
        width: 150px;
    }
}

@media (max-width: 576px) {
    .cl-img {
        height: 80px;
        width: 120px;
    }
}
.carousel-item {
  padding: 20px;
  transition: transform 0.5s ease-in-out;
}

.carousel-image img {
  width: 200px; /* Adjust the size as needed */
  height: 100px;
  border-radius: 10px; /* Optional for rounded edges */
}

.carousel-text h3 {
  font-size: 1.8rem;
  font-weight: bold;
  margin-bottom: 15px;
}

.carousel-text p {
  font-size: 1rem;
  color: #555;
  line-height: 1.5;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
}

.d-flex {
  display: flex;
  align-items: center;
}


</style>
<section id="hero" class="hero-contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <h1 class="text-start mb-4">Success Measurement</h1>
                <p class="text-start mb-4">
                    At AFX Animators, success is defined by the impact of our animations. We combine strategy and innovation to deliver custom animations with measurable success. Learn how we achieve and track success.  
                </p>
          
            </div>
        </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
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
<section >
    <div class="container">
        <h1 class=" text-center text-capitalize">Defining Success in Animation</h1>
        <p>At AFX Animators, success is more than just finishing a project. We determine success by reaching your goals and the influence our animations have on your viewers. If you want to boost involvement, inform audiences, or improve how your brand is seen, we customize our measures of success to match your goals.</p>
        <h1 class=" text-center text-capitalize">Key Elements of Our Success Measurement Approach</h1>
        <hr>
        <div id="teamCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
<button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="0" class=" bg-dark active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" class=" bg-dark" data-bs-target="#teamCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" class=" bg-dark" data-bs-target="#teamCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
<button type="button" class=" bg-dark" data-bs-target="#teamCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
            <div class="carousel-inner">
              <!-- Slide 1 -->
              <div class="carousel-item active">
                <div class="d-flex align-items-center">
                  <!-- Image on the left -->
                  <div class="carousel-image me-4">
                    <img src="{{asset('assets/img/details-1.png')}}" alt="Team of Animators" class="img-fluid">
                  </div>
                  <!-- Text on the right -->
                  <div class="carousel-text">
                    <h3>1. Clear Object Setting</h3>
                    <p>
                      We have a skilled group of animators who specialize in their art. Our animators, 
                      with a combination of expertise and a love for originality, transform your ideas into reality 
                      with accuracy and creativity.
                    </p>
                  </div>
                </div>
              </div>
              <!-- Slide 2 -->
              <div class="carousel-item">
                <div class="d-flex align-items-center">
                  <!-- Image on the left -->
                  <div class="carousel-image me-4">
                    <img src="{{asset('assets/img/details-2.png')}}" alt="Innovative Designers" class="img-fluid">
                  </div>
                  <!-- Text on the right -->
                  <div class="carousel-text">
                    <h3>2. Performance Analytic</h3>
                    <p>
                      Our designers are pioneers of creativity, offering fresh ideas and unique designs that 
                      resonate with your audience.
                    </p>
                  </div>

                </div>
              </div>
                 <!-- Slide 3 -->
                 <div class="carousel-item">
                    <div class="d-flex align-items-center">
                      <!-- Image on the left -->
                      <div class="carousel-image me-4">
                        <img src="{{asset('assets/img/details-3.png')}}" alt="Innovative Designers" class="img-fluid">
                      </div>
                      <!-- Text on the right -->
                      <div class="carousel-text">
                        <h3>3. Clent Feedback and Satisfiction</h3>
                        <p>
                          Our designers are pioneers of creativity, offering fresh ideas and unique designs that 
                          resonate with your audience.
                        </p>
                      </div>
                      
                    </div>
                  </div>
                     <!-- Slide 4 -->
                 <div class="carousel-item">
                    <div class="d-flex align-items-center">
                      <!-- Image on the left -->
                      <div class="carousel-image me-4">
                        <img src="{{asset('assets/img/details-4.png')}}" alt="Innovative Designers" class="img-fluid">
                      </div>
                      <!-- Text on the right -->
                      <div class="carousel-text">
                        <h3>4.Long Term Impact Assessment</h3>
                        <p>
                          Our designers are pioneers of creativity, offering fresh ideas and unique designs that 
                          resonate with your audience.
                        </p>
                      </div>
                      
                    </div>
                  </div>
              <!-- Add more slides as needed -->
            </div>
          
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
      
    </div>
  </section>
  <!-- /client Section -->

@endsection