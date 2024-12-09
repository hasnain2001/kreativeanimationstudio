@extends('welcome')

@section('title', 'AFX Animators | Terms And Conditions')
@section('description', 'Our Terms & Conditions outline straightforward terms that the client/visitor must accept before initiating the working relationship.')
@section('keywords', 'Animators | Creative Video Animation Services USA')
@section('robots', 'index, follow')

@section('main-content')
<style>
    .card {
    border: none;
    transition: transform 0.2s;
}
.card:hover {
    transform: scale(1.05);
}
.card-title {
    font-size: 1.2rem;
    font-weight: bold;
}
.hero-contact {
    color: black;
    width: 100%;
    min-height: 150px;
    padding: 120px 0;
    display: flex;
    align-items: center;
    position: relative;
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
<div class="container text-center my-5">
    <h2 class="mb-4">Our Creative Projects</h2>
    <div class="row justify-content-center">
        <!-- Project 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{asset('images/game-art/img-2.png')}}" class="card-img-top rounded" alt="Crazy Clowns">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Crazy Clowns</h5>
                </div>
            </div>
        </div>
        <!-- Project 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
            <a href="{{route('fashion')}}">
                <img src="{{asset('images/game-art/img-2.png')}}" class="card-img-top rounded" alt="Arab Fashionista">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Arab Fashionista</h5>
                </div>
            </a>
            </div>
        </div>
        <!-- Project 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{asset('images/game-art/img-2.png')}}" class="card-img-top rounded" alt="PayCars">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">PayCars</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
