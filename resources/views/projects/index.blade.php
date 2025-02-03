@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center"> All Project details </h2>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th> Title </th>
                <th> Description </th>
                <th> Image Path </th>
                <th> URL </th>
                <th> Action </th>
            </tr>
        </thead>

        <tbody>
            @foreach($projects as $project)
            <tr>
                <td> {{$project->title}} </td>
                <td> {{$project->description}} </td>
                <td> {{$project->img_path}} </td>
                <td> {{$project->url}} </td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            ...      
                        </button>

                        <div class="dropdown-menu bg-info" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('project.show', $project->id) }}">View</a>
                            <form action="{{ route('project.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
