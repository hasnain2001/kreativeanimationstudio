@extends('welcome')

@section('title')
Client Onboarding Process
 |
@endsection

@section('main-content')
<style>
.hero-contact {
    width: 100%;
    min-height: 150px;
    padding: 120px 0;
    display: flex;
    align-items: center;
    position: relative;
    background: url('{{ asset('images/client Onboarding Process.png') }}') center center / cover no-repeat;
    overflow: hidden;
}
.hero-contact::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Adjust the RGBA values for your desired shade */
    z-index: 2;
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
  
</style>
<section id="hero" class="hero-contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <h1 class="text-start mb-4">Client Onboarding Process</h1>
                <p class="text-start mb-4">
                    Welcome to AFX Animators! We're here to make your vision a reality. Our custom animations and seamless onboarding process ensure a flawless project from start to finish.
                </p>
                <div class="text-start">
                    <a href="{{route('contact')}}" class="btn btn-custom">Request A Quote</a>
                </div>
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
    <div class="container ">
        <div class="row align-items-center">
            <!-- Image Column -->
            <div class="col-md-4">
                <img src="{{asset('images/icon-1.png')}}" alt="Initial Consultation" class="cl-img">
            </div>
            <!-- Content Column -->
            <div class="col-md-8">
                <div class="content">
                    <h4>Initial Consultation</h4>
                    <h5>Kickstart Your Project with AFX Animators</h5>
                    <p>
                        Book a free consultation to talk about your animation requirements. Our skilled team will hear your ideas, grasp your goals, and offer initial thoughts to influence your project.
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <!-- Image Column -->
            <div class="col-md-4">
                <img src="{{asset('images/icon-2.png')}}" alt="Initial Consultation" class="cl-img">
            </div>
            <!-- Content Column -->
            <div class="col-md-8">
                <div class="content">
                    <h4>Proposal & Quote</h4>
                    <h5>Transparent and Competitive Pricing</h5>
                    <p>
                        Based on our discussion, we will create a customized proposal and estimate specifically for your project. Our clear pricing guarantees that you are fully aware of what to expect, without any hidden charges. Review and approve the proposal to move forward.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-start">
        <div class="row align-items-center">
            <!-- Image Column -->
            <div class="col-md-4">
                <img src="{{asset('images/icon-3.png')}}" alt="Initial Consultation" class="cl-img">
            </div>
            <!-- Content Column -->
            <div class="col-md-8">
                <div class="content">
                    <h4>
                        Project Planning</h4>
                    <h5>Strategic Planning for Success</h5>
                    <p>
                        After the proposal receives approval, we will detail a thorough project plan. This involves deadlines, significant points in the project, and essential outcomes, guaranteeing that your project remains on schedule. Our project manager will act as your exclusive contact person, providing you with regular updates throughout the entire process.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-start">
        <div class="row align-items-center">
            <!-- Image Column -->
            <div class="col-md-4">
                <img src="{{asset('images/icon-4.png')}}" alt="Initial Consultation" class="cl-img">
            </div>
            <!-- Content Column -->
            <div class="col-md-8">
                <div class="content">
                    <h4>Creative Brief</h4>
                    <h5>Capturing Your Vision</h5>
                    <p>
                        We will create a detailed summary that captures your vision, target demographic, and goals. This document establishes the groundwork for our creative process, guaranteeing that our work is in sync with your objectives.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-start">
        <div class="row align-items-center">
            <!-- Image Column -->
            <div class="col-md-4">
                <img src="{{asset('images/icon-5.png')}}" alt="Initial Consultation" class="cl-img">
            </div>
            <!-- Content Column -->
            <div class="col-md-8">
                <div class="content">
                    <h4>Post-Delivery Support</h4>
                    <h5>Ongoing Support for Your Success</h5>
                    <p>
                        We continue to ensure your satisfaction even after the delivery is completed. We provide support after delivery, including small changes and modifications, to ensure the ongoing success of your animation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    

    
  </section>
  <!-- /client Section -->

@endsection