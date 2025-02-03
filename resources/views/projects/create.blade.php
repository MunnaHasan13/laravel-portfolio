@extends('layout.app')

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Create a project</h3>
                <form action="{{ route('project.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title"> Title </label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description"> Description </label>
                        <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image"> Image </label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="url"> Project URL </label>
                        <input type="url" id="url" name="url" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success"> Save</button>
                    <a href="{{ route('project.index') }}" class="btn btn-secondary"> Cancel </a>
                </form>
            </div>
        </div>
    </div>
@endsection 
