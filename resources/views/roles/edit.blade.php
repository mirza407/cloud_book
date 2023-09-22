@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Role: {{ $role->name }}</h2>
        <form method="POST" action="{{ route('roles.update', $role->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Role Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $role->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
