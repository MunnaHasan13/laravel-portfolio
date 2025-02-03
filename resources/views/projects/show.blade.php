@extends('layout.app')

@section('content')
<div id="portfolio" class="container my-5 text-center">
    <h2> Projects </h2>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4 mb-4">
                {{-- <img src="{{ asset($project->img_path) }}" class="img-fluid" alt="{{ $project->title }}"> --}}
                <img src="{{ asset('storage/' . $project->img_path) }}" alt="Images" class="img-fluid mb-4 rounded">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                <a href="{{ $project->url }}" target="_blank"> View Project </a>
            </div>
        @endforeach
    </div>
</div>
@endsection



