@extends('welcome')

@section('title')
Insights |
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
  background-color: #FFD700; /* Yellow background */
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
.text-insight{
font-size: 20px;

color: #000;

}
.insight-1 .left-content {
  
  background-color: #000; /* Black background */
  color: #fff; /* White text */
  padding: 50px; /* Add padding for content */
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-size: cover;
  background-image: url('{{asset('images/lines-blue-stripes-streaks-7680x.png')}}');

}

.insight-1 .right-content {

  background-color: #000000; /* Yellow background */
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url('{{asset('images/lines-blue-stripes-streaks-7680x.png')}}');
}
.custom-card {
            background: linear-gradient(to right, #ff5f6d, #ffc371);
            color: white;
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .custom-card h5 {
            margin-top: 20px;
            font-weight: bold;
        }
        .custom-card p {
            margin-top: 10px;
            font-size: 14px;
            font-weight: 500;
        }
</style>

<section id="hero" class="hero-about ">
    <div class="container-fluid">
      <div class="row">
        <!-- Left Half -->
        <div class="col-md-6 left-content d-flex flex-column justify-content-center">
          <h1 class="display-4">Breathing Motion into Art</h1>
          <p class="lead">We blend creativity and technology to deliver exceptional animations.</p>
        </div>
        <!-- Right Half -->
        <div class="col-md-6 right-content d-flex justify-content-center align-items-center">
          <img src="{{asset('images/gif5.gif')}}" alt="Hero Animation" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section>
<div class=" container">
    <p class="text-insight  text-center text-capitalize">Since 2018, AFX Animators has partnered with top names, refining our processes and perfecting every detail. With over 6 years of expertise, we're market leaders ready to meet your video needs.</p>
</div>
  </section>

  <section id="hero" class=" insight-1 ">
    <div class="container-fluid">
      <div class="row">
        <!-- Left Half -->
        <div class="col-md-6 left-content d-flex flex-column justify-content-center">
  
          <p class="lead">         
We guarantee a personalized approach, aligning your vision with your business goals. Our experts help select the perfect format, style, and visuals for a compelling video with bold storytelling and innovative design.</p>
        </div>
        <!-- Right Half -->
        <div class="col-md-6 right-content d-flex justify-content-center align-items-center">
            <p class=" text-white">
                Trusted by global businesses in web2 and web3, we create engaging videos with visual versatility and unique storytelling. Unique stories consistently delivered with excellence.</p>
        </div>
      </div>
    </div>
  </section>
  <div class="container text-center my-5">
    <h2 style="color: #5a67d8;">Animate the Future!</h2>
    <div class="row mt-4">
        <!-- First Card -->
        <div class="col-md-6 mb-3">
            <div class="custom-card">
                <div>
          <img src="{{asset('images/atom.png')}}" alt="" height="100">
                </div>
                <h5>Visualize Your Visions!</h5>
                <p>Our Portfolio</p>
            </div>
        </div>

        <!-- Second Card -->
        <div class="col-md-6 mb-3">
            <div class="custom-card">
                <a href="{{route('contact')}}" class=" text-decoration-none  text-white">
                <div>
                    <img src="{{asset('images/mobile.png')}}" alt="" height="100" width="100">
                </div>
                <h5>Wanna Discuss Your Project?</h5>
                <p>Dial Up Our Experts!</p>
            </a>
            </div>
        </div>
    </div>
</div>

@endsection