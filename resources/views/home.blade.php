{{-- @extends('layout.app')


@section('content')
    @include('pages.portfolio', ['projects' => $projects])
    @include('pages.about', ['about' => $about])
    @include('pages.contact', ['contacts' => $contacts])
@endsection --}}

{{-- @extends('layout.app')

@section('content')
    @if(isset($projects))
        @include('pages.portfolio', ['projects' => $projects])
    @endif

    @if(isset($about))
        @include('pages.about', ['about' => $about])
    @endif

    @if(isset($contacts))
        @include('pages.contact', ['contacts' => $contacts])
    @endif
@endsection --}}


@extends('layout.app')

@section('content')

    <!-- Portfolio Section -->
    <section id="port" class="my-5">
        <div class="container">
            <h2 class="text-center mb-4">Projects</h2>
            <div class="row">
                @foreach($projects as $project)
                    <div class="tus col-md-4 mb-4">
                        <div class="card">
                            {{-- <img src="{{ asset('storage/' . $project->img_path) }}" alt="Project Image" class="card-img-top"> --}}
                            {{-- <img src="{{ url('storage/images/img3.jpeg') }}" alt="Project Image" class="card-img-top"> --}}
                            <img src="{{ asset($project->img_path) }}" class="img-fluid" alt="Project Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ $project->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="my-5">
        <div class="container">
            <h2 class="text-center mb-4">About Me</h2>
            <p class="text-center">{{ $about->content }}</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="my-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Me</h2>

            <!-- Flash Messages for Contact Form -->
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="mx-auto" style="max-width: 600px;">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

@endsection
