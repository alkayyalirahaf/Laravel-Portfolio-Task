
@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')

    <h1>Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Project Title</label>
            <input type="text" name="title" value="{{ $project->title }}">
        </div>

        <div>
            <label>Description</label>
            <textarea name="description">{{ $project->description }}</textarea>
        </div>

        <div>
            <label>Developer</label>
            <select name="developer_id">
                @foreach($developers as $developer)
                    <option value="{{ $developer->id }}"
                        {{ $project->developer_id == $developer->id ? 'selected' : '' }}>
                        {{ $developer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Update Project</button>

    </form>

@endsection
