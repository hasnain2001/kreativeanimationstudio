@extends('welcome')

@section('title')
3D Video Animation Services - Create Stunning 3D Animations |
@endsection

@section('main-content')
    <style>
        body {
            margin: 0;
            overflow-x: hidden;
        }

        .image-container {
            position: relative;
            height: 200vh; /* Extend height for scrolling effect */
        }

        .image-container img {
            position: fixed;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .image-container img.img-1 {
            z-index: 1;
            opacity: 1;
            object-fit: fill;
            transform: scale(1);
        }

        .image-container img.img-2 {
      
            object-fit: fill;
            opacity: 0; /* Hidden initially */
            transform: scale(1.1); /* Slight zoom for dynamic effect */
        }

        .image-container.scrolled img.img-1 {
            opacity: 0; /* Fade out first image */
            transform: scale(1.05); /* Slight zoom out */
        }

        .image-container.scrolled img.img-2 {
            opacity: 1; /* Fade in second image */
            transform: scale(1); /* Reset zoom */
        }

        .content {
            position: relative;
            padding: 50px;
            background: white;
            color: black;
            z-index: 3;
            margin-top: 200vh; /* Place the content after the images */
        }

        h1, p {
            text-align: center;
            line-height: 1.6;
        }
    .slider-image{
    width: 100%;
    height: 200px;
    align-items: center;
    }

    </style>


    <div class="image-container">
        <img src="{{ asset('images/game-art/img-1.png') }}" alt="First Image" class="img-1">
        <img src="{{ asset('images/game-art/img-2.png') }}" alt="Second Image" class="img-2">
    </div>

    <div id="teamCarousel" class="carousel slide bg-dark text-white" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#teamCarousel" data-bs-slide-to="0" class="bg-dark active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" class="bg-dark" data-bs-target="#teamCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner text-capitalize">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/details-1.png')}}" alt="Team of Animators" class="slider-image">
                   
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/details-2.png')}}" alt="Innovative Designers" class="slider-image">
                       
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/details-3.png')}}" alt="Production Process" class="slider-image">
                    
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/details-4.png')}}" alt="Post Production" class="slider-image">
   
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/details-4.png')}}" alt="Completion Stage" class="slider-image">
               
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/details-4.png')}}" alt="Completion Stage" class="slider-image">
               
                    </div>
                </div>
            </div>
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
    
    <script>
        // JavaScript for scrolling effects
        window.addEventListener('scroll', () => {
            const container = document.querySelector('.image-container');
            const threshold = window.innerHeight * 0.5; // Adjust threshold for the transition
            if (window.scrollY > threshold) {
                container.classList.add('scrolled');
            } else {
                container.classList.remove('scrolled');
            }
        });
    </script>
@endsection
