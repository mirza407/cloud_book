@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Section</h1>
        <form method="post" action="{{ route('sections.update', $section->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Section Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $section->title }}" required>
            </div>
            <div class="form-group">
                <label for="parent_id">Parent Section (optional):</label>
                <select name="parent_id" class="form-control">
                    <option value="">Top-Level Section</option>
                    @foreach ($sections as $s)
                        <option value="{{ $s->id }}" {{ $s->id === $section->parent_id ? 'selected' : '' }}>{{ $s->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Section</button>
        </form>
    </div>
@endsection
