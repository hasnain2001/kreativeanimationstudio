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

</style>
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
            <a href="">
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
