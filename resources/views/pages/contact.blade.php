@extends('layout.app')

@section('content')
<div id="contact" class="container my-5 text-center">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h2>Contact Me</h2>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
                <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>
                <textarea name="message" class="form-control mb-3" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection
