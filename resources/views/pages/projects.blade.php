@extends('layout.app')

@section('section')

<header>
    <h1>My Projects</h1>
</header>
<div class="project-container">
  <div class="card">
    <img src="{{asset('image/petlover.jpeg')}}" alt="Card Image">
    <div class="card-content">
      <h3 style="color: #E45F4E;">Pet Lover</h3>
      <p>A project for pet adoption</p>
    </div>
  </div>

  <div class="card">
    <img src="{{asset('image/tourigo.jpeg')}}" alt="Card Image">
    <div class="card-content">
      <h3 style="color: #E45F4E;">Tourigo</h3>
      <p>A project for tourism enthusiasts</p>
    </div>
  </div>

  <div class="card">
    <img src="{{asset('image/eaton.jpeg')}}" alt="Card Image">
    <div class="card-content">
      <h3 style="color: #E45F4E;">Eaton Wellness</h3>
      <p>A responsive design with html/css</p>
    </div>
  </div>

  <div class="card">
    <img src="{{asset('image/news.jpeg')}}" alt="Card Image">
    <div class="card-content">
      <h3 style="color: #E45F4E;">Tourigo</h3>
      <p>A project designed with html/css</p>
    </div>
  </div>
</div>



@endsection
