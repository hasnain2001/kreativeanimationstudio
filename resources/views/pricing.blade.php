@extends('welcome')

@section('title', 'Premium Game Character Animation Services')

@section('description', 'AFX Animators creates lifelike game character animations, enhancing your game projects with expert craftsmanship and stunning visuals.')

@section('keywords', 'Game Animation Experts | Professional Video Animation Services USA | Lifelike Game Character Animations')

@section('robots', 'index, follow')

@section('main-content')
<style>
.hero-contact {
  width: 100%;
  min-height: 150px;
  padding: 120px 0;
  display: flex;
  align-items: center;
  justify-content: center; /* Center content horizontally */
  position: relative;
  background: url('{{ asset('images/2d-1.jpg') }}') center center / cover no-repeat;
  color: #fff; /* Ensure text is readable */
  text-align: center; /* Center-align text */
  z-index: 0; /* Ensure proper layering */
  overflow: hidden; /* Prevent waves from overflowing */
}

.hero-contact::before {
  content: '';
  position: absolute;
  inset: 0; /* Shortcut for top, right, bottom, left: 0 */
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
  z-index: 1; /* Ensures the overlay is above background but below content */
}

.hero-contact::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 300%;
  height: 300%;
  background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 30%, rgba(255, 255, 255, 0) 70%);
  animation: wave 8s infinite linear;
  z-index: 2; /* Place waves above the background */
  opacity: 0.5; /* Subtle wave effect */
}

/* Keyframes for wave animation */
@keyframes wave {
  0% {
    transform: translate(-50%, -50%) rotate(0deg);
  }
  50% {
    transform: translate(-45%, -55%) rotate(10deg);
  }
  100% {
    transform: translate(-50%, -50%) rotate(0deg);
  }
}
</style>

<section id="hero" class="hero-contact">
  <div class="container">
    <h1>Pricing</h1>
  </div>
</section>
<!-- Pricing Section -->
<section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
      {{-- <h2>Pricing</h2> --}}
      {{-- <div><span>Pricing</span></div> --}}
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Free Plan</h3>
            <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex strater</p>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <a href="#" class="cta-btn">Start a free trial</a>
            <p class="text-center small">No credit card required</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Voluptate id voluptas qui sed aperiam rerum</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit voluptatibus</span></li>
            </ul>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item featured">
            <p class="popular">Popular</p>
            <h3>Business Plan</h3>
            <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex strater</p>
            <h4><sup>$</sup>29<span> / month</span></h4>
            <a href="#" class="cta-btn">Start a free trial</a>
            <p class="text-center small">No credit card required</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam rerum</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit voluptatibus</span></li>
            </ul>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="pricing-item">
            <h3>Developer Plan</h3>
            <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex strater</p>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <a href="#" class="cta-btn">Start a free trial</a>
            <p class="text-center small">No credit card required</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam rerum</span></li>
              <li><i class="bi bi-check"></i> <span>Iure nihil dolores recusandae odit voluptatibus</span></li>
            </ul>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>

  </section><!-- /Pricing Section -->

@endsection