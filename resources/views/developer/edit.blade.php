
@extends('layouts.app')

@section('content')

    <h1>Edit My Profile</h1>

    <form action="{{ route('developer.update', $developer->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Name</label>
        <input
            type="text"
            name="name"
            value="{{ old('name', $developer->name) }}"
        >

        <label>Job Title</label>
        <input
            type="text"
            name="job_title"
            value="{{ old('job_title', $developer->{'job-title'}) }}"
        >

        <label>Skills</label>
        <textarea name="skills">{{ old('skills', implode(', ', $developer->skills ?? [])) }}</textarea>

        <button type="submit">Save Changes</button>

    </form>

@endsection
