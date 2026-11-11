


@extends('layouts.app')

@section('title', 'Manage Projects')

@section('content')

@foreach($developers as $developer)

    <h2>{{ $developer->name }}</h2>

    @foreach($developer->projects as $project)
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
    @endforeach

@endforeach


@endsection