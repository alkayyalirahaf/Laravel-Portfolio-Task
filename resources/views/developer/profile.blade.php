@extends('layouts.app')

@section('content')

    <h1>{{ $developer->name }}</h1>

    <h3>{{ $developer->{'job-title'} }}</h3>
    <a href="{{ route('developer.edit', $developer->id) }}">
    Edit Profile
</a>

    <h4>My Skills</h4>

    @foreach ($developer->skills as $skill)
        <span>{{ $skill }}</span>
    @endforeach

    <h4>My Projects</h4>

    @foreach ($developer->projects as $project)
        <div>
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
        </div>
    @endforeach

@endsection