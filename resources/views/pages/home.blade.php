@extends('layout.app')

@section('section')
<div class="content-part-3">
    {{-- <img src="{{asset('image/fatin1.jpg')}}" alt=""> --}}
    <div class="image-container">
        <img src="{{asset('image/fatin1.jpg')}}" alt="Image Description">
      </div>


    <div class="content-part-3-Texts">
        <h2>I'm a <span style="color: #4D4721">Web Developer</span></h2>
        <p class="para-1">Assalamu alaikum, my name is Fatin. I have completed my BSc in Computer Science & Engineering from Leading University.</p>
        <p class="para-2">I'm an enthusiast person looking to build up a career on web development.</p>

    </div>
    <button class="CV-button"><a style="text-decoration:none;" href="{{url('download-cv')}}">Download CV</a></button>
</div>
<div class="specializing">
    <h4>Specializing In</h4>
    <p>Expert php-Laravel Developer</p>
    <div class="cards">
      <div class="card-1">Styling + Designing</div>
      <div class="card-1">Experienced + progressive</div>
      <div class="card-1">Front-end + Backend</div>
      <div class="card-1">Excellent Support, Anytime!</div>
    </div>
    <span style="text-transform: uppercase; word-spacing: 3px"
      >Ready to get started? click here to begin
      <i class="fa-solid fa-circle-arrow-right"></i
    ></span>
  </div>

@endsection

