@extends('layout.app')

@section('content')
<div id="about" class="container my-5 text-center">
    <h2>About</h2>
    <p>{{ $about->content }}</p>
</div>
@endsection
