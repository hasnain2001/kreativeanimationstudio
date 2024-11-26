@extends('welcome')

@section('title')
404 | Page Not Found
@endsection

@section('main-content')
<style>
    .hero-contact {
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: url('{{ asset('images/2d-1.jpg') }}') center center / cover no-repeat;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero-contact::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6); /* Dark overlay */
        z-index: 1;
    }

    .hero-content {
        z-index: 2; /* Ensure content is above the overlay */
        max-width: 600px;
    }

    .hero-contact h1 {
        font-size: 8rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .hero-contact h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .hero-contact p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        color: #f8f9fa;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-size: 1.2rem;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

<section class="hero-contact">
    <div class="hero-content">
        <h1 class="display-1 text-danger">404</h1>
        <h2>Oops! Page Not Found</h2>
        <p>
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">
            <i class="bi bi-house-door-fill"></i> Go to Homepage
        </a>
        
    </div>
</section>
@endsection
