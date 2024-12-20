@extends('welcome')
@section('title', 'Contact Us for Animation Services | Get in Touch Today')

@section('description', 'Interested in our animation services? Contact us today to discuss your project and learn more about how we can help bring your ideas to life.')

@section('keywords', 'Game Animation Experts | Professional Video Animation Services USA | Lifelike Game Character Animations')

@section('robots', 'index, follow')
@section('main-content')
<style>
  .hero-contact {
    color: black;
    width: 100%;
    min-height: 150px;
    padding: 120px 0;
    display: flex;
    align-items: center;
    position: relative;
    object-fit: fill;
    background: url('{{ asset('images/2d-1.jpg') }}') center center / cover no-repeat;
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
</style>

<section id="hero" class="hero-contact">
  <div class="container">
 <div class="text-start col-md-6">
  <h1>We'd Love to Hear from You!</h1>
  <p>We are a top animation company that specializes in creating custom video content to connect brands with audiences. Global brands rely on us, serving a broad range of clients, from small startups to large corporations. Let’s discuss your project – no matter the difficulty, you have our support. Complete the form to begin!</p>
 </div>
  </div>
</section>

<section id="contact" class="contact section">
  <div class="container section-title">
    <h2>Contact</h2>

  </div>
        <!-- Success/Error Messages -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-check-circle me-2"></i><strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
  
  
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Please fix the following issues:</strong> 
            <ul class="mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif

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
        <form action="{{ route('contact.submit') }}" method="POST" class="php-email-form">
          @csrf
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
