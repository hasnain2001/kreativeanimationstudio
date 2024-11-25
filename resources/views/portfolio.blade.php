@extends('welcome')

@section('title')
Portfolio |
@endsection

@section('main-content')
<style>
.hero-about {
  min-height: 100vh; /* Full viewport height */
  display: flex;
  background-color: #352c2cb4;
}

.left-content {
  background-color: #000; /* Black background */
  color: #fff; /* White text */
  padding: 50px; /* Add padding for content */
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.right-content {
  background-color: #3636356e; /* Yellow background */
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-about h1 {
  font-size: 3rem;
  font-weight: bold;
}

.hero-about p {
  font-size: 1.2rem;
}

.hero-about img {
  max-width: 90%;
  border-radius: 8px; /* Optional rounded corners */
}
.btn-custom{
  background-color: red;
  color: wheat;
}
.btn-custom:hover{
  background-color: #00f7ff;
}
.trusted-companies {
  background-color: #f8f9fa; /* Light gray background */
  padding: 50px 20px;
}

.trusted-companies h2 {
  font-size: 24px;
  font-weight: 700;
  color: #333;
}

.company-logos {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
}

.company-logos .logo {
  height: 80px;
  filter: grayscale(100%); /* Makes logos grayscale */
  transition: filter 0.3s, transform 0.3s; /* Adds hover animation */
}

.company-logos .logo:hover {
  filter: grayscale(0%); /* Restores original color on hover */
  transform: scale(1.1); /* Slight zoom effect */
}

</style>


<section id="hero" class="hero-about ">
  <div class="container-fluid">
    <div class="row">
      <!-- Left Half -->
      <div class="col-md-6 left-content d-flex flex-column justify-content-center">
        <h1 class="display-4">Witness the Magic of Animation </h1>
        <p class="lead">View Our Portfolio of Impeccable Work</p>
        <a href="{{route('contact')}}" class="btn btn-custom">Request A Qoute</a>
      </div>
      <!-- Right Half -->
      <div class="col-md-6 right-content d-flex justify-content-center align-items-center">
        <img src="{{asset('images/gif3.gif')}}" alt="Hero Animation" class="img-fluid">
      </div>
    </div>
  </div>
</section>
<section class="trusted-companies text-center py-5">
  <h2 class="mb-4">Trusted by Leading Fortune Companies</h2>
  <div class="company-logos d-flex justify-content-center flex-wrap gap-3">
    <img src="{{asset('assets/img/details-1.png')}}" alt="Company Logo" class="logo">
    <img src="{{asset('assets/img/details-1.png')}}" alt="Company Logo" class="logo">
    <img src="{{asset('assets/img/details-1.png')}}" alt="Company Logo" class="logo">
    <img src="{{asset('assets/img/details-1.png')}}" alt="Company Logo" class="logo">
    <img src="{{asset('assets/img/details-1.png')}}" alt="Company Logo" class="logo">
    <img src="{{asset('assets/img/details-1.png')}}" alt="Company Logo" class="logo">
    <img src="{{asset('assets/img/details-1.png')}}" alt="Company Logo" class="logo">
    <img src="{{asset('assets/img/details-1.png')}}" alt="Company Logo" class="logo">
  </div>
</section>



 <!-- Gallery Section -->
 <section id="gallery" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Jaw-Dropping Animation Awaits</h2>
    <div class="" ><span>Check Out Our</span> <span class="description-title">Portfolio</span>
    </div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-0">

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
            <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div><!-- End Gallery Item -->

    </div>

  </div>

</section>
<!-- /Gallery Section -->

@endsection