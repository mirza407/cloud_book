@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Section</h1>
        <form method="post" action="{{ route('sections.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Section Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="parent_id">Parent Section (optional):</label>
                <select name="parent_id" class="form-control">
                    <option value="">Top-Level Section</option>
                    @foreach ($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Section</button>
        </form>
    </div>
@endsection
