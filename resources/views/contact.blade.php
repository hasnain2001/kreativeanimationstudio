@extends('welcome')
@section('title')
Contact |
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
    background: url('{{ asset('images/2d-1.jpg') }}') center center / cover no-repeat;
  }
</style>

<section id="hero" class="hero-contact">
  <div class="container">
    <h1>Get in <span>Touch</span></h1>
    <p>We'd love to hear from you</p>
  </div>
</section>

<section id="contact" class="contact section">
  <div class="container section-title">
    <h2>Contact</h2>

  </div>

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="info-item">
          <i class="bi bi-geo-alt"></i>
          <div>
            <h3>Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>
        <div class="info-item">
          <i class="bi bi-telephone"></i>
          <div>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>
        <div class="info-item">
          <i class="bi bi-envelope"></i>
          <div>
            <h3>Email Us</h3>
            <p>info@example.com</p>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">
            <div class="col-md-6">
              <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
              <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
              <textarea name="message" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
