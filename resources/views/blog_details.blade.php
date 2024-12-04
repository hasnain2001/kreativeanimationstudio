@extends('welcome')

@section('title', $blog->meta_title ?? 'No Title') 
{{-- Fallback to 'Default Title' if meta_title is null --}}

@section('description', $blog->meta_description ?? ' No description') 
{{-- Avoid raw output to prevent potential security issues --}}

@section('keywords', $blog->meta_keyword ?? 'No keywords') 
{{-- Fallback to default keywords for SEO consistency --}}

@section('canonical', route('blog-details', ['slug' => Str::slug($blog->title)]) ?? url('/')) 
{{-- Generate a full canonical URL using the route helper --}}



@section('robots','index, follow')
<style>
    .hero-contact {
        color: black;
        width: 100%;
        height: 100px;
        padding: 120px 0;
        display: flex;
        align-items: center;
        justify-content: center; /* Centers content horizontally */
        position: relative;
        object-fit: contain;
        background: url('{{ asset($blog->category_image) }}') no-repeat center center;
        background-size: cover; /* Ensures the image covers the section */
        overflow: hidden; /* Prevents any overflow issues */
    }
    
    .hero-contact::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)); /* Adds a gradient overlay */
        z-index: 1; /* Places the overlay beneath the content */
        pointer-events: none; /* Ensures the overlay doesn't block interactions with content */
    }
    
    .hero-contact > * {
        position: relative;
        z-index: 2; /* Ensures content appears above the overlay */
        text-align: center; /* Centers text content */
    }
    .blog-image{
        width: 1200px;
        height: auto;
    }
    
     </style>
    @section('main-content')
      <!-- Hero Section -->
      <section id="hero" class="hero-contact">
        <div class="container">
       <div class="">
        <h1>{{ $blog->title }}</h1>
    
       </div>
        </div>
      </section>
      <!-- /Hero Section -->
    <div class="container">
        
    <nav aria-label="breadcrumb" style="background-color: #f8f9fa; border-radius: 0.25rem; padding: 10px;">
    <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item">
    <a href="/" class="text-decoration-none text-dark" style="font-weight: 500;">Home</a>
    </li>
    <li class="breadcrumb-item " aria-current="page" style="font-weight: 600; color: #6c757d;">
        <a href="{{route('blogs')}}" class="text-decoration-none text-dark" style="font-weight: 500;">Blog</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page" style="font-weight: 600; color: #6c757d;">{{ $blog->title }}

    </li>
    </ol>
    </nav>
    
    <div class="row">
        <div class="col-md-12">
<div class="blog-post card shadow rounded-lg border border-light mb-4">
<img class=" blog-image img-thumbnail" src="{{ asset($blog->category_image) }}" alt="Blog Image" ><div class="card-body">
<h1 class="card-title text-3xl font-semibold text-gray-800 mb-4">{{ $blog->title }}</h1>
<p class="card-text text-gray-700 text-lg leading-relaxed">{!! $blog->content !!}</p>

</div>
</div>
          </div>
      
    
    
    
    
    </div>
    
    </div>
    
    </div>
    
    <br><br>
  
    