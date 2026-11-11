
@extends('layouts.app')

@section('title', 'Add Project')

@section('content')

    <h1>Add New Project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST">

        @csrf

        <div>
            <label>Project Title</label>
            <input type="text" name="title">
        </div>

        <div>
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>

        <div>
            <label>Developer</label>
            <select name="developer_id">
                @foreach($developers as $developer)
                    <option value="{{ $developer->id }}">
                        {{ $developer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Save Project</button>

    </form>

@endsection
