@extends('layout.app')

@section('section')


<div class="body">
  <div class="contact-container">
    <h2 class="h2">Contact Me</h2>
    <form id="contactForm" action="#" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <button class="button" type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>


@endsection
