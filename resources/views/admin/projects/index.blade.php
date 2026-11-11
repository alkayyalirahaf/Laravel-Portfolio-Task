
@extends('layouts.app')

@section('title', 'Manage Projects')

@section('content')

    <h1>Manage Projects</h1>

    <a href="#">Add New Project</a>

    @foreach($projects as $project)

        <div style="border: 1px solid #ccc; padding: 15px; margin: 15px 0;">

            <h3>{{ $project->title }}</h3>

            <p>{{ $project->description }}</p>

            <a href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>


            
<form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit" onclick="return confirm('Are you sure you want to delete this project?')">
        Delete
    </button>

</form>




        </div>

    @endforeach

@endsection
