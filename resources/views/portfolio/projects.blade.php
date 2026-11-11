@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h2>My Latest Work</h2>
    
    <div style="display: flex; gap: 20px;">
        @foreach($projects as $project)
    <div style="border: 1px solid #ccc; padding: 15px;">
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
        <small>Created At: {{ $project->created_at }}</small>
    </div>
@endforeach
    </div>
@endsection