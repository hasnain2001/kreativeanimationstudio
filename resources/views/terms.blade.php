@extends('welcome')

@section('title', 'AFX Animators | Terms And Conditions')
@section('description', 'Our Terms & Conditions outline straightforward terms that the client/visitor must accept before initiating the working relationship.')
@section('keywords', 'Animators | Creative Video Animation Services USA')
@section('robots', 'index, follow')

@section('main-content')
<style>
.hero-contact {
    color: white; /* Contrast text color for better visibility */
    width: 100%;
    height: 200px;
    padding: 120px 0;
    display: flex;
    align-items: center;
    position: relative;
    background: linear-gradient(80deg, #4b3f3f, #4e4c49); /* Attractive gradient */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

  /* .hero-contact::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); 
    z-index: 2;
} */
</style>

<section id="hero" class="hero-contact">
    <div class="container">
   <div >
    <h1 title="hello">Terms and Conditions</h1>

   </div>
    </div>
  </section>
<div class="container py-5">
 
    <div class="content">
        <p>By accessing this website, you assume you accept these terms and conditions. Do not use AFX Animators if you do not agree to take all of the terms and conditions stated on this page.</p>
        <h2 class="mt-5">Cookies</h2>
        <p>We employ the use of cookies. By accessing AFX Animators, you agree to use cookies in agreement with the AFX Animators’ Privacy Policy.</p>
        
        <h2 class="mt-5">License</h2>
        <p>Unless otherwise stated, AFX Animators and/or its licensors own the intellectual property rights for all material on AFX Animators. All intellectual property rights are reserved.</p>
        
        <h2 class="mt-5">Hyperlinking to our Content</h2>
        <p>The following organizations may link to our Website without prior written approval:</p>
        <ul>
            <li>Government agencies</li>
            <li>Search engines</li>
            <li>News organizations</li>
        </ul>

        <h2 class="mt-5">Content Liability</h2>
        <p>We shall not be held responsible for any content that appears on your Website. You agree to protect and defend us against all claims.</p>
        
        <h2 class="mt-5">Reservation of Rights</h2>
        <p>We reserve the right to request that you remove all links or any particular link to our Website.</p>

        <h2 class="mt-5">Disclaimer</h2>
        <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties, and conditions relating to our website and the use of this website.</p>
    </div>
</div>
@endsection
